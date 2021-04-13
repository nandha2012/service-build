<?php 
include('header.php');
?>
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="breadcrum-wrap layout-top-spacing col-12 xs-p-0">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="text-uppercase sb-heading">ABOUT US</h4>
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
                            <li class="breadcrumb-item active" aria-current="page"><span>About us</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing xs-p-0 layout-top-spacing">

            <div class="statbox widget box box-shadow">
                
                <div class="widget-content widget-content-area">
                    <form>
                       
                        <div class="form-group row mb-4">
                            <label for="colFormLabel" class="col-sm-2 col-form-label">Title</label>
                            <div class="col-sm-10">
                                <input type="text" class="form-control" id="title" placeholder="">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="colFormLabelLg" class="col-sm-2 col-form-label col-form-label-lg">Upload service image</label>
                            <div class="col-lg-4 col-md-6 col-sm-6">
                                 <div class="form-group admin-photos-area">
                                        <div class="files">
                                            <input type="file" class="form-control"> </div>
                                    </div>
                            </div>
                        </div>

                        <div class="form-group mb-4">
                            <textarea id="demo1">
                              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book
                            </textarea>
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
<?php 
    include('footer.php');
    ?>