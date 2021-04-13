<?php 
include('header.php');
?>
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="breadcrum-wrap layout-top-spacing col-12 xs-p-0">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="text-uppercase sb-heading">LOGO</h4>
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
                            <li class="breadcrumb-item active" aria-current="page"><span>Logo</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>


        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing xs-p-0 layout-top-spacing">

            <div class="statbox widget box box-shadow">
               
                <div class="widget-content widget-content-area">
                    <form>

                        <div class="row mb-5">
                            <div class="col-lg-4 col-md-4 form-group admin-photos-area  xs-mb-15">
                                <label for="header-logo" class="mb-3">Header logo</label>
                                <div class="files">
                                    <input type="file" class="form-control"> </div>
                            </div>
                            <div class="col-lg-4 col-md-4 form-group admin-photos-area xs-mb-15">
                                <label for="footer-logo" class="mb-3">Footer logo</label>
                                <div class="files">
                                    <input type="file" class="form-control"> </div>
                            </div>
                            <div class="col-lg-4 col-md-4 form-group admin-photos-area xs-mb-15">
                                <label for="email-logo" class="mb-3">Email logo</label>
                                <div class="files">
                                    <input type="file" class="form-control"> </div>
                            </div>
                        </div>
                        <div class="row mb-4">
                            <div class="col-lg-4 col-md-4 form-group admin-photos-area  xs-mb-15">
                                <label for="payment-invoice-logo" class="mb-3">Payment invoice logo</label>
                                <div class="files">
                                    <input type="file" class="form-control"> </div>
                            </div>
                            <div class="col-lg-4 col-md-4 form-group admin-photos-area xs-mb-15">
                                <label for="admin-logo" class="mb-3">Admin logo</label>
                                <div class="files">
                                    <input type="file" class="form-control"> </div>
                            </div>
                            <div class="col-lg-4 col-md-4 form-group admin-photos-area xs-mb-15">
                                <label for="fav-logo" class="mb-3">Fav icon</label>
                                <div class="files">
                                    <input type="file" class="form-control"> </div>
                            </div>
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