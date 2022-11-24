@extends ( 'layout.layout' )

@section ( 'content' )
    <div class="row blog-post">
        <div class="col-md-12">
            <div class="media-body pr-3">
                <!--Main content of post-->
                <div class="blog-content">
                    {!! $contents->content !!}
                </div>
                <div class="table-responsive">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Job ID</th>
                                <th>Title</th>
                                <th>School</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sample job title 1</td>
                                <td>Sample School</td>
                                <td><a href="#" class="btn btn-primary btn-sm">Apply</a></td>
                            </tr>
                            <tr>
                                <td>2</td>
                                <td>Sample job title 2</td>
                                <td>Sample School</td>
                                <td><a href="#" class="btn btn-primary btn-sm">Apply</a></td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>Sample job title 3</td>
                                <td>Sample School</td>
                                <td><a href="#" class="btn btn-primary btn-sm">Apply</a></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection