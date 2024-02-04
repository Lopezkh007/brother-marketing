@extends('admin.index')

@section('content')
    @include('admin.layouts.page_title', ['pageTitle'=>'Slider Management'])
    <div class="position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg profile-wid-bg-sm"></div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mt-50">
                <div class="card-header align-items-center d-flex">
                    <div class="flex-grow-1 oveflow-hidden">
                        <p class="text-truncates mb-0" style="font-size: 1rem; font-weight: 600;">Update Slider</p>
                    </div>
                    <div class="flex-shrink-0 ms-2">
                        <ul class="nav justify-content-end nav-tabs-custom rounded card-header-tabs border-bottom-0" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-bs-toggle="tab" href=".english" role="tab">
                                    English
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-bs-toggle="tab" href=".khmer" role="tab">
                                    Khmer
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-body pb-4 px-4">
                    @if($errors->any())
                        {!! implode('', $errors->all('<div class="text-danger">*:message</div>')) !!}
                    @endif
                    <form action="{{route('slider.update', $id)}}" method="POST" class="row needs-validation" novalidate>
                        @csrf
                        @method('PATCH')
                        <div class="row">
                            <div class="col-md-12 mt-2">
                                <label for="image" class="form-label">Image<span>(600x600 pixels)</span></label>
                                <div class="w-100">
                                    <input type="file" class="filepond filepond-input-circle-1" 
                                        id="image" name="image" accept="image/*" />
                                </div>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label for="name" class="form-label">Name</label>
                                <input name="name" type="text" class="form-control" id="name" 
                                        placeholder="Enter name in English" value="{{$name}}"/>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <label for="navigateTo" class="form-label">Navigate to</label>
                                <input 
                                            name="navigateTo" type="text" 
                                            class="form-control" id="navigateTo" 
                                            placeholder="Enter text" value="{{$navigate_to}}"
                                        />
                            </div>
                            
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label for="ordering" class="form-label">Ordering</label>
                                    <input 
                                        name="ordering" type="number" 
                                        class="form-control" id="ordering" 
                                        placeholder="Enter number" value="{{$ordering}}"
                                    />
                                </div>
                            </div>
                            
                            <div class="col-lg-2">
                                <div class="mb-3">
                                    <label for="status">Status</label>
                                    <select class="form-select" name="status" aria-label="Default select example">
                                        <option selected value="">-- Select Status --</option>
                                        <option value="1" @if($status == 1) selected @endif>Active</option>
                                        <option value="2" @if($status == 2) selected @endif>Inactive</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <hr>
                                <div class="hstack gap-2 justify-content-start">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <a href="{{route('partner.index')}}" class="btn btn-light">Back</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script-template')
    <script src="{{asset('backend-assets/js/validate-form.js')}}"></script>
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

        @if(!$image)
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
                        source: `{{$image}}`,
                        options: {
                            type: "local",
                        },
                    },
                ],
                server: {
                    load: (source, load, error, progress, abort, headers) => {
                        const myRequest = new Request(`${window.location.protocol}//${window.location.host}/uploads/sliders/${source}`);
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
                url: "/admin/file-upload/image/sliders",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            },
        });
    </script>
@endsection