<div class="row page-titles">
    <div class="col-md-5 col-8 align-self-center">
        <h3 class="text-themecolor">{{$title}}</h3>
        <ol class="breadcrumb">
        	@if (isset($last_page))
            <li class="breadcrumb-item"><a href="javascript:void(0)">{{$last_page}}</a></li>
            <li class="breadcrumb-item active">{{$title}}</li>
            @else
            <li class="breadcrumb-item active">{{$title}}
            @endif
        </ol>
    </div>
</div>