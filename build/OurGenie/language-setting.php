<?php 
include('header.php');
?>
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="breadcrum-wrap layout-top-spacing col-12 xs-p-0">
            <div class="row">
                <div class="col-lg-6">
                    <h4 class="text-uppercase sb-heading">LANGUAGE</h4>
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
                            <li class="breadcrumb-item active" aria-current="page"><span>Language</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing xs-p-0">

            <div id="searchOverlay" class="layout-spacing layout-top-spacing">
                <div class="statbox box box-shadow d-flex">
                    <div class="text-center tags-content col-md-5 ml-auto xs-pl-0">
                        <div class="demo-search-overlay"></div>

                        <div class="full-search search-form-overlay">
                            <form class="form-inline form-inline search mt-lg-0" role="search">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-search">
                                    <circle cx="11" cy="11" r="8"></circle>
                                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                                </svg>
                                <div class="search-bar">
                                    <input type="text" class="form-control search-form-control  ml-lg-auto" placeholder="Search...">
                                </div>
                            </form>
                        </div>
                    </div>
                    <a href="#" class="btn btn-primary submit-btn"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                            <line x1="12" y1="5" x2="12" y2="19"></line>
                            <line x1="5" y1="12" x2="19" y2="12"></line>
                        </svg> ADD</a>
                </div>
            </div>
            <div class="widget">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-4">
                        <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>LANGUAGE</th>
                                <th class="text-center">STATUS</th>
                                <th class="text-center">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Tamil</td>
                                <td class="text-center">
                                    <label class="switch s-success custom-success  mb-2 mr-2">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls d-flex align-items-center justify-content-center">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="19.433" height="17.667" viewBox="0 0 19.433 17.667">
                                                    <defs>
                                                        <style>
                                                            .lang-icon {
                                                                fill: #6381a7;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="lang-icon" d="M31.818,54.216,29.574,52l.026-.027A15.475,15.475,0,0,0,32.878,46.2h2.588V44.434H29.283V42.667H27.516v1.767H21.333v1.758H31.2a13.95,13.95,0,0,1-2.8,4.735,13.93,13.93,0,0,1-2.04-2.959H24.592a15.514,15.514,0,0,0,2.632,4.028l-4.492,4.439,1.25,1.25L28.4,53.267l2.747,2.747.671-1.8Zm4.973-4.483H35.025l-3.975,10.6h1.767l.994-2.65h4.2L39,60.333h1.767Zm-2.319,6.183,1.435-3.829,1.435,3.829Z" transform="translate(-21.333 -42.667)" />
                                                </svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                </svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Tamil</td>
                                <td class="text-center">
                                    <label class="switch s-success custom-success  mb-2 mr-2">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls d-flex align-items-center justify-content-center">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="19.433" height="17.667" viewBox="0 0 19.433 17.667">
                                                    <defs>
                                                        <style>
                                                            .lang-icon {
                                                                fill: #6381a7;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="lang-icon" d="M31.818,54.216,29.574,52l.026-.027A15.475,15.475,0,0,0,32.878,46.2h2.588V44.434H29.283V42.667H27.516v1.767H21.333v1.758H31.2a13.95,13.95,0,0,1-2.8,4.735,13.93,13.93,0,0,1-2.04-2.959H24.592a15.514,15.514,0,0,0,2.632,4.028l-4.492,4.439,1.25,1.25L28.4,53.267l2.747,2.747.671-1.8Zm4.973-4.483H35.025l-3.975,10.6h1.767l.994-2.65h4.2L39,60.333h1.767Zm-2.319,6.183,1.435-3.829,1.435,3.829Z" transform="translate(-21.333 -42.667)" />
                                                </svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                </svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Tamil</td>
                                <td class="text-center">
                                    <label class="switch s-success custom-success  mb-2 mr-2">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls d-flex align-items-center justify-content-center">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="19.433" height="17.667" viewBox="0 0 19.433 17.667">
                                                    <defs>
                                                        <style>
                                                            .lang-icon {
                                                                fill: #6381a7;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="lang-icon" d="M31.818,54.216,29.574,52l.026-.027A15.475,15.475,0,0,0,32.878,46.2h2.588V44.434H29.283V42.667H27.516v1.767H21.333v1.758H31.2a13.95,13.95,0,0,1-2.8,4.735,13.93,13.93,0,0,1-2.04-2.959H24.592a15.514,15.514,0,0,0,2.632,4.028l-4.492,4.439,1.25,1.25L28.4,53.267l2.747,2.747.671-1.8Zm4.973-4.483H35.025l-3.975,10.6h1.767l.994-2.65h4.2L39,60.333h1.767Zm-2.319,6.183,1.435-3.829,1.435,3.829Z" transform="translate(-21.333 -42.667)" />
                                                </svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                </svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>Tamil</td>
                                <td class="text-center">
                                    <label class="switch s-success custom-success  mb-2 mr-2">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls d-flex align-items-center justify-content-center">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="19.433" height="17.667" viewBox="0 0 19.433 17.667">
                                                    <defs>
                                                        <style>
                                                            .lang-icon {
                                                                fill: #6381a7;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="lang-icon" d="M31.818,54.216,29.574,52l.026-.027A15.475,15.475,0,0,0,32.878,46.2h2.588V44.434H29.283V42.667H27.516v1.767H21.333v1.758H31.2a13.95,13.95,0,0,1-2.8,4.735,13.93,13.93,0,0,1-2.04-2.959H24.592a15.514,15.514,0,0,0,2.632,4.028l-4.492,4.439,1.25,1.25L28.4,53.267l2.747,2.747.671-1.8Zm4.973-4.483H35.025l-3.975,10.6h1.767l.994-2.65h4.2L39,60.333h1.767Zm-2.319,6.183,1.435-3.829,1.435,3.829Z" transform="translate(-21.333 -42.667)" />
                                                </svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                </svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>5</td>
                                <td>Tamil</td>
                                <td class="text-center">
                                    <label class="switch s-success custom-success  mb-2 mr-2">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls d-flex align-items-center justify-content-center">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="19.433" height="17.667" viewBox="0 0 19.433 17.667">
                                                    <defs>
                                                        <style>
                                                            .lang-icon {
                                                                fill: #6381a7;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="lang-icon" d="M31.818,54.216,29.574,52l.026-.027A15.475,15.475,0,0,0,32.878,46.2h2.588V44.434H29.283V42.667H27.516v1.767H21.333v1.758H31.2a13.95,13.95,0,0,1-2.8,4.735,13.93,13.93,0,0,1-2.04-2.959H24.592a15.514,15.514,0,0,0,2.632,4.028l-4.492,4.439,1.25,1.25L28.4,53.267l2.747,2.747.671-1.8Zm4.973-4.483H35.025l-3.975,10.6h1.767l.994-2.65h4.2L39,60.333h1.767Zm-2.319,6.183,1.435-3.829,1.435,3.829Z" transform="translate(-21.333 -42.667)" />
                                                </svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                </svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>Tamil</td>
                                <td class="text-center">
                                    <label class="switch s-success custom-success  mb-2 mr-2">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls d-flex align-items-center justify-content-center">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="19.433" height="17.667" viewBox="0 0 19.433 17.667">
                                                    <defs>
                                                        <style>
                                                            .lang-icon {
                                                                fill: #6381a7;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="lang-icon" d="M31.818,54.216,29.574,52l.026-.027A15.475,15.475,0,0,0,32.878,46.2h2.588V44.434H29.283V42.667H27.516v1.767H21.333v1.758H31.2a13.95,13.95,0,0,1-2.8,4.735,13.93,13.93,0,0,1-2.04-2.959H24.592a15.514,15.514,0,0,0,2.632,4.028l-4.492,4.439,1.25,1.25L28.4,53.267l2.747,2.747.671-1.8Zm4.973-4.483H35.025l-3.975,10.6h1.767l.994-2.65h4.2L39,60.333h1.767Zm-2.319,6.183,1.435-3.829,1.435,3.829Z" transform="translate(-21.333 -42.667)" />
                                                </svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                </svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>7</td>
                                <td>Tamil</td>
                                <td class="text-center">
                                    <label class="switch s-success custom-success  mb-2 mr-2">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls d-flex align-items-center justify-content-center">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="19.433" height="17.667" viewBox="0 0 19.433 17.667">
                                                    <defs>
                                                        <style>
                                                            .lang-icon {
                                                                fill: #6381a7;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="lang-icon" d="M31.818,54.216,29.574,52l.026-.027A15.475,15.475,0,0,0,32.878,46.2h2.588V44.434H29.283V42.667H27.516v1.767H21.333v1.758H31.2a13.95,13.95,0,0,1-2.8,4.735,13.93,13.93,0,0,1-2.04-2.959H24.592a15.514,15.514,0,0,0,2.632,4.028l-4.492,4.439,1.25,1.25L28.4,53.267l2.747,2.747.671-1.8Zm4.973-4.483H35.025l-3.975,10.6h1.767l.994-2.65h4.2L39,60.333h1.767Zm-2.319,6.183,1.435-3.829,1.435,3.829Z" transform="translate(-21.333 -42.667)" />
                                                </svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                </svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>Tamil</td>
                                <td class="text-center">
                                    <label class="switch s-success custom-success  mb-2 mr-2">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls d-flex align-items-center justify-content-center">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="19.433" height="17.667" viewBox="0 0 19.433 17.667">
                                                    <defs>
                                                        <style>
                                                            .lang-icon {
                                                                fill: #6381a7;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="lang-icon" d="M31.818,54.216,29.574,52l.026-.027A15.475,15.475,0,0,0,32.878,46.2h2.588V44.434H29.283V42.667H27.516v1.767H21.333v1.758H31.2a13.95,13.95,0,0,1-2.8,4.735,13.93,13.93,0,0,1-2.04-2.959H24.592a15.514,15.514,0,0,0,2.632,4.028l-4.492,4.439,1.25,1.25L28.4,53.267l2.747,2.747.671-1.8Zm4.973-4.483H35.025l-3.975,10.6h1.767l.994-2.65h4.2L39,60.333h1.767Zm-2.319,6.183,1.435-3.829,1.435,3.829Z" transform="translate(-21.333 -42.667)" />
                                                </svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                </svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>Tamil</td>
                                <td class="text-center">
                                    <label class="switch s-success custom-success  mb-2 mr-2">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls d-flex align-items-center justify-content-center">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="19.433" height="17.667" viewBox="0 0 19.433 17.667">
                                                    <defs>
                                                        <style>
                                                            .lang-icon {
                                                                fill: #6381a7;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="lang-icon" d="M31.818,54.216,29.574,52l.026-.027A15.475,15.475,0,0,0,32.878,46.2h2.588V44.434H29.283V42.667H27.516v1.767H21.333v1.758H31.2a13.95,13.95,0,0,1-2.8,4.735,13.93,13.93,0,0,1-2.04-2.959H24.592a15.514,15.514,0,0,0,2.632,4.028l-4.492,4.439,1.25,1.25L28.4,53.267l2.747,2.747.671-1.8Zm4.973-4.483H35.025l-3.975,10.6h1.767l.994-2.65h4.2L39,60.333h1.767Zm-2.319,6.183,1.435-3.829,1.435,3.829Z" transform="translate(-21.333 -42.667)" />
                                                </svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                </svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg></a></li>
                                    </ul>
                                </td>
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>Tamil</td>
                                <td class="text-center">
                                    <label class="switch s-success custom-success  mb-2 mr-2">
                                        <input type="checkbox" checked>
                                        <span class="slider round"></span>
                                    </label>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls d-flex align-items-center justify-content-center">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="19.433" height="17.667" viewBox="0 0 19.433 17.667">
                                                    <defs>
                                                        <style>
                                                            .lang-icon {
                                                                fill: #6381a7;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="lang-icon" d="M31.818,54.216,29.574,52l.026-.027A15.475,15.475,0,0,0,32.878,46.2h2.588V44.434H29.283V42.667H27.516v1.767H21.333v1.758H31.2a13.95,13.95,0,0,1-2.8,4.735,13.93,13.93,0,0,1-2.04-2.959H24.592a15.514,15.514,0,0,0,2.632,4.028l-4.492,4.439,1.25,1.25L28.4,53.267l2.747,2.747.671-1.8Zm4.973-4.483H35.025l-3.975,10.6h1.767l.994-2.65h4.2L39,60.333h1.767Zm-2.319,6.183,1.435-3.829,1.435,3.829Z" transform="translate(-21.333 -42.667)" />
                                                </svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2 text-success">
                                                    <path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path>
                                                </svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 text-danger">
                                                    <polyline points="3 6 5 6 21 6"></polyline>
                                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                                </svg></a></li>
                                    </ul>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <h5 class="show-entries-heading">Show 8 of 100 entries</h5>
                    </div>
                    <div class="col-lg-6">
                        <div class="paginating-container pagination-solid">
                            <ul class="pagination">
                                <li class="prev"><a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left">
                                            <polyline points="15 18 9 12 15 6"></polyline>
                                        </svg></a></li>
                                <li><a href="javascript:void(0);">1</a></li>
                                <li class="active"><a href="javascript:void(0);">2</a></li>
                                <li><a href="javascript:void(0);">3</a></li>
                                <li class="next"><a href="javascript:void(0);"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-right">
                                            <polyline points="9 18 15 12 9 6"></polyline>
                                        </svg></a></li>
                            </ul>

                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <?php 
    include('footer.php');
    ?>