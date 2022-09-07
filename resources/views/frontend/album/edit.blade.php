@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('album')}}" class="btn btn-success float-right">Back</a>
    <h3>Edit Album </h3>

    @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
    <form action="{{ url('update-album/'.$album->id) }}" method="POST" enctype="multipart/form-data" class="mt-5">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="description">Title</label>
            <input type="text" name="title" value="{{$album->title}}" class="form-control">
        </div>

        <div class="mt-3">
        <label for="">Thumnail Image</label>
        <input type="file" name="thumbnail" class="form-control">
        <img src="{{asset('uploads/thumbnail/'.$album->thumbnail)}}" height="70px" alt="thumbnail-image">
        </div>

        <div class="mt-3">
        <label for="">All Images</label>
        <input type="file" 
                    name="images[]"
                    class="form-control" 
                    accept="image/*"
                    multiple >
          @foreach ($images as $image)
          <img src="/productimages/{{$image->image}}" class="image-fluid" 
          id="gallery-specifi-image" alt="gallery image" height="70px">
         @endforeach
        </div>

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
