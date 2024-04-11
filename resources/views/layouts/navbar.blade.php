<style>
    div.datepicker-container.datepicker-dropdown {
            z-index: 3000 !important;
        }
    div.ml-auto .toggle.btn {
        min-width: 80px;
        border-radius: 1rem;
    }

    div.ml-auto span.btn.toggle-handle {
        border-radius: 1rem;
        width: 30px;
    }

    .btn .badge-dot.badge-dot-profile {
        top: 30px;
        right: 18px;
    }

    .btn .badge-dot.badge-dot-profile-inline {
        top: 30px;
        right: 0px;
        border: #d8e9f7 solid 2px;
    }
</style>
<link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/main.custom.css') }}" rel="stylesheet">


<div class="app-header header-shadow">
    <div class="app-header__logo">
        <a class="logo-src" href="/dashboard">
            <img src="/images/logos/knss.png" alt="Logo" style="height:58px;">
        </a>

        <div class="header__pane ml-auto">
            <div>
                <!-- <button type="button" class="hamburger close-sidebar-btn hamburger--elastic is-active"
                    data-class="closed-sidebar">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button> -->
            </div>
        </div>
    </div>
    <div class="app-header__mobile-menu">
        <div>
            <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                <span class="hamburger-box">
                    <span class="hamburger-inner"></span>
                </span>
            </button>
        </div>
    </div>
    <div class="app-header__menu">
        <span>
            <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                <span class="btn-icon-wrapper">
                    <i class="fa fa-ellipsis-v fa-w-6"></i>
                </span>
            </button>
        </span>
    </div>
    <div class="app-header__content">
        <div class="app-header-left">
            <div class="search-wrapper dropdown">
                <!-- <div class="input-holder" id="search-input-holder" data-toggle="dropdown" aria-haspopup="false"
                    aria-expanded="false">
                    <input type="text" class="search-input search-results" placeholder="Type to search">
                    <button class="search-icon">
                        <span></span>
                    </button>
                </div>
                <div class="dropdown-menu dropdown-menu-search d-none" aria-labelledby="search-input-holder">
                    <a class="dropdown-item">No Matches</a>
                </div> -->
                <!-- <button class="close"></button> -->
                <a href="/case/create" class="btn btn-{{ request()->segment(1) == 'case' ? 'primary' : 'light' }} mr-2"><b>FILE A CASE</b></a>
                <a href="/clients-list" class="btn btn-light mr-2"><b>VIEW CLIENTS</b></a>
                <a href="/cases-list" class="btn btn-light mr-2"><b>VIEW CASES</b></a>
            </div>
        </div>
        <div class="app-header-right">
            <button type="button" data-toggle="modal" data-target="#exampleModal" data-backdrop="static"
                title="Feedback Section" data-placement="bottom" class="btn-shadow btn-pilled mr-3 btn btn-danger">
                <i class="fa fa-comment fa-lg"></i>
            </button>
            <button type="button" data-toggle="modal" data-target="#expenseModal" data-backdrop="static"
                title="Expense Section" data-placement="bottom" class="btn-shadow btn-pilled mr-3 btn btn-primary">
                <i class="fa fa-wallet fa-lg"></i>
            </button>
            <div class="header-dots">

            </div>
            <div class="header-btn-lg pr-0">
                <div class="widget-content p-0">
                    <div class="widget-content-wrapper">
                        <div class="widget-co   ntent-left">
                            <div class="btn-group">
                                <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                    <img width="42" class="rounded-circle"
                                        src="https://ui-avatars.com/api/?name=Local+User" alt="">
                                    <span class="badge badge-dot badge-dot-profile badge-dot-lg badge-success">Online
                                        Status</span>
                                    <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                </a>
                                <div tabindex="-1" role="menu" aria-hidden="true"
                                    class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-info">
                                            <div class="menu-header-image opacity-2"
                                                style="background-image: url('/images/dropdown-header/city3.jpg');">
                                            </div>
                                            <div class="menu-header-content text-left">
                                                <div class="widget-content p-0">
                                                    <div class="widget-content-wrapper">
                                                        <div class="widget-content-left mr-3">
                                                            <a class="btn p-0">
                                                                <img width="42" class="rounded-circle"
                                                                    src="https://ui-avatars.com/api/?name=Local+User"
                                                                    alt="avatar">
                                                                <span
                                                                    class="badge badge-dot badge-dot-profile-inline badge-dot-lg badge-success">Online
                                                                </span>
                                                            </a>
                                                        </div>
                                                        <div class="widget-content-left">
                                                            <div class="widget-heading">
                                                                Local User
                                                            </div>
                                                            <div class="widget-subheading opacity-8">
                                                                local@doli.com
                                                            </div>
                                                        </div>
                                                        <div class="widget-content-right mr-2">
                                                            <a href="{{ route('logout') }}"
                                                                class="btn-pill btn-shadow btn-shine btn btn-focus">Logout</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="widget-content-left  ml-3 header-user-info">
                            <div class="widget-heading">
                                Local User
                            </div>
                            <div class="widget-subheading">
                                Basic User
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-btn-lg">
                <button type="button" class="hamburger hamburger--elastic open-right-drawer">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
            </div>
        </div>
    </div>
</div>




<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Feedback Section</h5>
                <!-- <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button> -->
            </div>
            <form class="modal-body form-vendor-incentives" method="POST" autocomplete="off">
                <div class="form-row">
                    <input type="text" hidden id="user" class="form-control"
                        value="1">
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label class="title" for="patient-details">Please provide any difficulty you have while operation the
                                system or any upgrade that needs to be done.</label>
                            <div class="input-group">
                                <textarea height="20px" name="description" required="required" class="form-control validate bg-white pr-0"
                                    id="feedback" placeholder=""></textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" onclick="postFeedBack()" class="btn btn-primary">Send</button>
            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="expenseModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Expense Section</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form class="modal-body form-vendor-incentives" method="POST" autocomplete="off">
                <div class="form-row">
                    <input type="text" hidden id="user" class="form-control"
                        value="23">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label  class="title" for="patient-details">Expense</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="exp-title" id="exp-title">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label  class="title" for="patient-details">Expense Type</label>
                            <div class="input-group">
                                <select name="exp-type" class="form-control" id="exp-type">
                                    <option value="" selected disabled>...</option>
                                    <option value="food">Food</option>
                                    <option value="transport">Transport</option>
                                    <option value="refund">Refund</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="position-relative form-group">
                            <label  class="title" for="patient-details">Description</label>
                            <div class="input-group">
                                <textarea name="exp-desc" class="form-control" id="exp-desc" cols="20" rows="5"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label  class="title" for="patient-details">Expense Date</label>
                            <div class="input-group">
                                <input name="ce_due_date" id="ce-due-date" type="text"
                                    class="form-control form-rounded input-start-date input-start-date bg-white date-range"
                                    placeholder="DD/MM/YYYY" data-toggle="datetime"
                                    aria-controls="DataTables_Table_0" value=""
                                    style="width:150px; padding-right:1rem!important;" readonly="readonly">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            <label  class="title" for="patient-details">Expense Amount</label>
                            <div class="input-group">
                                <input type="text" class="form-control" type="number" name="exp-amount" id="exp-amount">
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" onclick="postFeedBack()" class="btn btn-primary">Send</button>
            </div>
        </div>
    </div>
</div>




<script src="{{ asset('js/components/jq.blockUI.js') }}"></script>
<script src="{{ asset('js/components/datepicker.min.js') }}"></script>
<script>
    function postFeedBack() {

        var user = $('#user').val();
        var feedback = $('#feedback').val();

        $.post({
            url: '/api/post-feedback',
            data: {
                user: user,
                feedback: feedback
            },
            beforeSend: function() {

                toastr.info(`Please wait: `, 'Creation Failed', {
                    "closeButton": true,
                    "progressBar": true
                });
                $.blockUI();
            },

            success: function(result) {
                toastr.success(result.message, 'Success', {
                    closeButton: true,
                    progressBar: true,
                    timeOut: "30000"
                });
                document.location.replace(document.referrer);
            },
            error: function(xhr, ajaxOptions, thrownError) {
                console.log(xhr.status);
                console.log(thrownError);
            },
            complete: function() {
                $.unblockUI();
            }
        });




    }
</script>
