@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('add-card')}}" class="btn btn-primary float-right">Add Card</a>
    <h3>Top Cards </h3>

    <table class="table table-bordered css-serial">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Title</th>
                <th>Description</th>
                <th>Icon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($topcard as $item)
            <tr>
                <td>&nbsp;</td>
                <td>{{$item->title}}</td>
                <td>{{$item->description}}</td>
                <td>
                    <img src="{{asset('uploads/cardimg/'.$item->icon)}}" height="70px" alt="card-image">
                </td>
                <td>
                    <a href="{{url('/')}}" class="btn btn-danger btn-sm">View</a>
                    <a href="{{url('edit-card/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{url('delete-card/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
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
