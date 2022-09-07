@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('album')}}" class="btn btn-success float-right">Back</a>
    <h3>Add Images </h3>

    @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
    <form action="{{url('add-album')}}" method="POST" enctype="multipart/form-data" class="mt-5">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="mt-3">
         <label for="">Select Thumbnail</label>
        <input type="file" name="thumbnail" multiple class="form-control" required>
       </div>


       <div class="mt-3">
         <label for="">Select Images</label>
        <input  type="file" 
                    name="images[]"
                    class="form-control" 
                    accept="image/*"
                    multiple>
       </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary">Save</button>
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
