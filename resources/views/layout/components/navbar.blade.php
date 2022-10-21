<div id="header">

    <!--Header upper region-->
    <div class="header-upper py-1">
        <!-- all direct children of the .header-inner element will be vertically aligned with each other you can override all the behaviours using the flexbox utilities (flexbox.htm) All elements with .header-brand & .header-block-flex wrappers will automatically be aligned inline & vertically using flexbox, this can be overridden using the flexbox utilities (flexbox.htm) Use .header-block to stack elements within on small screen & "float" on larger screens use .order-first or/and .order-last classes to make an element show first or last within .header-inner or .headr-block elements -->
        <div class="header-inner container">
            <!--user menu-->
            <div class="header-block-flex order-1 mr-auto">
                <nav class="nav nav-sm header-block-flex">
                    <div class="text-xs text-uppercase d-none d-md-block d-lg-block">Contact us at +1 (250) XXX-XXXX or at sd82@cmsd.bc.ca</div>
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
                    <a class="header-brand-text" href="index.html" title="Home">
                        <h1 class="h2">
                            <span class="header-brand-text-alt">CMSD</span>82
                        </h1>
                    </a>
                    <div class="header-divider d-none d-lg-block"></div>
                    <div class="header-slogan d-none d-lg-block">Coast Mountain <br>School District 82</div>
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
                            
                            <!-- District-related links -->
                            <li class="nav-item dropdown dropdown-mega-menu">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Our District</a>
                                <!-- Dropdown Menu - mega menu-->
                                <div class="dropdown-menu">
                                    <div class="row">
                                        <div class="col-lg-4"> 
                                            <h4 class="dropdown-header d-none d-lg-block mt-0">District Information</h4>
                                            <a href="index.html" class="dropdown-item">About the District</a>
                                            <a href="index.html" class="dropdown-item">District Administration and Staff</a>
                                            <a href="index.html" class="dropdown-item">Contact us</a>
                                            <h4 class="dropdown-header d-none d-lg-block mt-0">Curriculum</h4>
                                            <a href="index.html" class="dropdown-item">Inclusive Education - Learner Support</a>
                                            <a href="index.html" class="dropdown-item">Indigenous Enhancement Agreement</a>
                                            <a href="index.html" class="dropdown-item">StrongStart Program</a>
                                        </div>
                                        <div class="col-lg-4"> 
                                            <h4 class="dropdown-header d-none d-lg-block mt-0">Departments</h4>
                                            <a href="index.html" class="dropdown-item">Superintendent's Office</a>
                                            <a href="index.html" class="dropdown-item">Secretary Treasurer and Finance</a>
                                            <a href="index.html" class="dropdown-item">Human Resources</a>
                                            <a href="index.html" class="dropdown-item">Facilities Department</a>
                                            <a href="index.html" class="dropdown-item">Information Technology Department</a>
                                        </div>
                                        <div class="col-lg-4">
                                            <h4 class="dropdown-header d-none d-lg-block mt-0">Governance</h4>
                                            <a href="index.html" class="dropdown-item">School Trustees</a>
                                            <a href="index.html" class="dropdown-item">Board of Education Strategic Plan</a>
                                            <a href="index.html" class="dropdown-item">Board Meetings, Agendas, and Minutes</a>
                                            <a href="index.html" class="dropdown-item">Policies and Bylaws</a>
                                            <a href="index.html" class="dropdown-item">Administrative Procedures</a>
                                            <a href="index.html" class="dropdown-item">Sample Link</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- School-related links -->
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Schools</a>
                                <!-- Menu -->
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="index.html" class="dropdown-item">School Administration</a>
                                    <a href="index.html" class="dropdown-item">All Schools</a>
                                    <a href="index.html" class="dropdown-item">School Growth Plans</a>
                                </div>
                            </li>

                            <!-- Resources -->
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Resources</a>
                                <!-- Menu -->
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="index.html" class="dropdown-item">District and School Calendar</a>
                                    <a href="index.html" class="dropdown-item">District-wide Bell Schedule</a>
                                    <a href="index.html" class="dropdown-item">Bus Schedule and Routes</a>
                                    <a href="index.html" class="dropdown-item">Online Resources</a>
                                </div>
                            </li>

                            <!-- District news -->
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link">District News</a>
                            </li>

                            <!-- Careers -->
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link">Careers</a>
                            </li>
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

                <li class="nav-item">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Test Link 1</a>
                    <div class="dropdown-menu">
                        <a href="customers.html" class="dropdown-item">Link Item</a>
                        <a href="customers.html" class="dropdown-item">Link Item</a>
                        <a href="customers.html" class="dropdown-item">Link Item</a>
                        <a href="customers.html" class="dropdown-item">Link Item</a>
                        <a href="customers.html" class="dropdown-item">Link Item</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Test Link 2</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Test Link 3</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Test Link 4</a>
                </li>
                <li class="nav-item">
                    <a href="/" class="nav-link">Test Link 5</a>
                </li>
                </ul>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </div>
</div>