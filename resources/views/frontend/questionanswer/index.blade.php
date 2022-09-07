@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<div class="content">
    <a href="{{url('add-question')}}" class="btn btn-primary float-right">Add Service</a>
    <h3>Client Question Answer </h3>

    <table class="table table-bordered css-serial">
        <thead>
            <tr>
                <th>S.N</th>
                <th>Question</th>
                <th>Answer</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($question as $item)
            <tr>
                <td>&nbsp;</td>
                <td>{{$item->question}}</td>
                <td>{{$item->answer}}</td>
                <td>
                    <a href="{{url('allservice')}}" class="btn btn-danger btn-sm">View</a>
                    <a href="{{url('edit-question/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                    <a href="{{url('delete-qsan/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
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
