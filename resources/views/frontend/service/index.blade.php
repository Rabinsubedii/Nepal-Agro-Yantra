@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('add-service')}}" class="btn btn-primary float-right">Add Service</a>
    <h3>Service Information </h3>

    <table class="table table-bordered css-serial">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Title</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($service as $item)
            <tr>
                <td>&nbsp;</td>
                <td>{{$item->title}}</td>
                <td>
                    <img src="{{asset('uploads/services/'.$item->service_image)}}" height="70px" alt="service-image">
                </td>
                <td>
                    <a href="{{url('allservice')}}" class="btn btn-danger btn-sm">View</a>
                    <a href="{{url('edit-service/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{url('delete-service/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
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
