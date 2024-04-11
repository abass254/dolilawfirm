@extends('layouts.main')


@section('title', 'File a case')


@section('content')
    <style>
        .dropdown-item.active,
        .dropdown-item:active {
            background-color: #e0f3ff;
        }

        .pac-container {
            z-index: 3000 !important;
        }

        label {
            font-weight: bold;
            text-transform: uppercase
        }
        div.datatable-banner {
                display: flex;
                -webkit-box-pack: justify;
                justify-content: space-between;
            }
            div.datatable-input-left {
                display: flex;
            }
            div.datatable-input-right {
                display: flex;
            }
            div.datatable-input-right input.form-control-custom {
                padding: 1.20rem 2.3rem !important;
                border-radius: 1.428rem;
                border: 1px solid #DAE1E7;
                margin-left: 0.5em;
                display: inline-block;
                width: auto;
                opacity: 1;
            }
            label.date-label {
                width: 155px;
                padding-top: 1.5rem;
            }
            label.date-label:after {
                font-family: 'feather';
                position: relative;
                content: '\e83a' !important;
                top: -1.972rem !important;
                left: 1.5rem;
            }
            div.dataTables_filter {
                display: inline-block;
            }
            button.datatable-button {
                padding: 0.5rem 1rem;
                height: 40px;
                border-radius: 20px;
            }
            .dropzone {
                border: 2px dashed blue;
            }
            li.li-actions {
                cursor: pointer;
            }
            div.dataTables_scrollHead{
                margin-top: -14px;
            }
    </style>
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-id icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div>
                    FILE A CASE
                    <!-- <div class="page-title-subheading">
                        <nav class="" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="/">
                                        <i aria-hidden="true" class="fa fa-id"></i>
                                    </a>
                                </li>
                                <li class="active breadcrumb-item" aria-current="page">
                                    FILE A CASE
                                </li>
                            </ol>
                        </nav>
                    </div> -->
                </div>
            </div>
            <div class="page-title-actions">
                

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="main-card mb-3 card">
                <div class="card-body">
                    <div class="div px-1 d-flex new-data-title justify-content-between">
                        <div>
                            <h4 class="text-uppercase">FILE A CASE</h4>
                        </div>
                        <div class="hide-data-sidebar">
                            <i class="feather icon-x"></i>
                        </div>
                    </div>

                    <div class="divider mt-0"></div>
                    <div data-parent="#accordion" id="" aria-labelledby="headingOne" class="collapse show">
                        <div class="card-body">
                            <button type="button" class="text-left my-0 mb-3 p-0 btn btn-link btn-block">
                                <span class="form-heading">Clients Details</span>
                            </button>
                            <div class="divider mt-0"></div>
                            <form class="form-vendors" method="POST" action="">
                                <div class="form-row">
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail55">First Name *</label>
                                            <input name="cl_fname" required id="cl_fname" placeholder="John" type="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail55">Middle Name(Optional)</label>
                                            <input name="cl_mname" id="cl_mname" placeholder="Harry" type="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail55">Last Name *</label>
                                            <input name="cl_lname" id="cl_lname" placeholder="Doe" type="name" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail55">Date of Birth(*)</label>
                                            <input name="cl_dob" id="cl_dob" placeholder="01/01/1990" type="date" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail55">Gender</label>
                                            <select class="form-control" name="cl_gender" id="cl_gender">
                                            <option value="" selected disabled>--SELECT--</option>
                                            <option value="M">Male</option>
                                            <option value="F">Female</option>
                                            <option value="N">Choose not to say</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail55">Driver License *</label>
                                            <input name="cl_dl" id="cl_dl" placeholder="123-453-919" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="position-relative form-group">
                                            <label for="exampleEmail55">Email Address</label>
                                            <input name="cl_email" id="cl_email" placeholder="johndoe@mail.com" type="email" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="position-relative form-group">
                                            <label for="examplePassword22">Primary Cell Phone</label>
                                            <input name="cl_phone" id="cl_phone" placeholder="(123) 456-7890" type="text" class="form-control">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="exampleAddress">Physical Address</label>
                                            <input name="cl_address" id="cl_address" placeholder="1234 Main St" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="exampleCity">City</label>
                                            <input name="cl_city" id="cl_city" type="text" placeholder="Etobicoke ON" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="exampleState">State</label>
                                            <input name="cl_state" id="cl_state" placeholder="Canada" type="text" class="form-control">
                                        </div>
                                    </div>
                                    <div class="col-md-3">
                                        <div class="position-relative form-group">
                                            <label for="exampleZip">Zip/Postal Code</label>
                                            <input name="cl_postal" placeholder="M1M1M1" id="cl_postal" type="text" class="form-control">
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    <div class="divider"></div>
                    <div data-parent="#accordion" id="" aria-labelledby="headingOne" class="collapse show">
                        <div class="card-body">
                            <button type="button" class="text-left my-0 mb-3 p-0 btn btn-link btn-block">
                                <span class="form-heading">Case Details</span>
                            </button>
                            <div class="divider mt-0"></div>
                                <form class="form-vendors" method="POST" action="">
                                    <div class="form-row">
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="exampleEmail55">Date of Loss *</label>
                                                <input name="cs_dloss" required id="cs_dloss" placeholder="John" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="exampleEmail55">Date Opened</label>
                                                <input name="cs_dopened" id="cs_dopened" placeholder="Harry" type="date" class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="position-relative form-group">
                                                <label for="exampleEmail55">CASe type *</label>
                                                <select name="cs_type" class="form-control" id="cs_type">
                                                    <option value="">--SELECT--</option>
                                                    <option value="1">Personal Injury</option>
                                                    <option value="2">Immigration</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="col-md-12">
                                            <div class="position-relative form-group">
                                                <label for="exampleEmail55">tort</label>
                                                <textarea class="form-control" name="cs_tort" id="cs_tort" cols="30" rows="3"></textarea>
                                            </div>
                                            <div class="position-relative form-group">
                                                <label for="exampleEmail55">description</label>
                                                <textarea class="form-control" name="cs_desc" id="cs_desc" cols="30" rows="3"></textarea>
                                            </div>
                                            <div class="position-relative form-group">
                                                <label for="exampleEmail55">end goal</label>
                                                <textarea class="form-control" name="cs_endgoal" id="cs_endgoal" cols="30" rows="3"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    <div class="divider"></div>
                    <div data-parent="#accordion" id="" aria-labelledby="headingOne" class="collapse show">
                        <div class="card-body">
                            <button type="button" class="text-left my-0 mb-3 p-0 btn btn-link btn-block">
                                <span class="form-heading">Insurance Details</span>
                            </button>
                            <div class="divider mt-0"></div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail55">INSURANCE COMPANY*</label>
                                        <input name="ins_title" required id="ins_title" placeholder="Insurance Company" type="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail55">POLICY NO</label>
                                        <input name="ins_policy_no" id="ins_policy_no" placeholder="POLICYN0" type="name" class="form-control">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail55">CLAIMS NO</label>
                                        <input name="ins_claims_no" id="ins_claims_no" placeholder="CLAIMSN0" type="name" class="form-control">
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                        </div>
                    </div>
                    <div data-parent="#accordion" id="" aria-labelledby="headingOne" class="collapse show">
                        <div class="card-body">
                            <button type="button" class="text-left my-0 mb-3 p-0 btn btn-link btn-block">
                                <span class="form-heading">Case Documents</span>
                            </button>
                            <div class="divider mt-0"></div>
                            <div class="form-row">
                                <div class="col-md-4">
                                    <div class="position-relative form-group">
                                        <label for="exampleEmail55">INSURANCE COMPANY*</label>
                                        <input name="ins_title" required id="ins_title" placeholder="Insurance Company" type="name" class="form-control">
                                        <div class="dz-message" data-dz-message><span class="text-primary">Drag & Drop/Click to upload attachments</span></div>
                                        <div class="fallback">
                                            <input name="file" type="file" multiple />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="divider"></div>
                        </div>
                    </div>
                    <div class="clearfix">
                        <button type="submit"
                            class="btn-shadow btn-wide float-right btn-save-vendor btn-pill btn-hover-shine btn btn-primary">
                            SAVE DATA</button>
                        <!-- <button type="type" id="cancel-btn"
                            class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-danger">CANVE</button> -->
                    </div>
                </div>
                </form>
            </div>
        </div>
    </div>
    </div>
    </div>

    <!--Begin Modals-->

    <script src="{{ asset('js/create-case.js') }}"></script>
    <script src="{{ asset('js/components/datepicker.min.js') }}"></script>
    <script src="{{ asset('js/components/jq.blockUI.js') }}"></script>
@endsection