$(document).ready(function () {

    var id = $('#tr-train').val();
    var task_type = '2';
    getTaskDetails(id, task_type);

    $.blockUI();
    setTimeout(function () {
        $.unblockUI();
    }, 1000);
    $('.btn-assign-engineer').on('click', function () {
        $.showModal($('#assign-engineer-modal'));

        GetEmployees();

        $('[data-toggle="datetime"]').datepicker({
            format: "dd/mm/yyyy",
        }).on('change', function () {
            $('div.app-main__inner').click();
            minDate: 0
        });
    });

    $('.btn-assign-train').on('click', function () {
        var token = $('#token').val();
        var task_type = $('#task-type').val();
        var tr_train = $('#tr-train').val();
        var est_dur = $('#est-dur').val();
        var attach_req = $('#attach-req').val();
        var tr_user = $('#tr-user').val();
        var tr_priority = $('#tr-priority').val();
        var tr_starting_date = $('#tr-starting-date').val();
        var task_name = $('#task-name').val();
        var tr_due_date = $('#tr-due-date').val();
        var uuid = $('#tr-uuid').val();
        var button = $(this);

        if (tr_user.trim().length < 1) {
            toastr.error(`Please select an engineer`, 'Creation Failed', { "closeButton": true, "progressBar": true });
            return;
        }
        else if (tr_due_date.trim().length < 1) {
            toastr.error(`Please provide the due date`, 'Creation Failed', { "closeButton": true, "progressBar": true });
            return;
        }

        else if (tr_due_date < tr_starting_date) {
            toastr.error(`Due date should be later than the start date`, 'Creation Failed', { "closeButton": true, "progressBar": true });
            return;
        }

        else if (est_dur.trim().length < 1) {
            toastr.error(`Please provide the estimate time length of the task`, 'Creation Failed', { "closeButton": true, "progressBar": true });
            return;
        }

        $.blockUI();

        $.post({
            url: '/save-task',
            data: {
                ref_no: tr_train,
                est_dur : est_dur,
                task_name: task_name,
                attach_req: attach_req,
                _token: token,
                task_type: task_type,
                task_user: tr_user,
                end_date: tr_due_date,
                ce_priority: tr_priority,
                start_date: tr_starting_date,
            },

            beforeSend: function () {
                toast = toastr.info('Please wait as the certificate is being assigned...', 'Solution Certificates', { closeButton: true, progressBar: true, timeOut: "10000" });
                button.prop("disabled", true);
            },
            success: function (result) {
                console.log(result.code);
                if (result.code == 300) {
                    toastr.clear(toast);
                    toastr.warning(result.message, 'Assign Training', { closeButton: true, progressBar: true, timeOut: "30000" });
                }
                else {
                    toastr.clear(toast);
                    toastr.success(result.message, 'Assign Training', { closeButton: true, progressBar: true, timeOut: "30000" });
                    window.location.href = `/trainings/${uuid}`;
                }
            },
            error: function (xhr, ajaxOptions, thrownError) {
                toastr.clear(toast);
                toastr.error(`Failed to . ${xhr.responseJSON?.message ?? ""}`, 'Update Failed', { "closeButton": true, "progressBar": true });
            },
            complete: function () {
                $.unblockUI();
                button.prop("disabled", false);
            }
        });
    });



    // $('[data-toggle="datetime"]').datepicker({
    //     format: "dd/mm/yyyy"
    // }).on('change', function () {
    //     $('div.app-main__inner').click();
    // });

    function getTaskDetails(id, task_type){
        $.ajax({
              dataType: "json",
              url: `/task/${id}/${task_type}`,
              beforeSend: function() {

                $.blockUI();
                $('#tasks-table tbody').empty();

                var row_emp = '<th class="text-center" colspan="6" rowspan="6"><div class="loader"><div class="ball-clip-rotate"><div></div></div></div></th>';
                $('#tasks-table tbody').append(row_emp);
              },
              success: function(results) {
                console.log(results);
                $('#tasks-table tbody').empty();

                $.each(results, function(i, result){

                    let comp_date = "";

                    if(result.completed_date.length == 3){
                        comp_date = "---"
                    }
                    else{
                       comp_date =  new Date(result.completed_date).getDate() + '/'  + new Date(result.completed_date).getMonth() + '/' + new Date(result.completed_date).getFullYear();
                    }



                    var key = ($('#tasks-table tbody').length - 0) + 2;
                    //var row = '<tr><td class="text-left">'+ (key++) +'</td>>';
                    var row = '<tr></tr><td class="text-center"><span class="user-id">'+ result.engineer +'</span></td>';
                    row += '<td class="text-center" data-id="99">'+ new Date(result.date_assigned).getDate() + '/'  + new Date(result.date_assigned).getMonth() + '/' + new Date(result.date_assigned).getFullYear() + '</td>';
                    row += '<td class="text-center">'+ new Date(result.due_date).getDate() + '/'  + new Date(result.due_date).getMonth() + '/' + new Date(result.due_date).getFullYear() + '</td>';
                    row += '<td class="text-center">'+ comp_date + '</td>';
                    row += '<td><span class="badge badge-pill bg-'+ result.theme +' text-white">'+result.status+'</span></td>'
                    $('#tasks-table tbody').append(row);
                });

                if (results.length == 0){
                    $('#tasks-table tbody').append('<tr><td colspan="5" rowspan="2" class="text-center"><b>NO TASK ASSIGNED<b/></td></tr>');
                }
              },
              error: function(xhr, ajaxOptions, thrownError) {
                  console.log(xhr.status);
                  console.log(thrownError);
              },complete: function() {
                $.unblockUI();
              }
            });
      }
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
                $('#tr-user').empty().append('<option value="">...</option>');
                $.each(result, function (i) {
                    $('#tr-user').append('<option value="' + result[i].id + '">' + result[i].first_name + " " + result[i].last_name +  '</option>');
                });
                $('#tr-user').attr('disabled', false);
            }
            else {
                $('#tr-user').empty().append('<option value="">No users found</option>');
                $('#tr-user').attr('disabled', true);
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
