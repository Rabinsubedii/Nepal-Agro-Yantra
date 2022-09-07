@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('settingpage')}}" class="btn btn-success float-right">Back</a>
    <h3>Edit Settings </h3>

    @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
    <form action="{{ url('update-setting/'.$setting->id) }}" method="POST" enctype="multipart/form-data" class="mt-5">
        @csrf
        @method('PUT')

        <div class="form-group">
            <label for="title">Map</label>
            <input type="text" name="map" value="{{$setting->map}}" class="form-control">
        </div>

        <div class="mt-3">
            <label for="">Logo</label>
            <input type="file" name="logo" class="form-control">
            <img src="{{asset('uploads/logo/'.$setting->logo)}}" height="70px" alt="card-image">
        </div>

        <div class="mt-3">
            <label for="">Footer Logo</label>
            <input type="file" name="footerlogo" class="form-control">
            <img src="{{asset('uploads/footerlogo/'.$setting->footerlogo)}}" height="70px" alt="card-image">
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
