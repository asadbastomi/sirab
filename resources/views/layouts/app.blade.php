{
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta name="description" content="Crush it Able The most popular Admin Dashboard template and ui kit">
    <meta name="author" content="PuffinTheme the theme designer">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'SIRAB') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link rel="icon" href="favicon.ico" type="image/x-icon" />

    <!-- Bootstrap Core and vandor -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/bootstrap/css/bootstrap.min.css') }}" />

    <!-- Plugins css -->
    <link rel="stylesheet" href="{{ asset('assets/plugins/charts-c3/c3.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/jvectormap/jvectormap-2.0.3.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/plugins/dropify/css/dropify.min.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/plugins/parsleyjs/css/parsley.css') }}">

    <!-- Core css -->
    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/css/theme1.css') }}" id="stylesheet" />

    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
    {{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" /> --}}
    @stack('css')

</head>

<body class="font-opensans">

    <!-- Page Loader -->
    <div class="page-loader-wrapper">
        <div class="loader">
        </div>
    </div>

    <!-- Start main html -->
    <div id="main_content">

        <!-- Small icon top menu -->
        <div id="header_top" class="header_top">
            <div class="container">
                <div class="hleft">
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="nav-link user_btn"><img class="avatar"
                                src="../assets/images/user.png" alt="" /></a>
                        <a href="page-search.html" class="nav-link icon"><i class="fa fa-search"></i></a>
                        <a href="index.html" class="nav-link icon"><i class="fa fa-home"></i></a>
                        <a href="app-email.html" class="nav-link icon app_inbox"><i class="fa fa-envelope"></i></a>
                        <a href="app-chat.html" class="nav-link icon xs-hide"><i class="fa fa-comments"></i></a>
                        <a href="app-filemanager.html" class="nav-link icon app_file xs-hide"><i
                                class="fa fa-folder"></i></a>
                    </div>
                </div>
                <div class="hright">
                    <div class="dropdown">
                        <a href="javascript:void(0)" class="nav-link icon settingbar"><i class="fa fa-bell"></i></a>
                        <a href="javascript:void(0)" class="nav-link icon menu_toggle"><i class="fa fa-navicon"></i></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Notification and  Activity-->
        <div id="rightsidebar" class="right_sidebar">
            <a href="javascript:void(0)" class="p-3 settingbar float-right"><i class="fa fa-close"></i></a>
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#notification"
                        aria-expanded="true">Notification</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#activity"
                        aria-expanded="false">Activity</a></li>
            </ul>
            <div class="tab-content">
                <div role="tabpanel" class="tab-pane   active" id="notification" aria-expanded="true">
                    <ul class="list-unstyled feeds_widget">
                        <li>
                            <div class="feeds-left"><i class="fa fa-check"></i></div>
                            <div class="feeds-body">
                                <h4 class="title text-danger">Issue Fixed</h4>
                                <small>WE have fix all Design bug with Responsive</small>
                                <small class="text-muted">11:05</small>
                            </div>
                        </li>
                        <li>
                            <div class="feeds-left"><i class="fa fa-user"></i></div>
                            <div class="feeds-body">
                                <h4 class="title">New User</h4>
                                <small>I feel great! Thanks team</small>
                                <small class="text-muted">10:45</small>
                            </div>
                        </li>
                        <li>
                            <div class="feeds-left"><i class="fa fa-thumbs-o-up"></i></div>
                            <div class="feeds-body">
                                <h4 class="title">7 New Feedback</h4>
                                <small>It will give a smart finishing to your site</small>
                                <small class="text-muted">Today</small>
                            </div>
                        </li>
                        <li>
                            <div class="feeds-left"><i class="fa fa-question-circle"></i></div>
                            <div class="feeds-body">
                                <h4 class="title text-warning">Server Warning</h4>
                                <small>Your connection is not private</small>
                                <small class="text-muted">10:50</small>
                            </div>
                        </li>
                        <li>
                            <div class="feeds-left"><i class="fa fa-shopping-cart"></i></div>
                            <div class="feeds-body">
                                <h4 class="title">7 New Orders</h4>
                                <small>You received a new oder from Tina.</small>
                                <small class="text-muted">11:35</small>
                            </div>
                        </li>
                    </ul>
                </div>
                <div role="tabpanel" class="tab-pane  " id="activity" aria-expanded="false">
                    <ul class="new_timeline mt-3">
                        <li>
                            <div class="bullet pink"></div>
                            <div class="time">11:00am</div>
                            <div class="desc">
                                <h3>Attendance</h3>
                                <h4>Computer Class</h4>
                            </div>
                        </li>
                        <li>
                            <div class="bullet pink"></div>
                            <div class="time">11:30am</div>
                            <div class="desc">
                                <h3>Added an interest</h3>
                                <h4>“Volunteer Activities”</h4>
                            </div>
                        </li>
                        <li>
                            <div class="bullet green"></div>
                            <div class="time">12:00pm</div>
                            <div class="desc">
                                <h3>Developer Team</h3>
                                <h4>Hangouts</h4>
                                <ul class="list-unstyled team-info margin-0 p-t-5">
                                    <li><img src="../assets/images/xs/avatar1.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar2.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar3.jpg" alt="Avatar"></li>
                                    <li><img src="../assets/images/xs/avatar4.jpg" alt="Avatar"></li>
                                </ul>
                            </div>
                        </li>
                        <li>
                            <div class="bullet green"></div>
                            <div class="time">2:00pm</div>
                            <div class="desc">
                                <h3>Responded to need</h3>
                                <a href="javascript:void(0)">“In-Kind Opportunity”</a>
                            </div>
                        </li>
                        <li>
                            <div class="bullet orange"></div>
                            <div class="time">1:30pm</div>
                            <div class="desc">
                                <h3>Lunch Break</h3>
                            </div>
                        </li>
                        <li>
                            <div class="bullet green"></div>
                            <div class="time">2:38pm</div>
                            <div class="desc">
                                <h3>Finish</h3>
                                <h4>Go to Home</h4>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- start User detail -->
        <div class="user_div">
            <h5 class="brand-name mb-4">User Crush<a href="javascript:void(0)" class="user_btn"><i
                        class="icon-close"></i></a></h5>
            <div class="card">
                <img class="card-img-top" src="../assets/images/gallery/6.jpg" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Daniel Kristeen</h5>
                    <p class="card-text">795 Folsom Ave, Suite 600 San Francisco, 94107</p>
                    <div class="row">
                        <div class="col-4">
                            <h6><strong>3265</strong></h6>
                            <small>Post</small>
                        </div>
                        <div class="col-4">
                            <h6><strong>1358</strong></h6>
                            <small>Followers</small>
                        </div>
                        <div class="col-4">
                            <h6><strong>10K</strong></h6>
                            <small>Likes</small>
                        </div>
                    </div>
                </div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item">michael@example.com</li>
                    <li class="list-group-item">+ 202-555-2828</li>
                    <li class="list-group-item">October 22th, 1990</li>
                </ul>
                <div class="card-body">
                    <a href="javascript:void(0);" class="card-link">View More</a>
                    <a href="javascript:void(0);" class="card-link">Another link</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-group">
                        <label class="d-block">Total Income<span class="float-right">77%</span></label>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-blue" role="progressbar" aria-valuenow="77"
                                aria-valuemin="0" aria-valuemax="100" style="width: 77%;"></div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="d-block">Total Expenses <span class="float-right">50%</span></label>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-danger" role="progressbar" aria-valuenow="50"
                                aria-valuemin="0" aria-valuemax="100" style="width: 50%;"></div>
                        </div>
                    </div>
                    <div class="form-group mb-0">
                        <label class="d-block">Gross Profit <span class="float-right">23%</span></label>
                        <div class="progress progress-xs">
                            <div class="progress-bar bg-green" role="progressbar" aria-valuenow="23"
                                aria-valuemin="0" aria-valuemax="100" style="width: 23%;"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="d-block">Storage <span class="float-right">77%</span></label>
                <div class="progress progress-sm">
                    <div class="progress-bar" role="progressbar" aria-valuenow="77" aria-valuemin="0"
                        aria-valuemax="100" style="width: 77%;"></div>
                </div>
                <button type="button" class="btn btn-primary btn-block mt-3">Upgrade Storage</button>
            </div>
        </div>

        <!-- start Main menu -->
        <div id="left-sidebar" class="sidebar">
            <div class="d-flex justify-content-between brand_name">
                <h5 class="brand-name">SIRAB</h5>
                <div class="theme_btn">
                    <a class="theme1" data-toggle="tooltip" title="Theme Radical" href="#"
                        onclick="setStyleSheet('../assets/css/theme1.css', 0);"></a>
                    <a class="theme2" data-toggle="tooltip" title="Theme Turmeric" href="#"
                        onclick="setStyleSheet('../assets/css/theme2.css', 0);"></a>
                    <a class="theme3" data-toggle="tooltip" title="Theme Caribbean" href="#"
                        onclick="setStyleSheet('../assets/css/theme3.css', 0);"></a>
                    <a class="theme4" data-toggle="tooltip" title="Theme Cascade" href="#"
                        onclick="setStyleSheet('../assets/css/theme4.css', 0);"></a>
                </div>
            </div>
            <div class="input-icon">
                <span class="input-icon-addon">
                    <i class="fe fe-search"></i>
                </span>
                <input type="text" class="form-control" placeholder="Search...">
            </div>
            <ul class="nav nav-tabs b-none">
                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#all-tab"><i
                            class="fa fa-list-ul"></i> All</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#app-tab">Elements</a></li>
                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#setting-tab">Settings</a></li>
            </ul>
            <div class="tab-content">
                <div class="tab-pane fade active show" id="all-tab">
                    <nav class="sidebar-nav">
                        <ul class="metismenu ci-effect-1">
                            @switch(useGetAuth()->role)
                                @case('superadmin')
                                @case('admin')
                                    <li class="g_heading">Dashboard</li>
                                    <li class="active">
                                        <a href="javascript:void(0)" class="has-arrow arrow-b"><i class="icon-home"></i><span
                                                data-hover="MasterData">Master Data</span></a>
                                        <ul>
                                            <li><a href="index2.html"><span data-hover="SKPD">SKPD</span></a></li>
                                            <li><a href="index3.html"><span data-hover="Petugas Penerima">Petugas
                                                        Penerima</span></a></li>

                                        </ul>
                                    </li>
                                    <li class="g_heading">User</li>
                                    <li>
                                        <a href="javascript:void(0)" class="has-arrow arrow-b"><i class="icon-user"></i><span
                                                data-hover="DataUser">Data User</span></a>
                                        <ul>
                                            <li><a href="{{ route('admin.user.index', 'superadmin') }}"><span
                                                        data-hover="Superadmin">Superadmin</span></a>
                                            </li>
                                            <li><a href="{{ route('admin.user.index', 'admin') }}"><span
                                                        data-hover="Admin">Admin</span></a>
                                            </li>
                                            <li><a href="{{ route('admin.user.index', 'skpd') }}"><span
                                                        data-hover="UserSkpd">User
                                                        Skpd</span></a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="g_heading">Transaksi</li>
                                    {{-- <li><a href="{{ route('skpd.ticket.index') }}"><i class="icon-speech"></i><span
                                                data-hover="Tiket">Tiket</span></a></li> --}}
                                @break

                                @case('user')
                                    <li class="g_heading">Data Pemohon</li>
                                    <li><a href="{{ route('user.biodata.index') }}"><i class="icon-speech"></i><span
                                                data-hover="Biodata">Biodata Pemohon</span></a></li>
                                    <li class="g_heading">Transaksi</li>
                                    {{-- <li><a href="{{ route('skpd.ticket.index') }}"><i class="icon-speech"></i><span
                                                data-hover="Tiket">Tiket</span></a></li> --}}
                                @break

                                @default
                            @endswitch


                            {{-- <li><a href="app-calendar.html"><i class="icon-calendar"></i><span
                                        data-hover="Surat Keluar">Surat Keluar</span></a></li>
                            <li><a href="app-contact.html"><i class="icon-notebook"></i><span
                                        data-hover="Surat Umum">Surat Umum</span></a></li>
                            <li><a href="app-blog.html"><i class="icon-globe"></i><span
                                        data-hover="Surat Verifikasi">Surat Verifikasi</span></a></li>
                            <li><a href="app-filemanager.html"><i class="icon-folder-alt"></i><span
                                        data-hover="Surat Undangan">Surat Undangan</span></a></li> --}}
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane fade" id="app-tab">
                    <nav class="sidebar-nav">
                        <ul class="metismenu">
                            <li class="g_heading">Components</li>
                            <li><a href="components/typography.html"><i
                                        class="fe fe-type"></i><span>Typography</span></a></li>
                            <li><a href="components/colors.html"><i class="fe fe-feather"></i><span>Colors</span></a>
                            </li>
                            <li><a href="components/alerts.html"><i
                                        class="fe fe-alert-triangle"></i><span>Alerts</span></a></li>
                            <li><a href="components/avatars.html"><i class="fe fe-user"></i><span>Avatars</span></a>
                            </li>
                            <li><a href="components/buttons.html"><i
                                        class="fe fe-toggle-right"></i><span>Buttons</span></a></li>
                            <li><a href="components/breadcrumb.html"><i
                                        class="fe fe-link-2"></i><span>Breadcrumb</span></a></li>
                            <li><a href="components/forms.html"><i class="fe fe-layers"></i><span>Input
                                        group</span></a></li>
                            <li><a href="components/list-group.html"><i class="fe fe-list"></i><span>List
                                        group</span></a></li>
                            <li><a href="components/modal.html"><i class="fe fe-square"></i><span>Modal</span></a>
                            </li>
                            <li><a href="components/pagination.html"><i
                                        class="fe fe-file-text"></i><span>Pagination</span></a></li>
                            <li><a href="components/cards.html"><i class="fe fe-image"></i><span>Cards</span></a></li>
                            <li><a href="components/charts.html"><i
                                        class="fe fe-pie-chart"></i><span>Charts</span></a></li>
                            <li><a href="components/form-components.html"><i
                                        class="fe fe-check-square"></i><span>Form</span></a></li>
                            <li><a href="components/tags.html"><i class="fe fe-tag"></i><span>Tags</span></a></li>
                            <li><a href="javascript:void(0)"><i
                                        class="fe fe-help-circle"></i><span>Documentation</span></a></li>
                            <li><a href="javascript:void(0)"><i class="fe fe-life-buoy"></i><span>Changelog</span></a>
                            </li>
                        </ul>
                    </nav>
                </div>
                <div class="tab-pane fade" id="setting-tab">
                    <div class="mb-4 mt-3">
                        <h6 class="font-14 font-weight-bold text-muted">Font Style</h6>
                        <div class="custom-controls-stacked font_setting">
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font"
                                    value="font-opensans" checked="">
                                <span class="custom-control-label">Open Sans Font</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font"
                                    value="font-montserrat">
                                <span class="custom-control-label">Montserrat Google Font</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="font"
                                    value="font-poppins">
                                <span class="custom-control-label">Poppins Google Font</span>
                            </label>
                        </div>
                    </div>
                    <div class="mb-4">
                        <h6 class="font-14 font-weight-bold text-muted">Dropdown Menu Icon</h6>
                        <div class="custom-controls-stacked arrow_option">
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="marrow" value="arrow-a"
                                    checked="">
                                <span class="custom-control-label">A</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="marrow" value="arrow-b">
                                <span class="custom-control-label">B</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="marrow" value="arrow-c">
                                <span class="custom-control-label">C</span>
                            </label>
                        </div>
                        <h6 class="font-14 font-weight-bold mt-4 text-muted">SubMenu List Icon</h6>
                        <div class="custom-controls-stacked list_option">
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="listicon" value="list-a"
                                    checked="">
                                <span class="custom-control-label">A</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="listicon" value="list-b">
                                <span class="custom-control-label">B</span>
                            </label>
                            <label class="custom-control custom-radio custom-control-inline">
                                <input type="radio" class="custom-control-input" name="listicon" value="list-c">
                                <span class="custom-control-label">C</span>
                            </label>
                        </div>
                    </div>
                    <div>
                        <h6 class="font-14 font-weight-bold mt-4 text-muted">General Settings</h6>
                        <ul class="setting-list list-unstyled mt-1 setting_switch">
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Night Mode</span>
                                    <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input btn-darkmode">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Fix Navbar top</span>
                                    <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input btn-fixnavbar">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Header Dark</span>
                                    <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input btn-pageheader">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Min Sidebar Dark</span>
                                    <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input btn-min_sidebar">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Sidebar Dark</span>
                                    <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input btn-sidebar">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Icon Color</span>
                                    <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input btn-iconcolor">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Gradient Color</span>
                                    <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input btn-gradient">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Box Shadow</span>
                                    <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input btn-boxshadow">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">RTL Support</span>
                                    <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input btn-rtl">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                            <li>
                                <label class="custom-switch">
                                    <span class="custom-switch-description">Box Layout</span>
                                    <input type="checkbox" name="custom-switch-checkbox"
                                        class="custom-switch-input btn-boxlayout">
                                    <span class="custom-switch-indicator"></span>
                                </label>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- start main body part-->
        <div class="page">
            <div id="page_top" class="section-body">
                <div class="container-fluid">
                    <div class="page-header">
                        <div class="left">
                            <h1 class="page-title">@yield('title')</h1>
                        </div>
                        <div class="right">
                            <div class="notification d-flex">
                                <a href="{{ route('profile.edit') }}" class="btn btn-facebook"><i
                                        class="fa fa-user mr-2"></i>Profil</a>
                                <form id="frm-logout" action="{{ route('logout') }}" method="POST">
                                    {{ csrf_field() }}
                                    <button type="submit" class="btn btn-facebook"><i
                                            class="fa fa-power-off mr-2"></i>Sign
                                        Out</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    @yield('nav')
                </div>
            </div>

            @yield('content')

            <div class="section-body">
                <footer class="footer">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 col-sm-12">
                                Copyright © 2024 <a href="#">Diskominfotik Kota
                                    Banjarmasin</a>.
                            </div>

                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </div>


    <!-- jQuery and bootstrtap js -->
    <script src="{{ asset('assets/bundles/lib.vendor.bundle.js') }}"></script>

    <!-- start plugin js file  -->
    <script src="{{ asset('assets/bundles/apexcharts.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/counterup.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/knobjs.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/c3.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/flot.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/jvectormap1.bundle.js') }}"></script>
    <script src="{{ asset('assets/bundles/dataTables.bundle.js') }}"></script>
    <script src="{{ asset('assets/plugins/dropify/js/dropify.min.js') }}"></script>
    <script src="{{ asset('assets/plugins/parsleyjs/js/parsley.min.js') }}"></script>

    <!-- Start core js and page js -->
    <script src="{{ asset('assets/js/core.js') }}"></script>
    <script src="{{ asset('assets/js/page/index.js') }}"></script>
    <script src="{{ asset('assets/js/form/parsleyjs.js') }}"></script>

    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script> --}}
    @include('layouts.modal.destroy')
    @stack('script')
    <script>
        function setStyleSheet(url) {
            var stylesheet = document.getElementById("stylesheet");
            stylesheet.setAttribute('href', url);
        }

        $(document).ready(function() {
            $('.table').DataTable();
            $('.select2').select2();
            $('.dropify').dropify();
        });
    </script>
    {{-- <script>
        @if (session('success'))
            // Display a success toast, with a title
            $(document).ready(function() {
                toastr.success(session('success'))
            });
        @endif

        @if (session('warning'))
            $(document).ready(function() {
                toastr.warning(session('warning'))
            });
        @endif

        @if ($errors->any())

            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}");
            @endforeach
        @endif
    </script> --}}
</body>

</html>
