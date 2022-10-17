@extends ( 'layout.layout' )

@section ( 'content' )
    <!--District News Content-->
    <div class="col-md-9 blog-roll blog-list">
        <div class="row blog-post">
            <div class="col-md-12">
                <div class="container">
                    <h4 class="title media-heading">
                        <a href="#">Aliquam Immitto Importunus Pala Suscipere</a>
                    </h4>
                    <!-- Meta details mobile -->
                    <ul class="list-inline">
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
                            <p class="text-justify">Consectetuer diam dignissim et loquor velit voco. Mos paulatim similis suscipere ulciscor utinam validus virtus.</p>
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
                    <ul class="list-inline">
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
                            <p class="text-justify">Suspendisse potenti. Mauris molestie eros in orci pellentesque aliquet. Curabitur a metus at nisl tincidunt cursus. Donec bibendum leo in tortor posuere posuere.</p>
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
                    <ul class="list-inline">
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
                            <p class="text-justify">Vestibulum eget rhoncus sem, nec vulputate diam. Sed mattis lacus sodales, aliquam nunc sit amet, interdum quam.</p>
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
        <div class="pagination">
            <button type="button" class="btn btn-secondary btn-lg btn-block">Load More</button>
        </div>
    </div>
@endsection