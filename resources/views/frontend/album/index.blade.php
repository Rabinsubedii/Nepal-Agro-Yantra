@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('add-album')}}" class="btn btn-primary float-right">Add Album</a>
    <h3>Album </h3>
    <table class="table table-bordered css-serial ">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Title</th>
                <th>Thumnail</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($album as $item)
            <tr>
                <td>&nbsp;</td>
                <td>{{$item->title}}</td>
                <td>   
                    <a href="{{asset('uploads/thumbnail/'.$item->thumbnail)}}"
                                        data-lightbox="image-1"><img
                                            src="{{asset('uploads/thumbnail/'.$item->thumbnail)}}" class="image-fluid"
                                           height="70px" alt="gallery-image"></a>
                                        
                                        </td>
                <td>
                    <a href="{{url('edit-album/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{url('delete-album/'.$item->id)}}" class="btn btn-danger btn-sm">Delete Album</a>
                    <a href={{route('album.adminimage',$item->id)}} class="btn btn-danger btn-sm">View</a>
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
