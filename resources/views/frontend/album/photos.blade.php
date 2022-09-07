<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
            integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <!-- google font -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <!-- css -->
        <link rel="stylesheet" href="CSS/style.css">
        <!-- lightbox -->
        <link rel="stylesheet" href="CSS/lightbox.css">
        <link rel="stylesheet" href="CSS/lightbox.min.css">
        <title>Gallery</title>
    </head>

    <body>
        @include('frontend.navbar')
        <!-- Gallery heade -->

        <div class="service-head-image">
            <img src="img/b1.jpg" class="img-fluid service-head-image" alt="product head image">
        </div>
        <div class="service-page-title">
            <div class="container">
                <p id="service-page-head">Photo Gallery</p>
                <p id="service-page-subhead">Hardworking is success of key.</p>
            </div>
        </div>

        <section class="photo-section">
            <div class="container">

                <!-- photo list -->
                <div class="photo-list">
                    <div class="row">
                        @foreach ($album as $item )
                        <div class="col-md-4">
                            <div class="card" id="gallery-photo-card">
                                <div class="wrap-gallery-image">
                                    <a href="{{asset('uploads/thumbnail/'.$item->thumbnail)}}"
                                        data-lightbox="image-1"><img
                                            src="{{asset('uploads/thumbnail/'.$item->thumbnail)}}" class="image-fluid"
                                            id="gallery-specifi-image" alt="gallery image"></a>
                                </div>
                                   <a href={{route('album.images',$item->id)}} class="btn btn-success float-right">View All </a>
                                   <p id="album-title">{{$item->title}}</p>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </section>


        <!-- footer  -->
        @include('frontend.footer')

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <script src="JS/lightbox-plus-jquery.js"></script>
        <script src="JS/lightbox.js"></script>
        <script src="JS/lightbox.js"></script>

    </body>

</html>
