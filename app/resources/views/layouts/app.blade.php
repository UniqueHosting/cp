<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <!-- Fevicon -->
        <link rel="shortcut icon" href="{{URL::asset('assets/images/favicon.ico')}}">
        <!-- Start css -->
        <!-- Apex css -->
        <link href="{{URL::asset('assets/plugins/apexcharts/apexcharts.css')}}" rel="stylesheet">
        <!-- jvectormap css -->
        <link href="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.css')}}" rel="stylesheet">
        <!-- Slick css -->
        <link href="{{URL::asset('assets/plugins/slick/slick.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/plugins/slick/slick-theme.css')}}" rel="stylesheet">
        <!-- Switchery css -->
        <link href="{{URL::asset('assets/plugins/switchery/switchery.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('assets/css/bootstrap.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('assets/css/icons.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('assets/css/flag-icon.min.css')}}" rel="stylesheet" type="text/css">
        <link href="{{URL::asset('assets/css/style.css')}}" rel="stylesheet" type="text/css">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>

    <body class="vertical-layout">
        <div id="infobar-settings-sidebar" class="infobar-settings-sidebar">
            <div class="infobar-settings-sidebar-head d-flex w-100 justify-content-between">
                <h4>Settings</h4><a href="javascript:void(0)" id="infobar-settings-close" class="infobar-settings-close"><img src="{{URL::asset('assets/images/svg-icon/close.svg')}}" class="img-fluid menu-hamburger-close" alt="close"></a>
            </div>
            <div class="infobar-settings-sidebar-body">
                <div class="custom-mode-setting">
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">New Order Notification</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-first" checked /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Low Stock Alerts</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-second" checked /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Vacation Mode</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-third" /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Order Tracking</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fourth" checked /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Newsletter Subscription</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-fifth" checked /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Show Review</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-sixth" /></div>
                    </div>
                    <div class="row align-items-center pb-3">
                        <div class="col-8"><h6 class="mb-0">Enable Wallet</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-seventh" checked /></div>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-8"><h6 class="mb-0">Sales Report</h6></div>
                        <div class="col-4 text-right"><input type="checkbox" class="js-switch-setting-eightth" checked /></div>
                    </div>
                </div>
                <div class="custom-layout-setting">
                    <div class="row align-items-center pb-3">
                        <div class="col-12">
                            <h6 class="mb-3">Select Account</h6>
                        </div>
                        <div class="col-6">
                            <div class="account-box active">
                                <img src="{{URL::asset('assets/images/users/boy.svg')}}" class="img-fluid" alt="user">
                                <h5>John</h5>
                                <p>CEO</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="account-box">
                                <img src="{{URL::asset('assets/images/users/women.svg')}}" class="img-fluid" alt="user">
                                <h5>Kate</h5>
                                <p>COO</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="account-box">
                                <img src="{{URL::asset('assets/images/users/men.svg')}}" class="img-fluid" alt="user">
                                <h5>Mark</h5>
                                <p>MD</p>
                            </div>
                        </div>
                        <div class="col-6">
                            <div class="account-box">
                                <p class="dash-analytic-icon"><i class="feather icon-plus font-35"></i></p>
                                <h5>Add</h5>
                                <p>ACCOUNT</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="infobar-settings-sidebar-overlay"></div>
        <div id="containerbar">
            <div class="leftbar">
                <div class="sidebar">
                    <div class="navigationbar">
                        <!-- <div class="vertical-menu-icon">
                            <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                                <div class="logobar">
                                    <a href="index.html" class="logo logo-small"><img src="assets/images/small_logo.svg" class="img-fluid" alt="logo"></a>
                                </div>
                                <a class="nav-link active" id="v-pills-crm-tab" data-toggle="pill" href="#v-pills-crm" role="tab" aria-controls="v-pills-crm" aria-selected="true"><img src="assets/images/svg-icon/crm.svg" class="img-fluid" alt="Control Panel" data-toggle="tooltip" data-placement="top" title="Control Panel"></a>
                                <a class="nav-link" id="v-pills-ecommerce-tab" data-toggle="pill" href="#v-pills-ecommerce" role="tab" aria-controls="v-pills-ecommerce" aria-selected="false"><img src="assets/images/svg-icon/ecommerce.svg" class="img-fluid" alt="eCommerce" data-toggle="tooltip" data-placement="top" title="eCommerce"></a>
                                <a class="nav-link" id="v-pills-hospital-tab" data-toggle="pill" href="#v-pills-hospital" role="tab" aria-controls="v-pills-hospital" aria-selected="false"><img src="assets/images/svg-icon/hospital.svg" class="img-fluid" alt="Hospital" data-toggle="tooltip" data-placement="top" title="Hospital"></a>
                                <a class="nav-link" id="v-pills-uikits-tab" data-toggle="pill" href="#v-pills-uikits" role="tab" aria-controls="v-pills-uikits" aria-selected="false"><img src="assets/images/svg-icon/ui-kits.svg" class="img-fluid" alt="UI Kits" data-toggle="tooltip" data-placement="top" title="UI Kits"></a>
                                <a class="nav-link" id="v-pills-pages-tab" data-toggle="pill" href="#v-pills-pages" role="tab" aria-controls="v-pills-pages" aria-selected="false"><img src="assets/images/svg-icon/pages.svg" class="img-fluid" alt="Pages" data-toggle="tooltip" data-placement="top" title="Pages"></a>
                            </div>
                        </div> -->
                        <div class="vertical-menu-detail">
                            <div class="logobar">
                                <a href="#" class="logo logo-large"><strong>Unique Hosting</strong></a>
                            </div>
                            <div class="tab-content" id="v-pills-tabContent">
                                <div class="tab-pane fade show active" id="v-pills-crm" role="tabpanel" aria-labelledby="v-pills-crm-tab">
                                    <ul class="vertical-menu">
                                      <li><h5 class="menu-title">Algemeen</h5></li>
                                      <li><a href="{{route('dashboard')}}"><i class="fa fa-area-chart"></i>Dashboard</a></li>
                                      <li><a href="#"><i class="fa fa-cloud"></i>Mijn hosting</a></li>
                                      <li><a href="#"><i class="fa fa-address-card"></i>Mijn domeinnamen</a></li>
                                      <li><a href="#"><i class="fa fa-suitcase"></i>Mijn diensten</a></li>
                                      <li><h5 class="menu-title">Diensten</h5></li>
                                      <li><a href="#"><i class="fa fa-server"></i>Dedicated server</a></li>
                                      <li><a href="#"><i class="fa fa-mixcloud"></i>VPS</a></li>
                                      <li><a href="#"><i class="fa fa-globe"></i>Shared hosting</a></li>
                                      <li><a href="#"><i class="fa fa-address-card-o"></i>Domeinnamen</a></li>
                                      <li><a href="#"><i class="fa fa-unlock-alt"></i>SSL</a></li>
                                      <li><a href="#"><i class="fa fa-file-text"></i>Licenties</a></li>
                                      <li><a href="#"><i class="fa fa-th-list"></i>Overig</a></li>
                                      <li><h5 class="menu-title">Account</h5></li>
                                      <li><a href="{{route('user.show')}}"><i class="fa fa-user"></i>Mijn Account</a></li>
                                      <li><a href="#"><i class="fa fa-bell"></i>Notificaties</a></li>
                                      <li><a href="#"><i class="fa fa-user-secret"></i>Privacy</a></li>
                                    </ul>
                                </div>
                                <!-- <div class="tab-pane fade" id="v-pills-ecommerce" role="tabpanel" aria-labelledby="v-pills-ecommerce-tab">
                                    <ul class="vertical-menu">
                                        <li><h5 class="menu-title">eCommerce</h5></li>
                                        <li><a href="dashboard-ecommerce.html"><img src="assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard">Dashboard</a></li>
                                        <li>
                                            <a href="javaScript:void();">
                                              <img src="assets/images/svg-icon/frontend.svg" class="img-fluid" alt="frontend"><span>Front End</span><i class="feather icon-chevron-right"></i>
                                            </a>
                                            <ul class="vertical-submenu">
                                                <li><a href="ecommerce-shop.html">Shop</a></li>
                                                <li><a href="ecommerce-single-product.html">Single Product</a></li>
                                                <li><a href="ecommerce-cart.html">Cart</a></li>
                                                <li><a href="ecommerce-checkout.html">Checkout</a></li>
                                                <li><a href="ecommerce-thankyou.html">Thank You</a></li>
                                                <li><a href="ecommerce-myaccount.html">My Account</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javaScript:void();">
                                              <img src="assets/images/svg-icon/backend.svg" class="img-fluid" alt="backend"><span>Back End</span><i class="feather icon-chevron-right"></i>
                                            </a>
                                            <ul class="vertical-submenu">
                                                <li><a href="ecommerce-product-list.html">Product List</a></li>
                                                <li><a href="ecommerce-product-detail.html">Product Detail</a></li>
                                                <li><a href="ecommerce-order-list.html">Order List</a></li>
                                                <li><a href="ecommerce-order-detail.html">Order Detail</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="v-pills-hospital" role="tabpanel" aria-labelledby="v-pills-hospital-tab">
                                    <ul class="vertical-menu">
                                        <li><h5 class="menu-title">Hospital</h5></li>
                                        <li><a href="dashboard-hospital.html"><img src="assets/images/svg-icon/dashboard.svg" class="img-fluid" alt="dashboard">Dashboard</a></li>
                                        <li><a href="hospital-appointment.html"><img src="assets/images/svg-icon/calender.svg" class="img-fluid" alt="appointments">Appointments</a></li>
                                        <li><a href="hospital-doctor.html"><img src="assets/images/svg-icon/doctor.svg" class="img-fluid" alt="doctors">Doctors</a></li>
                                        <li><a href="hospital-patient.html"><img src="assets/images/svg-icon/customers.svg" class="img-fluid" alt="patients">Patients</a></li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="v-pills-uikits" role="tabpanel" aria-labelledby="v-pills-uikits-tab">
                                    <ul class="vertical-menu">
                                        <li><h5 class="menu-title">UI Kits</h5></li>
                                        <li>
                                            <a href="javaScript:void();">
                                              <img src="assets/images/svg-icon/basic.svg" class="img-fluid" alt="basic"><span>Basic UI</span><i class="feather icon-chevron-right"></i>
                                            </a>
                                            <ul class="vertical-submenu">
                                                <li><a href="basic-ui-kits-alerts.html">Alerts</a></li>
                                                <li><a href="basic-ui-kits-badges.html">Badges</a></li>
                                                <li><a href="basic-ui-kits-buttons.html">Buttons</a></li>
                                                <li><a href="basic-ui-kits-cards.html">Cards</a></li>
                                                <li><a href="basic-ui-kits-carousel.html">Carousel</a></li>
                                                <li><a href="basic-ui-kits-collapse.html">Collapse</a></li>
                                                <li><a href="basic-ui-kits-dropdowns.html">Dropdowns</a></li>
                                                <li><a href="basic-ui-kits-embeds.html">Embeds</a></li>
                                                <li><a href="basic-ui-kits-grids.html">Grids</a></li>
                                                <li><a href="basic-ui-kits-images.html">Images</a></li>
                                                <li><a href="basic-ui-kits-media.html">Media</a></li>
                                                <li><a href="basic-ui-kits-modals.html">Modals</a></li>
                                                <li><a href="basic-ui-kits-paginations.html">Paginations</a></li>
                                                <li><a href="basic-ui-kits-popovers.html">Popovers</a></li>
                                                <li><a href="basic-ui-kits-progressbars.html">Progress Bars</a></li>
                                                <li><a href="basic-ui-kits-spinners.html">Spinners</a></li>
                                                <li><a href="basic-ui-kits-tabs.html">Tabs</a></li>
                                                <li><a href="basic-ui-kits-toasts.html">Toasts</a></li>
                                                <li><a href="basic-ui-kits-tooltips.html">Tooltips</a></li>
                                                <li><a href="basic-ui-kits-typography.html">Typography</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javaScript:void();">
                                              <img src="assets/images/svg-icon/advanced.svg" class="img-fluid" alt="advanced"><span>Advanced UI</span><i class="feather icon-chevron-right"></i>
                                            </a>
                                            <ul class="vertical-submenu">
                                                <li><a href="advanced-ui-kits-image-crop.html">Image Crop</a></li>
                                                <li><a href="advanced-ui-kits-jquery-confirm.html">jQuery Confirm</a></li>
                                                <li><a href="advanced-ui-kits-nestable.html">Nestable</a></li>
                                                <li><a href="advanced-ui-kits-pnotify.html">Pnotify</a></li>
                                                <li><a href="advanced-ui-kits-range-slider.html">Range Slider</a></li>
                                                <li><a href="advanced-ui-kits-ratings.html">Ratings</a></li>
                                                <li><a href="advanced-ui-kits-session-timeout.html">Session Timeout</a></li>
                                                <li><a href="advanced-ui-kits-sweet-alerts.html">Sweet Alerts</a></li>
                                                <li><a href="advanced-ui-kits-switchery.html">Switchery</a></li>
                                                <li><a href="advanced-ui-kits-toolbar.html">Toolbar</a></li>
                                                <li><a href="advanced-ui-kits-tour.html">Tour</a></li>
                                                <li><a href="advanced-ui-kits-treeview.html">Tree View</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javaScript:void();">
                                              <img src="assets/images/svg-icon/apps.svg" class="img-fluid" alt="apps"><span>Apps</span><i class="feather icon-chevron-right"></i>
                                            </a>
                                            <ul class="vertical-submenu">
                                                <li><a href="apps-calender.html">Calender</a></li>
                                                <li><a href="apps-chat.html">Chat</a></li>
                                                <li>
                                                    <a href="javaScript:void();">Email<i class="feather icon-chevron-right"></i></a>
                                                    <ul class="vertical-submenu">
                                                        <li><a href="apps-email-inbox.html">Inbox</a></li>
                                                        <li><a href="apps-email-open.html">Open</a></li>
                                                        <li><a href="apps-email-compose.html">Compose</a></li>
                                                    </ul>
                                                </li>
                                                <li><a href="apps-kanban-board.html">Kanban Board</a></li>
                                                <li><a href="apps-onboarding-screens.html">Onboarding Screens</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javaScript:void();">
                                                <img src="assets/images/svg-icon/forms.svg" class="img-fluid" alt="forms"><span>Forms</span><i class="feather icon-chevron-right"></i>
                                            </a>
                                            <ul class="vertical-submenu">
                                                <li><a href="form-inputs.html">Basic Elements</a></li>
                                                <li><a href="form-groups.html">Groups</a></li>
                                                <li><a href="form-layouts.html">Layouts</a></li>
                                                <li><a href="form-colorpickers.html">Color Pickers</a></li>
                                                <li><a href="form-datepickers.html">Date Pickers</a></li>
                                                <li><a href="form-editors.html">Editors</a></li>
                                                <li><a href="form-file-uploads.html">File Uploads</a></li>
                                                <li><a href="form-input-mask.html">Input Mask</a></li>
                                                <li><a href="form-maxlength.html">MaxLength</a></li>
                                                <li><a href="form-selects.html">Selects</a></li>
                                                <li><a href="form-touchspin.html">Touchspin</a></li>
                                                <li><a href="form-validations.html">Validations</a></li>
                                                <li><a href="form-wizards.html">Wizards</a></li>
                                                <li><a href="form-xeditable.html">X-editable</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javaScript:void();">
                                                <img src="assets/images/svg-icon/charts.svg" class="img-fluid" alt="charts"><span>Charts</span><i class="feather icon-chevron-right"></i>
                                            </a>
                                            <ul class="vertical-submenu">
                                                <li><a href="chart-apex.html">Apex</a></li>
                                                <li><a href="chart-c3.html">C3</a></li>
                                                <li><a href="chart-chartistjs.html">Chartist</a></li>
                                                <li><a href="chart-chartjs.html">Chartjs</a></li>
                                                <li><a href="chart-flot.html">Flot</a></li>
                                                <li><a href="chart-knob.html">Knob</a></li>
                                                <li><a href="chart-morris.html">Morris</a></li>
                                                <li><a href="chart-piety.html">Piety</a></li>
                                                <li><a href="chart-sparkline.html">Sparkline</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javaScript:void();">
                                                <img src="assets/images/svg-icon/icons.svg" class="img-fluid" alt="icons"><span>Icons</span><i class="feather icon-chevron-right"></i>
                                            </a>
                                            <ul class="vertical-submenu">
                                                <li><a href="icon-svg.html">SVG</a></li>
                                                <li><a href="icon-dripicons.html">Dripicons</a></li>
                                                <li><a href="icon-feather.html">Feather</a></li>
                                                <li><a href="icon-flag.html">Flag</a></li>
                                                <li><a href="icon-font-awesome.html">Font Awesome</a></li>
                                                <li><a href="icon-ionicons.html">Ion</a></li>
                                                <li><a href="icon-line-awesome.html">Line Awesome</a></li>
                                                <li><a href="icon-material-design.html">Material Design</a></li>
                                                <li><a href="icon-simple-line.html">Simple Line</a></li>
                                                <li><a href="icon-socicon.html">Socicon</a></li>
                                                <li><a href="icon-themify.html">Themify</a></li>
                                                <li><a href="icon-typicons.html">Typicons</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javaScript:void();">
                                                <img src="assets/images/svg-icon/tables.svg" class="img-fluid" alt="tables"><span>Tables</span><i class="feather icon-chevron-right"></i>
                                            </a>
                                            <ul class="vertical-submenu">
                                                <li><a href="table-bootstrap.html">Bootstrap</a></li>
                                                <li><a href="table-datatable.html">Datatable</a></li>
                                                <li><a href="table-editable.html">Editable</a></li>
                                                <li><a href="table-footable.html">Foo</a></li>
                                                <li><a href="table-rwdtable.html">RWD</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javaScript:void();">
                                                <img src="assets/images/svg-icon/maps.svg" class="img-fluid" alt="maps"><span>Maps</span><i class="feather icon-chevron-right"></i>
                                            </a>
                                            <ul class="vertical-submenu">
                                                <li><a href="map-google.html">Google</a></li>
                                                <li><a href="map-vector.html">Vector</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="widgets.html">
                                                <img src="assets/images/svg-icon/widgets.svg" class="img-fluid" alt="widgets"><span>Widgets</span><span class="badge badge-success pull-right">New</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="tab-pane fade" id="v-pills-pages" role="tabpanel" aria-labelledby="v-pills-pages-tab">
                                    <ul class="vertical-menu">
                                        <li><h5 class="menu-title">Pages</h5></li>
                                        <li>
                                            <a href="javaScript:void();">
                                              <img src="assets/images/svg-icon/basic_page.svg" class="img-fluid" alt="basic_page"><span>Basic</span><i class="feather icon-chevron-right"></i>
                                            </a>
                                            <ul class="vertical-submenu">
                                                <li><a href="page-starter.html">Starter</a></li>
                                                <li><a href="page-blog.html">Blog</a></li>
                                                <li><a href="page-faq.html">FAQ</a></li>
                                                <li><a href="page-gallery.html">Gallery</a></li>
                                                <li><a href="page-invoice.html">Invoice</a></li>
                                                <li><a href="page-pricing.html">Pricing</a></li>
                                                <li><a href="page-timeline.html">Timeline</a></li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a href="javaScript:void();">
                                              <img src="assets/images/svg-icon/authentication.svg" class="img-fluid" alt="authentication"><span>Authentications</span><i class="feather icon-chevron-right"></i>
                                            </a>
                                            <ul class="vertical-submenu">
                                                <li><a href="user-login.html">Login</a></li>
                                                <li><a href="user-register.html">Register</a></li>
                                                <li><a href="user-forgotpsw.html">Forgot Password</a></li>
                                                <li><a href="user-lock-screen.html">Lock Screen</a></li>
                                                <li><a href="error-comingsoon.html">Coming Soon</a></li>
                                                <li><a href="error-maintenance.html">Maintenance</a></li>
                                                <li><a href="error-404.html">Error 404</a></li>
                                                <li><a href="error-500.html">Error 500</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </div> -->
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="rightbar">
                @include('layouts.navigation')

                {{ $slot }}

                <div class="footerbar">
                    <footer class="footer">
                        <p class="mb-0">© 2021 Unique Hosting B.V. - All Rights Reserved.</p>
                    </footer>
                </div>
            </div>
        </div>
        <!-- End Containerbar -->
        <!-- Start js -->
        <script src="{{URL::asset('assets/js/jquery.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/popper.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/bootstrap.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/modernizr.min.js')}}"></script>
        <script src="{{URL::asset('assets/js/detect.js')}}"></script>
        <script src="{{URL::asset('assets/js/jquery.slimscroll.js')}}"></script>
        <script src="{{URL::asset('assets/js/vertical-menu.js')}}"></script>
        <!-- Switchery js -->
        <script src="{{URL::asset('assets/plugins/switchery/switchery.min.js')}}"></script>
        <!-- Apex js -->
        <script src="{{URL::asset('assets/plugins/apexcharts/apexcharts.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/apexcharts/irregular-data-series.js')}}"></script>
        <!-- Vector Maps js -->
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-2.0.2.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
        <!-- Editable Tabels -->
        <script src="{{URL::asset('assets/js/custom/custom-table-editable.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/tabledit/jquery.tabledit.js')}}"></script>
        <!-- Slick js -->
        <script src="{{URL::asset('assets/plugins/slick/slick.min.js')}}"></script>
        <!-- Custom Dashboard js -->
        <script src="{{URL::asset('assets/js/custom/custom-dashboard.js')}}"></script>
        <!-- Core js -->
        <script src="{{URL::asset('assets/js/core.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/bootstrap-xeditable/js/bootstrap-editable.min.js')}}"></script>
        <script src="{{URL::asset('assets/plugins/moment/moment.js')}}"></script>
        <script src="{{URL::asset('assets/js/custom/custom-form-xeditable.js')}}"></script>

        <!-- End js -->
    </body>
</html>
