@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('settingpage')}}" class="btn btn-success float-right">Back</a>
    <h3>Add Settings </h3>

    @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
    <form action="{{url('add-setting')}}" method="POST" enctype="multipart/form-data" class="mt-5">
        @csrf

        <div class="form-group">
            <label for="">Map</label>
            <input type="text" name="map" class="form-control" placeholder="Please Enter only map url " required>
        </div>

        <div class="mt-3">
            <label for="logo">Footer Logo</label>
            <input type="file" name="logo" required>
        </div>

        <div class="mt-3">
            <label for="footerlogo">Footer Logo</label>
            <input type="file" name="footerlogo" required>
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
