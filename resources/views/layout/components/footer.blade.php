<footer id="footer" class="pt-3 pb-3">
    <div class="container pt-3 pb-3">
        <div class="row">
            <div class="col-md-4">
                <!--@todo: replace with company contact details-->
                <h3 class="text-white text-uppercase font-weight-bold">
                    CMSD<span class="text-primary">82</span>
                </h3>
                <address>
                    <p>3211 Kenney St.<br>Terrace<br>British Columbia<br>Canada V8G 3E9</p>
                </address>
            </div>

            <div class="col-md-4">
                <h4 class="text-uppercase text-white">Contact Us</h4>
                <address>
                    <ul class="list-unstyled">
                        <li>
                            <abbr title="Phone"><i class="fa fa-phone fa-fw"></i></abbr>
                            +1 (250) XXX-XXXX
                        </li>
                        <li>
                            <abbr title="Email"><i class="fa fa-envelope fa-fw"></i></abbr>
                            sd82@cmsd.bc.ca
                        </li>
                    </ul>
                </address>
                <hr class="my-4 hr-white op-1" />
                <button type="button" class="mb-1 btn btn-primary">Go to Contact Page</button>
            </div>

            <div class="col-md-4">
                <h4 class="text-uppercase text-white">Social media</h4>
                <p>Stay up to date with our latest news by following us in our social media!</p>
                <div class="mt-3 mb-4 mb-lg-0">
                    <a href="#" class="btn btn-icon btn-primary btn-rounded btn-flat"> <i class="fab fa-twitter"></i> <span class="sr-only">Fa twitter</span> </a>
                    <a href="#" class="btn btn-icon btn-primary btn-rounded btn-flat"> <i class="fab fa-facebook-f"></i> <span class="sr-only">Fa facebook f</span> </a>
                </div>
            </div>
        </div>
    </div>
    <hr class="my-0 hr-white op-2" />
    <div class="bg-inverse-dark text-sm pt-3 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p class="mb-0">Copyright 2022 &copy; SD82 (CMSD) | <a href="#" class="footer-link">Privacy Policy</a></p>
                </div>
                <div class="col-md-6">
                    <p class="float-md-right mb-0">Design template by <a href="http://themelize.me/" class="footer-link">Themelize.me</a></p>
                </div>
            </div>
        </div>
    </div>
</footer>

<!-- Jquery Core Js -->
<script src="/plugins/jquery/jquery.min.js"></script>

<!-- Popper Plugin Js -->
<script src="/plugins/popper/popper.js"></script>

<!-- Bootstrap v4.5.0 JS via CDN -->
<script src="/plugins/bootstrap/js/bootstrap.js"></script>


<!-- JS plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 To disable this and load plugin assets manually simple add data-plugins-manual=true to the body tag -->

<!--Custom scripts & AppStrap API integration -->
<script src="/assets/js/custom-script.js"></script>

<!--AppStrap scripts mainly used to trigger libraries/plugins -->
<script src="/assets/js/script.min.js"></script>

@yield('custom-js')