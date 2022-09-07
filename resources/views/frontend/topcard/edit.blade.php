@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('topcard')}}" class="btn btn-success float-right">Back</a>
    <h3>Edit Card Information </h3>

    @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
    <form action="{{ url('update-card/'.$topcard->id) }}" method="POST" enctype="multipart/form-data" class="mt-5">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" value="{{$topcard->title}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="title">Description</label>
            <input type="text" name="description" value="{{$topcard->description}}" class="form-control">
        </div>

        <label for="">Image</label>
        <input type="file" name="gallery_image" class="form-control">
        <img src="{{asset('uploads/cardimg/'.$topcard->icon)}}" height="70px" alt="card-image">

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
