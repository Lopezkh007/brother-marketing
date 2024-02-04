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
                    <div class="col-12 col-lg-6">
                        <div class="row">
                            <div class="col-lg-12">
                                <ul class="nav nav-pills py-1" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" href="#desEnglish" role="tab">
                                            Address <small>(English)</small>
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" data-bs-toggle="tab" href="#desKhmer" role="tab">
                                            Address <small>(Khmer)</small>
                                        </a>
                                    </li>
                                </ul>
                                <div class="tab-content mb-3">
                                    <div class="tab-pane active" id="desEnglish" role="tabpanel">
                                        <textarea name="content[address]" class="form-control"
                                            cols="30" rows="5" placeholder="Enter address in English"
                                        >{!!$content->address!!}</textarea>
                                    </div>
                                    <div class="tab-pane" id="desKhmer" role="tabpanel">
                                        <textarea name="content[address_kh]" class="form-control"
                                            cols="30" rows="5" placeholder="Enter address in Khmer"
                                        >{!!$content->address_kh!!}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Telephone Line 1</label>
                                    <input 
                                        name="content[telephone1]" value="{{$content->telephone1}}" type="text" 
                                        class="form-control"
                                        placeholder="Enter phone number"
                                    />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Telephone Line 2</label>
                                    <input 
                                        name="content[telephone2]" value="{{$content->telephone2}}" type="text" 
                                        class="form-control"
                                        placeholder="Enter phone number"
                                    />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Email Address 1</label>
                                    <input 
                                        name="content[email1]" value="{{$content->email1}}" type="email" 
                                        class="form-control"
                                        placeholder="Enter email"
                                    />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Email Address 2</label>
                                    <input 
                                        name="content[email2]" value="{{$content->email2}}" type="email" 
                                        class="form-control"
                                        placeholder="Enter email"
                                    />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Facebook</label>
                                    <input 
                                        name="content[facebook]" value="{{$content->facebook}}" type="text" 
                                        class="form-control"
                                        placeholder="Enter link"
                                    />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Twitter</label>
                                    <input 
                                        name="content[twitter]" value="{{$content->twitter}}" type="text" 
                                        class="form-control"
                                        placeholder="Enter link"
                                    />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">Instagram</label>
                                    <input 
                                        name="content[instagram]" value="{{$content->instagram}}" type="text" 
                                        class="form-control"
                                        placeholder="Enter link"
                                    />
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="mb-3">
                                    <label class="form-label">YouTube</label>
                                    <input 
                                        name="content[youtube]" value="{{$content->youtube}}" type="text" 
                                        class="form-control"
                                        placeholder="Enter link"
                                    />
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <div class="col-12 col-lg-6">
                        <div class="row my-3">
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">Map</label>
                                    <div class="input-group">
                                        <input type="text" name="embed" class="form-control">
                                        <input type="hidden" id="embedLink" name="content[map_embed_link]" value="{{$content->map_embed_link}}">
                                        <button class="btn btn-outline-primary" type="button" id="btn-search-map">Search</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div id="gmap-canvas" style="height: 350px; width: 100%; max-width: 100%; background: #98a6ad2a; padding: 8px;  border-radius: 10px;">
                                    <iframe
                                      id="google-map"
                                      style="height: 100%; width: 100%; border: 0;"
                                      frameborder="0"
                                      aria-disabled="true"
                                      src="https://www.google.com/maps/embed/v1/place?q={{$content->map_embed_link}}&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
                                    ></iframe>
                                </div>
                            </div>
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
    <script>
        const btnSearchMap = document.querySelector("#btn-search-map");
        const inputField = document.querySelector("input[name='embed']");
        const embedLink = document.querySelector("#embedLink")
        const iframeMap = document.getElementById("google-map");
        btnSearchMap.addEventListener("click", function () {
            assignMapToIframe(inputField.value);
        });
        function assignMapToIframe(value) {
            let queryPlace = value ? value.replace(/"/gi, "%22") : "Cambodia";
            embedLink.value = queryPlace;
            iframeMap.src = `https://www.google.com/maps/embed/v1/place?q=${queryPlace}&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8`;
            inputField.value = "";
        }
    </script>
@endsection

