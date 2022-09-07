@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('menu')}}" class="btn btn-success float-right">Back</a>
    <h3>Edit Relate Menu </h3>

    @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
    <form action="{{ url('update-footermenu/'.$footermenu->id) }}" method="POST" class="mt-5">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="name">Relate Link Name</label>
            <input type="text" name="name" value="{{$footermenu->name}}" class="form-control">
        </div>

        <div class="form-group">
            <label for="url">Url</label>
            <input type="text" name="url" value="{{$footermenu->url}}" class="form-control">
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
