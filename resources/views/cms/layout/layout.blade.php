<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=Edge">
        <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
        <meta name="description" content="SD82 Main Website">
        <meta name="author" content="Rugie Ann Barrameda">
        <title>CMSD82 | Coast Mountain School District No. 82</title>
        <!-- Favicon-->
        <link rel="icon" href="/nisgaa-icon.png" type="image/x-icon">
    
        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&subset=latin,cyrillic-ext" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet" type="text/css">

        <!-- Bootstrap Core CSS -->
        <link href="/assets/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">

        <!-- Bootstrap Select CSS -->
        <link href="/assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />

        <!-- JQuery DataTable CSS -->
        <link href="/assets/plugins/jquery-datatables/css/dataTables.bootstrap4.css" rel="stylesheet">
        <link href="/assets/plugins/jquery-datatables/css/responsive.bootstrap4.css" rel="stylesheet">

        <!-- Custom CSS -->
        <link href="/cms/css/style.css" rel="stylesheet">
        <link href="/cms/css/themes/theme-blue-grey.css" rel="stylesheet" />
        <link href="/cms/css/custom-backend.css" rel="stylesheet">
        @yield('custom-css')

        <!-- Jquery Core JS -->
        <script src="/assets/plugins/jquery/jquery.min.js"></script>

        <!-- Popper Plugin JS -->
        <script src="/assets/plugins/popper/popper.js"></script>

        <!-- Jquery Validation Plugin CSS -->
        <script src="/assets/plugins/jquery-validation/jquery.validate.js"></script>
    </head>
    <body class="theme-blue-grey">
        <!-- CMS Content -->

        <!-- Page Loader -->
        <div class="page-loader-wrapper">
            <div class="loader">
                <div class="preloader">
                    <div class="spinner-layer pl-blue-grey">
                        <div class="circle-clipper left">
                            <div class="circle"></div>
                        </div>
                        <div class="circle-clipper right">
                            <div class="circle"></div>
                        </div>
                    </div>
                </div>
                <p>Please wait...</p>
            </div>
        </div>
        <!-- END - Page Loader -->

        <!-- Page Sidebar Overlay -->
        <div class="overlay"></div>
        <!-- END - Page Sidebar Overlay -->

        <!-- Page Navbar -->
        <nav class="navbar">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a href="javascript:void(0);" class="bars"></a>
                    <a class="navbar-brand" href="/">SD92 - NISGA'A USER MANAGER</a>
                </div>
                <div class="navbar-signout">
                    <a href="/signout" class="signout"><i class="material-icons">input</i></a>
                </div>
            </div>
        </nav>
        <!-- END - Page Navbar -->

        <!-- Page Sidebar -->
        <section>
            <aside id="leftsidebar" class="sidebar">
                <!-- User Info -->
                <div class="user-info">
                    <div class="info-container">
                        <div class="name" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ $data->userName }}</div>
                        <div class="email">{{ $data->userEmail }}</div>
                    </div>
                </div>
                <!-- #User Info -->
                <!-- Menu -->
                <div class="menu">
                    <ul class="list">
                        <li class="header">GENERAL</li>
                        <li id="dashboard" class="{{ Request::is( 'cms/dashboard' ) ? 'active' : '' }}">
                            <a href="/cms/dashboard">
                                <i class="material-icons">dashboard</i>
                                <span>Dashboard</span>
                            </a>
                        </li>
                        <li id="info" class="{{ Request::is( 'cms/info/*' ) ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="material-icons">info</i>
                                <span>Site Basic Information</span>
                            </a>
                            <ul class="ml-menu">
                                <li id="about" class="{{ Request::is( 'cms/info/about' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <i class="material-icons">subtitles</i>
                                        <span>About</span>
                                    </a>
                                </li>
                                <li id="contacts" class="{{ Request::is( 'cms/info/contacts' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <i class="material-icons">contacts</i>
                                        <span>Contacts</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li id="content" class="{{ Request::is( 'cms/content/*' ) ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="material-icons">view_day</i>
                                <span>Site Custom Content</span>
                            </a>
                            <ul class="ml-menu">
                                <li id="menu" class="{{ Request::is( 'cms/content/menu' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <i class="material-icons">menu</i>
                                        <span>Menus</span>
                                    </a>
                                </li>
                                <li id="slider" class="{{ Request::is( 'cms/content/slider' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <i class="material-icons">photo_size_select_large</i>
                                        <span>Index Slider</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="header">SITE POSTS</li>
                        <li id="posts" class="{{ Request::is( 'cms/posts/posts' ) || Request::is( 'cms/posts/posts/*' ) ? 'active' : '' }}">
                            <a href="/cms/posts/posts" class="waves-effect waves-block">
                                <i class="material-icons">mode_comment</i>
                                <span>District Posts</span>
                            </a>
                        </li>
                        <li id="categories" class="{{ Request::is( 'cms/posts/categories' ) ? 'active' : '' }}">
                            <a href="/cms/posts/categories" class="waves-effect waves-block">
                                <i class="material-icons">widgets</i>
                                <span>Categories</span>
                            </a>
                        </li>  
                        <li class="header">SCHOOL DISTRICT</li>
                        <li id="employment" class="{{ Request::is( 'cms/district/employment/*' ) ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="material-icons">work</i>
                                <span>Employment</span>
                            </a>
                            <ul class="ml-menu">
                                <li id="cupe" class="{{ Request::is( 'cms/district/employment/cupe' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <i class="material-icons">group_work</i>
                                        <span>CUPE</span>
                                    </a>
                                </li>
                                <li id="exempt" class="{{ Request::is( 'cms/district/employment/exempt' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <i class="material-icons">account_balance</i>
                                        <span>Administrative & Exempt</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- #Menu -->
                <!-- Footer -->
                <div class="legal">
                    <div class="version">
                        &copy; <b>2019. SD92 (Nisga'a)</b> v3.0
                    </div>
                    <div class="copyright">
                        Design Template by <b><a href="https://github.com/gurayyarar/AdminBSBMaterialDesign">Güray Yarar</a></b>
                    </div>
                </div>
                <!-- #Footer -->
            </aside>
        </section>
        <!-- END - Page Sidebar -->

        <!-- Main Content -->
        <section class="content">
            <div class="container-fluid">
                @include( 'cms.layout.notification' )
                <div class="block-header">
                    <h2>{{ strtoupper($data->pageSection) }} @isset($data->pageSubSection) {{ " - " . strtoupper($data->pageSubSection) }} @endisset</h2>
                </div>

                <!-- Page Content -->
                @yield ( 'content' )
                <!-- END Page Content -->

            </div>
        </section>
        <!-- END - Main Content -->

        <!-- Page Footer -->
        
        <!-- Bootstrap Core Js -->
        <script src="/assets/plugins/bootstrap/js/bootstrap.js"></script>

        <!-- Slimscroll Plugin Js -->
        <script src="/assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>

        <!-- Jquery DataTable Plugin Js -->
        <script src="/assets/plugins/jquery-datatables/js/jquery.dataTables.js"></script>
        <script src="/assets/plugins/jquery-datatables/js/dataTables.bootstrap4.js"></script>
        <script src="/assets/plugins/jquery-datatables/js/dataTables.responsive.js"></script>
        <script src="/assets/plugins/jquery-datatables/js/responsive.bootstrap4.js"></script>

        {{-- JQuery DataTable Plugin Extras --}}
        <script src="/assets/plugins/jquery-datatables/extensions/dataTables.buttons.min.js"></script>
        <script src="/assets/plugins/jquery-datatables/extensions/buttons.html5.min.js"></script>

        <!-- Select Plugin Js -->
        <script src="/assets/plugins/bootstrap-select/js/bootstrap-select.js"></script>

        <!-- Validation Plugin Js -->
        <script src="/assets/plugins/jquery-validation/jquery.validate.js"></script>

        <!-- Custom Js -->
        <script src="/cms/js/admin.js"></script>
        <script src="/cms/js/custom.js"></script>
        @yield( 'custom-js' )
        @include('sweetalert::alert')

        <!-- END - Page Footer -->
    </body>
</html>