@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('menu')}}" class="btn btn-success float-right">Back</a>
    <h3>Edit Menu </h3>

    @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
    <form action="{{ url('update-menu/'.$menu->id) }}" method="POST" class="mt-5">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Menu Name</label>
            <input type="text" name="name" value="{{$menu->name}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="url">Route</label>
            <input type="text" name="url" value="{{$menu->url}}" class="form-control">
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
