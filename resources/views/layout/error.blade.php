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
                <div class="row pt-5 pb-5">
                    <div class="col-md-12">
                        <!-- ======== @SiteSection: #content Site content ======== -->
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

        <!-- ======== @SiteSection: #footer Footer content and scripts ======== -->
        @include('layout.components.footer')
    </body>
</html>