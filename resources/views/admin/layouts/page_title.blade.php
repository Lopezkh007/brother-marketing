<div class="row">
    <div class="col-12">
        <div class="page-title-box d-sm-flex align-items-center justify-content-between">
            <h4 class="mb-sm-0">{{$pageTitle}}</h4>

            @isset($breadcrumb)    
                <div class="page-title-right">
                    <ol class="breadcrumb m-0">
                        @foreach ($breadcrumb as $item)
                        @if ($item['active'] == 1)
                        <li class="breadcrumb-item active">{{ $item['name'] }}</li>
                        @else
                        <li class="breadcrumb-item"><a href="{{ $item['link'] }}">{{ $item['name'] }}</a></li>
                        @endif
                        @endforeach
                    </ol>
                </div>
            @endisset

        </div>
    </div>
</div>