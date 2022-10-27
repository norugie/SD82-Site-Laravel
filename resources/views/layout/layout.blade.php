<!DOCTYPE html>
<html lang="en">
    <!-- ======== @SiteSection: Header ======== -->
    @include('layout.components.header')

    <!-- ======== @SiteSection: Body ======== -->
    <body class="page page-index navbar-layout-navbar-below">

        <!-- @Plugin: Page loading indicator -->
        <div class="page-loader" data-toggle="page-loader"></div>

        <!-- ======== @SiteSection: #header Navbar ======== -->
        @include('layout.components.navbar')

        <div id="content">
            <div class="container">
                <h2 class="title-divider">
                    <span>{{ strtoupper($page) }} PAGE</span>
                </h2>
                <div class="row">
                    <div class="col-md-9">
                        <!-- ======== @SiteSection: #content Site content ======== -->
                        @yield('content')
                    </div>

                    <div class="col-md-3 sidebar-right">
                        <!-- ======== @SiteSection: #content Site sidebar ======== -->
                        @include('layout.components.sidebar')
                    </div>
                </div>
            </div>
        </div>

        <!-- ======== @SiteSection: #footer Footer content and scripts ======== -->
        @include('layout.components.footer')
    </body>
</html>