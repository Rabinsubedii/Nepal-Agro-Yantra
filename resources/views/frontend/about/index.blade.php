@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('add-about')}}" class="btn btn-primary float-right">Add About Us</a>
    <h3>About page </h3>

    <table class="table table-bordered css-serial">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Description</th>
                <th>Image</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($about as $item)
            <tr>
                <td>&nbsp;</td>
                <td>{{$item->description}}</td>
                <td>
                    <img src="{{asset('uploads/abouts/'.$item->about_image)}}" height="70px" alt="about-image">
                </td>
                <td>
                    <a href="{{url('/')}}" class="btn btn-danger btn-sm">View</a>
                    <a href="{{url('edit-about/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{url('delete-about/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
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
