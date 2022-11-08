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
                    <a class="header-brand-text d-none d-lg-block d-md-block" href="/" title="Home">
                        <h1 class="h4 text-center">
                            <span class="header-brand-text-alt">Coast Mountains<br>Schools</span>
                        </h1>
                    </a>
                    <div class="header-divider d-none d-lg-block d-md-block"></div>
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
                            
                            @foreach ($navbardata->primary as $navbar)
                                @if($navbar->type === 'Dropdown')
                                    <li class="nav-item dropdown">
                                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ $navbar->title }}</a>
                                        <!-- Menu -->
                                        <div class="dropdown-menu dropdown-menu-fluid dropdown-menu-right">
                                            @foreach($navbar->submenu as $navbarsub)
                                                <a href="@if($navbarsub->content) {{ $navbarsub->content }} @else # @endif" class="dropdown-item">{{ $navbarsub->title }}</a>
                                            @endforeach
                                        </div>
                                    </li>
                                @elseif($navbar->type === 'Megamenu')
                                <li class="nav-item dropdown dropdown-mega-menu dropdown-mega-menu-50">
                                    <a href="#" class="nav-link dropdown-toggle" id="quick-links" data-toggle="dropdown" data-hover="dropdown">{{ $navbar->title }}</a>
                                    <!-- Dropdown Menu - Mega Menu -->
                                    <div class="dropdown-menu dropdown-menu-right">
                                        <div class="row">
                                            <div class="col-12 col-lg-12">
                                                <div class="link-container">
                                                    @foreach($navbar->submenu as $navbarsub)
                                                        <div class="link-list">
                                                            <a href="@if($navbarsub->content) {{ $navbarsub->content }} @else # @endif" class="dropdown-item">{{ $navbarsub->title }}</a>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                @else
                                    <li class="nav-item">
                                        <a href="@if($navbar->content) {{ $navbar->content }} @else # @endif" class="nav-link">{{ $navbar->title }}</a>
                                    </li>
                                @endif
                            @endforeach
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
                    @foreach ($navbardata->secondary as $navbar)
                        @if($navbar->type === 'Dropdown')
                            <li class="nav-item dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">{{ $navbar->title }}</a>
                                <!-- Menu -->
                                <div class="dropdown-menu dropdown-menu-fluid @if($navbar->id > 8) dropdown-menu-right @endif">
                                    @foreach($navbar->submenu as $navbarsub)
                                        <a href="@if($navbarsub->content) {{ $navbarsub->content }} @else # @endif" class="dropdown-item">{{ $navbarsub->title }}</a>
                                    @endforeach
                                </div>
                            </li>
                        @elseif($navbar->type === 'Megamenu')
                        <li class="nav-item dropdown dropdown-mega-menu dropdown-mega-menu-50">
                            <a href="#" class="nav-link dropdown-toggle" id="quick-links" data-toggle="dropdown" data-hover="dropdown">{{ $navbar->title }}</a>
                            <!-- Dropdown Menu - Mega Menu -->
                            <div class="dropdown-menu @if($navbar->id > 8) dropdown-menu-right @endif">
                                <div class="row">
                                    <div class="col-12 col-lg-12">
                                        <div class="link-container">
                                            @foreach($navbar->submenu as $navbarsub)
                                                <div class="link-list">
                                                    <a href="@if($navbarsub->content) {{ $navbarsub->content }} @else # @endif" class="dropdown-item">{{ $navbarsub->title }}</a>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @else
                            <li class="nav-item">
                                <a href="@if($navbar->content) {{ $navbar->content }} @else # @endif" class="nav-link">{{ $navbar->title }}</a>
                            </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <!--/.navbar-collapse -->
        </div>
    </div>
</div>