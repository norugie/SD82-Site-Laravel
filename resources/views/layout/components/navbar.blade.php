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
                                            <h4 class="dropdown-header d-none d-lg-block mt-0">Miscellaneous</h4>
                                            <a href="index.html" class="dropdown-item">District and School Calendar</a>
                                            <a href="index.html" class="dropdown-item">District-wide Bell Schedule</a>
                                            <a href="index.html" class="dropdown-item">Bus Schedule and Routes</a>
                                            <a href="index.html" class="dropdown-item">District Files</a>
                                            <a href="index.html" class="dropdown-item">Tech Help</a>
                                            <a href="index.html" class="dropdown-item">Questions and Concerns</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- School-related links -->
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Schools</a>
                                <!-- Menu -->
                                <div class="dropdown-menu dropdown-menu-fluid dropdown-menu-right">
                                    <a href="index.html" class="dropdown-item">School Administration</a>
                                    <a href="index.html" class="dropdown-item">All Schools</a>
                                    <a href="index.html" class="dropdown-item">School Growth Plans</a>
                                </div>
                            </li>

                            <!-- Resources -->
                            <li class="nav-item dropdown dropdown-mega-menu ">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Our District</a>
                                <!-- Dropdown Menu - mega menu-->
                                <div class="dropdown-menu dropdown-menu-right">
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
                                            <h4 class="dropdown-header d-none d-lg-block mt-0">Miscellaneous</h4>
                                            <a href="index.html" class="dropdown-item">District and School Calendar</a>
                                            <a href="index.html" class="dropdown-item">District-wide Bell Schedule</a>
                                            <a href="index.html" class="dropdown-item">Bus Schedule and Routes</a>
                                            <a href="index.html" class="dropdown-item">District Files</a>
                                            <a href="index.html" class="dropdown-item">Tech Help</a>
                                            <a href="index.html" class="dropdown-item">Questions and Concerns</a>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- District news -->
                            <li class="nav-item dropdown">
                                <a href="/news" class="nav-link">District News</a>
                            </li>

                            <!-- Careers -->
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Careers</a>
                                <!-- Menu -->
                                <div class="dropdown-menu dropdown-menu-fluid dropdown-menu-right">
                                    <a href="index.html" class="dropdown-item">Teacher (CMTF) Job Postings</a>
                                    <a href="index.html" class="dropdown-item">Support Staff (CUPE) Job Postings</a>
                                    <a href="index.html" class="dropdown-item">Administrative and Exempt Staff Job Postings</a>
                                </div>
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
                    <li class="nav-item dropdown dropdown-mega-menu dropdown-mega-menu-50">
                        <a href="#" class="nav-link dropdown-toggle" id="quick-links" data-toggle="dropdown" data-hover="dropdown">Quick Links</a>
                        <!-- Dropdown Menu - Mega Menu -->
                        <div class="dropdown-menu">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="link-container">
                                        <div class="link-list">
                                            <a href="index.html" class="dropdown-item">District Video Gallery</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="index.html" class="dropdown-item">erase = Expect Respect & a Safe Education</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="index.html" class="dropdown-item">erase Report It Tool</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="index.html" class="dropdown-item">Healthy Schools Network & Newsletters</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="index.html" class="dropdown-item">LearnNow BC</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="index.html" class="dropdown-item">Ministry of Education - Parent Web</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="index.html" class="dropdown-item">Ministry of Education - Student Web</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="index.html" class="dropdown-item">Student Learning Survey (2021-2022)</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="index.html" class="dropdown-item">Superintendent's Monthly Report to the Board</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">I want to: </a>
                        <div class="dropdown-menu dropdown-menu-fluid">
                            <a href="customers.html" class="dropdown-item">Apply for a Job</a>
                            <a href="customers.html" class="dropdown-item">Know Which School to Attend</a>
                            <a href="customers.html" class="dropdown-item">Request a Transcript</a>
                            <a href="customers.html" class="dropdown-item">See Scholarships and Contests</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Board</a>
                        <div class="dropdown-menu dropdown-menu-fluid">
                            <a href="customers.html" class="dropdown-item">School Trustees</a>
                            <div class="dropdown dropdown-submenu dropdown-menu-right">
                                <a href="headers.html" class="dropdown-item dropdown-toggle dropdown" id="election-trustees" data-toggle="dropdown">General Local Elections for School Trustees</a>
                                <div class="dropdown-menu dropdown-menu-fluid" role="menu" aria-labelledby="election-trustees"> 
                                    <a href="footer-light.html" class="dropdown-item">Mail Ballot Voting</a> 
                                    <a href="footer-compact.html" class="dropdown-item">Declaration of Candidates</a> 
                                    <a href="footer-menus.html" class="dropdown-item">Election by Voting</a>
                                    <a href="footer-menus.html" class="dropdown-item">Election by Acclamation</a>
                                    <a href="footer-compact-light.html" class="dropdown-item">Candidate Withdrawal</a>
                                </div>
                            </div>
                            <a href="customers.html" class="dropdown-item">Strategic Plan</a>
                            <a href="customers.html" class="dropdown-item">Meetings, Agendas, and Minutes</a>
                            <div class="dropdown dropdown-submenu dropdown-menu-right">
                                <a href="headers.html" class="dropdown-item dropdown-toggle dropdown" id="policies-bylaws" data-toggle="dropdown">Policies and Bylaws</a>
                                <div class="dropdown-menu dropdown-menu-fluid" role="menu" aria-labelledby="policies-bylaws"> 
                                    <a href="footer-light.html" class="dropdown-item">1000 Students and Programs</a> 
                                    <a href="footer-compact.html" class="dropdown-item">2000 Personnel</a> 
                                    <a href="footer-menus.html" class="dropdown-item">3000 Finances</a>
                                    <a href="footer-compact-light.html" class="dropdown-item">4000 Facilities, Grounds, and Equipment</a>    
                                    <a href="footer-menus-light.html" class="dropdown-item">5000 Governance</a> 
                                </div>
                            </div>
                            <a href="customers.html" class="dropdown-item">Administrative Procedures and Regulations</a>
                    </li>
                    <li class="nav-item">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">District Logins</a>
                        <div class="dropdown-menu dropdown-menu-fluid">
                            <a href="customers.html" class="dropdown-item">District Email</a>
                            <a href="customers.html" class="dropdown-item">District SharePoint</a>
                            <a href="customers.html" class="dropdown-item">District Zoom</a>
                            <a href="customers.html" class="dropdown-item">eServe</a>
                            <a href="customers.html" class="dropdown-item">FreshGrade</a>
                            <a href="customers.html" class="dropdown-item">MyEducation BC</a>
                            <a href="customers.html" class="dropdown-item">Password Utility</a>
                            <a href="customers.html" class="dropdown-item">SmartFind Express</a>
                    </li>
                    <li class="nav-item dropdown dropdown-mega-menu dropdown-mega-menu-50">
                        <a href="#" class="nav-link dropdown-toggle" id="covid-links" data-toggle="dropdown" data-hover="dropdown">COVID-19 Resources</a>
                        <!-- Dropdown Menu - Mega Menu -->
                        <div class="dropdown-menu dropdown-menu-right">
                            <div class="row">
                                <div class="col-12 col-lg-12">
                                    <div class="link-container">
                                        <div class="link-list">
                                            <a href="index.html" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="index.html" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="index.html" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="index.html" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="index.html" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="index.html" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="index.html" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="index.html" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="index.html" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="index.html" class="dropdown-item">Link Sample</a>
                                        </div>
                                        <div class="link-list">
                                            <a href="index.html" class="dropdown-item">Link Sample</a>
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