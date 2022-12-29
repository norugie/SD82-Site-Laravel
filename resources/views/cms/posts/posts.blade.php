@extends ( 'cms.layout.layout' )

@section ( 'content' )
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                    <div class="header">
                        <div class="row clearfix">
                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-xs-sm-center">
                                <h4>DISTRICT POSTS LIST</h4>      
                            </div>
                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                <center>
                                    <a href="/cms/posts/posts/create" type="button" class="btn bg-blue waves-effect" style="display: inline-block;"><i class="material-icons">add</i><span>NEW POST</span></a>
                                </center>
                            </div>
                        </div>
                    </div>
                <div class="body">
                    <div class="table-responsive">
                        <table id="post_table" class="table dt-responsive" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Post Title</th>
                                    <th>Post Type</th>
                                    <th>Author</th>
                                    <th>Categories</th>
                                    <th>Published Date</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Post Title</th>
                                    <th>Post Type</th>
                                    <th>Author</th>
                                    <th>Categories</th>
                                    <th>Published Date</th>
                                    <th></th>
                                </tr>
                            </tfoot>
                            <tbody>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>{{ $post->title }}</td>
                                        <td>{{ $post->type }}</td>
                                        <td>{{ $post->user->firstname }} {{ $post->user->lastname }}</td>
                                        <td>
                                            @foreach($post->categories as $category)
                                                {{ $category->name }}<br>
                                            @endforeach
                                        </td>
                                        <td>{{ $post->created_at->format( 'M d, Y' ) }}</td>
                                        <td>
                                            <center>
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <i class="material-icons">more_horiz</i><span>OPTIONS</span> <span class="caret"></span>
                                                    </button>
                                                    <div class="dropdown-menu">
                                                        <a class="dropdown-item" href="/cms/posts/posts/{{ $post->slug }}/view">View Post</a>
                                                        <a class="dropdown-item" href="/cms/posts/posts/{{ $post->slug }}/update">Update Post Details</a>
                                                        <div class="dropdown-divider"></div>
                                                        <a class="dropdown-item" href="/cms/posts/posts/{{ $post->slug }}/delete">Delete Post</a>
                                                    </div>
                                                </div>
                                            </center>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection