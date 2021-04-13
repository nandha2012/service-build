<?php 
include('header.php');
?>
<!--  BEGIN CONTENT AREA  -->
<div id="content" class="main-content">
    <div class="layout-px-spacing">
        <div class="breadcrum-wrap layout-top-spacing col-12 xs-p-0">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <h4 class="text-uppercase sb-heading">USER</h4>
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
                            <li class="breadcrumb-item active" aria-current="page"><span>User</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>

        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 layout-spacing xs-p-0">

            <div id="searchOverlay" class="layout-spacing layout-top-spacing">
                <div class="statbox box box-shadow">
                    <div class="text-center tags-content col-md-5 ml-auto xs-p-0">
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
                </div>
            </div>
            <div class="widget">
                <div class="table-responsive">
                    <table class="table table-bordered table-striped mb-4">
                        <thead>
                            <tr>
                                <th>S.NO</th>
                                <th>NAME</th>
                                <th>MOBILE NO</th>
                                <th>EMAIL</th>
                                <th>SERVICE HISTORY</th>
                                <th class="text-center">ACTION</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>John Doe</td>
                                <td>9876543210</td>
                                <td>username@gmail.com</td>
                                <td class="text-center">
                                 <ul class="table-controls">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="View"><svg xmlns="http://www.w3.org/2000/svg" width="16.2" height="10.325" viewBox="0 0 16.2 10.325">
                                                    <defs>
                                                        <style>
                                                            .view {
                                                                fill: #0d004c;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="view" d="M8.1,103.16c-4.4,0-7.853-4.65-8-4.848a.535.535,0,0,1,0-.63c.145-.2,3.593-4.847,8-4.847s7.852,4.65,8,4.848a.534.534,0,0,1,0,.63C15.955,98.511,12.507,103.16,8.1,103.16ZM1.217,98c.832,1.009,3.641,4.095,6.886,4.095S14.158,99.008,14.989,98C14.157,96.989,11.347,93.9,8.1,93.9S2.048,96.988,1.217,98Z" transform="translate(-0.003 -92.835)" />
                                                    <path class="view" d="M157.929,161.134a3.2,3.2,0,1,1,3.2-3.2A3.208,3.208,0,0,1,157.929,161.134Zm0-5.341a2.136,2.136,0,1,0,2.136,2.136A2.139,2.139,0,0,0,157.929,155.793Z" transform="translate(-149.829 -152.767)" />
                                                </svg></a> </li>
                                    </ul>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls d-flex align-items-center">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20.078" viewBox="0 0 16 20.078"><defs><style>.lock-red{fill:#e95252;}</style></defs><g transform="translate(-52)"><path class="lock-red" d="M65.647,7.373H64.234V4.148a4.236,4.236,0,0,0-8.471,0V7.373h-1.41A2.356,2.356,0,0,0,52,9.725v8a2.356,2.356,0,0,0,2.353,2.353H65.647A2.356,2.356,0,0,0,68,17.725v-8A2.356,2.356,0,0,0,65.647,7.373ZM57.332,4.148a2.668,2.668,0,0,1,5.333,0V7.373H57.332V4.148Zm9.1,13.578a.785.785,0,0,1-.784.784H54.353a.785.785,0,0,1-.784-.784v-8a.785.785,0,0,1,.784-.784H65.647a.785.785,0,0,1,.784.784Z" transform="translate(0 0)"/><path class="lock-red" d="M220.879,286h0A1.879,1.879,0,0,0,219,287.879h0a1.877,1.877,0,0,0,.861,1.579v2.229a1.016,1.016,0,1,0,2.031,0V289.46a1.877,1.877,0,0,0,.865-1.582h0A1.879,1.879,0,0,0,220.879,286Z" transform="translate(-160.879 -275.933)"/></g></svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20.078" viewBox="0 0 16 20.078"><defs><style>.lock-blue{fill:#6381a7;}</style></defs><g transform="translate(-52)"><path class="lock-blue" d="M65.647,7.373H57.332V4.148a2.668,2.668,0,0,1,5.333,0v1.5h1.569v-1.5a4.236,4.236,0,0,0-8.471,0V7.373h-1.41A2.356,2.356,0,0,0,52,9.725v8a2.356,2.356,0,0,0,2.353,2.353H65.647A2.356,2.356,0,0,0,68,17.725v-8A2.356,2.356,0,0,0,65.647,7.373Zm.784,10.353a.785.785,0,0,1-.784.784H54.353a.785.785,0,0,1-.784-.784v-8a.785.785,0,0,1,.784-.784H65.647a.785.785,0,0,1,.784.784Z" transform="translate(0 0)"/><path class="lock-blue" d="M220.338,286h0a1.337,1.337,0,0,0-.724,2.462v1.587a.723.723,0,1,0,1.446,0v-1.585a1.337,1.337,0,0,0-.722-2.464Z" transform="translate(-160.338 -274.48)"/></g></svg></a></li>
                                    </ul>
                                </td> 
                            </tr>
                            <tr>
                                <td>2</td>
                                 <td>John Doe</td>
                                <td>9876543210</td>
                                <td>username@gmail.com</td>
                                <td class="text-center">
                                 <ul class="table-controls">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="View"><svg xmlns="http://www.w3.org/2000/svg" width="16.2" height="10.325" viewBox="0 0 16.2 10.325">
                                                    <defs>
                                                        <style>
                                                            .view {
                                                                fill: #0d004c;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="view" d="M8.1,103.16c-4.4,0-7.853-4.65-8-4.848a.535.535,0,0,1,0-.63c.145-.2,3.593-4.847,8-4.847s7.852,4.65,8,4.848a.534.534,0,0,1,0,.63C15.955,98.511,12.507,103.16,8.1,103.16ZM1.217,98c.832,1.009,3.641,4.095,6.886,4.095S14.158,99.008,14.989,98C14.157,96.989,11.347,93.9,8.1,93.9S2.048,96.988,1.217,98Z" transform="translate(-0.003 -92.835)" />
                                                    <path class="view" d="M157.929,161.134a3.2,3.2,0,1,1,3.2-3.2A3.208,3.208,0,0,1,157.929,161.134Zm0-5.341a2.136,2.136,0,1,0,2.136,2.136A2.139,2.139,0,0,0,157.929,155.793Z" transform="translate(-149.829 -152.767)" />
                                                </svg></a> </li>
                                    </ul>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls d-flex align-items-center">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20.078" viewBox="0 0 16 20.078"><defs><style>.lock-red{fill:#e95252;}</style></defs><g transform="translate(-52)"><path class="lock-red" d="M65.647,7.373H64.234V4.148a4.236,4.236,0,0,0-8.471,0V7.373h-1.41A2.356,2.356,0,0,0,52,9.725v8a2.356,2.356,0,0,0,2.353,2.353H65.647A2.356,2.356,0,0,0,68,17.725v-8A2.356,2.356,0,0,0,65.647,7.373ZM57.332,4.148a2.668,2.668,0,0,1,5.333,0V7.373H57.332V4.148Zm9.1,13.578a.785.785,0,0,1-.784.784H54.353a.785.785,0,0,1-.784-.784v-8a.785.785,0,0,1,.784-.784H65.647a.785.785,0,0,1,.784.784Z" transform="translate(0 0)"/><path class="lock-red" d="M220.879,286h0A1.879,1.879,0,0,0,219,287.879h0a1.877,1.877,0,0,0,.861,1.579v2.229a1.016,1.016,0,1,0,2.031,0V289.46a1.877,1.877,0,0,0,.865-1.582h0A1.879,1.879,0,0,0,220.879,286Z" transform="translate(-160.879 -275.933)"/></g></svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20.078" viewBox="0 0 16 20.078"><defs><style>.lock-blue{fill:#6381a7;}</style></defs><g transform="translate(-52)"><path class="lock-blue" d="M65.647,7.373H57.332V4.148a2.668,2.668,0,0,1,5.333,0v1.5h1.569v-1.5a4.236,4.236,0,0,0-8.471,0V7.373h-1.41A2.356,2.356,0,0,0,52,9.725v8a2.356,2.356,0,0,0,2.353,2.353H65.647A2.356,2.356,0,0,0,68,17.725v-8A2.356,2.356,0,0,0,65.647,7.373Zm.784,10.353a.785.785,0,0,1-.784.784H54.353a.785.785,0,0,1-.784-.784v-8a.785.785,0,0,1,.784-.784H65.647a.785.785,0,0,1,.784.784Z" transform="translate(0 0)"/><path class="lock-blue" d="M220.338,286h0a1.337,1.337,0,0,0-.724,2.462v1.587a.723.723,0,1,0,1.446,0v-1.585a1.337,1.337,0,0,0-.722-2.464Z" transform="translate(-160.338 -274.48)"/></g></svg></a></li>
                                    </ul>
                                </td> 
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>John Doe</td>
                                <td>9876543210</td>
                                <td>username@gmail.com</td>
                                <td class="text-center">
                                 <ul class="table-controls">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="View"><svg xmlns="http://www.w3.org/2000/svg" width="16.2" height="10.325" viewBox="0 0 16.2 10.325">
                                                    <defs>
                                                        <style>
                                                            .view {
                                                                fill: #0d004c;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="view" d="M8.1,103.16c-4.4,0-7.853-4.65-8-4.848a.535.535,0,0,1,0-.63c.145-.2,3.593-4.847,8-4.847s7.852,4.65,8,4.848a.534.534,0,0,1,0,.63C15.955,98.511,12.507,103.16,8.1,103.16ZM1.217,98c.832,1.009,3.641,4.095,6.886,4.095S14.158,99.008,14.989,98C14.157,96.989,11.347,93.9,8.1,93.9S2.048,96.988,1.217,98Z" transform="translate(-0.003 -92.835)" />
                                                    <path class="view" d="M157.929,161.134a3.2,3.2,0,1,1,3.2-3.2A3.208,3.208,0,0,1,157.929,161.134Zm0-5.341a2.136,2.136,0,1,0,2.136,2.136A2.139,2.139,0,0,0,157.929,155.793Z" transform="translate(-149.829 -152.767)" />
                                                </svg></a> </li>
                                    </ul>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls d-flex align-items-center">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20.078" viewBox="0 0 16 20.078"><defs><style>.lock-red{fill:#e95252;}</style></defs><g transform="translate(-52)"><path class="lock-red" d="M65.647,7.373H64.234V4.148a4.236,4.236,0,0,0-8.471,0V7.373h-1.41A2.356,2.356,0,0,0,52,9.725v8a2.356,2.356,0,0,0,2.353,2.353H65.647A2.356,2.356,0,0,0,68,17.725v-8A2.356,2.356,0,0,0,65.647,7.373ZM57.332,4.148a2.668,2.668,0,0,1,5.333,0V7.373H57.332V4.148Zm9.1,13.578a.785.785,0,0,1-.784.784H54.353a.785.785,0,0,1-.784-.784v-8a.785.785,0,0,1,.784-.784H65.647a.785.785,0,0,1,.784.784Z" transform="translate(0 0)"/><path class="lock-red" d="M220.879,286h0A1.879,1.879,0,0,0,219,287.879h0a1.877,1.877,0,0,0,.861,1.579v2.229a1.016,1.016,0,1,0,2.031,0V289.46a1.877,1.877,0,0,0,.865-1.582h0A1.879,1.879,0,0,0,220.879,286Z" transform="translate(-160.879 -275.933)"/></g></svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20.078" viewBox="0 0 16 20.078"><defs><style>.lock-blue{fill:#6381a7;}</style></defs><g transform="translate(-52)"><path class="lock-blue" d="M65.647,7.373H57.332V4.148a2.668,2.668,0,0,1,5.333,0v1.5h1.569v-1.5a4.236,4.236,0,0,0-8.471,0V7.373h-1.41A2.356,2.356,0,0,0,52,9.725v8a2.356,2.356,0,0,0,2.353,2.353H65.647A2.356,2.356,0,0,0,68,17.725v-8A2.356,2.356,0,0,0,65.647,7.373Zm.784,10.353a.785.785,0,0,1-.784.784H54.353a.785.785,0,0,1-.784-.784v-8a.785.785,0,0,1,.784-.784H65.647a.785.785,0,0,1,.784.784Z" transform="translate(0 0)"/><path class="lock-blue" d="M220.338,286h0a1.337,1.337,0,0,0-.724,2.462v1.587a.723.723,0,1,0,1.446,0v-1.585a1.337,1.337,0,0,0-.722-2.464Z" transform="translate(-160.338 -274.48)"/></g></svg></a></li>
                                    </ul>
                                </td> 
                            </tr>
                            <tr>
                                <td>4</td>
                                <td>John Doe</td>
                                <td>9876543210</td>
                                <td>username@gmail.com</td>
                                <td class="text-center">
                                 <ul class="table-controls">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="View"><svg xmlns="http://www.w3.org/2000/svg" width="16.2" height="10.325" viewBox="0 0 16.2 10.325">
                                                    <defs>
                                                        <style>
                                                            .view {
                                                                fill: #0d004c;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="view" d="M8.1,103.16c-4.4,0-7.853-4.65-8-4.848a.535.535,0,0,1,0-.63c.145-.2,3.593-4.847,8-4.847s7.852,4.65,8,4.848a.534.534,0,0,1,0,.63C15.955,98.511,12.507,103.16,8.1,103.16ZM1.217,98c.832,1.009,3.641,4.095,6.886,4.095S14.158,99.008,14.989,98C14.157,96.989,11.347,93.9,8.1,93.9S2.048,96.988,1.217,98Z" transform="translate(-0.003 -92.835)" />
                                                    <path class="view" d="M157.929,161.134a3.2,3.2,0,1,1,3.2-3.2A3.208,3.208,0,0,1,157.929,161.134Zm0-5.341a2.136,2.136,0,1,0,2.136,2.136A2.139,2.139,0,0,0,157.929,155.793Z" transform="translate(-149.829 -152.767)" />
                                                </svg></a> </li>
                                    </ul>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls d-flex align-items-center">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20.078" viewBox="0 0 16 20.078"><defs><style>.lock-red{fill:#e95252;}</style></defs><g transform="translate(-52)"><path class="lock-red" d="M65.647,7.373H64.234V4.148a4.236,4.236,0,0,0-8.471,0V7.373h-1.41A2.356,2.356,0,0,0,52,9.725v8a2.356,2.356,0,0,0,2.353,2.353H65.647A2.356,2.356,0,0,0,68,17.725v-8A2.356,2.356,0,0,0,65.647,7.373ZM57.332,4.148a2.668,2.668,0,0,1,5.333,0V7.373H57.332V4.148Zm9.1,13.578a.785.785,0,0,1-.784.784H54.353a.785.785,0,0,1-.784-.784v-8a.785.785,0,0,1,.784-.784H65.647a.785.785,0,0,1,.784.784Z" transform="translate(0 0)"/><path class="lock-red" d="M220.879,286h0A1.879,1.879,0,0,0,219,287.879h0a1.877,1.877,0,0,0,.861,1.579v2.229a1.016,1.016,0,1,0,2.031,0V289.46a1.877,1.877,0,0,0,.865-1.582h0A1.879,1.879,0,0,0,220.879,286Z" transform="translate(-160.879 -275.933)"/></g></svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20.078" viewBox="0 0 16 20.078"><defs><style>.lock-blue{fill:#6381a7;}</style></defs><g transform="translate(-52)"><path class="lock-blue" d="M65.647,7.373H57.332V4.148a2.668,2.668,0,0,1,5.333,0v1.5h1.569v-1.5a4.236,4.236,0,0,0-8.471,0V7.373h-1.41A2.356,2.356,0,0,0,52,9.725v8a2.356,2.356,0,0,0,2.353,2.353H65.647A2.356,2.356,0,0,0,68,17.725v-8A2.356,2.356,0,0,0,65.647,7.373Zm.784,10.353a.785.785,0,0,1-.784.784H54.353a.785.785,0,0,1-.784-.784v-8a.785.785,0,0,1,.784-.784H65.647a.785.785,0,0,1,.784.784Z" transform="translate(0 0)"/><path class="lock-blue" d="M220.338,286h0a1.337,1.337,0,0,0-.724,2.462v1.587a.723.723,0,1,0,1.446,0v-1.585a1.337,1.337,0,0,0-.722-2.464Z" transform="translate(-160.338 -274.48)"/></g></svg></a></li>
                                    </ul>
                                </td> 
                            </tr>
                            <tr>
                                <td>5</td>
                               <td>John Doe</td>
                                <td>9876543210</td>
                                <td>username@gmail.com</td>
                                <td class="text-center">
                                 <ul class="table-controls">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="View"><svg xmlns="http://www.w3.org/2000/svg" width="16.2" height="10.325" viewBox="0 0 16.2 10.325">
                                                    <defs>
                                                        <style>
                                                            .view {
                                                                fill: #0d004c;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="view" d="M8.1,103.16c-4.4,0-7.853-4.65-8-4.848a.535.535,0,0,1,0-.63c.145-.2,3.593-4.847,8-4.847s7.852,4.65,8,4.848a.534.534,0,0,1,0,.63C15.955,98.511,12.507,103.16,8.1,103.16ZM1.217,98c.832,1.009,3.641,4.095,6.886,4.095S14.158,99.008,14.989,98C14.157,96.989,11.347,93.9,8.1,93.9S2.048,96.988,1.217,98Z" transform="translate(-0.003 -92.835)" />
                                                    <path class="view" d="M157.929,161.134a3.2,3.2,0,1,1,3.2-3.2A3.208,3.208,0,0,1,157.929,161.134Zm0-5.341a2.136,2.136,0,1,0,2.136,2.136A2.139,2.139,0,0,0,157.929,155.793Z" transform="translate(-149.829 -152.767)" />
                                                </svg></a> </li>
                                    </ul>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls d-flex align-items-center">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20.078" viewBox="0 0 16 20.078"><defs><style>.lock-red{fill:#e95252;}</style></defs><g transform="translate(-52)"><path class="lock-red" d="M65.647,7.373H64.234V4.148a4.236,4.236,0,0,0-8.471,0V7.373h-1.41A2.356,2.356,0,0,0,52,9.725v8a2.356,2.356,0,0,0,2.353,2.353H65.647A2.356,2.356,0,0,0,68,17.725v-8A2.356,2.356,0,0,0,65.647,7.373ZM57.332,4.148a2.668,2.668,0,0,1,5.333,0V7.373H57.332V4.148Zm9.1,13.578a.785.785,0,0,1-.784.784H54.353a.785.785,0,0,1-.784-.784v-8a.785.785,0,0,1,.784-.784H65.647a.785.785,0,0,1,.784.784Z" transform="translate(0 0)"/><path class="lock-red" d="M220.879,286h0A1.879,1.879,0,0,0,219,287.879h0a1.877,1.877,0,0,0,.861,1.579v2.229a1.016,1.016,0,1,0,2.031,0V289.46a1.877,1.877,0,0,0,.865-1.582h0A1.879,1.879,0,0,0,220.879,286Z" transform="translate(-160.879 -275.933)"/></g></svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20.078" viewBox="0 0 16 20.078"><defs><style>.lock-blue{fill:#6381a7;}</style></defs><g transform="translate(-52)"><path class="lock-blue" d="M65.647,7.373H57.332V4.148a2.668,2.668,0,0,1,5.333,0v1.5h1.569v-1.5a4.236,4.236,0,0,0-8.471,0V7.373h-1.41A2.356,2.356,0,0,0,52,9.725v8a2.356,2.356,0,0,0,2.353,2.353H65.647A2.356,2.356,0,0,0,68,17.725v-8A2.356,2.356,0,0,0,65.647,7.373Zm.784,10.353a.785.785,0,0,1-.784.784H54.353a.785.785,0,0,1-.784-.784v-8a.785.785,0,0,1,.784-.784H65.647a.785.785,0,0,1,.784.784Z" transform="translate(0 0)"/><path class="lock-blue" d="M220.338,286h0a1.337,1.337,0,0,0-.724,2.462v1.587a.723.723,0,1,0,1.446,0v-1.585a1.337,1.337,0,0,0-.722-2.464Z" transform="translate(-160.338 -274.48)"/></g></svg></a></li>
                                    </ul>
                                </td> 
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>John Doe</td>
                                <td>9876543210</td>
                                <td>username@gmail.com</td>
                                <td class="text-center">
                                 <ul class="table-controls">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="View"><svg xmlns="http://www.w3.org/2000/svg" width="16.2" height="10.325" viewBox="0 0 16.2 10.325">
                                                    <defs>
                                                        <style>
                                                            .view {
                                                                fill: #0d004c;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="view" d="M8.1,103.16c-4.4,0-7.853-4.65-8-4.848a.535.535,0,0,1,0-.63c.145-.2,3.593-4.847,8-4.847s7.852,4.65,8,4.848a.534.534,0,0,1,0,.63C15.955,98.511,12.507,103.16,8.1,103.16ZM1.217,98c.832,1.009,3.641,4.095,6.886,4.095S14.158,99.008,14.989,98C14.157,96.989,11.347,93.9,8.1,93.9S2.048,96.988,1.217,98Z" transform="translate(-0.003 -92.835)" />
                                                    <path class="view" d="M157.929,161.134a3.2,3.2,0,1,1,3.2-3.2A3.208,3.208,0,0,1,157.929,161.134Zm0-5.341a2.136,2.136,0,1,0,2.136,2.136A2.139,2.139,0,0,0,157.929,155.793Z" transform="translate(-149.829 -152.767)" />
                                                </svg></a> </li>
                                    </ul>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls d-flex align-items-center">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20.078" viewBox="0 0 16 20.078"><defs><style>.lock-red{fill:#e95252;}</style></defs><g transform="translate(-52)"><path class="lock-red" d="M65.647,7.373H64.234V4.148a4.236,4.236,0,0,0-8.471,0V7.373h-1.41A2.356,2.356,0,0,0,52,9.725v8a2.356,2.356,0,0,0,2.353,2.353H65.647A2.356,2.356,0,0,0,68,17.725v-8A2.356,2.356,0,0,0,65.647,7.373ZM57.332,4.148a2.668,2.668,0,0,1,5.333,0V7.373H57.332V4.148Zm9.1,13.578a.785.785,0,0,1-.784.784H54.353a.785.785,0,0,1-.784-.784v-8a.785.785,0,0,1,.784-.784H65.647a.785.785,0,0,1,.784.784Z" transform="translate(0 0)"/><path class="lock-red" d="M220.879,286h0A1.879,1.879,0,0,0,219,287.879h0a1.877,1.877,0,0,0,.861,1.579v2.229a1.016,1.016,0,1,0,2.031,0V289.46a1.877,1.877,0,0,0,.865-1.582h0A1.879,1.879,0,0,0,220.879,286Z" transform="translate(-160.879 -275.933)"/></g></svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20.078" viewBox="0 0 16 20.078"><defs><style>.lock-blue{fill:#6381a7;}</style></defs><g transform="translate(-52)"><path class="lock-blue" d="M65.647,7.373H57.332V4.148a2.668,2.668,0,0,1,5.333,0v1.5h1.569v-1.5a4.236,4.236,0,0,0-8.471,0V7.373h-1.41A2.356,2.356,0,0,0,52,9.725v8a2.356,2.356,0,0,0,2.353,2.353H65.647A2.356,2.356,0,0,0,68,17.725v-8A2.356,2.356,0,0,0,65.647,7.373Zm.784,10.353a.785.785,0,0,1-.784.784H54.353a.785.785,0,0,1-.784-.784v-8a.785.785,0,0,1,.784-.784H65.647a.785.785,0,0,1,.784.784Z" transform="translate(0 0)"/><path class="lock-blue" d="M220.338,286h0a1.337,1.337,0,0,0-.724,2.462v1.587a.723.723,0,1,0,1.446,0v-1.585a1.337,1.337,0,0,0-.722-2.464Z" transform="translate(-160.338 -274.48)"/></g></svg></a></li>
                                    </ul>
                                </td> 
                            </tr>
                            <tr>
                                <td>7</td>
                               <td>John Doe</td>
                                <td>9876543210</td>
                                <td>username@gmail.com</td>
                                <td class="text-center">
                                 <ul class="table-controls">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="View"><svg xmlns="http://www.w3.org/2000/svg" width="16.2" height="10.325" viewBox="0 0 16.2 10.325">
                                                    <defs>
                                                        <style>
                                                            .view {
                                                                fill: #0d004c;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="view" d="M8.1,103.16c-4.4,0-7.853-4.65-8-4.848a.535.535,0,0,1,0-.63c.145-.2,3.593-4.847,8-4.847s7.852,4.65,8,4.848a.534.534,0,0,1,0,.63C15.955,98.511,12.507,103.16,8.1,103.16ZM1.217,98c.832,1.009,3.641,4.095,6.886,4.095S14.158,99.008,14.989,98C14.157,96.989,11.347,93.9,8.1,93.9S2.048,96.988,1.217,98Z" transform="translate(-0.003 -92.835)" />
                                                    <path class="view" d="M157.929,161.134a3.2,3.2,0,1,1,3.2-3.2A3.208,3.208,0,0,1,157.929,161.134Zm0-5.341a2.136,2.136,0,1,0,2.136,2.136A2.139,2.139,0,0,0,157.929,155.793Z" transform="translate(-149.829 -152.767)" />
                                                </svg></a> </li>
                                    </ul>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls d-flex align-items-center">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20.078" viewBox="0 0 16 20.078"><defs><style>.lock-red{fill:#e95252;}</style></defs><g transform="translate(-52)"><path class="lock-red" d="M65.647,7.373H64.234V4.148a4.236,4.236,0,0,0-8.471,0V7.373h-1.41A2.356,2.356,0,0,0,52,9.725v8a2.356,2.356,0,0,0,2.353,2.353H65.647A2.356,2.356,0,0,0,68,17.725v-8A2.356,2.356,0,0,0,65.647,7.373ZM57.332,4.148a2.668,2.668,0,0,1,5.333,0V7.373H57.332V4.148Zm9.1,13.578a.785.785,0,0,1-.784.784H54.353a.785.785,0,0,1-.784-.784v-8a.785.785,0,0,1,.784-.784H65.647a.785.785,0,0,1,.784.784Z" transform="translate(0 0)"/><path class="lock-red" d="M220.879,286h0A1.879,1.879,0,0,0,219,287.879h0a1.877,1.877,0,0,0,.861,1.579v2.229a1.016,1.016,0,1,0,2.031,0V289.46a1.877,1.877,0,0,0,.865-1.582h0A1.879,1.879,0,0,0,220.879,286Z" transform="translate(-160.879 -275.933)"/></g></svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20.078" viewBox="0 0 16 20.078"><defs><style>.lock-blue{fill:#6381a7;}</style></defs><g transform="translate(-52)"><path class="lock-blue" d="M65.647,7.373H57.332V4.148a2.668,2.668,0,0,1,5.333,0v1.5h1.569v-1.5a4.236,4.236,0,0,0-8.471,0V7.373h-1.41A2.356,2.356,0,0,0,52,9.725v8a2.356,2.356,0,0,0,2.353,2.353H65.647A2.356,2.356,0,0,0,68,17.725v-8A2.356,2.356,0,0,0,65.647,7.373Zm.784,10.353a.785.785,0,0,1-.784.784H54.353a.785.785,0,0,1-.784-.784v-8a.785.785,0,0,1,.784-.784H65.647a.785.785,0,0,1,.784.784Z" transform="translate(0 0)"/><path class="lock-blue" d="M220.338,286h0a1.337,1.337,0,0,0-.724,2.462v1.587a.723.723,0,1,0,1.446,0v-1.585a1.337,1.337,0,0,0-.722-2.464Z" transform="translate(-160.338 -274.48)"/></g></svg></a></li>
                                    </ul>
                                </td> 
                            </tr>
                            <tr>
                                <td>8</td>
                                <td>John Doe</td>
                                <td>9876543210</td>
                                <td>username@gmail.com</td>
                                <td class="text-center">
                                 <ul class="table-controls">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="View"><svg xmlns="http://www.w3.org/2000/svg" width="16.2" height="10.325" viewBox="0 0 16.2 10.325">
                                                    <defs>
                                                        <style>
                                                            .view {
                                                                fill: #0d004c;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="view" d="M8.1,103.16c-4.4,0-7.853-4.65-8-4.848a.535.535,0,0,1,0-.63c.145-.2,3.593-4.847,8-4.847s7.852,4.65,8,4.848a.534.534,0,0,1,0,.63C15.955,98.511,12.507,103.16,8.1,103.16ZM1.217,98c.832,1.009,3.641,4.095,6.886,4.095S14.158,99.008,14.989,98C14.157,96.989,11.347,93.9,8.1,93.9S2.048,96.988,1.217,98Z" transform="translate(-0.003 -92.835)" />
                                                    <path class="view" d="M157.929,161.134a3.2,3.2,0,1,1,3.2-3.2A3.208,3.208,0,0,1,157.929,161.134Zm0-5.341a2.136,2.136,0,1,0,2.136,2.136A2.139,2.139,0,0,0,157.929,155.793Z" transform="translate(-149.829 -152.767)" />
                                                </svg></a> </li>
                                    </ul>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls d-flex align-items-center">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20.078" viewBox="0 0 16 20.078"><defs><style>.lock-red{fill:#e95252;}</style></defs><g transform="translate(-52)"><path class="lock-red" d="M65.647,7.373H64.234V4.148a4.236,4.236,0,0,0-8.471,0V7.373h-1.41A2.356,2.356,0,0,0,52,9.725v8a2.356,2.356,0,0,0,2.353,2.353H65.647A2.356,2.356,0,0,0,68,17.725v-8A2.356,2.356,0,0,0,65.647,7.373ZM57.332,4.148a2.668,2.668,0,0,1,5.333,0V7.373H57.332V4.148Zm9.1,13.578a.785.785,0,0,1-.784.784H54.353a.785.785,0,0,1-.784-.784v-8a.785.785,0,0,1,.784-.784H65.647a.785.785,0,0,1,.784.784Z" transform="translate(0 0)"/><path class="lock-red" d="M220.879,286h0A1.879,1.879,0,0,0,219,287.879h0a1.877,1.877,0,0,0,.861,1.579v2.229a1.016,1.016,0,1,0,2.031,0V289.46a1.877,1.877,0,0,0,.865-1.582h0A1.879,1.879,0,0,0,220.879,286Z" transform="translate(-160.879 -275.933)"/></g></svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20.078" viewBox="0 0 16 20.078"><defs><style>.lock-blue{fill:#6381a7;}</style></defs><g transform="translate(-52)"><path class="lock-blue" d="M65.647,7.373H57.332V4.148a2.668,2.668,0,0,1,5.333,0v1.5h1.569v-1.5a4.236,4.236,0,0,0-8.471,0V7.373h-1.41A2.356,2.356,0,0,0,52,9.725v8a2.356,2.356,0,0,0,2.353,2.353H65.647A2.356,2.356,0,0,0,68,17.725v-8A2.356,2.356,0,0,0,65.647,7.373Zm.784,10.353a.785.785,0,0,1-.784.784H54.353a.785.785,0,0,1-.784-.784v-8a.785.785,0,0,1,.784-.784H65.647a.785.785,0,0,1,.784.784Z" transform="translate(0 0)"/><path class="lock-blue" d="M220.338,286h0a1.337,1.337,0,0,0-.724,2.462v1.587a.723.723,0,1,0,1.446,0v-1.585a1.337,1.337,0,0,0-.722-2.464Z" transform="translate(-160.338 -274.48)"/></g></svg></a></li>
                                    </ul>
                                </td> 
                            </tr>
                            <tr>
                                <td>9</td>
                                <td>John Doe</td>
                                <td>9876543210</td>
                                <td>username@gmail.com</td>
                                <td class="text-center">
                                 <ul class="table-controls">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="View"><svg xmlns="http://www.w3.org/2000/svg" width="16.2" height="10.325" viewBox="0 0 16.2 10.325">
                                                    <defs>
                                                        <style>
                                                            .view {
                                                                fill: #0d004c;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="view" d="M8.1,103.16c-4.4,0-7.853-4.65-8-4.848a.535.535,0,0,1,0-.63c.145-.2,3.593-4.847,8-4.847s7.852,4.65,8,4.848a.534.534,0,0,1,0,.63C15.955,98.511,12.507,103.16,8.1,103.16ZM1.217,98c.832,1.009,3.641,4.095,6.886,4.095S14.158,99.008,14.989,98C14.157,96.989,11.347,93.9,8.1,93.9S2.048,96.988,1.217,98Z" transform="translate(-0.003 -92.835)" />
                                                    <path class="view" d="M157.929,161.134a3.2,3.2,0,1,1,3.2-3.2A3.208,3.208,0,0,1,157.929,161.134Zm0-5.341a2.136,2.136,0,1,0,2.136,2.136A2.139,2.139,0,0,0,157.929,155.793Z" transform="translate(-149.829 -152.767)" />
                                                </svg></a> </li>
                                    </ul>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls d-flex align-items-center">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20.078" viewBox="0 0 16 20.078"><defs><style>.lock-red{fill:#e95252;}</style></defs><g transform="translate(-52)"><path class="lock-red" d="M65.647,7.373H64.234V4.148a4.236,4.236,0,0,0-8.471,0V7.373h-1.41A2.356,2.356,0,0,0,52,9.725v8a2.356,2.356,0,0,0,2.353,2.353H65.647A2.356,2.356,0,0,0,68,17.725v-8A2.356,2.356,0,0,0,65.647,7.373ZM57.332,4.148a2.668,2.668,0,0,1,5.333,0V7.373H57.332V4.148Zm9.1,13.578a.785.785,0,0,1-.784.784H54.353a.785.785,0,0,1-.784-.784v-8a.785.785,0,0,1,.784-.784H65.647a.785.785,0,0,1,.784.784Z" transform="translate(0 0)"/><path class="lock-red" d="M220.879,286h0A1.879,1.879,0,0,0,219,287.879h0a1.877,1.877,0,0,0,.861,1.579v2.229a1.016,1.016,0,1,0,2.031,0V289.46a1.877,1.877,0,0,0,.865-1.582h0A1.879,1.879,0,0,0,220.879,286Z" transform="translate(-160.879 -275.933)"/></g></svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20.078" viewBox="0 0 16 20.078"><defs><style>.lock-blue{fill:#6381a7;}</style></defs><g transform="translate(-52)"><path class="lock-blue" d="M65.647,7.373H57.332V4.148a2.668,2.668,0,0,1,5.333,0v1.5h1.569v-1.5a4.236,4.236,0,0,0-8.471,0V7.373h-1.41A2.356,2.356,0,0,0,52,9.725v8a2.356,2.356,0,0,0,2.353,2.353H65.647A2.356,2.356,0,0,0,68,17.725v-8A2.356,2.356,0,0,0,65.647,7.373Zm.784,10.353a.785.785,0,0,1-.784.784H54.353a.785.785,0,0,1-.784-.784v-8a.785.785,0,0,1,.784-.784H65.647a.785.785,0,0,1,.784.784Z" transform="translate(0 0)"/><path class="lock-blue" d="M220.338,286h0a1.337,1.337,0,0,0-.724,2.462v1.587a.723.723,0,1,0,1.446,0v-1.585a1.337,1.337,0,0,0-.722-2.464Z" transform="translate(-160.338 -274.48)"/></g></svg></a></li>
                                    </ul>
                                </td> 
                            </tr>
                            <tr>
                                <td>10</td>
                                <td>John Doe</td>
                                <td>9876543210</td>
                                <td>username@gmail.com</td>
                                <td class="text-center">
                                 <ul class="table-controls">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="View"><svg xmlns="http://www.w3.org/2000/svg" width="16.2" height="10.325" viewBox="0 0 16.2 10.325">
                                                    <defs>
                                                        <style>
                                                            .view {
                                                                fill: #0d004c;
                                                            }
                                                        </style>
                                                    </defs>
                                                    <path class="view" d="M8.1,103.16c-4.4,0-7.853-4.65-8-4.848a.535.535,0,0,1,0-.63c.145-.2,3.593-4.847,8-4.847s7.852,4.65,8,4.848a.534.534,0,0,1,0,.63C15.955,98.511,12.507,103.16,8.1,103.16ZM1.217,98c.832,1.009,3.641,4.095,6.886,4.095S14.158,99.008,14.989,98C14.157,96.989,11.347,93.9,8.1,93.9S2.048,96.988,1.217,98Z" transform="translate(-0.003 -92.835)" />
                                                    <path class="view" d="M157.929,161.134a3.2,3.2,0,1,1,3.2-3.2A3.208,3.208,0,0,1,157.929,161.134Zm0-5.341a2.136,2.136,0,1,0,2.136,2.136A2.139,2.139,0,0,0,157.929,155.793Z" transform="translate(-149.829 -152.767)" />
                                                </svg></a> </li>
                                    </ul>
                                </td>
                                <td class="text-center">
                                    <ul class="table-controls d-flex align-items-center">
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Edit"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20.078" viewBox="0 0 16 20.078"><defs><style>.lock-red{fill:#e95252;}</style></defs><g transform="translate(-52)"><path class="lock-red" d="M65.647,7.373H64.234V4.148a4.236,4.236,0,0,0-8.471,0V7.373h-1.41A2.356,2.356,0,0,0,52,9.725v8a2.356,2.356,0,0,0,2.353,2.353H65.647A2.356,2.356,0,0,0,68,17.725v-8A2.356,2.356,0,0,0,65.647,7.373ZM57.332,4.148a2.668,2.668,0,0,1,5.333,0V7.373H57.332V4.148Zm9.1,13.578a.785.785,0,0,1-.784.784H54.353a.785.785,0,0,1-.784-.784v-8a.785.785,0,0,1,.784-.784H65.647a.785.785,0,0,1,.784.784Z" transform="translate(0 0)"/><path class="lock-red" d="M220.879,286h0A1.879,1.879,0,0,0,219,287.879h0a1.877,1.877,0,0,0,.861,1.579v2.229a1.016,1.016,0,1,0,2.031,0V289.46a1.877,1.877,0,0,0,.865-1.582h0A1.879,1.879,0,0,0,220.879,286Z" transform="translate(-160.879 -275.933)"/></g></svg></a></li>
                                        <li><a href="javascript:void(0);" data-toggle="tooltip" data-placement="top" title="Delete"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="20.078" viewBox="0 0 16 20.078"><defs><style>.lock-blue{fill:#6381a7;}</style></defs><g transform="translate(-52)"><path class="lock-blue" d="M65.647,7.373H57.332V4.148a2.668,2.668,0,0,1,5.333,0v1.5h1.569v-1.5a4.236,4.236,0,0,0-8.471,0V7.373h-1.41A2.356,2.356,0,0,0,52,9.725v8a2.356,2.356,0,0,0,2.353,2.353H65.647A2.356,2.356,0,0,0,68,17.725v-8A2.356,2.356,0,0,0,65.647,7.373Zm.784,10.353a.785.785,0,0,1-.784.784H54.353a.785.785,0,0,1-.784-.784v-8a.785.785,0,0,1,.784-.784H65.647a.785.785,0,0,1,.784.784Z" transform="translate(0 0)"/><path class="lock-blue" d="M220.338,286h0a1.337,1.337,0,0,0-.724,2.462v1.587a.723.723,0,1,0,1.446,0v-1.585a1.337,1.337,0,0,0-.722-2.464Z" transform="translate(-160.338 -274.48)"/></g></svg></a></li>
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