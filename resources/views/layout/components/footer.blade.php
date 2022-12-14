<footer id="footer" class="pt-4 pb-4">
    <div class="container pt-3 pb-3">
        <div class="row">
            <div class="col-md-4">
                <h3 class="text-white text-uppercase font-weight-bold">
                    CMSD<span class="text-primary">82</span>
                </h3>
                <address>
                    <p>{!! str_replace(',', '<br>', $sitedata->address) !!}</p>
                </address>
            </div>

            <div class="col-md-4">
                <h4 class="text-uppercase text-white">Contact Us</h4>
                <address>
                    <ul class="list-unstyled">
                        <li>
                            <abbr title="Phone"><i class="fa fa-phone fa-fw"></i></abbr>
                            {{ $sitedata->phone }}
                        </li>
                        <li>
                            <abbr title="Email"><i class="fa fa-envelope fa-fw"></i></abbr>
                            {{ $sitedata->email }}
                        </li>
                    </ul>
                </address>
                <hr class="my-4 hr-white op-1" />
                <div class="mb-3">
                    <button type="button" class="mb-1 btn btn-primary">Go to Contact Page</button>
                </div>
            </div>

            <div class="col-md-4">
                <h4 class="text-uppercase text-white">Social media</h4>
                <p>Stay up to date with our latest news by following us in our social media!</p>
                <div class="mt-3 mb-4 mb-lg-0">
                    <a href="#" class="btn btn-icon btn-primary btn-rounded btn-flat mr-1"> <i class="fab fa-facebook-f"></i> <span class="sr-only">Fa facebook f</span> </a>
                    <a href="#" class="btn btn-icon btn-primary btn-rounded btn-flat mr-1"> <i class="fab fa-twitter"></i> <span class="sr-only">Fa twitter</span> </a>
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

<!-- Jquery Core JS -->
<script src="/assets/plugins/jquery/jquery.min.js"></script>

<!-- Popper Plugin JS -->
<script src="/assets/plugins/popper/popper.js"></script>

<!-- Bootstrap Core JS -->
<script src="/assets/plugins/bootstrap/js/bootstrap.js"></script>


<!-- JS plugins required on all pages NOTE: Additional non-required plugins are loaded ondemand as of AppStrap 2.5 To disable this and load plugin assets manually simple add data-plugins-manual=true to the body tag -->

<!--Custom scripts & AppStrap API integration -->
<script src="/assets/js/custom-script.js"></script>

<!--AppStrap scripts mainly used to trigger libraries/plugins -->
<script src="/assets/js/script.js"></script>

@yield('custom-js')