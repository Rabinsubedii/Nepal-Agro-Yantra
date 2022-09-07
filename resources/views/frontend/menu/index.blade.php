@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('add-menu')}}" class="btn btn-primary float-right">Add Menu</a>
    <h3>Menu </h3>
    <table class="table table-bordered css-serial ">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Menu Name</th>
                <th>Route</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($menu as $item)
            <tr>
                <td>&nbsp;</td>
                <td>{{$item->name}}</td>
                <td>{{$item->url}}</td>
                <td>
                    <a href="{{url('edit-menu/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{url('delete-menu/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                    <a href="{{url('/')}}" class="btn btn-danger btn-sm">View</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
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
