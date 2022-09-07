@extends('layouts.app1', ['activePage' => 'dashboard', 'titlePage' => __('Dashboard')])

@section('content')


<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">

<div class="content">
    <h3>Add Products </h3>
    <div class="container mt-5">
        @if(session ('status'))
        <h4 class="alert alert-success">{{session ('status')}}</h4>
        @endif
        <form action="{{url('add-product')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>

            <div class="form-group">
                <textarea name="description" id="summernote" cols="30" rows="10" required></textarea>
            </div>

            <div class="form-group">
                <label for="short_description">Short Description</label>
                <textarea name="short_description" placeholder="Short Description" class="form-control"
                    required></textarea>
            </div>

            <div class="mt-3">
                <label for="icon">Icon</label>
                <input type="file" name="icon" class="form-control" required>
            </div>


            <div class="mt-3">
                <label for="banner-image-one">First Banner Image</label>
                <input type="file" name="banner_image_one" class="form-control" required>
            </div>



            <div class="mt-3">
                <label for="banner-image-second">Second Banner Image</label>
                <input type="file" name="banner_image_second" class="form-control" required>
            </div>



            <div class="mt-3">
                <label for="banner-image-third">Third Banner Image</label>
                <input type="file" name="banner_image_third" class="form-control" required>
            </div>


            <div class="form-group">
                <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                <a href="{{url('product')}}" class="btn btn-primary btn-sm float-right mr-5">Back</a>
            </div>
        </form>
    </div>
</div>
@endsection

@push('js')
<script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
</script>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
</script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
<!-- 
<script>
$('#title').keyup(function(e) {
    alert('a');
    $.get('{{url('
        check_slug ')}}', {
            'title': $('#title').val()
        },
        function(data) {
            $('#slug').val(data.slug);
        }
    );
});
</script> -->
<script>
$(document).ready(function() {
    // Javascript method's body can be found in assets/js/demos.js
    md.initDashboardPageCharts();
});
$('#summernote').summernote({
    placeholder: 'Description',
    tabsize: 2,
    height: 100
});
</script>
@endpush
