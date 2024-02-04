@extends('admin.pages.site-setting.layout')

@section('site-setting-content')
    <div class="row">
        <div class="col-12">
            @if($errors->any())
                {!! implode('', $errors->all('<div class="text-danger">*:message</div>')) !!}
            @endif
            <form action="{{route('site-setting.onsave', $type)}}" method="POST" class="row needs-validation" novalidate>
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input 
                                name="content[title]" value="{{$content->title}}" type="text" 
                                class="form-control" id="title" 
                                placeholder="Enter text" required
                            />
                            <div class="invalid-feedback">Title is required</div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="mb-3">
                            <label class="form-label">Author</label>
                            <input 
                                name="content[author]" value="{{$content->author}}" type="text" 
                                class="form-control"
                                placeholder="Enter text"
                            />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="keyword" class="form-label">Keyword</label>
                            <input 
                                name="content[keyword]" value="{{$content->keyword}}" type="text" 
                                class="form-control" id="keyword" 
                                placeholder="Enter text" required
                            />
                            <div class="invalid-feedback">Keyword is required</div>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea name="content[description]" 
                                class="form-control"
                                cols="30" rows="3" placeholder="Enter description" required
                            >{!! $content->description !!}</textarea>
                            <div class="invalid-feedback">Description is required</div>
                        </div>
                    </div>
                    
                    <div class="col-md-4 mt-2">
                        <label for="image" class="form-label">Logo Header<span>(180x60 pixels)</span></label>
                        <div class="w-100">
                            <input type="file" class="filepond filepond-input-circle-2" id="image" name="image2" accept="image/*" />
                        </div>
                    </div>
                    
                    <div class="col-md-4 mt-2">
                        <label for="image" class="form-label">Logo Footer<span>(180x60 pixels)</span></label>
                        <div class="w-100">
                            <input type="file" class="filepond filepond-input-circle-3" id="image" name="image3" accept="image/*" />
                        </div>
                    </div>

                    <div class="col-md-4 mt-2">
                        <label for="image" class="form-label">Thumbnail<span>(600x450 pixels)</span></label>
                        <div class="w-100">
                            <input type="file" class="filepond filepond-input-circle-1" id="image" name="image" accept="image/*" />
                        </div>
                    </div>
                    
                    <div class="col-lg-12">
                        <hr />
                        <div class="hstack gap-2 justify-content-start">
                            <button type="submit" class="btn btn-primary">Save</button>
                            <a href="{{url()->current()}}" class="btn btn-light">Refresh</a>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('script-template')
    <script src="{{asset('backend-assets/js/validate-form.js')}}"></script>
    {{-- File Upload --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <!-- filepond js -->
    <script src="{{ URL::asset('backend-assets/libs/filepond/filepond.min.js') }}"></script>
    <script src="{{ URL::asset('backend-assets/libs/filepond-plugin-image-preview/filepond-plugin-image-preview.min.js') }}"></script>
    <script src="{{ URL::asset('backend-assets/libs/filepond-plugin-file-validate-size/filepond-plugin-file-validate-size.min.js') }}"></script>
    <script src="{{ URL::asset('backend-assets/libs/filepond-plugin-image-exif-orientation/filepond-plugin-image-exif-orientation.min.js') }}"></script>
    <script src="{{ URL::asset('backend-assets/libs/filepond-plugin-file-encode/filepond-plugin-file-encode.min.js') }}"></script>
    <script>
        FilePond.registerPlugin(
            FilePondPluginFileEncode,
            FilePondPluginFileValidateSize,
            FilePondPluginImageExifOrientation,
            FilePondPluginImagePreview
        );

        const filepondCreateOption = {
            labelIdle:
                'Drag & Drop your picture or <span class="filepond--label-action">Browse</span>',
            imagePreviewHeight: 200,
            imageCropAspectRatio: "1:1",
            imageResizeTargetWidth: 200,
            imageResizeTargetHeight: 200,
            stylePanelLayout: "compact",
            styleLoadIndicatorPosition: "center bottom",
            styleProgressIndicatorPosition: "right bottom",
            styleButtonRemoveItemPosition: "left bottom",
            styleButtonProcessItemPosition: "right bottom",
        };

        @if(!$content->image)
        FilePond.create(
            document.querySelector(".filepond-input-circle-1"),
            filepondCreateOption
        );
        @else
        FilePond.create(
            document.querySelector(".filepond-input-circle-1"),
            {
                ...filepondCreateOption, 
                files: [
                    {
                        source: `{{$content->image}}`,
                        options: {
                            type: "local",
                        },
                    },
                ],
                server: {
                    load: (source, load, error, progress, abort, headers) => {
                        const myRequest = new Request(`${window.location.protocol}//${window.location.host}/uploads/site-setting/${source}`);
                        fetch(myRequest).then(function (response) {
                            response.blob().then(function (myBlob) {
                                load(myBlob);
                            });
                        });
                    },
                },
            }
        );
        @endif
        
        @if(!$content->logo_header)
        FilePond.create(
            document.querySelector(".filepond-input-circle-2"),
            filepondCreateOption
        );
        @else
        FilePond.create(
            document.querySelector(".filepond-input-circle-2"),
            {
                ...filepondCreateOption, 
                files: [
                    {
                        source: `{{$content->logo_header}}`,
                        options: {
                            type: "local",
                        },
                    },
                ],
                server: {
                    load: (source, load, error, progress, abort, headers) => {
                        const myRequest = new Request(`${window.location.protocol}//${window.location.host}/uploads/site-setting/${source}`);
                        fetch(myRequest).then(function (response) {
                            response.blob().then(function (myBlob) {
                                load(myBlob);
                            });
                        });
                    },
                },
            }
        );
        @endif
        
        @if(!$content->logo_footer)
        FilePond.create(
            document.querySelector(".filepond-input-circle-3"),
            filepondCreateOption
        );
        @else
        FilePond.create(
            document.querySelector(".filepond-input-circle-3"),
            {
                ...filepondCreateOption, 
                files: [
                    {
                        source: `{{$content->logo_footer}}`,
                        options: {
                            type: "local",
                        },
                    },
                ],
                server: {
                    load: (source, load, error, progress, abort, headers) => {
                        const myRequest = new Request(`${window.location.protocol}//${window.location.host}/uploads/site-setting/${source}`);
                        fetch(myRequest).then(function (response) {
                            response.blob().then(function (myBlob) {
                                load(myBlob);
                            });
                        });
                    },
                },
            }
        );
        @endif
        
        FilePond.setOptions({
            server: {
                url: "/admin/file-upload/image/site-setting",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            },
        });
    </script>
@endsection
