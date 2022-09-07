@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('add-product')}}" class="btn btn-primary float-right">Add Product</a>
    <h3>Product Information </h3>

    <table class="table table-bordered css-serial">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Title</th>
                <th>Icon</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($product as $item)
            <tr>
                <td>&nbsp;</td>
                <td>{{$item->title}}</td>
                <td>
                    <img src="{{asset('uploads/producticon/'.$item->icon)}}" height="70px" alt="Product Icon">
                </td>
                <td>
                    <a href="{{url('editproduct/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{url('deleteproduct/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                    <a href="{{url('product/'.$item->slug)}}" class="btn btn-danger btn-sm">View</a>
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
