$(document).ready(function(){
    $('[data-toggle="datetime"]').datepicker({
        format: "dd/mm/yyyy"
    }).on('change', function () {
        $('div.app-main__inner').click();
    });

    $.blockUI();
    setTimeout(function () {
        $.unblockUI();
    }, 1000);

    $('.btn-update-training').click(function(){
        event.preventDefault();
        var id = $('#train_id').val();
        var url = '/solution-trainings/store';

        var tr_name = $('#tr-name').val();
        var tr_code = $('#tr-code').val();
        var tr_sol = $('#tr-sol').val();
        var tr_req = $('#tr-req').val();
        var tr_link = $('#tr-link').val();
        var tr_level = $('#tr-level').val();
        var tr_desc = $('#tr-desc').val();




        var is_req = '0';
        var tr_status = '0';


        $('#is-req').is(":checked") ?  is_req = '1' : is_req = '0';
        $('#tr-status').is(":checked") ?  tr_status = '1' : tr_status = '0';



        let button = $(this);
        $.blockUI();
        button.prop("disabled", true);
        toast = toastr.info('Please wait as the certificate is updating..', 'Posting', { closeButton: true, progressBar: true, timeOut: "30000" });


        $.ajax({
            headers:
            { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content') },
			url: url,
			type: "post",
			cache: false,
			data:{
                id:id,
                tr_name:tr_name,
                tr_req:tr_req,
                tr_code:tr_code,
                tr_link:tr_link,
                tr_level:tr_level,
                tr_desc:tr_desc,
                tr_sol:tr_sol,
                tr_status:tr_status,
                is_req:is_req,
			},
			success: function (result) {
                toastr.clear(toast);
                toastr.success(result.message, 'Trainings', { "closeButton": true, "progressBar": true, timeOut: "30000" });
                document.location.replace(document.referrer)
            },
            error: function (xhr, ajaxOptions, thrownError) {
                toastr.clear(toast);
                toastr.error(`Failed to update training. ${xhr.responseJSON?.message ?? ""}`, 'Trainings', { "closeButton": true, "progressBar": true });
            },
            complete: function () {
                button.prop("disabled", false);
                $.unblockUI();
            }
        });


    });


});
