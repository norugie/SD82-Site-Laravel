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

    <div class="container-fluid p-3 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-5 col-sm-12 col-xs-12">
                    <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
                    <h3 class="text-center text-uppercase font-weight-bold my-0">
                        Socials and Stories of Impact
                    </h3>
                    <h5 class="text-center font-weight-light mt-2 mb-0">
                        Stay connected!
                    </h5>
                    <hr class="mb-5 w-50 mx-auto hr-primary" />
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="nav">
                                            <a href="#card-pills-twitter" data-toggle="tab" class="nav-link bg-brand-twitter text-center text-white py-4 flex-ew active"> <i class="fab fa-twitter icon-1x"></i> <span class="sr-only">Twitter</span></a>
                                            <a href="#card-pills-facebook" data-toggle="tab" class="nav-link bg-brand-facebook text-center text-white py-4 flex-ew"> <i class="fab fa-facebook-f icon-1x"></i> <span class="sr-only">Facebook</span></a>
                                            <a href="#card-pills-youtube" data-toggle="tab" class="nav-link bg-brand-youtube text-center text-white py-4 flex-ew"> <i class="fab fa-youtube icon-1x"></i> <span class="sr-only">YouTube</span></a>
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
                <div class="col-lg-4 col-md-7 col-sm-12 col-xs-12">
                    <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
                    <h3 class="text-center text-uppercase font-weight-bold my-0">
                        Our News Feed
                    </h3>
                    <h5 class="text-center font-weight-light mt-2 mb-0">
                        Stay current!
                    </h5>
                    <hr class="mb-5 w-50 mx-auto hr-primary" />
                    @foreach($sitedata->posts as $post)
                        <div class="row blog-post">
                            <div class="col-md-12">
                                <div class="container-fluid">
                                    <h4 class="title media-heading">
                                    <a href="/news/{{ $post->slug }}">{{ $post->title }}</a>
                                    </h4>
                                    <!-- Meta details mobile -->
                                    <ul class="list-inline">
                                        <li class="list-inline-item"><i class="fa fa-calendar"></i> {{ date( 'M d, Y',strtotime( $post->created_at ) ) }}</li>
                                        <li class="list-inline-item"><i class="fa fa-user"></i> {{ $post->user->firstname }} {{ $post->user->lastname }}</li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-md-3 push-md-9">
                                            <div class="blog-media">
                                                <a href="/news/{{ $post->slug }}">
                                                    <img src="/assets/img/thumbnails/{{ $post->thumbnail }}" alt="{{ $post->title }}" class="img-fluid" />
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-9 pull-md-3">
                                            <p class="text-justify">{{ $post->desc }}</p>
                                            <ul class="list-inline links">
                                                <li class="list-inline-item">
                                                    <a href="/news/{{ $post->slug }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-circle-right"></i> Read more</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-xs-12">
                    <hr class="hr-lg mt-0 mb-3 w-10 mx-auto hr-primary" />
                    <h3 class="text-center text-uppercase font-weight-bold my-0">
                        Events
                    </h3>
                    <h5 class="text-center font-weight-light mt-2 mb-0">
                        See what's upcoming!
                    </h5>
                    <hr class="mb-5 w-50 mx-auto hr-primary" />
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 mb-3">
                                <ul class="list-timeline list-timeline-primary">
                                    <li class="list-timeline-item show p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                                        <div class="row d-md-flex align-items-md-center text-primary">
                                            <div class="col-md-3 p-md-2 d-flex align-items-center justify-content-md-center">
                                                <span class="display-4 no-resize font-weight-bold mr-1">01</span>
                                                <span>DEC<br />2022</span>
                                            </div>
                                            <div class="col-md-7 p-md-2 text-left my-auto">
                                                <p class="mb-0 font-weight-bold">Event Name</p>
                                                <p class="mb-0 op-8">10:00 AM - 1:00PM | Event Place</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                                        <div class="row d-md-flex align-items-md-center">
                                            <div class="col-md-3 p-md-2 d-flex align-items-center justify-content-md-center">
                                                <span class="display-4 no-resize font-weight-bold mr-1">16</span>
                                                <span>DEC<br />2022</span>
                                            </div>
                                            <div class="col-md-7 p-md-2 text-left my-auto">
                                                <p class="mb-0 font-weight-bold">Event Name</p>
                                                <p class="mb-0 op-8">9:00 AM - 11:00AM | Event Place</p>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="list-timeline-item p-0 pb-3 pb-lg-4 d-flex flex-wrap flex-column">
                                        <div class="row d-md-flex align-items-md-center">
                                            <div class="col-md-3 p-md-2 d-flex align-items-center justify-content-md-center">
                                                <span class="display-4 no-resize font-weight-bold mr-1">25</span>
                                                <span>DEC<br />2022</span>
                                            </div>
                                            <div class="col-md-7 p-md-2 text-left my-auto">
                                                <p class="mb-0 font-weight-bold">Event Name</p>
                                                <p class="mb-0 op-8">All Day | Event Place</p>
                                            </div>
                                        </div>
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
            <div class="col-lg-6 overlay overlay-gradient overlay-op-6 d-none d-lg-block" data-bg-img="assets/img/banners/matbanner6.png"></div>
            <div class="col-lg-6 p-5 p-lg-7">
                <hr class="hr-lg mt-0 mb-3 w-10 ml-0 hr-primary" />
                <h2 class="display-4 text-uppercase font-weight-bold mt-0 mb-4">{{ $about->title }}</h2>
                {!! $about->content !!}
            </div>
        </div>
    </div>
@endsection