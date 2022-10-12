<!DOCTYPE html>
<html lang="en">

<head>
  <title>Header Navbar Below | AppStrap Bootstrap Theme by Themelize.me</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />

  <!-- @todo: fill with your company info or remove -->
  <meta name="description" content="">
  <meta name="author" content="Themelize.me">

  <!-- Bootstrap v4.5.0 CSS via CDN -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

  <!-- Plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 -->

  <!-- Theme style -->
  <link href="assets/css/theme-style.min.css" rel="stylesheet">

  <!--Your custom colour override-->
  <link href="#" id="colour-scheme" rel="stylesheet">

  <!-- Your custom override -->
  <link href="assets/css/custom-style.css" rel="stylesheet">



  <!-- Optional: ICON SETS -->
  <!-- Iconset: Font Awesome 5.12.0 via CDN -->
  <link href="https://use.fontawesome.com/releases/v5.12.0/css/all.css" rel="stylesheet">
  <!-- Iconset: flag icons - http://lipis.github.io/flag-icon-css/ -->
  <link href="assets/plugins/flag-icon-css/css/flag-icon.min.css" rel="stylesheet">
  <!-- Iconset: ionicons - http://ionicons.com/ -->
  <link href="http://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" rel="stylesheet">
  <!-- Iconset: Linearicons - https://linearicons.com/free -->
  <link href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css" rel="stylesheet">
  <!-- Iconset: Lineawesome - https://icons8.com/articles/line-awesome -->
  <link href="https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome.min.css" rel="stylesheet">


  <!-- Le fav and touch icons - @todo: fill with your icons or remove, try https://realfavicongenerator.net -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/favicons/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/favicons/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/favicons/favicon-16x16.png">
  <link rel="manifest" href="assets/favicons/manifest.json">
  <link rel="shortcut icon" href="assets/favicons/favicon.ico">
  <meta name="msapplication-config" content="assets/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">


  <!-- Google fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Rambla:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Calligraffitti' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto+Slab:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Roboto:100,400,700' rel='stylesheet' type='text/css'>

  <!--Plugin: Retina.js (high def image replacement) - @see: http://retinajs.com/-->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/retina.js/1.3.0/retina.min.js"></script>
</head>

<!-- ======== @Region: body ======== -->

<body class="page page-header-navbar-below navbar-layout-navbar-below">

  <!-- @plugin: page loading indicator, delete to remove loader -->
  <div class="page-loader" data-toggle="page-loader"></div>

  <a href="#content" id="top" class="sr-only">Skip to content</a>

  <!-- ======== @Region: #header ======== -->
  <div id="header">

    <!--Header upper region-->
    <div class="header-upper">
      <!-- all direct children of the .header-inner element will be vertically aligned with each other you can override all the behaviours using the flexbox utilities (flexbox.htm) All elements with .header-brand & .header-block-flex wrappers will automatically be aligned inline & vertically using flexbox, this can be overridden using the flexbox utilities (flexbox.htm) Use .header-block to stack elements within on small screen & "float" on larger screens use .order-first or/and .order-last classes to make an element show first or last within .header-inner or .headr-block elements -->
      <div class="header-inner container-fluid">
        <!--user menu-->
        <div class="header-block-flex order-1 mr-auto">
            <nav class="nav nav-sm header-block-flex">
                <div class="text-xs text-uppercase d-none d-md-block d-lg-block">Contact us at +1 (250) XXX-XXXX or at sd82@cmsd.nisgaa.bc.ca</div>
            </nav>
        </div>
        <!--social media icons-->
        <div class="nav nav-icons header-block order-12">
            <!--@todo: replace with company social media details-->
                <a href="/signin" class="text-sm text-uppercase mr-2" style="color:#fff;"><i class="fas fa-sign-in-alt"></i> Site Panel</a>
                <a href="#" class="nav-link mx-1 btn btn-sm btn-primary btn-icon btn-rounded"> <i class="fab fa-twitter"></i> <span class="sr-only">Twitter</span> </a>
                <a href="#" class="nav-link mx-1 btn btn-sm btn-primary btn-icon btn-rounded"> <i class="fab fa-facebook-f"></i> <span class="sr-only">Facebook</span> </a>
        </div>
      </div>
    </div>
    <div data-toggle="sticky">

      <!--Header search region - hidden by default -->
      <div class="header-search collapse" id="search">
        <form class="search-form container">
          <input type="text" name="search" class="form-control search" value="" placeholder="Search">
          <button type="button" class="btn btn-link"><span class="sr-only">Search </span><i class="fa fa-search fa-flip-horizontal search-icon"></i></button>
          <button type="button" class="btn btn-link close-btn" data-toggle="search-form-close"><span class="sr-only">Close </span><i class="fa fa-times search-icon"></i></button>
        </form>
      </div>

      <!--Header & Branding region-->
      <div class="header">
        <!-- all direct children of the .header-inner element will be vertically aligned with each other you can override all the behaviours using the flexbox utilities (flexbox.html) All elements with .header-brand & .header-block-flex wrappers will automatically be aligned inline & vertically using flexbox, this can be overridden using the flexbox utilities (flexbox.htm) Use .header-block to stack elements within on small screen & "float" on larger screens use .order-first or/and .order-last classes to make an element show first or last within .header-inner or .headr-block elements -->
        <div class="header-inner container-fluid">
          <!--branding/logo -->
          <div class="header-brand">
            <a class="header-brand-text" href="index.html" title="Home">
              <h1 class="h2">
                <span class="header-brand-text-alt">App</span>Strap<span class="header-brand-text-alt">.</span>
              </h1>
            </a>
            <div class="header-divider d-none d-lg-block"></div>
            <div class="header-slogan d-none d-lg-block">Bootstrap 4 Theme</div>
          </div>
          <!-- other header content -->
          <div class="header-block order-12">
            <div class="d-none d-lg-block"> <a class="btn btn-link btn-sm header-btn" href="#">Contact Us</a> <a class="btn btn-outline-primary btn-rounded btn-sm header-btn" href="#">Get Quote Now</a> </div>

            <!--Search trigger -->
            <a href="#search" class="btn btn-icon btn-link header-btn float-right order-11" data-toggle="search-form" data-target=".header-search"><i class="fa fa-search fa-flip-horizontal search-icon"></i></a>

            <!-- mobile collapse menu button - data-toggle="collapse" = default BS menu - data-toggle="off-canvas" = Off-cavnas Menu - data-toggle="overlay" = Overlay Menu -->
            <a href="#top" class="btn btn-link btn-icon header-btn float-right d-lg-none" data-toggle="off-canvas" data-target=".navbar-main" data-settings='{"cloneTarget":true, "targetClassExtras": "navbar-offcanvas"}'> <i class="fa fa-bars"></i> </a>
            <!--Show/hide trigger for #offcanvas-sidebar -->
            <a href="#" title="Click me you'll get a surprise" class="btn btn-icon btn-link header-btn float-right order-last" data-toggle="off-canvas" data-target="#offcanvas-sidebar" data-settings='{"cloneTarget":false}'> <i class="ion-android-more-vertical"></i> </a>
          </div>
        </div>
      </div>

      <div class="navbar navbar-expand-md">
        <!--everything within this div is collapsed on mobile-->
        <div class="navbar-main collapse bg-dark navbar-dark">
          <!--main navigation-->
          <ul class="nav navbar-nav container dropdown-effect-fade">

            <!-- Homepages -->
            <li class="nav-item dropdown dropdown-mega-menu">
              <a href="#" class="nav-link dropdown-toggle" id="indexs-drop" data-toggle="dropdown" data-hover="dropdown"> <i class="fa fa-home nav-link-icon"></i> <span class="d-none">Home</span> </a>
              <!-- Dropdown Menu - mega menu-->
              <div class="dropdown-menu">
                <div class="row">
                  <div class="col-lg-6">
                    <h4 class="dropdown-header d-none d-lg-block mt-0">
                      Classic Homepages
                    </h4>
                    <div class="row">
                      <div class="col-lg-6"> <a href="intro.html" class="dropdown-item">Intro</a> <a href="index.html" class="dropdown-item">Homepage (default)</a> <a href="index-static.html" class="dropdown-item">Homepage No Slider</a> <a href="index-boxed.html" class="dropdown-item">Homepage Boxed</a> <a href="index-promo-header.html" class="dropdown-item">Promo Header</a> <a href="index-coming-soon.html" class="dropdown-item">Coming Soon</a> <a href="index-coming-soon-newsletter.html" class="dropdown-item">Coming Soon with newsletter</a> <a href="index-onepager.html" class="dropdown-item">One Pager Slideshow</a> </div>
                      <div class="col-lg-6"> <a href="index-onepager-image.html" class="dropdown-item">One Pager Image</a> <a href="index-onepager-image-full-height.html" class="dropdown-item">One Pager Image Full Height</a> <a href="index-onepager-bg-slideshow.html" class="dropdown-item">One Pager Background Slideshow</a> <a href="index-onepager-dotted-menu-left.html" class="dropdown-item">One Pager Dotted Menu Left</a> <a href="index-onepager-dotted-menu-right.html" class="dropdown-item">One Pager Dotted Menu Right</a> <a href="index-onepager-dotted-menu-bottom.html" class="dropdown-item">One Pager Dotted Menu Bottom</a> <a href="index-onepager-submenu.html" class="dropdown-item">One Pager Submenu</a> </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <h4 class="dropdown-header d-none d-lg-block mt-0">
                      Industry/Niche Homepages
                    </h4>
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
              <a href="#" class="nav-link dropdown-toggle" id="pages-drop" data-toggle="dropdown" data-hover="dropdown">Pages</a>
              <!-- Menu -->
              <div class="dropdown-menu">
                <div class="dropdown dropdown-submenu">
                  <a href="about.html" class="dropdown-item dropdown-toggle" id="about-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">About</a>
                  <!-- Dropdown Menu -->
                  <div class="dropdown-menu" role="menu" aria-labelledby="about-drop"> <a href="about.html" class="dropdown-item">About Us Basic</a> <a href="about-extended.html" class="dropdown-item">About Us Extended</a> <a href="about-me.html" class="dropdown-item">About Me</a> <a href="team.html" class="dropdown-item">Team List</a> <a href="team-grid.html" class="dropdown-item">Team Grid</a> <a href="team-member.html" class="dropdown-item">Team Member</a> <a href="contact.html" class="dropdown-item">Contact</a> <a href="contact.php" class="dropdown-item">Contact (PHP)</a> </div>
                </div>
                <div class="dropdown dropdown-submenu">
                  <a href="blog.html" class="dropdown-item dropdown-toggle" id="blog-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Blog</a>
                  <!-- Dropdown Menu -->
                  <div class="dropdown-menu"> <a href="blog.html" class="dropdown-item">Blog List Right Sidebar</a> <a href="blog-leftbar.html" class="dropdown-item">Blog List Left Sidebar</a> <a href="blog-timeline.html" class="dropdown-item">Blog List Timeline</a> <a href="blog-grid.html" class="dropdown-item">Blog List Grid</a> <a href="blog-post.html" class="dropdown-item">Blog Post</a> <a href="blog-post-video.html" class="dropdown-item">Blog Post With Video</a> <a href="blog-post-slideshow.html" class="dropdown-item">Blog Post With Slideshow</a> <a href="blog-post-audio.html" class="dropdown-item">Blog Post With Audio Clip</a> </div>
                </div>
                <div class="dropdown dropdown-submenu">
                  <a href="pricing.html" class="dropdown-item dropdown-toggle" id="pricing-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Pricing</a>
                  <!-- pricing pages -->
                  <div class="dropdown-menu"> <a href="pricing.html" class="dropdown-item">Pricing Plans</a> <a href="pricing-tables.html" class="dropdown-item">Comparison Tables</a> </div>
                </div>
                <div class="dropdown dropdown-submenu">
                  <a href="timeline.html" class="dropdown-item dropdown-toggle" id="timeline-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Timeline</a>
                  <!-- timelines -->
                  <div class="dropdown-menu" role="menu" aria-labelledby="timeline-drop"> <a href="timeline.html" class="dropdown-item">Timeline Default</a> <a href="timeline-left.html" class="dropdown-item">Timeline Left</a> <a href="timeline-right.html" class="dropdown-item">Timeline Right</a> <a href="timeline-stacked.html" class="dropdown-item">Timeline Stacked</a> </div>
                </div>
                <a href="customers.html" class="dropdown-item">Customers</a> <a href="features.html" class="dropdown-item">Features/Services</a> <a href="login.html" class="dropdown-item">Login</a> <a href="signup.html" class="dropdown-item">Sign Up</a> <a href="starter.html" class="dropdown-item">Starter Snippets</a> <a href="page-404.html" class="dropdown-item">404 Error</a> <a href="page-maintenance.html" class="dropdown-item">Maintenance</a> <a href="page-site-status.html" class="dropdown-item">Site Status</a> <a href="page-titles.html" class="dropdown-item">Page Titles</a>
              </div>
            </li>

            <!-- Features -->
            <li class="nav-item dropdown active">
              <a href="#" class="nav-link dropdown-toggle" id="more-drop" data-toggle="dropdown" data-hover="dropdown">Features</a>
              <!-- Dropdown Menu -->
              <div class="dropdown-menu">
                <div class="dropdown dropdown-submenu dropdown-menu-left active">
                  <a href="headers.html" class="dropdown-item dropdown-toggle" id="headers-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Header Variations (19)</a>
                  <!-- Header variations -->
                  <div class="dropdown-menu" role="menu" aria-labelledby="headers-drop"> <a href="header-elements.html" class="dropdown-item">Header Elements</a> <a href="header-offcanvas.html" class="dropdown-item">Header Off Canvas</a> <a href="header-collapse-menu.html" class="dropdown-item">Header Collapse Menu</a> <a href="header-overlay-menu-responsive.html" class="dropdown-item">Header Responsive Overlay Menu</a> <a href="header-overlay-menu.html" class="dropdown-item">Header Overlay Menu</a> <a href="header-collapse-menu-responsive.html" class="dropdown-item">Header Responsive Collapse Menu</a> <a href="header-fullwidth.html" class="dropdown-item">Header Full Width</a> <a href="header-navbar-below.html" class="dropdown-item active">Header Navbar Below</a> <a href="header-compact.html" class="dropdown-item">Header Compact</a> <a href="header-dark.html" class="dropdown-item">Header Dark</a> <a href="header-primary.html" class="dropdown-item">Header Primary</a> <a href="header-transparent.html" class="dropdown-item">Header Transparent</a> <a href="header-transparent-dark.html" class="dropdown-item">Header Transparent Dark</a> <a href="header-transparent-primary.html" class="dropdown-item">Header Transparent Primary</a> <a href="header-translucent.html" class="dropdown-item">Header Translucent</a> <a href="header-translucent-dark.html" class="dropdown-item">Header Translucent Dark</a> <a href="header-translucent-primary.html" class="dropdown-item">Header Translucent Primary</a> <a href="header-nav-left.html" class="dropdown-item">Header Nav Left</a> <a href="header-nav-fullheight.html" class="dropdown-item">Header Nav Full Height</a> <a href="header-bottom.html" class="dropdown-item">Header Bottom</a> </div>
                </div>
                <div class="dropdown dropdown-submenu dropdown-menu-left">
                  <a href="headers.html" class="dropdown-item dropdown-toggle" id="footers-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Footer Variations (5)</a>
                  <!-- Header variations -->
                  <div class="dropdown-menu" role="menu" aria-labelledby="footers-drop"> <a href="footer-light.html" class="dropdown-item">Footer Light</a> <a href="footer-compact.html" class="dropdown-item">Footer Compact</a> <a href="footer-menus.html" class="dropdown-item">Footer Menus</a> <a href="footer-compact-light.html" class="dropdown-item">Footer Compact Light</a> <a href="footer-menus-light.html" class="dropdown-item">Footer Menus Light</a> </div>
                </div>
                <div class="dropdown dropdown-submenu dropdown-menu-left">
                  <a href="sliders.html" class="dropdown-item dropdown-toggle" id="slider-drop" data-toggle="dropdown" data-hover="dropdown" data-close-others="false">Sliders</a>
                  <!-- Sliders -->
                  <div class="dropdown-menu">
                    <!--Slider Revolution -->
                    <h4 class="dropdown-header">
                      Slider Revolution
                    </h4>
                    <a href="slider-revolution-default.html" class="dropdown-item">Default</a> <a href="slider-revolution-full.html" class="dropdown-item">Full Width</a> <a href="slider-revolution-behind.html" class="dropdown-item">Behind Navbar</a> <a href="slider-revolution-boxed.html" class="dropdown-item">Boxed</a>
                    <!--Backstretch Slider-->
                    <h4 class="dropdown-header">
                      Backstretch
                    </h4>
                    <a href="backstretch.html" class="dropdown-item">Background Slideshow</a> <a href="backstretch-boxed.html" class="dropdown-item">Boxed Background Slideshow</a>
                    <!--Flexslider-->
                    <h4 class="dropdown-header">
                      Flexslider
                    </h4>
                    <a href="flexslider-default.html" class="dropdown-item">Default</a> <a href="flexslider-full.html" class="dropdown-item">Full Width</a> <a href="flexslider-behind.html" class="dropdown-item">Behind Navbar</a> <a href="flexslider-boxed.html" class="dropdown-item">Boxed</a>
                  </div>
                </div>
                <a href="grid.html" class="dropdown-item">Grid System</a> <a href="flexbox.html" class="dropdown-item">Flexbox!</a> <a href="colours.html" class="dropdown-item">Theme Colours</a>
              </div>
            </li>

            <!-- Shop megamenu -->
            <li class="nav-item dropdown dropdown-mega-menu dropdown-mega-menu-75">
              <a href="#" class="nav-link dropdown-toggle" id="shop-drop" data-toggle="dropdown" data-hover="dropdown">Shop</a>
              <!-- Dropdown Menu - mega menu-->
              <div class="dropdown-menu dropdown-menu-right">
                <div class="row">
                  <div class="col-lg-6">
                    <h3 class="dropdown-header mt-0 pt-0">
                      Pages
                    </h3>
                    <a href="shop.html" class="dropdown-item">Shop Homepage</a> <a href="shop-cart.html" class="dropdown-item">Cart</a> <a href="shop-checkout.html" class="dropdown-item">Checkout</a> <a href="shop-confirmation.html" class="dropdown-item">Confirmation</a> <a href="shop-grid.html" class="dropdown-item">Products Grid</a> <a href="shop-list.html" class="dropdown-item">Products List</a> <a href="shop-product.html" class="dropdown-item">Product View</a>
                  </div>
                  <div class="col-lg-6 d-none d-lg-block">
                    <h3 class="dropdown-header mt-0 pt-0">
                      Widget <span class="badge badge-primary text-uppercase">Hot</span>
                    </h3>
                    <div class="dropdown-widget">
                      <!-- Shop product carousel Uses Owl Carousel plugin All options here are customisable from the data-owl-carousel-settings="{OBJECT}" item via data- attributes: http://www.owlgraphic.com/owlcarousel/#customizing ie. data-settings="{"items": "4", "lazyLoad":"true", "navigation":"true"}" -->
                      <div class="products-carousel owl-nav-over" data-toggle="owl-carousel" data-owl-carousel-settings='{"items": 1,"responsive":{"0":{"items":1,"nav":true, "dots":false}}}'>
                        <a href="#">
                          <img src="assets/img/shop/jacket-1.jpg" alt="Item 1 image" class="lazyOwl img-fluid" />
                        </a>
                        <a href="#">
                          <img src="assets/img/shop/jacket-2.jpg" alt="Item 2 image" class="lazyOwl img-fluid" />
                        </a>
                        <a href="#">
                          <img src="assets/img/shop/jacket-3.jpg" alt="Item 3 image" class="lazyOwl img-fluid" />
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </li>

            <!-- Elements/shortcodes -->
            <li class="nav-item dropdown dropdown-mega-menu">
              <a href="#" class="nav-link dropdown-toggle" id="elements-drop" data-toggle="dropdown" data-hover="dropdown">Elements</a>
              <!-- Dropdown Menu - mega menu-->
              <div class="dropdown-menu">
                <h4 class="dropdown-header d-none d-lg-block mt-0">
                  42 pages of elements/snippets <i class="new-tag">Updated!</i>
                </h4>
                <div class="row">
                  <div class="col-lg-3"> <a href="elements-alerts.html" class="dropdown-item">Alerts</a> <a href="elements-animation.html" class="dropdown-item">Animations</a> <a href="elements-badges.html" class="dropdown-item">Badges</a> <a href="elements-button-groups.html" class="dropdown-item">Button Groups</a> <a href="elements-buttons.html" class="dropdown-item">Buttons</a> <a href="elements-cards.html" class="dropdown-item">Cards</a> <a href="elements-carousels.html" class="dropdown-item">Carousels</a> <a href="elements-collapse.html" class="dropdown-item">Collapse / Accordions</a> <a href="elements-colour-utils.html" class="dropdown-item">Colours Utils</a> <a href="elements-counters.html" class="dropdown-item">Counters</a> <a href="elements-ctas.html" class="dropdown-item">Call To Action Blocks</a> </div>
                  <div class="col-lg-3"> <a href="elements-dividers.html" class="dropdown-item">Dividers</a> <a href="elements-dropdowns.html" class="dropdown-item">Dropdowns</a> <a href="elements-forms.html" class="dropdown-item">Forms</a> <a href="elements-forms-input-groups.html" class="dropdown-item">Forms Input Groups</a> <a href="elements-icons.html" class="dropdown-item">Icons</a> <a href="elements-icons-bootstrap-icons.html" class="dropdown-item">Icons: Bootstrap</a> <a href="elements-icons-flags.html" class="dropdown-item">Icons: Flags</a> <a href="elements-icons-fontawesome.html" class="dropdown-item">Icons: Font Awesome</a> <a href="elements-icons-ionicons.html" class="dropdown-item">Icons: Ionicons</a> <a href="elements-icons-linearicons.html" class="dropdown-item">Icons: Linearicons</a> <a href="elements-icons-lineawesome.html" class="dropdown-item">Icons: Line Awesome</a> </div>
                  <div class="col-lg-3"> <a href="elements-list-groups.html" class="dropdown-item">List Groups</a> <a href="elements-modals.html" class="dropdown-item">Modals</a> <a href="elements-modals-onload.html" class="dropdown-item">Modals Onload</a> <a href="elements-navs.html" class="dropdown-item">Navs</a> <a href="elements-navs-tabbable.html" class="dropdown-item">Tabbable Navs</a> <a href="elements-overlays.html" class="dropdown-item">Overlays</a> <a href="elements-progressbars.html" class="dropdown-item">Progress Bars</a> <a href="elements-select-pickers.html" class="dropdown-item">Select Picker</a> <a href="elements-shadows.html" class="dropdown-item">Shadows</a> <a href="elements-social-media.html" class="dropdown-item">Social Media Branding</a> <a href="elements-spacers.html" class="dropdown-item">Spacers</a> </div>
                  <div class="col-lg-3"> <a href="elements-spinners.html" class="dropdown-item">Spinners</a> <a href="elements-tables.html" class="dropdown-item">Tables</a> <a href="elements-toasts.html" class="dropdown-item">Toasts</a> <a href="elements-tooltips-popovers.html" class="dropdown-item">Tooltips & Popovers</a> <a href="elements-type-effect.html" class="dropdown-item">Type Effect</a> <a href="elements-typography.html" class="dropdown-item">Typography</a> <a href="elements-utils.html" class="dropdown-item">Utilities</a> <a href="elements-video-blocks.html" class="dropdown-item">Video Blocks</a> <a href="page-titles.html" class="dropdown-item">Page Titles</a> </div>
                </div>
              </div>
            </li>

            <!-- Mega menu example -->
            <li class="nav-item dropdown dropdown-persist dropdown-mega-menu dropdown-mega-menu-50">
              <a href="#" class="nav-link dropdown-toggle" id="megamenu-drop" data-toggle="dropdown" data-hover="dropdown">Mega Menu</a>
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
                        <p class="text-sm mb-0">Brevitas camur dolus lenis neque pertineo singularis te.</p>
                      </div>
                      <div class="col-lg-4 py-2">
                        <i class="fa fa-wrench icon-3x op-6"></i>
                        <h5 class="mt-2">
                          Free Support
                        </h5>
                        <p class="text-sm mb-0">Appellatio consequat humo lobortis praemitto sino.</p>
                      </div>
                      <div class="col-lg-4 py-2">
                        <i class="fa fa-rocket icon-3x op-6"></i>
                        <h5 class="mt-2">
                          Free Upgrades
                        </h5>
                        <p class="text-sm mb-0">Abigo commodo exputo. Brevitas damnum duis esse os paratus roto zelus.</p>
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
                        <p class="text-sm mb-0">Aptent dignissim iustum suscipere.</p>
                      </div>
                      <div class="col-lg-4 py-2">
                        <i class="fa fa-users icon-3x op-6"></i>
                        <h5 class="mt-2">
                          Multiuser
                        </h5>
                        <p class="text-sm mb-0">Commodo ea jumentum luctus magna nostrud oppeto premo qui typicus.</p>
                      </div>
                      <div class="col-lg-4 py-2">
                        <i class="fa fa-plug icon-3x op-6"></i>
                        <h5 class="mt-2">
                          Plug n play
                        </h5>
                        <p class="text-sm mb-0">Decet gravis in iriure.</p>
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

  <!-- ======== @Region: #content ======== -->
  <div id="content">
    <div class="container" id="about">
      <div class="row">
        <!-- sidebar -->
        <div class="col-md-3">

          <!-- Sections Menu-->
          <div class="nav nav-section-menu">
            <span class="nav-header">Header Options</span>
            <a href="header-bottom.html" class="nav-link first">Header Bottom <i class="fa fa-angle-right"></i></a>
            <a href="header-collapse-menu.html" class="nav-link">Header Collapse Menu <i class="fa fa-angle-right"></i></a>
            <a href="header-collapse-menu-responsive.html" class="nav-link">Header Responsive Collapse Menu <i class="fa fa-angle-right"></i></a>
            <a href="header-compact.html" class="nav-link">Header Compact <i class="fa fa-angle-right"></i></a>
            <a href="header-dark.html" class="nav-link">Header Dark <i class="fa fa-angle-right"></i></a>
            <a href="header-elements.html" class="nav-link">Header Elements <i class="fa fa-angle-right"></i></a>
            <a href="header-fullwidth.html" class="nav-link">Header Full Width <i class="fa fa-angle-right"></i></a>
            <a href="header-nav-fullheight.html" class="nav-link">Header Nav Full Height <i class="fa fa-angle-right"></i></a>
            <a href="header-nav-left.html" class="nav-link">Header Nav Left <i class="fa fa-angle-right"></i></a>
            <a href="header-navbar-below.html" class="nav-link active">Header Navbar Below <i class="fa fa-angle-right"></i></a>
            <a href="header-offcanvas.html" class="nav-link">Header Off Canvas <i class="fa fa-angle-right"></i></a>
            <a href="header-overlay-menu.html" class="nav-link">Header Overlay Menu <i class="fa fa-angle-right"></i></a>
            <a href="header-overlay-menu-responsive.html" class="nav-link">Header Responsive Overlay Menu <i class="fa fa-angle-right"></i></a>
            <a href="header-primary.html" class="nav-link">Header Primary <i class="fa fa-angle-right"></i></a>
            <a href="header-translucent.html" class="nav-link">Header Translucent <i class="fa fa-angle-right"></i></a>
            <a href="header-translucent-dark.html" class="nav-link">Header Translucent Dark <i class="fa fa-angle-right"></i></a>
            <a href="header-translucent-primary.html" class="nav-link">Header Translucent Primary <i class="fa fa-angle-right"></i></a>
            <a href="header-transparent.html" class="nav-link">Header Transparent <i class="fa fa-angle-right"></i></a>
            <a href="header-transparent-dark.html" class="nav-link">Header Transparent Dark <i class="fa fa-angle-right"></i></a>
            <a href="header-transparent-primary.html" class="nav-link">Header Transparent Primary <i class="fa fa-angle-right"></i></a>
          </div>
        </div>
        <!--main content-->
        <div class="col-md-9">
          <h2 class="title-divider">
            <span>Main Menu Below Header</span>
            <small>For when you need more navigation options.</small>
          </h2>

          <p>To make the navbar show below the header do the following:</p>
          <ul class="list-group mb-1">
            <li class="list-group-item">
              <span class="badge badge-primary">1</span> Move the
              <code>.navbar</code>
              element outside of the
              <code>.header > .header-inner</code>
              element
            </li>
            <li class="list-group-item">
              <span class="badge badge-primary">2</span> Add the class
              <code>.container</code>
              to the
              <code>.navbar-nav</code>
              element.
            </li>
            <li class="list-group-item">
              <span class="badge badge-primary">3</span> Add the classes
              <code>.bg-dark</code>
              and
              <code>.navbar-dark</code>
              to the
              <code>.navbar-main</code>
              element.
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  <!-- ======== @Region: #content-below ======== -->
  <div id="content-below">
    <!-- Awesome features call to action -->
    <div class="bg-primary bg-op-9 text-white py-4">
      <div class="container">
        <div class="row text-center text-lg-left align-items-lg-center">
          <div class="col-12 col-lg-7 text-white">
            <h3 class="font-weight-bold my-0 text-uppercase">
              Awesome Features
            </h3>
            <p class="font-weight-normal op-9 my-0"> <i class="ion-android-checkmark-circle"></i> 99.9% Uptime <i class="ion-android-checkmark-circle ml-lg-3"></i> Free Upgrades <i class="ion-android-checkmark-circle ml-lg-3"></i> Fully Responsive <i class="ion-android-checkmark-circle ml-lg-3"></i> Bug Free </p>
          </div>
          <div class="col-12 col-lg-5 py-2 text-lg-right">
            <a href="https://wrapbootstrap.com/theme/appstrap-responsive-website-template-WB0C6D0H4?ref=tme" class="btn btn-xlg btn-white btn-rounded shadow-lg bg-light bg-op-8 bg-hover-white">Get AppStrap<i class="fa fa-arrow-right ml-2 mt-1"></i></a>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- ======== @Region: #footer ======== -->
  <footer id="footer" class="p-0">
    <div class="container pt-6 pb-5">
      <div class="row">
        <div class="col-md-4">
          <!--@todo: replace with company contact details-->
          <h4 class="text-uppercase text-white">
            Contact Us
          </h4>
          <address>
            <ul class="list-unstyled">
              <li>
                <abbr title="Phone"><i class="fa fa-phone fa-fw"></i></abbr>
                019223 8092344
              </li>
              <li>
                <abbr title="Email"><i class="fa fa-envelope fa-fw"></i></abbr>
                info@appstraptheme.com
              </li>
              <li>
                <abbr title="Address"><i class="fa fa-home fa-fw"></i></abbr>
                Sunshine House, Sunville. SUN12 8LU.
              </li>
            </ul>
          </address>
        </div>

        <div class="col-md-4">
          <h4 class="text-uppercase text-white">
            About Us
          </h4>
          <p>Making the web a prettier place one template at a time! We make beautiful, quality, responsive Drupal & web templates!</p>
        </div>

        <div class="col-md-4">
          <h4 class="text-uppercase text-white">
            Newsletter
          </h4>
          <p>Stay up to date with our latest news and product releases by signing up to our newsletter.</p>
          <!--@todo: replace with mailchimp code-->
          <form>
            <div class="input-group">
              <label class="sr-only" for="email-field">Email</label>
              <input type="text" class="form-control" id="email-field" placeholder="Email">
              <span class="input-group-append">
                <button class="btn btn-primary" type="button">Go!</button>
              </span>
            </div>
          </form>
        </div>
      </div>

    </div>
    <hr class="my-0 hr-blank op-2" />
    <!--@todo: replace with company copyright details-->
    <div class="bg-inverse-dark text-sm py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <p class="mb-0">Site template by <a href="appstraptheme.com" class="footer-link">AppStrap</a> | Copyright 2020 &copy; AppStrap</p>
          </div>
          <div class="col-md-6">
            <ul class="list-inline footer-links float-md-right mb-0">
              <li class="list-inline-item"><a href="#">Terms</a></li>
              <li class="list-inline-item"><a href="#">Privacy</a></li>
              <li class="list-inline-item"><a href="#">Contact Us</a></li>
            </ul>
          </div>
        </div>
        <a href="#top" class="btn btn-icon btn-dark pos-fixed pos-b pos-r mr-3 mb-3 scroll-state-hidden" title="Back to top" data-scroll="scroll-state"><i class="fa fa-chevron-up"></i></a>
      </div>
    </div>
  </footer>

  <!--Off canvas region/sidebar (legacy .header-hidden region) -->
  <aside id="offcanvas-sidebar" class="bg-dark text-white js-offcanvas">
    <a class="js-offcanvas-close c-button c-button--close-right btn btn-sm btn-icon btn-link text-white pos-absolute pos-t pos-r mt-2 mr-2 op-7 pos-zindex-1 pos-zindex-10"> <i class="la la-close"></i> </a>
    <div class="py-6 px-4">
      <h5 class="text-uppercase text-letter-spacing">
        About Us
      </h5>
      <p class="text-sm">Making the web a prettier place one template at a time! We make beautiful, quality, responsive Drupal & web templates!</p>
      <a href="about.html" class="btn btn-sm btn-primary">Find out more</a>
      <hr class="hr-light op-2 my-4" />
      <!--@todo: replace with company contact details-->
      <h5 class="text-uppercase text-letter-spacing">
        Contact Us
      </h5>
      <address>
        <p class="mb-1 text-sm">
          <abbr title="Phone"><i class="fa fa-phone"></i></abbr>
          019223 8092344
        </p>
        <p class="mb-1 text-sm">
          <abbr title="Email"><i class="fa fa-envelope"></i></abbr>
          info@themelize.me
        </p>
        <p class="mb-0 text-sm">
          <abbr title="Address"><i class="fa fa-home"></i></abbr>
          Sunshine House, Sunville. SUN12 8LU.
        </p>
      </address>
    </div>
  </aside>
  <!-- Style switcher - demo only - @todo: remove in production -->
  <div class="colour-switcher">
    <a href="#" class="colour-switcher-toggle" data-toggle="class" data-target=".colour-switcher"> <i class="fa fa-paint-brush"></i> </a>
    <h5 class="text-uppercase my-0">
      Theme Colours
    </h5>
    <hr />
    <div class="theme-colours"> <a href="#green" class="green active" data-toggle="tooltip" data-placement="right" data-original-title="Green (Default)">Green</a> <a href="#red" class="red" data-toggle="tooltip" data-placement="right" data-original-title="Red">Red</a> <a href="#blue" class="blue" data-toggle="tooltip" data-placement="right" data-original-title="Blue">Blue</a> <a href="#purple" class="purple" data-toggle="tooltip" data-placement="right" data-original-title="Purple">Purple</a> <a href="#pink" class="pink" data-toggle="tooltip" data-placement="right" data-original-title="Pink">Pink</a> <a href="#orange" class="orange" data-toggle="tooltip" data-placement="right" data-original-title="Orange">Orange</a> <a href="#lime" class="lime" data-toggle="tooltip" data-placement="right" data-original-title="Lime">Lime</a> <a href="#blue-dark" class="blue-dark" data-toggle="tooltip" data-placement="right" data-original-title="Blue-dark">Blue-dark</a> <a href="#red-dark" class="red-dark" data-toggle="tooltip" data-placement="right" data-original-title="Red-dark">Red-dark</a> <a href="#brown" class="brown" data-toggle="tooltip" data-placement="right" data-original-title="Brown">Brown</a> <a href="#cyan-dark" class="cyan-dark" data-toggle="tooltip" data-placement="right" data-original-title="Cyan-dark">Cyan-dark</a> <a href="#yellow" class="yellow" data-toggle="tooltip" data-placement="right" data-original-title="Yellow">Yellow</a> <a href="#slate" class="slate" data-toggle="tooltip" data-placement="right" data-original-title="Slate">Slate</a> <a href="#olive" class="olive" data-toggle="tooltip" data-placement="right" data-original-title="Olive">Olive</a> <a href="#teal" class="teal" data-toggle="tooltip" data-placement="right" data-original-title="Teal">Teal</a> <a href="#green-bright" class="green-bright" data-toggle="tooltip" data-placement="right" data-original-title="Green-bright">Green-bright</a> </div>
    <hr />
    <p class="text-xs text-muted">Cookies are NOT enabled so colour selection is not persistent.</p>
    <p class="text-xs my-0"><a href="index.html">Back to main homepage</a></p>
    <p class="text-xs my-0"><a href="intro.html">Back to intro page</a></p>
  </div>
  <!--Hidden elements - excluded from jPanel Menu on mobile-->
  <div class="hidden-elements js-off-canvas-exclude">
    <!--@modal - signup modal-->
    <div class="modal fade" id="signup-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog">
        <form action="signup.html">
          <div class="modal-content">
            <div class="modal-header bg-light">
              <h4 class="modal-title">
                Sign Up
              </h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <h6 class="op-8">
                  Price Plan
                </h6>
                <select class="form-control">
                  <option>Basic</option>
                  <option>Pro</option>
                  <option>Pro +</option>
                </select>
              </div>
              <hr />

              <h6 class="op-8">
                Account Information
              </h6>
              <div class="form-group">
                <label class="sr-only" for="signup-first-name">First Name</label>
                <input type="text" class="form-control" id="signup-first-name" placeholder="First name">
              </div>
              <div class="form-group">
                <label class="sr-only" for="signup-last-name">Last Name</label>
                <input type="text" class="form-control" id="signup-last-name" placeholder="Last name">
              </div>
              <div class="form-group">
                <label class="sr-only" for="signup-username">Userame</label>
                <input type="text" class="form-control" id="signup-username" placeholder="Username">
              </div>
              <div class="form-group">
                <label class="sr-only" for="signup-email">Email address</label>
                <input type="email" class="form-control" id="signup-email" placeholder="Email address">
              </div>
              <div class="form-group">
                <label class="sr-only" for="signup-password">Password</label>
                <input type="password" class="form-control" id="signup-password" placeholder="Password">
              </div>
              <div class="form-check text-xs">
                <label class="form-check-label op-8">
                  <input type="checkbox" value="term" class="form-check-input mt-1">
                  I agree with the Terms and Conditions.
                </label>
              </div>
            </div>
            <div class="modal-footer bg-light py-3">
              <div class="d-flex align-items-center">
                <button type="button" class="btn btn-primary">Sign Up</button>
                <button type="button" class="btn btn-link ml-1" data-dismiss="modal" aria-hidden="true">Cancel</button>
              </div>
              <p class="text-xs text-right text-lh-tight op-8 my-0 ml-auto">Already signed up? <a href="login.html">Login here</a></p>
            </div>
          </div>
          <!-- /.modal-content -->
        </form>
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->

    <!--@modal - login modal-->
    <div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <form action="login.html">
            <div class="modal-header bg-light">
              <h4 class="modal-title">
                Login
              </h4>
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
              <div class="form-group">
                <label class="sr-only" for="login-email">Email</label>
                <input type="email" id="login-email" class="form-control email" placeholder="Email">
              </div>
              <div class="form-group mb-0">
                <label class="sr-only" for="login-password">Password</label>
                <input type="password" id="login-password" class="form-control password mb-1" placeholder="Password">
              </div>
            </div>
            <div class="modal-footer bg-light py-3">
              <div class="d-flex align-items-center">
                <button type="button" class="btn btn-primary">Login</button>
                <button type="button" class="btn btn-link ml-1" data-dismiss="modal" aria-hidden="true">Cancel</button>
              </div>
              <p class="text-xs text-right text-lh-tight op-8 my-0 ml-auto">
                Not a member? <a href="#" class="signup">Sign up now!</a>
                <br />
                <a href="#">Forgotten password?</a>
              </p>
            </div>
        </div>
        <!-- /.modal-content -->
        </form>
      </div>
      <!-- /.modal-dialog -->
    </div>
    <!-- /.modal -->
  </div>


  <!--jQuery 3.3.1 via CDN -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <!-- Popper 1.16.0 via CDN, needed for Bootstrap Tooltips & Popovers -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

  <!-- Bootstrap v4.5.0 JS via CDN -->
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>


  <!-- JS plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 To disable this and load plugin assets manually simple add data-plugins-manual=true to the body tag -->

  <!--Custom scripts & AppStrap API integration -->
  <script src="assets/js/custom-script.js"></script>
  <!--AppStrap scripts mainly used to trigger libraries/plugins -->
  <script src="assets/js/script.min.js"></script>
</body>

</html>