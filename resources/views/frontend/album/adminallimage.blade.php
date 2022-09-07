@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <!-- css -->
        <link rel="stylesheet" href="/CSS/style.css">
        <!-- lightbox -->
        <link rel="stylesheet" href="/CSS/lightbox.css">
        <link rel="stylesheet" href="/CSS/lightbox.min.css">
<div class="content">
    <a href="{{url('album')}}" class="btn btn-primary float-right">Back</a>
    <h3>All Image </h3>

        @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
 <div class="photo-list">
                    <div class="row">
                   @foreach ($images as $item)
                        <div class="col-md-4">
                            <div class="" id="gallery-photo-card">
                                <div class="wrap-gallery-image">
                                   <a href="/product_images/{{$item->image}}"
                                        data-lightbox="image-1"><img
                                            src="/productimages/{{$item->image}}" class="image-fluid"
                                            id="gallery-specifi-image" alt="gallery image" ></a>
                                             <a href="{{url('remove-image/'.$item->id)}}" class="btn btn-danger btn-sm">Delete Image</a>
                                </div>

                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
</div>
@endsection

@push('js')
<script>
$(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    md.initDashboardPageCharts();
});
</script>
@endpush
