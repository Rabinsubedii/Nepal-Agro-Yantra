@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('about')}}" class="btn btn-success float-right">Back</a>
    <h3>Edit About US </h3>

    @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
    <form action="{{ url('update-about/'.$about->id) }}" method="POST" enctype="multipart/form-data" class="mt-5">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="description">Description</label>
            <input type="text" name="description" value="{{$about->description}}" class="form-control">
        </div>

        <label for="">About Image</label>
        <input type="file" name="about_image" class="form-control">
        <img src="{{asset('uploads/abouts/'.$about->about_image)}}" height="70px" alt="about-image">

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Update</button>
        </div>
    </form>
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
