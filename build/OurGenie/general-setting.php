<?php 
include('header.php');
?>
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="breadcrum-wrap layout-top-spacing col-12 xs-p-0">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="text-uppercase sb-heading">GENERAL SETTINGS</h4>
                </div>
                <div class="col-lg-6 text-right">
                    <nav class="breadcrumb-one" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="javascript:void(0);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home">
                                        <path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                                        <polyline points="9 22 9 12 15 12 15 22"></polyline>
                                    </svg>
                                </a>
                            </li>
                            <li class="breadcrumb-item"><a href="#">Frontend setting</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>General settings</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>



        <div class="col-lg-12 col-12 layout-spacing layout-top-spacing">
            <div class="statbox widget box box-shadow">
                <div class="widget-header">
                    <div class="row">
                        <div class="col-xl-12 col-md-12 col-sm-12 col-12">
                            <h4>Animated Line</h4>
                        </div>
                    </div>
                </div>
                <div class="widget-content widget-content-area animated-underline-content">

                    <ul class="nav nav-tabs  mb-3" id="animateLine" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="animated-underline-home-tab" data-toggle="tab" href="#animated-underline-home" role="tab" aria-controls="animated-underline-home" aria-selected="true">General setting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="animated-underline-profile-tab" data-toggle="tab" href="#animated-underline-profile" role="tab" aria-controls="animated-underline-profile" aria-selected="false">SMTP setting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="animated-underline-contact-tab" data-toggle="tab" href="#animated-underline-contact" role="tab" aria-controls="animated-underline-contact" aria-selected="false">SMS setting</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="animated-underline-sociallink-tab" data-toggle="tab" href="#animated-underline-sociallink" role="tab" aria-controls="animated-underline-sociallink" aria-selected="false">Social links</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="animated-underline-terms-tab" data-toggle="tab" href="#animated-underline-terms" role="tab" aria-controls="animated-underline-terms" aria-selected="false">Terms & Conditions</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="animated-underline-privacy-tab" data-toggle="tab" href="#animated-underline-privacy" role="tab" aria-controls="animated-underline-privacy" aria-selected="false">Privacy Policy</a>
                        </li>

                    </ul>

                    <div class="tab-content" id="animateLineContent-4">
                        <div class="tab-pane fade show active" id="animated-underline-home" role="tabpanel" aria-labelledby="animated-underline-home-tab">
                            <form class="mt-5">

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">System Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Website</label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control"></textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Language</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>
                                <div class="mt-50 col-lg-6 col-md-6 text-right ml-auto xs-d-flex xs-flex-end">
                                    <button type="submit" class="btn btn-primary submit-btn">SAVE</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="animated-underline-profile" role="tabpanel" aria-labelledby="animated-underline-profile-tab">
                            <form class="mt-5">

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Smtp Status</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Smtp Host
                                    </label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Smtp Port</label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" id="" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Smtp User</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Smtp Password</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>
                                <div class="mt-50 col-lg-6 col-md-6 text-right ml-auto xs-d-flex xs-flex-end">
                                    <button type="submit" class="btn btn-primary submit-btn">SAVE</button>
                                </div>
                            </form>
                        </div>
                        <div class="tab-pane fade" id="animated-underline-contact" role="tabpanel" aria-labelledby="animated-underline-contact-tab">
                            <form class="mt-5">

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">System Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Website</label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control">

                                                   </textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Language</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>
                                <div class="mt-50 col-lg-6 col-md-6 text-right ml-auto xs-d-flex xs-flex-end">
                                    <button type="submit" class="btn btn-primary submit-btn">SAVE</button>
                                </div>
                            </form>
                        </div>




                        <div class="tab-pane fade" id="animated-underline-sociallink" role="tabpanel" aria-labelledby="animated-underline-sociallink-tab">
                            <form class="mt-5">

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">System Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Website</label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control">

                                                   </textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Language</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>
                                <div class="mt-50 col-lg-6 col-md-6 text-right ml-auto xs-d-flex xs-flex-end">
                                    <button type="submit" class="btn btn-primary submit-btn">SAVE</button>
                                </div>
                            </form>
                        </div>

                        <div class="tab-pane fade" id="animated-underline-terms" role="tabpanel" aria-labelledby="animated-underline-terms-tab">
                            <form class="mt-5">

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">System Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Website</label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control">

                                                   </textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Language</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>
                                <div class="mt-50 col-lg-6 col-md-6 text-right ml-auto xs-d-flex xs-flex-end">
                                    <button type="submit" class="btn btn-primary submit-btn">SAVE</button>
                                </div>
                            </form>
                        </div>



                        <div class="tab-pane fade" id="animated-underline-privacy" role="tabpanel" aria-labelledby="animated-underline-privacy-tab">
                            <form class="mt-5">

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">System Name</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-10">
                                        <input type="email" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Website</label>
                                    <div class="col-sm-10">
                                        <input type="url" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Title</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>

                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Address</label>
                                    <div class="col-sm-10">
                                        <textarea class="form-control">

                                                   </textarea>
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Phone Number</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>
                                <div class="form-group row mb-4">
                                    <label for="" class="col-sm-2 col-form-label">Language</label>
                                    <div class="col-sm-10">
                                        <input type="text" class="form-control" id="title" placeholder="">
                                    </div>
                                </div>
                                <div class="mt-50 col-lg-6 col-md-6 text-right ml-auto xs-d-flex xs-flex-end">
                                    <button type="submit" class="btn btn-primary submit-btn">SAVE</button>
                                </div>
                            </form>
                        </div>


                    </div>

                </div>
            </div>
        </div>

    </div>
</div>
<?php 
    include('footer.php');
    ?>
