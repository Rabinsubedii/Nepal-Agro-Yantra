@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">

    <h3>Nepal Agro Yantra Menu </h3>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <a href="{{url('add-menu')}}" class="btn btn-primary">Add Header Menu</a>
            </div>


            <div class="col-md-6">
                <a href="{{url('add-footermenu')}}" class="btn btn-primary float-right">Add Footer Link</a>
            </div>

        </div>
    </div>
    <table class="table table-bordered mt-5 css-serial">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Menu Name</th>
                <th>Url</th>
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

    <div class="mt-5">
        <h3>Footer Menu List </h3>
        <table class="table table-bordered css-serial">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Menu Name</th>
                    <th>Url</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($footermenu as $item)
                <tr>
                    <td>&nbsp;</td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->url}}</td>
                    <td>
                        <a href="{{url('edit-footermenu/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                        <a href="{{url('delete-footermenu/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        <a href="{{url('/')}}" class="btn btn-danger btn-sm">View</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
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
