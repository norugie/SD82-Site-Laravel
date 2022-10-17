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

        <!-- ======== @SiteSection: #content Site content ======== -->
        @yield('content')

        <!-- ======== @SiteSection: #footer Footer content and scripts ======== -->
        @include('layout.components.footer')
    </body>
</html>