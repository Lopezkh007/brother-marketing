@extends('admin.pages.site-setting.layout')

@section('site-setting-content')
    <div class="row">
        <div class="col-12">
            @if($errors->any())
                {!! implode('', $errors->all('<div class="text-danger">*:message</div>')) !!}
            @endif
            <form action="{{route('site-setting.onsave', $type)}}" method="POST" class="row needs-validation" novalidate enctype="multipart/form-data">
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col-12">
                        <ul class="nav nav-pills py-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#titleEnglish" role="tab">
                                    Title <small>(English)</small>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#titleKhmer" role="tab">
                                    Title <small>(Khmer)</small>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mb-3">
                            <div class="tab-pane active" id="titleEnglish" role="tabpanel">
                                <input name="content[title_eng]" type="text" class="form-control" id="highlight_en" 
                                       placeholder="Enter title in English" value="{{ $content->title_eng }}" />
                            </div>
                            <div class="tab-pane" id="titleKhmer" role="tabpanel">
                                <input name="content[title_kh]" type="text" class="form-control" id="title_cn" 
                                       placeholder="Enter title in Khmer" value="{{ $content->title_kh }}" />
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <ul class="nav nav-pills py-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#descriptionEnglish" role="tab">
                                    Description <small>(English)</small>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#descriptionKhmer" role="tab">
                                    Description <small>(Khmer)</small>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mb-3">
                            <div class="tab-pane active" id="descriptionEnglish" role="tabpanel">
                                <textarea name="content[description_eng]" class="form-control ckeditor-classic"
                                    cols="30" rows="5" placeholder="Enter about company in English"
                                >{!! $content->description_eng !!}</textarea>
                            </div>
                            <div class="tab-pane" id="descriptionKhmer" role="tabpanel">
                                <textarea name="content[description_kh]" class="form-control ckeditor-classic"
                                    cols="30" rows="5" placeholder="Enter about company in Khmer"
                                >{!! $content->description_kh !!}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                        <label for="image" class="form-label">Thumbnail Left<span>(960x660 pixels)</span></label>
                        <div class="w-100">
                            <input type="file" class="filepond filepond-input-circle-1" id="image" name="image" accept="image/*" />
                        </div>
                    </div>

                    <div class="col-md-6 mt-2">
                        <label for="image2" class="form-label">Thumbnail Right<span>(1165x863 pixels)</span></label>
                        <div class="w-100">
                            <input type="file" class="filepond filepond-input-circle-2" id="image2" name="image2" accept="image/*" />
                        </div>
                    </div>
                    <div class="col-lg-12 mt-4">
                        <h5 class="fs-14 mb-1">Our Performance</h5>
                        <p class="text-muted">Describe information about our performance.</p>
                    </div>
                    <div class="col-md-4">
                        <ul class="nav nav-pills py-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#visionEnglish" role="tab">
                                    Our Vision <small>(English)</small>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#visionKhmer" role="tab">
                                    Our Vision <small>(Khmer)</small>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mb-3">
                            <div class="tab-pane active" id="visionEnglish" role="tabpanel">
                                <textarea name="content[vision_eng]" class="form-control"
                                    cols="30" rows="3" placeholder="Enter text"
                                >{!! $content->vision_eng !!}</textarea>
                            </div>
                            <div class="tab-pane" id="visionKhmer" role="tabpanel">
                                <textarea name="content[vision_kh]" class="form-control"
                                    cols="30" rows="3" placeholder="Enter text"
                                >{!! $content->vision_kh !!}</textarea>
                            </div>
                        </div>
                        <div class="w-100">
                            <input type="file" class="filepond filepond-input-circle-4" id="image4" name="image4" accept="image/*" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="nav nav-pills py-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#ourmissionEnglish" role="tab">
                                    Our Mission <small>(English)</small>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#ourmissionKhmer" role="tab">
                                    Our Mission <small>(Khmer)</small>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mb-3">
                            <div class="tab-pane active" id="ourmissionEnglish" role="tabpanel">
                                <textarea name="content[ourmission_eng]" class="form-control"
                                    cols="30" rows="3" placeholder="Enter text"
                                >{!! $content->ourmission_eng !!}</textarea>
                            </div>
                            <div class="tab-pane" id="ourmissionKhmer" role="tabpanel">
                                <textarea name="content[ourmission_kh]" class="form-control"
                                    cols="30" rows="3" placeholder="Enter text"
                                >{!! $content->ourmission_kh !!}</textarea>
                            </div>
                        </div>
                        <div class="w-100">
                            <input type="file" class="filepond filepond-input-circle-5" id="image5" name="image5" accept="image/*" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="nav nav-pills py-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#ourvaluesEnglish" role="tab">
                                    Our Values <small>(English)</small>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#ourvaluesKhmer" role="tab">
                                    Our Values <small>(Khmer)</small>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mb-3">
                            <div class="tab-pane active" id="ourvaluesEnglish" role="tabpanel">
                                <textarea name="content[ourvalues_eng]" class="form-control"
                                    cols="30" rows="3" placeholder="Enter text in English"
                                >{!! $content->ourvalues_eng !!}</textarea>
                            </div>
                            <div class="tab-pane" id="ourvaluesKhmer" role="tabpanel">
                                <textarea name="content[ourvalues_kh]" class="form-control"
                                    cols="30" rows="3" placeholder="Enter text in Khmer"
                                >{!! $content->ourvalues_kh !!}</textarea>
                            </div>
                        </div>
                        <div class="w-100">
                            <input type="file" class="filepond filepond-input-circle-6" id="image6" name="image6" accept="image/*" />
                        </div>
                    </div>
                    <div class="col-md-4">
                        <ul class="nav nav-pills py-1" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href="#managerEnglish" role="tab">
                                    Manager General <small>(English)</small>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href="#managerKhmer" role="tab">
                                    Manager General <small>(Khmer)</small>
                                </a>
                            </li>
                        </ul>
                        <div class="tab-content mb-3">
                            <div class="tab-pane active" id="managerEnglish" role="tabpanel">
                                <input name="content[manager_eng]" type="text" class="form-control" id="highlight_en" 
                                       placeholder="Enter manager in English" value="{{ $content->manager_eng }}" />
                            </div>
                            <div class="tab-pane" id="managerKhmer" role="tabpanel">
                                <input name="content[manager_kh]" type="text" class="form-control" id="manager_cn" 
                                       placeholder="Enter manager in Khmer" value="{{ $content->manager_kh }}" />
                            </div>
                        </div>
                        <p class="nav-item">Signature</p>
                        <div class="w-100">
                            <input type="file" class="filepond filepond-input-circle-3" id="image3" name="image3" accept="image/*" />
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <hr>
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
        
        @if(!$content->image2)
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
                        source: `{{$content->image2}}`,
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
        
        @if(!$content->image3)
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
                        source: `{{$content->image3}}`,
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

        @if(!$content->image4)
        FilePond.create(
            document.querySelector(".filepond-input-circle-4"),
            filepondCreateOption
        );
        @else
        FilePond.create(
            document.querySelector(".filepond-input-circle-4"),
            {
                ...filepondCreateOption, 
                files: [
                    {
                        source: `{{$content->image4}}`,
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

        @if(!$content->image5)
        FilePond.create(
            document.querySelector(".filepond-input-circle-5"),
            filepondCreateOption
        );
        @else
        FilePond.create(
            document.querySelector(".filepond-input-circle-5"),
            {
                ...filepondCreateOption, 
                files: [
                    {
                        source: `{{$content->image5}}`,
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

        @if(!$content->image6)
        FilePond.create(
            document.querySelector(".filepond-input-circle-6"),
            filepondCreateOption
        );
        @else
        FilePond.create(
            document.querySelector(".filepond-input-circle-6"),
            {
                ...filepondCreateOption, 
                files: [
                    {
                        source: `{{$content->image6}}`,
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
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: "textarea.ckeditor-classic",
            height: "450px",
            plugins: [
                "advlist",
                "autolink",
                "lists",
                "link",
                "image",
                "charmap",
                "preview",
                "anchor",
                "searchreplace",
                "visualblocks",
                "code",
                "fullscreen",
                "insertdatetime",
                "media",
                "table",
                "wordcount",
            ],
            toolbar:
                "fullscreen | bold italic underline | media link | numlist bullist | styles | alignleft aligncenter alignright alignjustify | outdent indent ",
            automatic_uploads: true,
            images_upload_url: "/admin/upload-content-file",
            relative_urls: false,
            remove_script_host: false,
        });
    </script>
@endsection

