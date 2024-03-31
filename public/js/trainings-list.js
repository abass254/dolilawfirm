$(document).ready(function () {
    "use strict"
    // init list view datatable
    $.blockUI();
    setTimeout(function () {
        $.unblockUI();
    }, 1000);
    var dataListView = $(".data-list-view").DataTable({
        responsive: false,
        columnDefs: [
            {
                orderable: true,
                targets: 0
            }
        ],
        dom:
            '<"top"<"actions action-btns"B><"action-filters"lf>><"clear">rt<"bottom"<"actons">p>',
        oLanguage: {
            sLengthMenu: "_MENU_",
            sSearch: ""
        },
        aLengthMenu: [[10, 25, 50, 100], [10, 25, 50, 100]],
        select: {
            style: "multi"
        },
        order: [[0, "asc"]],
        bInfo: false,
        pageLength: 10,
        buttons: [
            {
                text: "<i class='feather icon-plus'></i> ADD TRAINING",
                action: function () {
                    window.location.href = "/trainings/create"
                },
                className: "btn-outline-danger"
            }
        ],
        initComplete: function (settings, json) {
            $(".dt-buttons .btn").removeClass("btn-secondary")
        }
    });

    dataListView.on('draw.dt', function () {
        setTimeout(function () {
            if (navigator.userAgent.indexOf("Mac OS X") != -1) {
                $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox")
            }
        }, 50);
    });

    // To append actions dropdown before add new button
    var actionDropdown = $(".actions-dropodown")
    actionDropdown.insertBefore($(".top .actions .dt-buttons"))

    // Scrollbar
    if ($(".data-items").length > 0) {
        new PerfectScrollbar(".data-items", { wheelPropagation: false })
    }

    // Links on Checkboxes
    $('.product-name').on("click", function (e) {
        e.stopPropagation();
    });

    // On Edit
    $('.action-edit').on("click", function (e) {
        e.stopPropagation();
        BeginEdit(jq(this).data('uuid'));
    });

    // On Delete
    $('.action-delete').on("click", function (e) {
        e.stopPropagation();
        $(this).closest('td').parent('tr').fadeOut();
    });

    // mac chrome checkbox fix
    if (navigator.userAgent.indexOf("Mac OS X") != -1) {
        $(".dt-checkboxes-cell input, .dt-checkboxes").addClass("mac-checkbox");
    }

    $(".app-main .app-main__outer").css("z-index", 'unset');
    //$(".fixed-sidebar .app-main .app-main__outer").css("z-index", 'unset');

    jq('a.dropdown-item.dt-dropdown-action.dt-action-edit').click(function () {
        if (jq('td input.dt-checkboxes:checked').length != 1) {
            toastr.error('Action applicable to only one selectable Product', 'Edit Failed', { "closeButton": true, "progressBar": true });
            return;
        }
        BeginEdit(jq('td input.dt-checkboxes:checked').closest('td').data('uuid'));
    });

    jq('a.dropdown-item.dt-dropdown-action.dt-action-view').click(function () {
        if (jq('td input.dt-checkboxes:checked').length != 1) {
            toastr.error('Action applicable to only one selectable Product', 'Edit Failed', { "closeButton": true, "progressBar": true });
            return;
        }
        window.location.href = "/inventory/trucks/view?u=" + jq('td input.dt-checkboxes:checked').closest('td').data('uuid');
    });
})

function BeginEdit(uuid) {
    window.location.href = "/inventory/trucks/edit?u=" + uuid;
}
