<?php 
include('header.php');
?>
    <!--  BEGIN CONTENT AREA  -->
    <div id="content" class="main-content">
        <div class="layout-px-spacing">
            <div class="breadcrum-wrap layout-top-spacing col-12 xs-p-0">
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-6">
                        <h4 class="text-uppercase sb-heading">ADD SERVICE PROVIDER</h4> </div>
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
                                <li class="breadcrumb-item active" aria-current="page"><span>Add service provider</span></li>
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
                                    <div class="form-group col-lg-4 col-md-6 mb-4">
                                        <label for="businessname">Business name</label>
                                        <input id="businessname" name="businessname" type="text" class="form-control" placeholder=""> </div>
                                    <div class="form-group col-lg-4 col-md-6 mb-4">
                                        <label for="ownername">Owner name</label>
                                        <input id="ownername" name="ownername" type="text" class="form-control" placeholder=""> </div>
                                    <div class="form-group col-lg-4 col-md-6 mb-4">
                                        <label for="category">Category</label>
                                        <select class="form-control" id="category">
                                            <option>Category</option>
                                            <option>Category</option>
                                            <option>Category</option>
                                            <option>Category</option>
                                            <option>Category</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label for="category">Sub Category</label>
                                        <select class="form-control" id="subcategory">
                                            <option>Sub Category</option>
                                            <option>Sub Category</option>
                                            <option>Sub Category</option>
                                            <option>Sub Category</option>
                                            <option>Sub Category</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-lg-8 col-md-12">
                                        <label for="address">Address</label>
                                        <textarea class="form-control" id="address" rows="3" placeholder="Add your address"></textarea>
                                    </div>
                                </div>
                                <div class="form-group mb-4">
                                    <label for="">About your service / description</label>
                                    <textarea class="form-control" id="service-des" rows="3" placeholder=""></textarea>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label for="phonenumber1">Registred phone no</label>
                                        <input id="phonenumber1" name="phonenumber1" type="text" class="form-control" placeholder=""> </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label for="phonenumber2">Alternate phone no</label>
                                        <input id="phonenumber2" name="phonenumber2" type="text" class="form-control" placeholder=""> </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label for="emailid">Email id</label>
                                        <input id="emailid" name="emailid" type="email" class="form-control" placeholder=""> </div>
                                </div>
                                <div class="row mb-4">
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label for="gstnumber">GST number</label>
                                        <input id="gstnumber" name="gstnumber" type="text" class="form-control" placeholder=""> </div>
                                    <div class="form-group col-lg-8 col-md-6">
                                        <div class="field-wrapper input admin-files">
                                            <label for="address">GST certificate</label>
                                            <div class="form-group files">
                                                <input type="file" class="form-control"> </div>
                                        </div>
                                    </div>
                                </div>
                                <h2 class="bank-detail-heading">Bank details</h2>
                                <div class="row mb-4">
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label for="accountname">Account name</label>
                                        <input id="accountname" name="accountname" type="text" class="form-control" placeholder=""> </div>
                                    <div class="form-group col-lg-2 col-md-6">
                                        <label for="ifsc-code">IFSC code</label>
                                        <input id="ifsc-code" name="ifsc-code" type="text" class="form-control" placeholder=""> </div>
                                    <div class="form-group col-lg-4 col-md-6">
                                        <label for="branch">Branch</label>
                                        <input id="branch" name="branch" type="text" class="form-control" placeholder=""> </div>
                                    <div class="form-group col-lg-2 col-md-6">
                                        <label for="category">Payment term</label>
                                        <select class="form-control" id="subcategory">
                                            <option>Weekly</option>
                                            <option>Weekly</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group col-lg-12 col-md-12">
                                    <label>Photo</label>
                                </div>
                                <div class="row mb-4">
                                    <div class="col-lg-4 col-md-4 form-group admin-photos-area  xs-mb-15">
                                        <div class="files">
                                            <input type="file" class="form-control"> </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 form-group admin-photos-area xs-mb-15">
                                        <div class="files">
                                            <input type="file" class="form-control"> </div>
                                    </div>
                                    <div class="col-lg-4 col-md-4 form-group admin-photos-area xs-mb-15">
                                        <div class="files">
                                            <input type="file" class="form-control"> </div>
                                    </div>
                                </div>
                                <div class="row d-flex align-items-flex-end mt-50">
                                    <div class="col-lg-4 col-md-6">
                                        <div class="form-group">
                                            <label for="whatsupnumber">Whatsup number</label>
                                            <input id="whatsupnumber" name="whatsupnumber" type="text" class="form-control" placeholder=""> </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 text-right ml-auto xs-d-flex">
                                        <button class="btn btn-outline-dark cancel-btn">CANCEL</button>
<!--                                        <button type="submit" class="btn btn-primary submit-btn">ADD</button>-->
                                        <a href="service-provider.php" class="btn btn-primary submit-btn">ADD</a>
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