@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('add-setting')}}" class="btn btn-primary float-right">Add Setting</a>
    <h3>Setting Information </h3>

    <table class="table table-bordered css-serial">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Map</th>
                <th>Logo</th>
                <th>Footer Logo</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($setting as $item)
            <tr>
                <td>&nbsp;</td>
                <td>
                    <iframe height="100" id="gmap_canvas" src="{{$item->map}}" frameborder="0" scrolling="no"
                        marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net">
                </td>
                <td>
                    <img src="{{asset('uploads/logo/'.$item->logo)}}" height="70px" alt="logo">
                </td>
                <td>
                    <img src="{{asset('uploads/footerlogo/'.$item->footerlogo)}}" height="70px" alt="footer-logo">
                </td>
                <td>
                    <a href="{{url('edit-setting/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{url('delete-setting/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
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
