@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')
<link href="{{ asset('css') }}app.css?v=2.1.1" rel="stylesheet" />

<div class="content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="heading">
                    <h3>Contact Details </h3>
                </div>
                <table class="table table-bordered css-serial" id="contacttbl">
                    <thead>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Message</th>
                        <th>Actions</th>
                    </thead>
                    <tbody>
                        @foreach($contact as $item)
                        <tr>
                            <td>&nbsp;</td>
                            <td> {{$item->name}} </td>
                            <td>{{$item->email}}</td>
                            <td>{{$item->phone}}</td>
                            <td>{{$item->message}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="delete/{{$item->id}}" class="btn btn-danger">Delete</a>
                                    <a href="edit/{{$item->id}}" class="btn btn-success ml-2">Edit</a>
                                </div>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
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
