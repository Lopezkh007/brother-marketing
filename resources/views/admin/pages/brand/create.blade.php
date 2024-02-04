@extends('admin.index')

@section('content')
    @include('admin.layouts.page_title', ['pageTitle'=>'Brand Management'])
    <div class="position-relative mx-n4 mt-n4">
        <div class="profile-wid-bg profile-wid-bg-sm"></div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="card mt-50">
                <div class="card-head pt-4 px-4">
                    <h4>Create Brand</h4>
                    <hr style="margin: 0" />
                </div>
                <div class="card-body pb-4 px-4">
                    @if($errors->any())
                        {!! implode('', $errors->all('<div class="text-danger">*:message</div>')) !!}
                    @endif
                    <form action="{{route('brand.create')}}" method="POST" class="row needs-validation" novalidate enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-12">
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
                            
                            <div class="col-lg-12">
                                <hr />
                                <div class="hstack gap-2 justify-content-start">
                                    <button type="submit" class="btn btn-primary btn-label waves-effect waves-light"><i class="ri-save-line label-icon align-middle fs-16 me-2"></i> Save</button>
                                    <a href="{{route('brand.index')}}" class="btn btn-light">Back</a>
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
@endsection