$('document').ready(function () {
    $('[data-toggle="datetime"]').datepicker({
        format: "dd/mm/yyyy"
    }).on('change', function () {
        $('div.app-main__inner').click();
    });

    $('.btn-add-training').click(function(){

        //prod_name = $('#ce-assign-date').val().trim().length;
        train_sol = $('#train-sol').val();
        train_name = $('#train-name').val();
        train_level = $('#train-level').val();
        train_req = $('#tr-req').val();


        if ((train_name) < 4) {
            toastr.error(`Please provide the training name`, 'Creation Failed', { "closeButton": true, "progressBar": true });
            return;
        }

        else if (train_sol == 0) {
            toastr.error(`Solution Cannot be null: `, 'Creation Failed', { "closeButton": true, "progressBar": true });
            return;
        }

        else if(train_level == 0){
            toastr.error(`Please select a training level`, 'Creation Failed', { "closeButton": true, "progressBar": true });
            return;
        }

        else if(train_req == 0){
            toastr.error(`Please provide the number of trainings required`, 'Creation Failed', { "closeButton": true, "progressBar": true });
            return;
        }






        toastr.info(`Please wait as the training is being created: `, 'Creation Failed', { "closeButton": true, "progressBar": true });

        $('#train-bulk').submit();
        return;
    });


    GetEmployees();

    $('button.btn-add-cert-row').click(function () {

       // GetEmployees();

       $('[data-toggle="datetime"]').datepicker({
        format: "dd/mm/yyyy"
        }).on('change', function () {
            $('div.app-main__inner').click();
        });


        var cert_user = $('#ce-user').html();
        var task_priority = $('#task-priority').html();
        var date = $('#ce-assign-date').val();
        var noofrows = ($('.details tr').length - 0) + 1;
        var tr = '<tr><th class="pl-4" scope="row">' + noofrows + '</th>' +
        '<td><select name="ce_user[]" id="ce-user" class="form-control form-rounded"> <option value="" class="text-left"> '+ cert_user +'</option></select></td>' +
        '<td class="pr-2"> <button type="button" class="border-0 btn-transition btn btn-outline-danger btn-remove-detail-row"> <i class="fa fa-trash-alt"> </i> </button></td></tr>'
        $('.details').append(tr);



    });

    $('.details').delegate('.btn-remove-detail-row', 'click', function(){
        var tr = $(this).parent().parent();
        tr.find('#cert-solution').val('');
        tr.find('#ce-due-date').val('');
        tr.find('#ce-remarks').val('');
        tr.remove();
    })

    $.blockUI();
    setTimeout(function () {
        $.unblockUI();
    }, 1000);

});


function GetEmployees() {
    $.ajax({
        dataType: "json",
        url: '/employees',
        beforeSend: function () {
            $.blockUI();
        },

        success: function (result) {
            console.log(result);
           // return;
            if (result.length > 0) {
                $('#ce-user').empty().append('<option value="">...</option>');
                $.each(result, function (i) {
                    $('#ce-user').append('<option value="' + result[i].id + '">' + result[i].first_name + " " + result[i].last_name +  '</option>');
                });
                $('#ce-user').attr('disabled', false);
            }
            else {
                $('#ce-user').empty().append('<option value="">No users found</option>');
                $('#ce-user').attr('disabled', true);
            }


        },
        error: function (xhr, ajaxOptions, thrownError) {
            console.log(xhr.status);
            console.log(thrownError);
        },
        complete: function () {
            $.unblockUI();
        }
    });
}
