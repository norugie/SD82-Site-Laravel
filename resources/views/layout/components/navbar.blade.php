<div id="header">
    <!--Header upper region-->
    <div class="header-upper bg-primary header-upper-notice py-1">
        <div class="container">
            <div class="text-xs text-uppercase text-center font-weight-bold" >This site is still in development</div>
        </div>
    </div>
    <!--Header upper region-->
    <div class="header-upper py-1">
        <!-- all direct children of the .header-inner element will be vertically aligned with each other you can override all the behaviours using the flexbox utilities (flexbox.htm) All elements with .header-brand & .header-block-flex wrappers will automatically be aligned inline & vertically using flexbox, this can be overridden using the flexbox utilities (flexbox.htm) Use .header-block to stack elements within on small screen & "float" on larger screens use .order-first or/and .order-last classes to make an element show first or last within .header-inner or .headr-block elements -->
        <div class="header-inner container">
            <!--user menu-->
            <div class="header-block-flex order-1 mr-auto">
                <nav class="nav nav-sm header-block-flex">
                    <div class="text-xs text-uppercase d-none d-md-block d-lg-block">Contact us at {{ $sitedata->phone }} or at {{ $sitedata->email }}</div>
                </nav>
            </div>
            <!--site panel and social media icons-->
            <div class="nav nav-icons header-block order-12">
                <a href="/signin" class="text-sm text-uppercase mr-2" style="color:#fff;"><i class="fas fa-sign-in-alt"></i> Site Panel</a>
                <a href="#" class="nav-link mx-1 btn btn-sm btn-primary btn-icon btn-rounded mr-1"> <i class="fab fa-facebook-f"></i> <span class="sr-only">Facebook</span> </a>
                <a href="#" class="nav-link mx-1 btn btn-sm btn-primary btn-icon btn-rounded mr-1"> <i class="fab fa-twitter"></i> <span class="sr-only">Twitter</span> </a>
            </div>
        </div>
    </div>
    <div data-toggle="sticky">

        <!--Header & Branding region-->
        <div class="header">
            <!-- all direct children of the .header-inner element will be vertically aligned with each other you can override all the behaviours using the flexbox utilities (flexbox.html) All elements with .header-brand & .header-block-flex wrappers will automatically be aligned inline & vertically using flexbox, this can be overridden using the flexbox utilities (flexbox.htm) Use .header-block to stack elements within on small screen & "float" on larger screens use .order-first or/and .order-last classes to make an element show first or last within .header-inner or .headr-block elements -->
            <div class="header-inner container">
                <!--branding/logo -->
                <div class="header-brand">
                    <a class="header-brand-text d-none d-lg-block" href="/" title="Home">
                        <h1 class="h4 text-center">
                            <span class="header-brand-text-alt">Coast Mountains<br>Schools</span>
                        </h1>
                    </a>
                    <div class="header-divider d-none d-lg-block"></div>
                    <a class="header-brand-text" href="/" title="Home">
                        <h1 class="h2 text-center d-block">
                            <span class="h3 header-brand-text-alt d-sm-none">CMSD</span>82
                        </h1>
                    </a>
                </div>
                <!-- other header content -->
                <div class="header-block order-12">
                    <!--Search trigger -->
                    <a href="#search" class="btn btn-icon btn-link header-btn float-right order-11" data-toggle="search-form" data-target=".header-search"><i class="fa fa-search fa-flip-horizontal search-icon"></i></a>

                    <!-- mobile collapse menu button - data-toggle="collapse" = default BS menu - data-toggle="off-canvas" = Off-cavnas Menu - data-toggle="overlay" = Overlay Menu -->
                    <a href="#top" class="btn btn-link btn-icon header-btn float-right d-lg-none" data-toggle="off-canvas" data-target=".navbar-first" data-settings='{"cloneTarget":true, "targetClassExtras": "navbar-offcanvas"}'> <i class="fa fa-bars"></i></a>
                    <a href="#top" class="btn btn-link btn-icon header-btn float-right d-lg-none" data-toggle="collapse" data-target=".navbar-second" data-settings='{"cloneTarget":true, "targetClassExtras": "navbar-offcanvas"}'> <i class="fa fa-book"></i></a>
                </div>

                <div class="navbar navbar-expand-md navbar-static-top">
                    <!--everything within this div is collapsed on mobile-->
                    <div class="navbar-main navbar-first collapse">
                        <!--main navigation-->
                        <ul class="nav navbar-nav navbar-nav-stretch float-lg-right dropdown-effect-fade">
                            <!-- Homepage -->
                            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>

                            <!-- Homepage -->
                            <li class="nav-item"><a href="/events/calendar" class="nav-link">Calendar</a></li>

                            <!-- Homepage -->
                            <li class="nav-item"><a href="/news" class="nav-link">News</a></li>

                            <!-- Careers -->
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Work with us</a>
                                <!-- Menu -->
                                <div class="dropdown-menu dropdown-menu-fluid dropdown-menu-right">
                                    <a href="/careers/teacher" class="dropdown-item">Teacher (CMTF) Job Postings</a>
                                    <a href="/careers/staff" class="dropdown-item">Support Staff (CUPE) Job Postings</a>
                                    <a href="/careers/admin" class="dropdown-item">Administrative and Exempt Staff Job Postings</a>
                                </div>
                            </li>

                            <!-- Homepage -->
                            <li class="nav-item"><a href="/events/calendar" class="nav-link">Staff</a></li>
                        </ul>
                    </div>
                    <!--/.navbar-collapse -->
                </div>
            </div>
        </div>

        <div class="navbar navbar-expand-md">
            <!--everything within this div is collapsed on mobile-->
            <div class="navbar-main navbar-second collapse bg-dark navbar-dark">
                <!--main navigation-->
                <ul class="nav navbar-nav container dropdown-effect-fade">
                    <li class="nav-item dropdown dropdown-mega-menu dropdown-mega-menu-50">
                        <a href="#" class="nav-link dropdown-toggle" id="quick-links" data-toggle="dropdown" data-hover="dropdown">Learner Resources</a>
                        <!-- Dropdown Menu - Mega Menu -->
                        <div class="dropdown-menu">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="link-container">
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Link Sample</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Parents and Caregivers</a>
                        <div class="dropdown-menu dropdown-menu-fluid">
                            <a href="footer-light.html" class="dropdown-item">VTRA Fair Notice Protocol</a> 
                            <a href="footer-compact.html" class="dropdown-item">Student Suspension Procedure</a> 
                            <a href="footer-menus.html" class="dropdown-item">Student Transportation Regulation</a>
                            <a href="footer-menus.html" class="dropdown-item">School Newsletters</a>
                            <a href="footer-compact-light.html" class="dropdown-item">Student Registration</a>
                            <a href="footer-compact-light.html" class="dropdown-item">Cross Boundary Application</a>
                            <a href="footer-compact-light.html" class="dropdown-item">Learning Resources for Families</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Schools</a>
                        <div class="dropdown-menu dropdown-menu-fluid">
                            <a href="customers.html" class="dropdown-item">School Administration</a>
                            <a href="customers.html" class="dropdown-item">All Schools</a>
                            <a href="customers.html" class="dropdown-item">School Growth Plans</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-mega-menu dropdown-mega-menu-50">
                        <a href="#" class="nav-link dropdown-toggle" id="quick-links" data-toggle="dropdown" data-hover="dropdown">Programs and Services</a>
                        <!-- Dropdown Menu - Mega Menu -->
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="link-container">
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Link Sample</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Board of Education</a>
                        <!-- Menu -->
                        <div class="dropdown-menu dropdown-menu-fluid dropdown-menu-right">
                            <a href="customers.html" class="dropdown-item">School Trustees</a>
                            <a href="customers.html" class="dropdown-item">Strategic Plan</a>
                            <a href="customers.html" class="dropdown-item">Meetings, Agendas, and Minutes</a>
                            <div class="dropdown dropdown-submenu dropdown-menu-left dropdown-menu-caret-left">
                                <a href="headers.html" class="dropdown-item dropdown-toggle dropdown" id="policies-bylaws" data-toggle="dropdown">Policies and Bylaws</a>
                                <div class="dropdown-menu dropdown-menu-fluid dropdown-menu-right" role="menu" aria-labelledby="policies-bylaws"> 
                                    <a href="footer-light.html" class="dropdown-item">1000 Students and Programs</a> 
                                    <a href="footer-compact.html" class="dropdown-item">2000 Personnel</a> 
                                    <a href="footer-menus.html" class="dropdown-item">3000 Finances</a>
                                    <a href="footer-compact-light.html" class="dropdown-item">4000 Facilities, Grounds, and Equipment</a>    
                                    <a href="footer-menus-light.html" class="dropdown-item">5000 Governance</a> 
                                </div>
                            </div>
                            <a href="customers.html" class="dropdown-item">Administrative Procedures and Regulations</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown dropdown-mega-menu dropdown-mega-menu-50">
                        <a href="#" class="nav-link dropdown-toggle" id="quick-links" data-toggle="dropdown" data-hover="dropdown">COVID-19 Resources</a>
                        <!-- Dropdown Menu - Mega Menu -->
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="link-container">
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">COVID-19 Communicable Disease Prevention Plan</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Pandemic Response Plan</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">School Ventilation</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">K12-Schools and COVID-19 Website</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Communications to Families</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">PHO COVID-19 Province-wide Orders and Guidelines</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Provincial Health Updates and Resources</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Minitries of Education and Health Information</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">COVID-19 Website Links and Resources</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Managing Stress During COVID-19</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="#" class="dropdown-item">Tips for Talking to Kids About COVID-19</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </div>
</div>