<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- bootstrap -->
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

        <!-- AOS animation on scroll -->
        <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

        <title>Home</title>
    </head>

    <body>
        <nav class="navbar navbar-expand-lg navbar-light fixed-top">
            <div class="container">
                <a class="navbar-brand" href="index.html"><img src="img/logo.png" class="logo" alt="logo"></a>

                <img data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation" src="icon/controls.png"
                    class="img-fluid toggle-image navbar-toggler" alt="toggle button">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link " href="index.html">Home </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="service.html">Service</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="product.html" id="navbarDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Products
                            </a>
                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="product.html">All Products</a>
                                <!-- <a class="dropdown-item" href="#">Another action</a>
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#">Something else here</a> -->
                            </div>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="gallery.html">Gallery</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="#">Contact us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="register_login.html">Login</a>
                        </li>
                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control search-input mr-sm-2" type="search" placeholder="Search"
                            aria-label="Search">
                        <!-- <img src="icon/search_FILL0_wght400_GRAD0_opsz48.svg" class="search-icon" alt="search-icon"> -->
                    </form>
                </div>
            </div>
        </nav>
        <div id="carouselExampleCaptions" class="carousel-slide " data-bs-ride="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/a1.jpg" class="d-block w-100" alt="home-slider">
                    <div class="carousel-caption d-none d-md-block" data-aos="fade-right">
                        <h2 id="main-heading" alt="slider-heading">Lorem ipsum is a placeholder text commonly</h2>
                        <p id="sub-heading" alt="slider-sub-heading">We make it a priority to offer flexible services to
                            accommodate your needs</p>
                        <a href="#" class="btn learn-more-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- card section -->
        <section class="card-section">
            <div class="container">
                <div class="row">
                    <!-- first card -->

                    <div class="col" id="broilers">
                        <div class="card">
                            <div class="card-body first-card-body">
                                <div class="card-logo">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="broiler-img img-fluid" fill="#fff"
                                        height="48" width="48">
                                        <path
                                            d="M16 36h2.75V26H24l2 4h10V18h-6l-2-4H16Zm11.85-8.75-2-4h-7.1v-6.5h7.4l2 4h5.1v6.5ZM24 44q-4.1 0-7.75-1.575-3.65-1.575-6.375-4.3-2.725-2.725-4.3-6.375Q4 28.1 4 24q0-4.15 1.575-7.8 1.575-3.65 4.3-6.35 2.725-2.7 6.375-4.275Q19.9 4 24 4q4.15 0 7.8 1.575 3.65 1.575 6.35 4.275 2.7 2.7 4.275 6.35Q44 19.85 44 24q0 4.1-1.575 7.75-1.575 3.65-4.275 6.375t-6.35 4.3Q28.15 44 24 44Zm0-3q7.1 0 12.05-4.975Q41 31.05 41 24q0-7.1-4.95-12.05Q31.1 7 24 7q-7.05 0-12.025 4.95Q7 16.9 7 24q0 7.05 4.975 12.025Q16.95 41 24 41Zm0-17Z" />
                                    </svg>
                                </div>
                                <p class="card-title">Broilers</p>
                                <p class="card-text">We offer a full range of products to support healthy broiler
                                    performance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col" id="layers">
                        <div class="card">
                            <div class="card-body first-card-body">
                                <div class="card-logo">
                                    <svg xmlns="http://www.w3.org/2000/svg" height="48" class="broiler-img img-fluid"
                                        fill="#fff" width="48">
                                        <path
                                            d="m24 41.5-18-14 2.5-1.85L24 37.7l15.5-12.05L42 27.5Zm0-7.6-18-14 18-14 18 14Zm0-15.05Zm0 11.25 13.1-10.2L24 9.7 10.9 19.9Z" />
                                    </svg>
                                </div>
                                <p class="card-title">Layers</p>
                                <p class="card-text">We offer a full range of products to support healthy broiler
                                    performance.</p>
                            </div>
                        </div>
                    </div>

                    <div class="col" id="locals">
                        <div class="card">
                            <div class="card-body first-card-body">
                                <div class="card-logo">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="broiler-img img-fluid" fill="#fff"
                                        height="48" width="48">
                                        <path
                                            d="M24 44q0-3.5 1.5-6.75t4-5.75q2.5-2.5 5.75-4T42 26q0 3.5-1.5 6.75t-4 5.75q-2.5 2.5-5.75 4T24 44Zm3.75-3.75q4-1.3 6.65-3.95 2.65-2.65 3.95-6.65-4 1.3-6.65 3.975-2.65 2.675-3.95 6.625ZM24 44q0-3.5-1.5-6.75t-4-5.75q-2.5-2.5-5.75-4T6 26q0 3.5 1.5 6.75t4 5.75q2.5 2.5 5.75 4T24 44Zm-3.75-3.75q-4-1.3-6.65-3.95-2.65-2.65-3.95-6.65 4 1.3 6.65 3.975 2.65 2.675 3.95 6.625Zm10.45-18.1q1.15 0 1.975-.825.825-.825.825-1.975 0-.85-.45-1.475-.45-.625-1.2-1.025L29.5 15.7q-.25 1.45-.825 2.525T27 20.15l2.1 1.5q.35.25.75.375t.85.125Zm-1.2-6.85 2.35-1.15q.75-.4 1.175-1.05.425-.65.425-1.45 0-1.15-.8-1.975-.8-.825-1.95-.825-.45 0-.825.125-.375.125-.775.375l-2.2 1.5q1.15.85 1.75 1.9.6 1.05.85 2.55Zm-7.95-4.7q.7-.3 1.325-.45Q23.5 10 24 10t1.125.15q.625.15 1.325.45l.35-3.1q.1-1.05-.8-1.775Q25.1 5 24.05 5q-1.1 0-2.025.75-.925.75-.825 1.75Zm2.5 7.4q1 0 1.725-.75.725-.75.725-1.8 0-1-.725-1.725Q25.05 13 24 13q-1 0-1.75.725T21.5 15.5q0 1 .75 1.75t1.8.75Zm0 8q1.05 0 1.95-.725.9-.725.8-1.775l-.35-3.1q-.7.3-1.325.45Q24.5 21 24 21t-1.125-.15q-.625-.15-1.325-.45l-.35 3.1q-.1 1 .825 1.75.925.75 2.025.75ZM18.5 15.3q.25-1.5.825-2.55.575-1.05 1.675-1.9l-2.1-1.5q-.35-.25-.75-.375t-.85-.125q-1.15 0-1.975.825-.825.825-.825 1.975 0 .8.45 1.45.45.65 1.2 1.05Zm-1.2 6.8q.45 0 .825-.125.375-.125.775-.375l2.2-1.45q-1.15-.85-1.75-1.925-.6-1.075-.85-2.525l-2.35 1.15q-.75.4-1.175 1.05-.425.65-.425 1.45.05 1.15.825 1.95.775.8 1.925.8ZM24 29q-1.8 0-3.275-1.075Q19.25 26.85 18.55 25.1q-.3 0-.625.025t-.625.025q-2.4 0-4.1-1.7-1.7-1.7-1.7-4.1 0-1 .4-1.975.4-.975 1.15-1.875-.7-.9-1.1-1.875-.4-.975-.4-1.975 0-2.4 1.675-4.1 1.675-1.7 4.075-1.7.3 0 .625.025t.625.025q.7-1.75 2.175-2.825Q22.2 2 24 2q1.8 0 3.275 1.075Q28.75 4.15 29.45 5.9q.3 0 .625-.025t.625-.025q2.4 0 4.075 1.7 1.675 1.7 1.675 4.1 0 1-.375 1.975-.375.975-1.125 1.875.7.9 1.1 1.875.4.975.4 1.975 0 2.4-1.675 4.1-1.675 1.7-4.075 1.7-.3 0-.625-.025t-.625-.025q-.7 1.75-2.175 2.825Q25.8 29 24 29Zm0-19Zm2.9.85Zm.1 9.3ZM24 21Zm-2.9-.85Zm-.1-9.3Zm-.75 29.4Zm7.5 0Z" />
                                    </svg>
                                </div>
                                <p class="card-title">Locals</p>
                                <p class="card-text">We offer a full range of products to support healthy broiler
                                    performance.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- service section -->
        <section class="service">
            <div class="container">
                <div class="service-caption">
                    <p id="service-heading">Our Services</p>
                    <p id="service-text">We provide industry
                        <br> leading services
                    </p>
                    <a href="service.html" class="float-right" id="view-all-link">View All</a>
                </div>

                <div class="row d-flex justify-content-center align-items-center" id="service-card-row">
                    <div class="col-md-4" data-aos="fade-up">
                        <div class="card" id="service-card">
                            <div class="card-body" id="service-content">
                                <img src="icon/equipment.png" class="img-fluid service-image" alt="equipment image">
                                <p id="service-title">Equipment</p>
                            </div>
                        </div>
                    </div>


                    <div class="col-md-4" data-aos="fade-up">
                        <div class="card" id="service-card">
                            <div class="card-body" id="service-content">
                                <img src="icon/research-and-development.png" class="img-fluid service-image"
                                    alt="equipment image">
                                <p id="service-title">Research & Development</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-up">
                        <div class="card" id="service-card">
                            <div class="card-body" id="service-content">
                                <img src="icon/consultation.png" class="img-fluid service-image" alt="equipment image">
                                <p id="service-title">Consultant</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- product section -->
        <section class="product">
            <img src="img/Group 99.png" class="bg-img" alt="img backgrounf">
            <div class="container">
                <div class="product-caption">
                    <p id="product-heading">Ultimate <span id="product-head">Products</span> For Your Business</p>
                    <p id="product-sub-caption">Voice & Collaboration Services That Will Make You Fell Like You are in
                        the Same Office.
                    </p>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="card" id="product-card">
                            <div class="card-body product-content-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="icon/neural.png" class="product-img img-fluid" alt="product image">
                                    </div>
                                    <div class="col">
                                        <h5 id="product-title">Enriched Cage System</h5>
                                        <p id="product-text">In publishing and graphic design, Lorem ipsum is a
                                            placeholder
                                            text
                                            commonly used to demonstrate the visual form of a
                                            document or a typeface without</p>
                                        <a href="productdescription.html" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-right">
                        <div class="card" id="product-card">
                            <div class="card-body product-content-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="icon/neural.png" class="product-img img-fluid" alt="product image">
                                    </div>
                                    <div class="col">
                                        <h5 id="product-title">Enriched Cage System</h5>
                                        <p id="product-text">In publishing and graphic design, Lorem ipsum is a
                                            placeholder
                                            text
                                            commonly used to demonstrate the visual form of a
                                            document or a typeface without</p>
                                        <a href="productdescription.html" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-right">
                        <div class="card" id="product-card">
                            <div class="card-body product-content-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="icon/neural.png" class="product-img img-fluid" alt="product image">
                                    </div>
                                    <div class="col">
                                        <h5 id="product-title">Enriched Cage System</h5>
                                        <p id="product-text">In publishing and graphic design, Lorem ipsum is a
                                            placeholder
                                            text
                                            commonly used to demonstrate the visual form of a
                                            document or a typeface without</p>
                                        <a href="productdescription.html" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="row mt-5" data-aos="fade-right">
                    <div class="col-md-4">
                        <div class="card" id="product-card">
                            <div class="card-body product-content-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="icon/neural.png" class="product-img img-fluid" alt="product image">
                                    </div>
                                    <div class="col">
                                        <h5 id="product-title">Enriched Cage System</h5>
                                        <p id="product-text">In publishing and graphic design, Lorem ipsum is a
                                            placeholder
                                            text
                                            commonly used to demonstrate the visual form of a
                                            document or a typeface without</p>
                                        <a href="productdescription.html" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4" data-aos="fade-right">
                        <div class="card" id="product-card">
                            <div class="card-body product-content-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="icon/neural.png" class="product-img img-fluid" alt="product image">
                                    </div>
                                    <div class="col">
                                        <h5 id="product-title">Enriched Cage System</h5>
                                        <p id="product-text">In publishing and graphic design, Lorem ipsum is a
                                            placeholder
                                            text
                                            commonly used to demonstrate the visual form of a
                                            document or a typeface without</p>
                                        <a href="productdescription.html" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4" data-aos="fade-right">
                        <div class="card" id="product-card">
                            <div class="card-body product-content-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="icon/neural.png" class="product-img img-fluid" alt="product image">
                                    </div>
                                    <div class="col">
                                        <h5 id="product-title">Enriched Cage System</h5>
                                        <p id="product-text">In publishing and graphic design, Lorem ipsum is a
                                            placeholder
                                            text
                                            commonly used to demonstrate the visual form of a
                                            document or a typeface without</p>
                                        <a href="productdescription.html" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </section>

        <!-- about section  -->
        <section class="about-section">
            <div class="about-caption">
                <p id="about-us-head">About us</p>
                <p id="sub-head">Lorem ipsum is a placeholder</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col" id="about-desctiption-col">

                        <p id="about-description" data-aos="fade-right">
                            In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to
                            demonstrate the visual form of a
                            document or a typeface without relying on meaningful content. Lorem ipsum may be used as a
                            placeholder before final copy
                            is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly
                            used to demonstrate the visual
                            form of a document or a typeface without relying on meaningful content. Lorem ipsum may be
                            used as a placeholder before
                            final copy is available.
                        </p>
                    </div>

                    <div class="col" id="img-col" data-aos="fade-left">
                        <img src="img/basket-full-eggs-nest-white-table.jpg" class="img-fluid about-image"
                            alt="about us image">
                    </div>
                </div>
            </div>
        </section>

        <!-- contact section -->
        <section class="contact-section">
            <div class="contact-caption">
                <p id="contact-head">Contact US</p>
                <p id="contact-sub-head">We will contact you with in 24 hours.</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center">
                        <!-- @if(Session::get('sucess'))
                        <div class="alert alert-success">
                            {{Session::get('sucess')}}
                        </div>
                        @endif

                        @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{Session::get('fail')}}
                        </div>
                        @endif -->
                        <form action="add" method="post" class="contact-form ">
                            @csrf
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" required name="name"
                                            value="{{old('name')}}">
                                        <span style="color:red">@error ('name'){{$message}} @enderror</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control" required name="email"
                                            value="{{old('email')}}">
                                        <span style="color:red">@error ('name'){{$message}} @enderror</span>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label for="phone">Phone</label>
                                        <input type="number" class="form-control" required name="phone"
                                            value="{{old('phone')}}">
                                        <span style="color:red">@error ('name'){{$message}} @enderror</span>
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label for="Message">Message</label>
                                        <textarea name="message" class="form-control" required id="contact-message"
                                            cols="30" rows="2" value="{{old('message')}}"></textarea>
                                        <span style="color:red">@error ('name'){{$message}} @enderror</span>
                                    </div>
                                    <!-- <a href="#" type="submit" class="btn send-message-butoon">Send</a> -->
                                    <button type="submit" class="btn send-message-butoon">Send</button>
                                </div>

                            </div>
                        </form>
                    </div>

                    <div class="col" id="map-col">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas"
                                    src="https://maps.google.com/maps?q=nepal%20agro%20yantra&t=&z=13&ie=UTF8&iwloc=&output=embed"
                                    frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a
                                    href="https://fmovies-online.net"></a><br>


                            </div>
                        </div>
                    </div>
                </div>
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
                                <img src="img/logo.png" class="footer-img img-fluid" alt="footer logo">
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
        <!-- AOS JS -->
        <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

        <script>
        AOS.init({
            duration: 2000,
        });

        var navbar = document.querySelector('nav')

        window.onscroll = function() {

            // pageYOffset or scrollY
            if (window.pageYOffset > 0) {
                navbar.classList.add('scrolled')
            } else {
                navbar.classList.remove('scrolled')
            }
        }
        </script>
    </body>

</html>
