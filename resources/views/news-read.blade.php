@extends ( 'layout.layout' )

@section ( 'content' )
    <!-- News post -->
    <div class="row blog-post">
        <div class="col-md-12">
            <div class="media-body pr-3">
                <h3 class="title media-heading">
                    {{ $contents->title }}
                </h3>

                <!-- Meta details mobile -->
                <ul class="list-inline mb-0 text-sm">
                    <li class="list-inline-item"><i class="fa fa-calendar"></i> {{ $contents->created_at->format( 'M d, Y' ) }}</li>
                    <li class="list-inline-item"><i class="fa fa-user"></i> {{ $contents->user->firstname }} {{ $contents->user->lastname }}</li>
                </ul>

                <!-- Post tags -->
                <div class="tag-cloud post-tag-cloud mt-0 mb-3 text-sm">
                    @foreach($contents->categories as $category)
                        <a href="/news/category/{{ $category->slug }}" class="badge badge-secondary">{{ $category->name }}</a>&nbsp;
                    @endforeach
                </div>

                <!-- Main content of post -->
                <div class="blog-content">
                    {!! $contents->content !!}
                </div>
            </div>
        </div>
    </div>
@endsection