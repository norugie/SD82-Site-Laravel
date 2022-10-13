@extends ( 'layout.layout' )

@section ( 'content' )
    @include('layout.components.slidebar')

    <div class="container">
        <ul class="nav nav-steps nav-steps-square flex-column flex-lg-row justify-content-around mx-auto">
            <li class="nav-item">
                <a href="/" class="nav-link"> <i class="fas fa-school icon-2x mb-05"></i> <span class="font-weight-bold d-block">Schools & Registration</span> </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"> <i class="fas fa-heartbeat icon-2x mb-05"></i> <span class="font-weight-bold d-block">Health & Security</span> </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"> <i class="fas fa-book icon-2x mb-05"></i> <span class="font-weight-bold d-block">Programs & Support</span> </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"> <i class="fas fa-book-reader icon-2x mb-05"></i> <span class="font-weight-bold d-block">Indigenous Education</span> </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"> <i class="fas fa-bus icon-2x mb-05"></i> <span class="font-weight-bold d-block">Transportation Services</span> </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"> <i class="fas fa-file-signature icon-2x mb-05"></i> <span class="font-weight-bold d-block">Strategic Plans</span> </a>
            </li>
            <li class="nav-item">
                <a href="/" class="nav-link"> <i class="fas fa-chart-line icon-2x mb-05"></i> <span class="font-weight-bold d-block">District Growth</span> </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"> <i class="fas fa-calendar icon-2x mb-05"></i> <span class="font-weight-bold d-block">District Calendar</span> </a>
            </li>
        </ul>
    </div>

    <div class="container-fluid p-3 py-lg-5 bg-dark">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
                <h2 class="text-white text-center text-uppercase font-weight-bold my-0">
                    District News
                </h2>
                <h5 class="text-white text-center font-weight-light mt-2 mb-0">
                    See what's new in the distric!
                </h5>
                <hr class="mb-5 w-50 mx-auto" />
                <div class="row blog-post">
                    <div class="col-md-12">
                        <div class="container">
                            <h4 class="title media-heading">
                                <a href="#">Aliquam Immitto Importunus Pala Suscipere</a>
                            </h4>
                            <!-- Meta details mobile -->
                            <ul class="list-inline text-white">
                                <li class="list-inline-item"><i class="fa fa-calendar"></i> Tue 13 Oct 2022</li>
                                <li class="list-inline-item"><i class="fa fa-user"></i> <a href="#">John Doe</a></li>
                            </ul>
                            <div class="row">
                                <div class="col-md-3 push-md-9">
                                    <div class="blog-media">
                                        <a href="#">
                                            <img src="assets/img/blog/frog.jpg" alt="Picture of frog by Ben Fredericson" class="img-fluid" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9 pull-md-3">
                                    <p class="text-white text-justify">Consectetuer diam dignissim et loquor velit voco. Mos paulatim similis suscipere ulciscor utinam validus virtus.</p>
                                    <ul class="list-inline links">
                                        <li class="list-inline-item">
                                            <a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-circle-right"></i> Read more</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row blog-post">
                    <div class="col-md-12">
                        <div class="container">
                            <h4 class="title media-heading">
                                <a href="#">Cras pretium venenatis turpis eget posuere</a>
                            </h4>
                            <ul class="list-inline text-white">
                                <li class="list-inline-item"><i class="fa fa-calendar"></i> Tue 10 Oct 2022</li>
                                <li class="list-inline-item"><i class="fa fa-user"></i> <a href="#">John Smith</a></li>
                            </ul>
                            <div class="row">
                                <div class="col-md-3 push-md-9">
                                    <div class="blog-media">
                                        <a href="#">
                                            <img src="assets/img/blog/water-pump.jpg" alt="Picture of frog by Ben Fredericson" class="img-fluid" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9 pull-md-3">
                                    <p class="text-white text-justify">Suspendisse potenti. Mauris molestie eros in orci pellentesque aliquet. Curabitur a metus at nisl tincidunt cursus. Donec bibendum leo in tortor posuere posuere.</p>
                                    <ul class="list-inline links">
                                        <li class="list-inline-item">
                                            <a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-circle-right"></i> Read more</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row blog-post">
                    <div class="col-md-12">
                        <div class="container">
                            <h4 class="title media-heading">
                                <a href="#">Phasellus egestas maximus mi, vitae congue nulla</a>
                            </h4>
                            <ul class="list-inline text-white">
                                <li class="list-inline-item"><i class="fa fa-calendar"></i> 7 Oct 2022</li>
                                <li class="list-inline-item"><i class="fa fa-user"></i> <a href="#">Mary Sue</a></li>
                            </ul>
                            <div class="row">
                                <div class="col-md-3 push-md-9">
                                    <div class="blog-media">
                                        <a href="#">
                                            <img src="assets/img/blog/bee.jpg" alt="Picture of frog by Ben Fredericson" class="img-fluid" />
                                        </a>
                                    </div>
                                </div>
                                <div class="col-md-9 pull-md-3">
                                    <p class="text-white text-justify">Vestibulum eget rhoncus sem, nec vulputate diam. Sed mattis lacus sodales, aliquam nunc sit amet, interdum quam.</p>
                                    <ul class="list-inline links">
                                        <li class="list-inline-item">
                                            <a href="#" class="btn btn-secondary btn-sm"><i class="fa fa-arrow-circle-right"></i> Read more</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
                <h2 class="text-white text-center text-uppercase font-weight-bold my-0">
                    District Events
                </h2>
                <h5 class="text-white text-center font-weight-light mt-2 mb-0 text-muted">
                    Upcoming district events.
                </h5>
                <hr class="mb-5 w-50 mx-auto" />
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 mb-3">
                            <ul class="list-timeline list-timeline-primary">
                                <li class="list-timeline-item show p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                                    <p class="my-0 text-white flex-fw text-uppercase"><span class="text-primary font-weight-bold op-8">TODAY</span> - Nulla aliquam diam id lacus malesuada bibendum</p>
                                    <p class="my-0 flex-fw text-uppercase text-white op-8">Suspendisse potenti | <span class="text-primary">10:00 AM</span> </p>
                                    <p class="my-0 flex-fw text-sm text-white op-8">Mauris molestie eros in orci pellentesque aliquet. Curabitur a metus at nisl tincidunt cursus. Donec bibendum leo in tortor posuere posuere.</p>
                                </li>
                                <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                                    <p class="my-0 text-white flex-fw text-uppercase"><span class="text-primary font-weight-bold op-8">30 Oct 2022</span> - Nam consectetur fringilla dapibus</p>
                                    <p class="my-0 flex-fw text-uppercase text-white op-8">Fusce tempus | <span class="text-primary">1:00 PM</span> </p>
                                    <p class="my-0 flex-fw text-sm text-white op-8">Mauris molestie eros in orci pellentesque aliquet. Curabitur a metus at nisl tincidunt cursus. Donec bibendum leo in tortor posuere posuere.</p>
                                </li>
                                <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                                    <p class="my-0 text-white flex-fw text-uppercase"><span class="text-primary font-weight-bold op-8">6 Nov 2022</span> - Etiam nibh ligula, rutrum et purus vitae</p>
                                    <p class="my-0 flex-fw text-uppercase text-white op-8">Vivamus eget | <span class="text-primary">ALL DAY</span> </p>
                                    <p class="my-0 flex-fw text-sm text-white op-8">Cras orci mi, porttitor quis condimentum sed, ullamcorper dapibus elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Pellentesque finibus nulla felis.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection