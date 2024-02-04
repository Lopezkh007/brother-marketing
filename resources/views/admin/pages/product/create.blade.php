@extends('admin.index')

@section('content')
    @include('admin.layouts.page_title', ['pageTitle'=>'Product Management'])
    <div class="position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg profile-wid-bg-sm"></div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mt-50">
                <div class="card-head pt-4 px-4">
                    <h4>Create Product</h4>
                    <hr>
                </div>
                <div class="card-body pb-4 px-4">
                    @if($errors->any())
                        {!! implode('', $errors->all('<div class="text-danger">*:message</div>')) !!}
                    @endif
                    <form action="{{route('product.create')}}" method="POST" class="row needs-validation" novalidate enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-8">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <ul class="nav nav-pills py-1" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#shortDesEnglish" role="tab">
                                                    Short Description <small>(English)</small>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#shortDesKhmer" role="tab">
                                                    Short Description <small>(Khmer)</small>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content mb-3">
                                            <div class="tab-pane active" id="shortDesEnglish" role="tabpanel">
                                                <textarea name="shortDes[en]" class="form-control"
                                                    cols="30" rows="5" placeholder="Enter description in English"
                                                ></textarea>
                                            </div>
                                            <div class="tab-pane" id="shortDesKhmer" role="tabpanel">
                                                <textarea name="shortDes[kh]" class="form-control"
                                                    cols="30" rows="5" placeholder="Enter description in Khmer"
                                                ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <ul class="nav nav-pills py-1" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#desEnglish" role="tab">
                                                    Description <small>(English)</small>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#desKhmer" role="tab">
                                                    Description <small>(Khmer)</small>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content mb-3">
                                            <div class="tab-pane active" id="desEnglish" role="tabpanel">
                                                <textarea name="des[en]" class="form-control ckeditor-classic1" cols="30" rows="5" 
                                                          placeholder="Enter description in English"></textarea>
                                            </div>
                                            <div class="tab-pane" id="desKhmer" role="tabpanel">
                                                <textarea name="des[kh]" class="form-control ckeditor-classic1" cols="30" rows="5" 
                                                          placeholder="Enter description in Khmer"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <ul class="nav nav-pills py-1" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#additionalInfoEnglish" role="tab">
                                                    Additional Info <small>(English)</small>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#additionalInfoKhmer" role="tab">
                                                    Additional Info <small>(Khmer)</small>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content mb-3">
                                            <div class="tab-pane active" id="additionalInfoEnglish" role="tabpanel">
                                                <textarea name="additionalInfo[en]" class="form-control ckeditor-classic" cols="30" rows="5" 
                                                          placeholder="Enter additional info in English"></textarea>
                                            </div>
                                            <div class="tab-pane" id="additionalInfoKhmer" role="tabpanel">
                                                <textarea name="additionalInfo[kh]" class="form-control ckeditor-classic" cols="30" rows="5" 
                                                          placeholder="Enter additional info in Khmer"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label for="main-image" class="form-label">Thumbnail</label>
                                        <div class="w-100">
                                            <input  type="file" class="form-control" name="image" accept="image/*" 
                                                    onchange="openSingleFile(event)" data-preview="main_image_prev" />
                                            <div class="card mt-2" style="width: 150px;">
                                                <img src="" alt="" id="main_image_prev" class="img-fluid" 
                                                     style="height: 150px; object-fit: cover; display: none;" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label for="main-image" class="form-label">Image Back View</label>
                                        <div class="w-100">
                                            <input  type="file" class="form-control" name="image_back" accept="image/*" 
                                                    onchange="openSingleFile(event)" data-preview="back_view_image_prev" />
                                            <div class="card mt-2" style="width: 150px;">
                                                <img src="" alt="" id="back_view_image_prev" class="img-fluid" 
                                                     style="height: 150px; object-fit: cover; display: none;" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mt-2">
                                        <label for="logo" class="form-label">Gallery</label>
                                        <div class="w-100">
                                            <input  type="file" class="form-control" name="galleries[]" multiple accept="image/*" 
                                                    onchange="openMultiFiles(this.files)" />
                                            <div id="galleries_prev" class="row gap-1 mt-3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-4">
                                <div class="row">
                                    <div class="col-md-12">
                                        <ul class="nav nav-pills py-1" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-bs-toggle="tab" href="#productNameEnglish" role="tab">
                                                    Name <small>(English)</small>
                                                </a>
                                            </li>
                                            <li class="nav-item">
                                                <a class="nav-link" data-bs-toggle="tab" href="#productNameKhmer" role="tab">
                                                    Name <small>(Khmer)</small>
                                                </a>
                                            </li>
                                        </ul>
                                        <div class="tab-content mb-3">
                                            <div class="tab-pane active" id="productNameEnglish" role="tabpanel">
                                                <input type="text" class="form-control" name="name[en]" placeholder="Enter name in English">
                                            </div>
                                            <div class="tab-pane" id="productNameKhmer" role="tabpanel">
                                                <input type="text" class="form-control" name="name[kh]" placeholder="Enter name in Khmer">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="code" class="form-label">Barcode</label>
                                            <input name="code" type="text" class="form-control" id="code" placeholder="Enter barcode" />
                                        </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="priceInput" class="form-label">Price($)</label>
                                            <input type="number" step="0.0001" class="form-control" id="priceInput" name="price" placeholder="Enter price" >
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="mb-3">
                                            <label for="discountInput" class="form-label">Discount Price($)</label>
                                            <input type="number" step="0.0001" class="form-control" id="discountInput" name="discount" placeholder="Enter discount">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="brandSelect" class="form-label">Brand</label>
                                            <select class="form-control" data-choices name="brand_id" id="brandSelect">
                                                <option value="" selected>Select Brand</option>
                                                @foreach ($brands as $item)
                                                    <option value="{{$item->id}}">{{json_decode($item->title)->en}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="categorySelect" class="form-label">Category</label>
                                            <select class="form-control" data-choices name="category_id" id="categorySelect">
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="size" class="form-label">Capacity</label>
                                            <input type="text" data-choices data-choices-removeItem name="capacity" >
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="mb-3">
                                            <label for="weight" class="form-label">Type</label>
                                            <input type="text" data-choices data-choices-removeItem name="type" >
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="ordering" class="form-label">Ordering Number</label>
                                            <input name="ordering" type="number" class="form-control" id="ordering" placeholder="Enter number" />
                                        </div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="mb-3">
                                            <label for="status-select" class="form-label">Status</label>
                                            <select class="form-select" id="status-select" name="status">
                                                <option value="1">Active</option>
                                                <option value="0">Disable</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6 mt-2">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="is_new" 
                                                   name="is_new" value="1">
                                            <label class="form-check-label" for="is_new">
                                                New Arrival
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="is_feature" name="is_feature" value="1">
                                            <label class="form-check-label" for="is_feature">
                                                Feature
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" id="is_hot" name="is_hot" value="1">
                                            <label class="form-check-label" for="is_hot">
                                                Hot Sale
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 mt-4">
                                <hr>
                                <div class="hstack gap-2 justify-content-start">
                                    <button type="submit" class="btn btn-primary btn-label waves-effect waves-light"><i class="ri-save-line label-icon align-middle fs-16 me-2"></i> Save</button>
                                    <a href="{{route('product.index')}}" class="btn btn-light">Back</a>
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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="{{ asset('js/tinymce/tinymce.min.js') }}" referrerpolicy="origin"></script>
    <script src="{{ URL::asset('backend-assets/js/pages/product-form.init.js') }}"></script>
    <script src="{{ URL::asset('js/libs/file-render.js') }}"></script>
    <script>
        const categorySelect = new Choices($("#categorySelect")[0], {});
        $.get(`${window.location.protocol}//${window.location.host}/admin/categories/dropdown?brandId=`, function (data, status) {
            if (status === "success") {
                categorySelect.setValue(data);
                categorySelect.removeActiveItems();
            }
        });
        $("#brandSelect").on("change", function () {
            const id = $(this).val();
            categorySelect.removeActiveItems();
            categorySelect.clearChoices();
            $.get(`${window.location.protocol}//${window.location.host}/admin/categories/dropdown?brandId=${id}`, function (data, status) {
                if (status === "success") {
                    categorySelect.setValue(data);
                    categorySelect.removeActiveItems();
                }
            });
        });
    </script>
@endsection