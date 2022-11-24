@extends ( 'layout.layout' )

@section ( 'content' )
    <div class="row mb-5">
        <div class="col-12 col-lg-12">
            <div class="media-body pr-3">
                <div class="blog-content">
                    {!! $contents['about']->content !!}
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-12">
            <div class="resource-container">
                @foreach($contents['info'] as $resource)
                    <div class="resource-list">
                        <div class="row mb-5">
                            <div class="col-sm-3">
                                <div class="blog-media">
                                    <a href="{{ $resource->content }}">
                                        <img src="/assets/img/thumbnails/{{ $resource->thumbnail }}" alt="{{ $resource->title }}" class="img-fluid border-white border-w-5 b rounded-circle" />
                                    </a>
                                </div>
                            </div>
                            <div class="col-sm-9">
                                <h4 class="title media-heading">
                                    <a href="{{ $resource->content }}">{{ $resource->title }}</a>
                                </h4>
                                <p class="text-justify">{{ $resource->desc }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection