@extends ( 'cms.layout.layout' )

@section ( 'content' )
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-xs-sm-center">
                                <h5>{{ $post->title }}</h5>
                                <small>{{ $post->user->firstname }} {{ $post->user->lastname }} | {{ $post->created_at->format( 'M d, Y' ) }}</small>
                                <div class="content">
                                    @foreach($post->categories as $category)
                                        <small class="label bg-blue-grey p-1">{{ $category->name }}</small>
                                    @endforeach
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <center>
                                    <a href="/cms/posts/posts" type="button" class="btn bg-blue waves-effect m-r-5" style="display: inline-block;"><i class="material-icons">list</i><span>LIST</span></a>
                                    <a href="/cms/posts/posts/{{ $post->slug }}/update" type="button" class="btn bg-green waves-effect m-r-5" style="display: inline-block;"><i class="material-icons">mode_edit</i></a>
                                    <a href="#" type="button" class="btn bg-red waves-effect" style="display: inline-block;"><i class="material-icons">delete</i></a>
                                </center>
                            </div>
                        </div>
                    </div>
                <div class="body">
                    {!! $post->content !!}
                </div>
            </div>
        </div>
    </div>
@endsection