@extends ( 'layout.index' )

@section ( 'content' )
    @include('layout.components.slidebar')

    <div class="container">
        <ul class="nav nav-steps nav-steps-square flex-column flex-lg-row justify-content-around mx-auto">
            <li class="nav-item">
                <a href="/" class="nav-link"> <i class="fas fa-school icon-2x mb-05"></i> <span class="font-weight-bold d-block">Schools & Registration</span> </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"> <i class="fas fa-heartbeat icon-2x mb-05"></i> <span class="font-weight-bold d-block">Health & Wellness</span> </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link"> <i class="fas fa-book icon-2x mb-05"></i> <span class="font-weight-bold d-block">Learner Programs</span> </a>
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
                <a href="/" class="nav-link"> <i class="fas fa-utensils icon-2x mb-05"></i> <span class="font-weight-bold d-block">Food & Nutrition</span> </a>
            </li>
        </ul>
    </div>

    <div class="container-fluid p-3 py-lg-5 bg-dark">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
                    <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
                    <h3 class="text-white text-center text-uppercase font-weight-bold my-0">
                        Socials and Stories of Impact
                    </h3>
                    <h5 class="text-white text-center font-weight-light mt-2 mb-0 text-muted">
                        Stay connected!
                    </h5>
                    <hr class="mb-5 w-50 mx-auto" />
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="nav">
                                            <a href="#card-pills-twitter" data-toggle="tab" class="nav-link bg-brand-twitter text-white text-center py-4 flex-ew active"> <i class="fab fa-twitter icon-1x"></i> <span class="sr-only">Twitter</span></a>
                                            <a href="#card-pills-facebook" data-toggle="tab" class="nav-link bg-brand-facebook text-white text-center py-4 flex-ew"> <i class="fab fa-facebook-f icon-1x"></i> <span class="sr-only">Facebook</span></a>
                                            <a href="#card-pills-youtube" data-toggle="tab" class="nav-link bg-brand-youtube text-white text-center py-4 flex-ew"> <i class="fab fa-youtube icon-1x"></i> <span class="sr-only">YouTube</span></a>
                                        </div>
                                    </div>
                                    <div class="card-body">
                                        <div class="tab-content">
                                            <div class="tab-pane active show" id="card-pills-twitter" role="tabpanel">
                                                <a class="twitter-timeline" data-height="600" href="https://twitter.com/CoastMtnSD?ref_src=twsrc%5Etfw">Tweets by CoastMtnSD</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                                            </div>
                                            <div class="tab-pane" id="card-pills-facebook" role="tabpanel">
                                                <h4 class="card-title">Facebook</h4>
                                            </div>
                                            <div class="tab-pane" id="card-pills-youtube" role="tabpanel">
                                                <iframe width="560" height="315" src="https://www.youtube.com/embed/IRC7zFCf6EU" title="CMSD82 Recruitment Video" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12">
                    <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
                    <h3 class="text-white text-center text-uppercase font-weight-bold my-0">
                        Our News Feed
                    </h3>
                    <h5 class="text-white text-center font-weight-light mt-2 mb-0">
                        Stay current!
                    </h5>
                    <hr class="mb-5 w-50 mx-auto" />
                    <div class="row blog-post">
                        <div class="col-md-12">
                            <div class="container-fluid">
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
                            <div class="container-fluid">
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
                            <div class="container-fluid">
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
                <div class="col-md-4 col-sm-12">
                    <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
                    <h3 class="text-white text-center text-uppercase font-weight-bold my-0">
                        Events
                    </h3>
                    <h5 class="text-white text-center font-weight-light mt-2 mb-0 text-muted">
                        See what's upcoming!
                    </h5>
                    <hr class="mb-5 w-50 mx-auto" />
                    <div class="container-fluid">
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
    </div>

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-6 overlay overlay-gradient overlay-op-6 d-none d-lg-block" data-bg-img="assets/img/backgrounds/computer-screens.jpg"></div>
            <div class="col-lg-6 p-5 p-lg-7">
                <hr class="hr-lg mt-0 mb-3 w-10 ml-0 hr-primary" />
                <h2 class="display-4 text-grey-dark text-uppercase font-weight-bold mt-0 mb-4">
                About CMSD<span class="text-primary font-weight-bold">82</span>
                </h2>
                <h4 class="font-weight-bold text-justify text-dark text-uppercase mb-4 mt-4">
                    All Students Realizing their Full Potential<br>Honouring and Respecting Culture and Diversity<br>Well-Being within the Educational Community
                </h4>
                <p class="text-grey-dark text-justify mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sit amet erat augue. Aenean neque turpis, placerat at erat non, lacinia interdum odio. Aliquam eros nulla, rhoncus rutrum varius eu, malesuada et turpis. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec in dui vitae diam consequat accumsan et quis lacus. Morbi auctor tortor erat, non gravida magna dapibus et. Proin viverra, arcu vitae maximus elementum, odio purus ullamcorper lorem, id maximus leo libero a nulla.</p>
                <p class="text-grey-dark text-justify mb-4">Caecus facilisi facilisis refero rusticus saluto tincidunt validus. Abdo ea gilvus. Ibidem in nunc paratus.</p>
            </div>
        </div>
    </div>
@endsection