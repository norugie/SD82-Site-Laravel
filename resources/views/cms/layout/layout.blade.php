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
                        <li id="content" class="{{ Request::is( 'cms/content/*' ) ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="material-icons">view_day</i>
                                <span>Site Base Content</span>
                            </a>
                            <ul class="ml-menu">
                                <li id="about" class="{{ Request::is( 'cms/content/about' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <i class="material-icons">info</i>
                                        <span>About</span>
                                    </a>
                                </li>
                                <li id="contacts" class="{{ Request::is( 'cms/content/contacts' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <i class="material-icons">contacts</i>
                                        <span>Contacts</span>
                                    </a>
                                </li>
                                <li id="carousel" class="{{ Request::is( 'cms/content/carousel' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <i class="material-icons">photo_size_select_large</i>
                                        <span>Home Carousel</span>
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
                        <li id="links" class="{{ Request::is( 'cms/posts/links' ) ? 'active' : '' }}">
                            <a href="/cms/posts/links" class="waves-effect waves-block">
                                <i class="material-icons">link</i>
                                <span>Links</span>
                            </a>
                        </li>
                        <li id="categories" class="{{ Request::is( 'cms/posts/categories' ) ? 'active' : '' }}">
                            <a href="/cms/posts/categories" class="waves-effect waves-block">
                                <i class="material-icons">widgets</i>
                                <span>Categories</span>
                            </a>
                        </li>  
                        <li class="header">SCHOOL DISTRICT</li>
                        <li id="employment" class="{{ Request::is( 'cms/district/employment' ) ? 'active' : '' }}">
                            <a href="" class="waves-effect waves-block">
                                <i class="material-icons">work</i>
                                <span>Employment</span>
                            </a>
                        </li>
                        <li id="files" class="{{ Request::is( 'cms/district/files' ) ? 'active' : '' }}">
                            <a href="" class="waves-effect waves-block">
                                <i class="material-icons">library_books</i>
                                <span>School District Files</span>
                            </a>
                        </li>
                        <li id="plans" class="{{ Request::is( 'cms/district/plans' ) ? 'active' : '' }}">
                            <a href="" class="waves-effect waves-block">
                                <i class="material-icons">assignment</i>
                                <span>School District Strategic Plans</span>
                            </a>
                        </li>
                        <li id="board" class="{{ Request::is( 'cms/web/content/*' ) ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="material-icons">group_add</i>
                                <span>Board Meeting</span>
                            </a>
                            <ul class="ml-menu">
                                <li id="packages" class="{{ Request::is( 'cms/district/packages' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <i class="material-icons">archive</i>
                                        <span>Board Meeting Packages</span>
                                    </a>
                                </li>
                                <li id="minutes" class="{{ Request::is( 'cms/district/minutes' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <i class="material-icons">access_time</i>
                                        <span>Board Meeting Minutes</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li id="boe" class="{{ Request::is( 'cms/web/content/*' ) ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="material-icons">group_work</i>
                                <span>Board of Education</span>
                            </a>
                            <ul class="ml-menu">
                                <li id="boepage" class="{{ Request::is( 'cms/web/boe' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <i class="material-icons">people</i>
                                        <span>Board of Education</span>
                                    </a>
                                </li>
                                <li id="policies" class="{{ Request::is( 'cms/district/policies' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <i class="material-icons">account_balance</i>
                                        <span>Board of Education - Policies</span>
                                    </a>
                                </li>
                                <li id="directives" class="{{ Request::is( 'cms/district/directives' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <i class="material-icons">subdirectory_arrow_right</i>
                                        <span>Board of Education - Process and Directives</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="header">SITE SECTIONS</li>
                        <li id="curriculums" class="{{ Request::is( 'cms/web/curriculums/*' ) ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="material-icons">local_library</i>
                                <span>Curriculum</span>
                            </a>
                            <ul class="ml-menu">
                                <li id="k12" class="{{ Request::is( 'cms/web/curriculums/k12' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <span>K-12 Program</span>
                                    </a>
                                </li>
                                <li id="dl" class="{{ Request::is( 'cms/web/curriculums/dl' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <span>Distributed Learning Program</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li id="departments" class="{{ Request::is( 'cms/web/departments/*' ) ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="material-icons">device_hub</i>
                                <span>Departments</span>
                            </a>
                            <ul class="ml-menu">
                                <li id="ssd" class="{{ Request::is( 'cms/web/departments/ssd' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <span>School District Superintendent</span>
                                    </a>
                                </li>
                                <li id="finance" class="{{ Request::is( 'cms/web/departments/finance' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <span>Finance Department</span>
                                    </a>
                                </li>
                                <li id="tech" class="{{ Request::is( 'cms/web/departments/tech' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <span>Information Technology Department</span>
                                    </a>
                                </li>
                                <li id="maintenance" class="{{ Request::is( 'cms/web/departments/maintenance' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <span>Transportation and Maintenance Department</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li id="nlc" class="{{ Request::is( 'cms/web/nlc' ) ? 'active' : '' }}">
                            <a href="" class="waves-effect waves-block">
                                <i class="material-icons">record_voice_over</i>
                                <span>Nisga'a Language and Culture</span>
                            </a>
                        </li>
                        <li id="childcare" class="{{ Request::is( 'cms/web/content/*' ) ? 'active' : '' }}">
                            <a href="javascript:void(0);" class="menu-toggle waves-effect waves-block">
                                <i class="material-icons">child_friendly</i>
                                <span>Child Care</span>
                            </a>
                            <ul class="ml-menu">
                                <li id="gcc" class="{{ Request::is( 'cms/web/gcc' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <i class="material-icons">face</i>
                                        <span>Gitginsaa Childcare Centre</span>
                                    </a>
                                </li>
                                <li id="ss" class="{{ Request::is( 'cms/web/ss' ) ? 'active' : '' }}">
                                    <a href="" class="waves-effect waves-block">
                                        <i class="material-icons">school</i>
                                        <span>Strong Start</span>
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