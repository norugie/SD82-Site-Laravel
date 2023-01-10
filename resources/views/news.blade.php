@extends ( 'layout.layout' )

@section ( 'content' )
    @foreach($contents as $post)
        <!--District News Content-->
        <div class="row blog-post">
            <div class="col-md-12">
                <h4 class="title media-heading">
                    <a href="/news/{{ $post->slug }}">{{ $post->title }}</a>
                </h4>

                <!-- Meta details mobile -->
                <ul class="list-inline mb-0 text-grey-dark text-sm">
                    <li class="list-inline-item"><i class="fa fa-calendar"></i> {{ $post->created_at->format( 'M d, Y' ) }}</li>
                    <li class="list-inline-item"><i class="fa fa-user"></i> {{ $post->user->firstname }} {{ $post->user->lastname }}</li>
                </ul>

                <!-- Post tags -->
                <div class="tag-cloud post-tag-cloud mt-0 mb-3">
                    @foreach($post->categories as $category)
                        <a href="/news/category/{{ $category->slug }}" class="badge badge-secondary">{{ $category->name }}</a>&nbsp;
                    @endforeach
                </div>

                <!-- Post details -->
                <div class="row">
                    <div class="col-md-3 push-md-9">
                        <div class="blog-media">
                            <a href="/news/{{ $post->slug }}">
                                <img src="/assets/img/thumbnails/{{ $post->thumbnail }}" alt="{{ $post->title }}" class="img-fluid" />
                            </a>
                        </div>
                    </div>
                    <div class="col-md-9 pull-md-3">
                        <p class="text-justify text-grey-dark">{{ $post->desc }}</p>
                        <ul class="list-inline links">
                            <li class="list-inline-item">
                                <a href="/news/{{ $post->slug }}" class="btn btn-primary btn-sm"><i class="fa fa-arrow-circle-right"></i> Read more</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endforeach



    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center">
            {{ $contents->onEachSide(5)->links() }}
            {{-- <li class="page-item">
                <a class="page-link" href="#" aria-label="Previous"> <span aria-hidden="true">«</span> <span class="sr-only">Previous</span> </a>
            </li>
            <li class="page-item active"><a class="page-link" href="#">1</a></li>
            <li class="page-item"><a class="page-link" href="#">2</a></li>
            <li class="page-item"><a class="page-link" href="#">3</a></li>
            <li class="page-item"><a class="page-link" href="#">4</a></li>
            <li class="page-item"><a class="page-link" href="#">5</a></li>
            <li class="page-item">
                <a class="page-link" href="#" aria-label="Next"> <span aria-hidden="true">»</span> <span class="sr-only">Next</span> </a>
            </li> --}}
        </ul>
    </nav>
@endsection