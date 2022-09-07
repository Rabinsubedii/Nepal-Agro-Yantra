@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])
@section('content')
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">


<div class="content">
    <a href="{{url('product')}}" class="btn btn-success float-right">Back</a>
    <h3>Edit Products </h3>

    @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
    <form action="{{ url('updateproduct/'.$product->id) }}" method="POST" enctype="multipart/form-data" class="mt-5">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{$product->title}}" class="form-control">
        </div>

        <div class="form-group">
            <textarea class="form-control" id="summernote" rows="5" name="description" maxlength="750" required
                autofocus>{{ ucfirst($product->description) }}</textarea>

        </div>

        <div class="form-group">
            <label for="short_description">Short Description</label>
            <input name="short_description" placeholder="Short Description" value="{{$product->short_description}}"
                class="form-control">
        </div>

        <div class="mt-5">
            <label for="">Icon</label>
            <input type="file" name="icon" class="form-control">
            <img src="{{asset('uploads/producticon/'.$product->icon)}}" height="70px" alt="product-icon">
        </div>

        <div class="mt-5">
            <label for="">First Banner Image </label>
            <input type="file" name="banner_image_one" class="form-control">
            <img src="{{asset('uploads/bannerfirst/'.$product->banner_image_one)}}" height="70px"
                alt="product-banner-image">
        </div>

        <div class="mt-5">
            <label for="">Second Banner Image </label>
            <input type="file" name="banner_image_second" class="form-control">
            <img src="{{asset('uploads/bannersecond/'.$product->banner_image_second)}}" height="70px"
                alt="product-banner-image">
        </div>

        <div class="mt-5">
            <label for="">Third Banner Image </label>
            <input type="file" name="banner_image_third" class="form-control">
            <img src="{{asset('uploads/bannerthird/'.$product->banner_image_third)}}" height="70px"
                alt="product-banner-image">
        </div>





        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
</div>
@endsection

@push('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<script>
$(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    md.initDashboardPageCharts();
});
$(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    md.initDashboardPageCharts();
});
$('#summernote').summernote({
    placeholder: 'Description',
    tabsize: 2,
    height: 100
});
</script>
@endpush
