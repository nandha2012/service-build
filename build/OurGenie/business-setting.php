<?php 
include('header.php');
?>
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="breadcrum-wrap layout-top-spacing col-12 xs-p-0">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="text-uppercase sb-heading">BUSINESS SETTING</h4>
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
                            <li class="breadcrumb-item"><a href="#">Management setting</a></li>
                            <li class="breadcrumb-item active" aria-current="page"><span>Business setting</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        
        
         <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing xs-p-0 layout-top-spacing">
             
             <h4 class="text-inherit sb-heading mb-5">Payment settings</h4>
        
            <div class="row">
                <div class="col-lg-6 col-md-6 col-12 layout-spacing">
                    <h4 class="text-inherit business-heading mb-3">Paypal settings</h4>
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="row mb-4">
                               <div class="col-lg-6 col-md-6 col-sm-6 col-6 ml-auto d-flex flex-end">
                                    <label for="" class="pr-20">Status</label>
                                    <label class="switch s-success custom-success  mb-2 mr-2">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <form>
                            <div class="form-group col-lg-12 col-md-12 mb-4">
                                <label for="paypal-email">Paypal email</label>
                                <input id="paypal-email" name="paypal-email" type="email" class="form-control" placeholder=""> </div>
                            <div class="form-group col-lg-12 col-md-12 mb-4">
                                <label for="accountant-type">Accountant type</label>
                                <select class="form-control" id="accountant-type">
                                    <option>select account type</option>
                                    <option>select account type</option>
                                    <option>select account type</option>
                                    <option>select account type</option>
                                    <option>select account type</option>
                                </select>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>


                <div class="col-lg-6 col-md-6 col-12 layout-spacing">
                    <h4 class="text-inherit business-heading mb-3">Strip settings</h4>
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="row mb-4">
                               <div class="col-lg-6 col-md-6 col-sm-6 col-6 ml-auto d-flex flex-end">
                                    <label for="" class="pr-20">Status</label>
                                    <label class="switch s-success custom-success  mb-2 mr-2">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <form>
                            <div class="form-group col-lg-12 col-md-12 mb-4">
                                <label for="stripe-secret-key">Strip secret key</label>
                                <input id="stripe-secret-key" name="stripe-secret-key" type="text" class="form-control" placeholder="" value="wwrwe3454534r_sdfsdf"> </div>
                            <div class="form-group col-lg-12 col-md-12 mb-4">
                                <label for="stripe-publishable-key">Strip publishable key</label>
                                <input id="stripe-publishable-key" name="stripe-publishable-key" type="text" class="form-control" placeholder="" value="rfrewrewetryrt456575"> 
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                
                <div class="col-lg-6 col-md-6 col-12 layout-spacing">
                    <h4 class="text-inherit business-heading mb-3">Payu settings</h4>
                    <div class="statbox widget box box-shadow">
                        <div class="widget-content widget-content-area">
                            <div class="row mb-4">
                               <div class="col-lg-6 col-md-6 col-sm-6 col-6 ml-auto d-flex flex-end">
                                    <label for="" class="pr-20">Status</label>
                                    <label class="switch s-success custom-success  mb-2 mr-2">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                            <form>
                            <div class="form-group col-lg-12 col-md-12 mb-4">
                                <label for="merchant-key">Merchant Key</label>
                                <input id="merchant-key" name="merchant-key" type="text" class="form-control" placeholder="" value="Paypal@mail.com"> </div>
                            <div class="form-group col-lg-12 col-md-12 mb-4">
                                <label for="merchant-key">Merchant Salt</label>
                                <input id="merchant-key" name="merchant-key" type="email" class="form-control" placeholder="" value="Paypal@mail.com"> 
                            </div>
                                <div class="form-group col-lg-12 col-md-12 mb-4">
                                <label for="payu-account-key">Payu Account type</label>
                                <input id="payu-account-key" name="payu-account-key" type="text" class="form-control" placeholder="" value="Paypal@mail.com"> 
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
                
                       <div class="col-lg-6 col-md-6 col-12 layout-spacing">
                    <h4 class="text-inherit business-heading mb-3">Direct pay settings</h4>
                    <div class="statbox widget box box-shadow text-center direct-pay-area">
                        <h5 class="mt-5 mb-5">Enable or disable Direct pay</h5>
                        <div class="widget-content widget-content-area ">
                            <div class="row mb-4">
                               <div class="col-lg-12 col-md-12 col-sm-12 col-12 d-flex justify-content-center">
                                    <label for="" class="pr-20">Status</label>
                                    <label class="switch s-success custom-success  mb-2 mr-2">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                 <div class="mt-50 col-lg-6 col-md-6 text-right ml-auto xs-d-flex mb-4">
                    <button type="submit" class="btn btn-primary submit-btn">SAVE</button>
                </div>
                

       </div>
        </div>
    </div>
    
    <?php 
    include('footer.php');
    ?>