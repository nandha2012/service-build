<?php 
include('header.php');
?>
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="breadcrum-wrap layout-top-spacing col-12 xs-p-0">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6 ">
                    <h4 class="text-uppercase sb-heading">ADD SERVICES</h4>
                    </div>
                    <div class="col-lg-6 col-md-6 text-right">
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
                                <li class="breadcrumb-item"><a href="#">Services</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><span>Add Sub Services</span></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row">
                <div id="flFormsGrid" class="col-lg-12 layout-spacing layout-top-spacing">
                    <div class="statbox widget box box-shadow">
                     
                        <div class="widget-content widget-content-area">
                            <form>
                                <div class="row mb-4">
                                    <div class="form-group col-md-4">
                                        <label for="inputEmail4">Name</label>
                                        <input type="text" class="form-control" id="fname" placeholder="Enter service name"> </div>
                                    <div class="form-group col-md-4 admin-photos-area">
                                        <label for="">Upload service images</label>
                                        <div class="files">
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group col-md-4 admin-photos-area">
                                        <label for="">Upload service banner image</label>
                                        <div class="files">
                                         <input type="file" class="form-control">
                                            </div>
                                    </div>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Service Time Line </label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Now</option>
                                            <option>Now</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="inputState">Pricing Login</label>
                                        <select id="inputState" class="form-control">
                                            <option selected>Fixed</option>
                                            <option>Fixed</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-3">
                                        <label for="base-price">Base Price Rs</label>
                                        <input type="text" class="form-control" id="base-price"> </div>
                                    <div class="form-group col-md-3">
                                        <label for="unit-price">Unit Price Rs</label>
                                        <input type="text" class="form-control" id="unit-price"> </div>
                                </div>
                                <div class="form-group mb-4">
                                    <textarea class="form-control" placeholder="Description about service" rows="3"></textarea>
                                </div>
                                <div class="form-row mb-4">
                                    <div class="form-group col-md-5">
                                        <label for="inputCity">Peak time</label>
                                        <input id="timeFlatpickr" class="form-control flatpickr flatpickr-input active" type="text" placeholder="Select Date.."> </div>
                                    <div class="form-group col-md-6 ml-auto">
                                        <label for="inputCity">Peak price [%] - Requested fare [X] Peak Price(%)</label>
                                        <input type="text" class="form-control" id="" placeholder=""> </div>
                                </div>
                                <div class="form-row mb-4 ">
                                    <div class="col-lg-6 text-right ml-auto xs-d-flex">
                                        <button class="btn btn-outline-dark cancel-btn">CANCEL</button>
<!--                                        <button type="submit" class="btn btn-primary submit-btn">ADD</button>-->
                                        <a href="service-list.php" class="btn btn-primary submit-btn">ADD</a>
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