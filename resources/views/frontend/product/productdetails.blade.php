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
        <link rel="stylesheet" href="/CSS/style.css">
        <!-- lightbox -->
        <link rel="stylesheet" href="/CSS/lightbox.css">
        <link rel="stylesheet" href="/CSS/lightbox.min.css">
        <title>Products</title>
    </head>

    <body>
        @include('frontend.navbar')
        <!-- product description heade -->
        <div class="service-head-image">
            <img src="/img/b1.jpg" class="img-fluid service-head-image" alt="product head image">
        </div>
        <div class="service-page-title">
            <div class="container">
                <p id="service-page-head">{{$product->title}}</p>
                <p id="service-page-subhead">Make industry easier with our products.</p>
            </div>
        </div>

        <!-- description section -->
        <section class="product-description-section">
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="description-image">
                            <a href="{{asset('uploads/bannerfirst/'.$product->banner_image_one)}}"
                                data-lightbox="image-1"> <img
                                    src="{{asset('/uploads/bannerfirst/'.$product->banner_image_one)}}"
                                    class="image-fluid produt-desc-img" alt="Product description image"></a>
                        </div>
                    </div>


                    <div class="col-md-2">
                        <div class="side-button">

                        </div>
                    </div>


                </div>
                <div class="text-description-product">
                    <p>
                        {!!$product->description!!}
                    </p>
                </div>

                <div class="product-de-images">
                    <div class="row">
                        <div class="col">
                            <a href="{{asset('uploads/bannersecond/'.$product->banner_image_second)}}"
                                data-lightbox="image-1"> <img
                                    src="{{asset('/uploads/bannersecond/'.$product->banner_image_second)}}"
                                    class="image-fluid produt-desc-img" alt="Product description image"></a>
                        </div>

                        <div class="col">
                            <a href="{{asset('uploads/bannerthird/'.$product->banner_image_third)}}"
                                data-lightbox="image-1"> <img
                                    src="{{asset('/uploads/bannerthird/'.$product->banner_image_third)}}"
                                    class="image-fluid produt-desc-img" alt="Product description image"></a>
                        </div>
                    </div>
                </div>

                <!-- <div class="product-benefits">
                    <div class="benefits-title">
                        <p>Benefits of Services</p>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <p id="benefits-text"><img src="icon/check-mark.png" class="img-fluid check-icon"
                                    alt=" check mark icon">placeholder text commonly used</p>
                        </div>
                        <div class="col-md-6">
                            <p id="benefits-text"><img src="icon/check-mark.png" class="img-fluid check-icon"
                                    alt=" check mark icon">placeholder
                                text commonly used</p>
                        </div>
                        <div class="col-md-6">
                            <p id="benefits-text"><img src="icon/check-mark.png" class="img-fluid check-icon"
                                    alt=" check mark icon">placeholder
                                text commonly used</p>
                        </div>
                        <div class="col-md-6">
                            <p id="benefits-text"><img src="icon/check-mark.png" class="img-fluid check-icon"
                                    alt=" check mark icon">placeholder
                                text commonly used</p>
                        </div>
                        <div class="col-md-6">
                            <p id="benefits-text"><img src="icon/check-mark.png" class="img-fluid check-icon"
                                    alt=" check mark icon">placeholder
                                text commonly used</p>
                        </div>
                        <div class="col-md-6">
                            <p id="benefits-text"><img src="icon/check-mark.png" class="img-fluid check-icon"
                                    alt=" check mark icon">placeholder
                                text commonly used</p>
                        </div>

                    </div>
                </div> -->
            </div>
        </section>

        <!-- footer  -->
        <footer>
            <div class="footer-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <div class="footer-head">
                                <p>Nepal Agro
                                    Yantra Pvt. Ltd</p>
                                <img src="/img/logo.png" class="footer-img img-fluid" alt="footer logo">
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="related-link">
                                <p>Relate Link</p>
                                <div class="footer-list-item">
                                    <li> <a href="product.html">Product
                                        </a>
                                    </li>
                                    <li> <a href="service.html">Service</a></li>
                                    <li> <a href="gallery.html">Gallery </a></li>
                                    <li> <a href="#about">About </a></li>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="related-link">
                                <p>Product</p>
                                <div class="footer-list-item">
                                    <li> <a href="product.html">Enriched Cage System
                                        </a>
                                    </li>
                                    <li> <a href="product.html">Residence</a></li>
                                    <li> <a href="product.html">Centrebelt </a></li>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="related-link">
                                <p>Services</p>
                                <div class="footer-list-item">
                                    <li> <a href="service.html">Consulting
                                        </a>
                                    </li>
                                    <li> <a href="service.html">Equipment</a></li>
                                    <li> <a href="service.html">Research & Development </a></li>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="sub-footer">
                    <p>© 2022 Nepal Agro Yantra Pvt. Ltd.</p>
                </div>
            </div>
            </div>

        </footer>

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
            integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
            integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
            integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
        </script>
        <script src="/JS/lightbox-plus-jquery.js"></script>
        <script src="/JS/lightbox.js"></script>
        <script src="/JS/lightbox.js"></script>

    </body>

</html>
