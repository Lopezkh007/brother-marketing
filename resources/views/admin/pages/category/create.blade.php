@extends('admin.index')

@section('content')
    @include('admin.layouts.page_title', ['pageTitle'=>'Category Management'])
    <div class="position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg profile-wid-bg-sm"></div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mt-50">
                <div class="card-head pt-4 px-4">
                    <h4>Create Category</h4>
                    <hr style="margin: 0" />
                </div>
                <div class="card-body pb-4 px-4">
                    @if($errors->any())
                        {!! implode('', $errors->all('<div class="text-danger">*:message</div>')) !!}
                    @endif
                    <form action="{{route('category.create')}}" method="POST" class="row needs-validation" novalidate enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12 col-lg-8">
                                <div class="row">
                                    <div class="col-lg-6">
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
                                                <input name="title[en]" type="text" class="form-control" id="title" 
                                                       placeholder="Enter title in English" />
                                            </div>
                                            <div class="tab-pane" id="titleKhmer" role="tabpanel">
                                                <input name="title[kh]" type="text" class="form-control" 
                                                       placeholder="Enter title in Khmer" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="my-3">
                                            <label for="brandSelect" class="form-label">Brand</label>
                                            <select class="form-control" data-choices name="brand_id" id="brandSelect">
                                                <option value="" selected> --Select Band-- </option>
                                                @foreach ($brands as $item)
                                                    <option value="{{$item->id}}">{{$item->title->en}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>

                                   
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="ordering" class="form-label">Ordering</label>
                                            <input 
                                                name="ordering" type="number" 
                                                class="form-control" id="ordering" 
                                                placeholder="Enter number"
                                            />
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mb-3">
                                            <label for="status">Status</label>
                                            <select class="form-select" name="status" aria-label="Default select example">
                                                <option selected value="">-- Select Status --</option>
                                                <option value="1" selected>Active</option>
                                                <option value="2">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="col-12 col-lg-4 mt-3">
                                <label for="image" class="form-label">Icon<span>(80x80 pixels)</span></label>
                                <div class="w-100">
                                    <input type="file" class="filepond filepond-input-circle-1" id="image" name="image" accept="image/*" />
                                </div>
                            </div>
                            
                            <div class="col-lg-12">
                                <hr />
                                <div class="hstack gap-2 justify-content-start">
                                    <button type="submit" class="btn btn-primary btn-label waves-effect waves-light"><i class="ri-save-line label-icon align-middle fs-16 me-2"></i> Save</button>
                                    <a href="{{route('category.index')}}" class="btn btn-light">Back</a>
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
            imagePreviewHeight: 120,
            imageCropAspectRatio: "1:1",
            imageResizeTargetWidth: 200,
            imageResizeTargetHeight: 200,
            stylePanelLayout: "compact",
            styleLoadIndicatorPosition: "center bottom",
            styleProgressIndicatorPosition: "right bottom",
            styleButtonRemoveItemPosition: "left bottom",
            styleButtonProcessItemPosition: "right bottom",
        };

        FilePond.create(
            document.querySelector(".filepond-input-circle-1"),
            filepondCreateOption
        );
       
        FilePond.setOptions({
            server: {
                url: "/admin/file-upload/image/category-icon",
                headers: {
                    "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr("content"),
                },
            },
        });
    </script>
    
@endsection