@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('topcard')}}" class="btn btn-success float-right">Back</a>
    <h3>Add Card </h3>

    @if(session ('status'))
    <h4 class="alert alert-success">{{session ('status')}}</h4>
    @endif
    <form action="{{url('add-card')}}" method="POST" enctype="multipart/form-data" class="mt-5">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="title">Description</label>
            <input type="text" name="description" class="form-control" required>
        </div>

        <label for="">Select Icon</label>
        <input type="file" name="icon" multiple class="form-control" required>

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
