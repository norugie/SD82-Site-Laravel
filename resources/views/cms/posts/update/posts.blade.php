@extends ( 'cms.layout.layout' )

@section ( 'custom-css' )
    {{-- Additional header tags for page: /create --}}
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <link rel="stylesheet" type="text/css" href="/assets/plugins/jquery-ui/jquery-ui.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap-tokenfield/dist/css/tokenfield-typeahead.min.css">
    <link rel="stylesheet" type="text/css" href="/assets/plugins/bootstrap-tokenfield/dist/css/bootstrap-tokenfield.min.css">

    <link rel="stylesheet" type="text/css" href="/assets/plugins/dropzone/dropzone.css">
@endsection

@section ( 'custom-js' )
    <script src="/assets/plugins/tinymce/tinymce.min.js"></script>
    <script src="/cms/js/editors.js"></script>

    <script src="/assets/plugins/jquery-ui/jquery-ui.min.js"></script>
    <script src="/assets/plugins/bootstrap-tokenfield/dist/bootstrap-tokenfield.min.js"></script>
    <script src="/assets/plugins/bootstrap-tokenfield/dist/typeahead.bundle.min.js"></script>

    <script src="/assets/plugins/dropzone/dropzone.js"></script>
    <script>
        // Dropzone prepopulate
        var images = @json($post->media->toArray(), JSON_HEX_TAG);
    </script>
    <script src="/cms/js/dropzone.js"></script>
    <script>
        // Assigned categories for the selected post
        var values = @json($post->categories->toArray(), JSON_HEX_TAG);
        var value = [];

        $(values).each(function(){
            value.push({"id": this.id, "value": this.name});
        });

        // All active categories
        var sources = @json($categories->toArray(), JSON_HEX_TAG);
        var source = [];

        $(sources).each(function(){
            source.push({"id": this.id, "value": this.name});
        });

        // Initialize Bloodhound engine
        var engine = new Bloodhound({
            local: source, // Set categories as source for the token input
            datumTokenizer: function(d) {
                return Bloodhound.tokenizers.whitespace(d.value);
            },
            queryTokenizer: Bloodhound.tokenizers.whitespace
        });

        engine.initialize();

        // Add id to a hidden input to process on form submit
        function existingTokenIdFunction () {
            var e = $('input[name=post_categories_id]').val();
            e = e.split(',');
            e = e.filter(function (e) {
                if(e !== "" && e !== null) return e;
            });

            return e;
        }

        // Initialize tokenfield
        $('#post_categories').tokenfield({
            tokens: value,
            typeahead: [null, { source: engine.ttAdapter() }]
        });

        // Tokenfield methods
        $('#post_categories')
        .on('tokenfield:createtoken', function (event) { // Prevent selected category duplication
            var existingTokens = $(this).tokenfield('getTokens');
            $.each(existingTokens, function(index, token) {
                if (token.value === event.attrs.value)
                    event.preventDefault();
            });
        })
        .on('tokenfield:createdtoken', function (event) { // Call function that adds id to the hidden input when token is created
            var existingTokenIds = existingTokenIdFunction();
            existingTokenIds.push(JSON.stringify(event.attrs.id));
            $('input[name=post_categories_id]').val(existingTokenIds.join(','));
        })
        .on('tokenfield:removedtoken', function (event) { // Remove category and corresponding id from hidden input when added category is deleted
            var existingTokenIds = existingTokenIdFunction();
            existingTokenIds.splice($.inArray(event.attrs.id + '', existingTokenIds), 1);
            $('input[name=post_categories_id]').val(existingTokenIds.join(','));
        });
    </script>
@endsection

@section ( 'content' )
    <div class="row clearfix">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div class="card">
                <div class="header">
                    <div class="row clearfix">
                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12 text-xs-sm-center">
                            <h4>UPDATE POST</h4>      
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                            <center>
                                <a href="/cms/posts/posts" type="button" class="btn bg-blue waves-effect" style="display: inline-block;"><i class="material-icons">list</i><span>LIST</span></a>
                            </center>
                        </div>
                    </div>
                </div>
                <div class="body">
                    <p class="font-12"><i><b>Note:</b> Fields marked with an asterisk are required</i></p><br>
                    <div class="row clearfix">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <form class="new_form_validate" action="/cms/posts/posts/create" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="post_title">Post Title *</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="post_title" name="post_title" value="{{ $post->title }}" required>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="post_categories">Post Categories</label>
                                        <p class="font-12"><i><b>Note:</b> Leaving this section blank will automatically tag your post to "Uncategorized".</i></p>
                                        <div class="form-group">
                                            <input type="text" value="@foreach($post->categories as $category){{ $category->id . ',' }}@endforeach" name="post_categories_id">
                                            <div class="form-line">
                                                <input type="text" class="form-control" id="post_categories" name="post_categories">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="post_thumbnail">Post Thumbnail</label>
                                        <p class="font-12"><i><b>Note:</b> The max image size you can upload is 10 MB.</i></p>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <input type="file" name="file" id="post_thumbnail" accept="image/x-png, image/jpeg">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="post_desc">Post Description</label>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea rows="2" class="form-control no-resize" id="post_desc" name="post_desc">@if($post->desc){{ $post->desc }}@endif</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label for="post_content" style="margin-bottom:10px;">Post Content</label><br>
                                        <div class="form-group">
                                            <div class="form-line">
                                                <textarea class="tinymce_editor" id="post_content" name="post_content">
                                                    {{ $post->content }}
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- 
                                    Todo: Work on pre-populating the Dropzone area
                                    Idea: Add an id variable to the ajax function that handles media file deletion on dropzone removal. The id is nullable. Set post_id here if     available.
                                    Add check for id if it's null. If it is, do normal medial file deletion. If not, do a database deletion with the entries in the media table that corresponds to the id and the media name.
                                --}}
                                <div class="row clearfix dropzone-area" @if($post->type === 'Post') hidden @endif>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <p class="font-12"><i><b>Note:</b> This is an experimental feature. Uploading images over 1.5 MB may take a while. The max image size you can upload is 10 MB.</i></p>
                                        <div id="dropzone-gallery" class="dropzone">
                                            <div class="dz-default dz-message">
                                                <div class="drag-icon-cph">
                                                    <i class="material-icons">touch_app</i>
                                                </div>
                                                <h3>Drop images here or click to upload</h3>
                                            </div>
                                        </div>
                                        <input type="text" id="post_media_image_name" name="post_media_image_name" value="">
                                    </div>
                                </div>
                                <div class="row clearfix">
                                    <div class="col-md-12">
                                        <button type="submit" class="btn bg-blue-grey btn-block btn-lg waves-effect">SAVE</button>  
                                    </div>
                                </div>                           
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection