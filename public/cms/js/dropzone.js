(function() {
    'use strict';

    // Dropzone Area
    $('input[name=post_type]:radio').change(function(ev) {
        if (ev.currentTarget.value == 'Post') {
            $('.dropzone-area').hide();
        } else if (ev.currentTarget.value == 'Media') {
            $('.dropzone-area').removeAttr('hidden');
            $('.dropzone-area').show();
        }
    });

    console.log(images);

    // Configuring Dropzone
    Dropzone.autoDiscover = false;

    var token = $('meta[name="csrf-token"]').attr('content');
    $('#dropzone-gallery').dropzone({
        url: '/cms/upload/media',
        acceptedFiles: 'image/*',
        maxFileSize: 10, // MB
        addRemoveLinks: true,
        dictDefaultMessage: 'Drop images here to upload',
        dictFallbackMessage: 'Your browser does not support drag and drop image uploads.',
        dictFileTooBig: 'Image is too big. Max image size: 10 MB.',
        dictInvalidFileType: 'You cannot upload images of this file type.',
        dictRemoveFile: 'Remove image',
        dictRemoveFileConfirmation: null,
        success: function(file) {
            var imageName = $('#post_media_image_name').val();
            $('#post_media_image_name').attr('value', file.name + ',' + imageName);
        },
        error: function(file, message, xhr) {
            if (xhr == null) this.removeFile(file);
            console.log(message);
            console.log(xhr);
            alert(message);
        },
        init: function() {
            var thisDropzone = this;
            if ('images' in window) {
                $(images).each(function() {
                    var mockFile = { name: this.name, size: this.size };

                    thisDropzone.options.addedfile.call(thisDropzone, mockFile);
                    thisDropzone.options.thumbnail.call(thisDropzone, mockFile, "/../../assets/img/media/" + this.name);
                });
            }
            this.on('sending', function(file, xhr, formData) {
                formData.append('_token', token);
            });
            this.on('removedfile', function(file) {
                var imageNameList = $('#post_media_image_name').val();
                imageNameList = imageNameList.replace(file.name + ',', '');
                $('#post_media_image_name').attr('value', imageNameList);

                // Remove image from server folder
                $.ajax({
                    url: '/cms/delete/media',
                    type: 'POST',
                    data: {
                        '_token': token,
                        'filename': file.name
                    },
                    dataType: 'json'
                });
            });
        }
    });
})();