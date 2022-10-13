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
                            <span class="header-brand-text-alt">CMSD</span>82<span class="header-brand-text-alt"></span>
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
                    <a href="#top" class="btn btn-link btn-icon header-btn float-right d-lg-none" data-toggle="off-canvas" data-target=".navbar-main" data-settings='{"cloneTarget":true, "targetClassExtras": "navbar-offcanvas"}'> <i class="fa fa-bars"></i></a>
                </div>

                <div class="navbar navbar-expand-md navbar-static-top">
                    <!--everything within this div is collapsed on mobile-->
                    <div class="navbar-main collapse">
                        <!--main navigation-->
                        <ul class="nav navbar-nav navbar-nav-stretch float-lg-right dropdown-effect-fade">

                            <li class="nav-item"><a href="/" class="nav-link">Home</a></li>
                            
                            <!-- Homepages -->
                            <li class="nav-item dropdown dropdown-mega-menu">
                                <a href="#" class="nav-link dropdown-toggle" id="indexs-drop" data-toggle="dropdown">Homepage Samples</a>
                                <!-- Dropdown Menu - mega menu-->
                                <div class="dropdown-menu">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <h4 class="dropdown-header d-none d-lg-block mt-0">Classic Homepages</h4>
                                            <div class="row">
                                                <div class="col-lg-6"> <a href="intro.html" class="dropdown-item">Intro</a> <a href="index.html" class="dropdown-item active">Homepage (default)</a> <a href="index-static.html" class="dropdown-item">Homepage No Slider</a> <a href="index-boxed.html" class="dropdown-item">Homepage Boxed</a> <a href="index-promo-header.html" class="dropdown-item">Promo Header</a> <a href="index-coming-soon.html" class="dropdown-item">Coming Soon</a> <a href="index-coming-soon-newsletter.html" class="dropdown-item">Coming Soon with newsletter</a> <a href="index-onepager.html" class="dropdown-item">One Pager Slideshow</a> </div>
                                                <div class="col-lg-6"> <a href="index-onepager-image.html" class="dropdown-item">One Pager Image</a> <a href="index-onepager-image-full-height.html" class="dropdown-item">One Pager Image Full Height</a> <a href="index-onepager-bg-slideshow.html" class="dropdown-item">One Pager Background Slideshow</a> <a href="index-onepager-dotted-menu-left.html" class="dropdown-item">One Pager Dotted Menu Left</a> <a href="index-onepager-dotted-menu-right.html" class="dropdown-item">One Pager Dotted Menu Right</a> <a href="index-onepager-dotted-menu-bottom.html" class="dropdown-item">One Pager Dotted Menu Bottom</a> <a href="index-onepager-submenu.html" class="dropdown-item">One Pager Submenu</a> </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <h4 class="dropdown-header d-none d-lg-block mt-0">Industry/Niche Homepages</h4>
                                            <div class="row">
                                                <div class="col-lg-6"> <a href="demo-travel-blog.html" class="dropdown-item">Travel Blog</a> <a href="index-app-landing.html" class="dropdown-item">App Landing Page</a> <a href="index-music.html" class="dropdown-item">Music Homepage</a> <a href="index-event.html" class="dropdown-item">Event Homepage</a> <a href="index-gym.html" class="dropdown-item">Gym Homepage</a> <a href="index-jobs.html" class="dropdown-item">Jobs Homepage</a> <a href="index-corporate.html" class="dropdown-item">Corporate Homepage</a> <a href="index-restaurant.html" class="dropdown-item">Restaurant Homepage</a> <a href="index-photographer.html" class="dropdown-item">Photographer Homepage</a> <a href="index-freelancer-portfolio.html" class="dropdown-item">Freelancer Homepage</a> </div>
                                                <div class="col-lg-6"> <a href="index-wedding.html" class="dropdown-item">Wedding Homepage</a> <a href="index-realestate-single.html" class="dropdown-item">Real Estate (Single) Homepage</a> <a href="index-technology.html" class="dropdown-item">Technology Homepage</a> <a href="index-forum.html" class="dropdown-item">Forum Homepage</a> <a href="index-charity.html" class="dropdown-item">Charity Homepage</a> <a href="index-church.html" class="dropdown-item">Church Homepage</a> <a href="index-knowledgebase.html" class="dropdown-item">Knowledgebase</a> <a href="index-magazine.html" class="dropdown-item">Magazine Homepage</a> <a href="shop.html" class="dropdown-item">Shop Homepage</a> </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>

                            <!-- Pages -->
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" id="pages-drop" data-toggle="dropdown">Pages</a>
                                <!-- Menu -->
                                <div class="dropdown-menu">
                                    <div class="dropdown dropdown-submenu">
                                        <a href="about.html" class="dropdown-item dropdown-toggle" id="about-drop" data-toggle="dropdown" data-close-others="true">About</a>
                                        <!-- Dropdown Menu -->
                                        <div class="dropdown-menu" role="menu" aria-labelledby="about-drop"> 
                                            <a href="about.html" class="dropdown-item">About Us Basic</a> 
                                            <a href="about-extended.html" class="dropdown-item">About Us Extended</a> 
                                            <a href="about-me.html" class="dropdown-item">About Me</a> 
                                            <a href="team.html" class="dropdown-item">Team List</a> <a href="team-grid.html" class="dropdown-item">Team Grid</a> 
                                            <a href="team-member.html" class="dropdown-item">Team Member</a> 
                                            <a href="contact.html" class="dropdown-item">Contact</a> <a href="contact.php" class="dropdown-item">Contact (PHP)</a> 
                                        </div>
                                    </div>
                                    <div class="dropdown dropdown-submenu">
                                        <a href="blog.html" class="dropdown-item dropdown-toggle" id="blog-drop" data-toggle="dropdown" data-close-others="true">Blog</a>
                                        <!-- Dropdown Menu -->
                                        <div class="dropdown-menu">
                                            <a href="blog.html" class="dropdown-item">Blog List Right Sidebar</a> <a href="blog-leftbar.html" class="dropdown-item">Blog List Left Sidebar</a> <a href="blog-timeline.html" class="dropdown-item">Blog List Timeline</a> <a href="blog-grid.html" class="dropdown-item">Blog List Grid</a> <a href="blog-post.html" class="dropdown-item">Blog Post</a> <a href="blog-post-video.html" class="dropdown-item">Blog Post With Video</a> <a href="blog-post-slideshow.html" class="dropdown-item">Blog Post With Slideshow</a> <a href="blog-post-audio.html" class="dropdown-item">Blog Post With Audio Clip</a>
                                        </div>
                                    </div>
                                    <div class="dropdown dropdown-submenu">
                                        <a href="pricing.html" class="dropdown-item dropdown-toggle" id="pricing-drop" data-toggle="dropdown" data-close-others="true">Pricing</a>
                                        <!-- pricing pages -->
                                        <div class="dropdown-menu">
                                            <a href="pricing.html" class="dropdown-item">Pricing Plans</a> <a href="pricing-tables.html" class="dropdown-item">Comparison Tables</a>
                                        </div>
                                    </div>
                                    <div class="dropdown dropdown-submenu">
                                        <a href="timeline.html" class="dropdown-item dropdown-toggle" id="timeline-drop" data-toggle="dropdown" data-close-others="true">Timeline</a>
                                        <!-- timelines -->
                                        <div class="dropdown-menu" role="menu" aria-labelledby="timeline-drop">
                                            <a href="timeline.html" class="dropdown-item">Timeline Default</a> <a href="timeline-left.html" class="dropdown-item">Timeline Left</a> <a href="timeline-right.html" class="dropdown-item">Timeline Right</a> <a href="timeline-stacked.html" class="dropdown-item">Timeline Stacked</a> 
                                        </div>
                                    </div>
                                    <a href="customers.html" class="dropdown-item">Customers</a> <a href="features.html" class="dropdown-item">Features/Services</a> <a href="login.html" class="dropdown-item">Login</a> <a href="signup.html" class="dropdown-item">Sign Up</a> <a href="starter.html" class="dropdown-item">Starter Snippets</a> <a href="page-404.html" class="dropdown-item">404 Error</a> <a href="page-maintenance.html" class="dropdown-item">Maintenance</a> <a href="page-site-status.html" class="dropdown-item">Site Status</a> <a href="page-titles.html" class="dropdown-item">Page Titles</a>
                                </div>
                            </li>

                            <!-- Mega menu example -->
                            <li class="nav-item dropdown dropdown-persist dropdown-mega-menu dropdown-mega-menu-50">
                                <a href="#" class="nav-link dropdown-toggle" id="megamenu-drop" data-toggle="dropdown">Mega Menu</a>
                                <!-- Dropdown Menu - Mega Menu -->
                                <div class="dropdown-menu dropdown-menu-right">
                                    <!-- Nav tabs -->
                                    <ul class="nav nav-pills nav-pills-border-bottom-inside flex-column flex-lg-row" role="tablist">
                                        <li class="nav-item"> <a class="nav-link p-3 active text-center font-weight-bold text-uppercase" data-toggle="tab" data-target=".menu-tab-1" role="tab">Mega Menu Tab 1</a> </li>
                                        <li class="nav-item"> <a class="nav-link p-3 text-center font-weight-bold text-uppercase" data-toggle="tab" data-target=".menu-tab-2" role="tab">Mega Menu Tab 2</a> </li>
                                    </ul>
                                    <!-- Tab panes -->
                                    <div class="tab-content py-3">
                                        <div class="tab-pane active show menu-tab-1" role="tabpanel">
                                            <div class="row text-center">
                                                <div class="col-lg-4 py-2">
                                                    <i class="fa fa-tachometer-alt icon-3x op-6"></i>
                                                    <h5 class="mt-2">
                                                        Fully Optimized
                                                    </h5>
                                                    <p class="text-sm mb-0">Molior os tum. Eros ideo imputo loquor pertineo torqueo validus.</p>
                                                    </div>
                                                    <div class="col-lg-4 py-2">
                                                    <i class="fa fa-wrench icon-3x op-6"></i>
                                                    <h5 class="mt-2">
                                                        Free Support
                                                    </h5>
                                                    <p class="text-sm mb-0">Conventio modo secundum tego tum.</p>
                                                </div>
                                                <div class="col-lg-4 py-2">
                                                    <i class="fa fa-rocket icon-3x op-6"></i>
                                                    <h5 class="mt-2">
                                                        Free Upgrades
                                                    </h5>
                                                    <p class="text-sm mb-0">Aliquip haero nostrud praemitto quidne singularis sit.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="tab-pane menu-tab-2" role="tabpanel">
                                            <div class="row text-center">
                                                <div class="col-lg-4 py-2">
                                                    <i class="fa fa-chart-line icon-3x op-6"></i>
                                                    <h5 class="mt-2">
                                                        99.9% Uptime
                                                    </h5>
                                                    <p class="text-sm mb-0">Eros euismod loquor pneum quadrum scisco valde vindico.</p>
                                                </div>
                                                <div class="col-lg-4 py-2">
                                                    <i class="fa fa-users icon-3x op-6"></i>
                                                    <h5 class="mt-2">
                                                        Multiuser
                                                    </h5>
                                                    <p class="text-sm mb-0">Abdo et ludus neo ulciscor volutpat.</p>
                                                </div>
                                                <div class="col-lg-4 py-2">
                                                    <i class="fa fa-plug icon-3x op-6"></i>
                                                    <h5 class="mt-2">
                                                        Plug n play
                                                    </h5>
                                                    <p class="text-sm mb-0">At fere haero humo sit te ulciscor vel velit vulpes.</p>
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

        <div class="navbar navbar-expand-md">
            <!--everything within this div is collapsed on mobile-->
            <div class="navbar-main collapse bg-dark navbar-dark">
                <!--main navigation-->
                <ul class="nav navbar-nav container dropdown-effect-fade">

                <li class="nav-item">
                    <a href="/" class="nav-link">Test Link 1</a>
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