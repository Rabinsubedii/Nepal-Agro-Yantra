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
        @include('frontend.homenav')
        <div id="carouselExampleCaptions" class="carousel-slide " data-bs-ride="false">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/a1.jpg" class="d-block w-100" alt="home-slider">
                    <div class="carousel-caption d-none d-md-block" data-aos="fade-right">
                        <h2 id="main-heading" alt="slider-heading">Lorem ipsum is a placeholder text commonly</h2>
                        <p id="sub-heading" alt="slider-sub-heading">We make it a priority to offer flexible services to
                            accommodate your needs</p>
                        <a href="#aboutus" class="btn learn-more-btn">Learn More</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- card section -->
        <section class="card-section">
            <div class="container">
                <div class="row">
                    <!-- first card -->
                    @foreach($topcard as $item)
                    <div class="col" id="broilers">
                        <div class="card">
                            <div class="card-body first-card-body">
                                <div class="card-logo">
                                    <img src="{{asset('uploads/cardimg/'.$item->icon)}}" class="broiler-img img-fluid"
                                        alt="card-image">

                                    <!-- <svg xmlns="http://www.w3.org/2000/svg"
                                        src="{{asset('uploads/cardimg/'.$item->icon)}}" fill="#fff" height="48"
                                        width="48">
                                        <path
                                            d="M16 36h2.75V26H24l2 4h10V18h-6l-2-4H16Zm11.85-8.75-2-4h-7.1v-6.5h7.4l2 4h5.1v6.5ZM24 44q-4.1 0-7.75-1.575-3.65-1.575-6.375-4.3-2.725-2.725-4.3-6.375Q4 28.1 4 24q0-4.15 1.575-7.8 1.575-3.65 4.3-6.35 2.725-2.7 6.375-4.275Q19.9 4 24 4q4.15 0 7.8 1.575 3.65 1.575 6.35 4.275 2.7 2.7 4.275 6.35Q44 19.85 44 24q0 4.1-1.575 7.75-1.575 3.65-4.275 6.375t-6.35 4.3Q28.15 44 24 44Zm0-3q7.1 0 12.05-4.975Q41 31.05 41 24q0-7.1-4.95-12.05Q31.1 7 24 7q-7.05 0-12.025 4.95Q7 16.9 7 24q0 7.05 4.975 12.025Q16.95 41 24 41Zm0-17Z" />
                                    </svg> -->

                                </div>
                                <p class="card-title"> {{$item->title}}</p>
                                <p class="card-text"> {{$item->description}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                    <a href="{{url('allservice')}}" class="float-right" id="view-all-link">View All</a>
                </div>

                <div class="row d-flex justify-content-center align-items-center" id="service-card-row">
                    @foreach ($service as $item)
                    <div class="col-md-4" data-aos="fade-up">
                        <div class="card" id="service-card">
                            <div class="card-body" id="service-content">
                                <img src="{{asset('uploads/services/'.$item->service_image)}}"
                                    class="img-fluid service-image" alt="equipment image">
                                <p id="service-title"> {{$item->title}}</p>
                            </div>
                        </div>
                    </div>
                    @endforeach
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
                    @foreach($product as $item)
                    <div class="col-md-4">
                        <div class="card" id="product-card">
                            <div class="card-body product-content-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <img src="{{asset('uploads/producticon/'.$item->icon)}}"
                                            class="product-img img-fluid" alt="product image">
                                    </div>
                                    <div class="col">
                                        <h5 id="product-title">{{$item->title}}</h5>
                                        <p id="product-text">{{$item->short_description}}</p>
                                        <a href="{{url('product/'.$item->slug)}}" class="read-more">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach


                </div>

                <!-- <div class="row mt-5" data-aos="fade-right">
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

                </div> -->
            </div>

        </section>

        <!-- about section  -->
        <section class="about-section" id="aboutus">
            <div class="about-caption">
                <p id="about-us-head">About us</p>
                <p id="sub-head">Lorem ipsum is a placeholder</p>
            </div>
            <div class="container">
                <div class="row">
                    @foreach ($about as $item)
                    <div class="col" id="about-desctiption-col">


                        <p id="about-description" data-aos="fade-right">
                            {{$item->description}}
                            <!-- In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to
                            demonstrate the visual form of a
                            document or a typeface without relying on meaningful content. Lorem ipsum may be used as a
                            placeholder before final copy
                            is available.In publishing and graphic design, Lorem ipsum is a placeholder text commonly
                            used to demonstrate the visual
                            form of a document or a typeface without relying on meaningful content. Lorem ipsum may be
                            used as a placeholder before
                            final copy is available. -->
                        </p>

                    </div>

                    <div class="col" id="img-col" data-aos="fade-left">
                        <img src="{{asset('uploads/abouts/'.$item->about_image)}}" class="img-fluid about-image"
                            alt="about us image">
                    </div>
                </div>
                @endforeach
            </div>
        </section>

        <!-- contact section -->
        <section class="contact-section" id="contactus">
            <div class="contact-caption">
                <p id="contact-head">Contact US</p>
                <p id="contact-sub-head">We will contact you with in 24 hours.</p>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col d-flex justify-content-center align-items-center">
                        @if(Session::get('sucess'))
                        <div class="alert alert-success">
                            {{Session::get('sucess')}}
                        </div>
                        @endif

                        @if(Session::get('fail'))
                        <div class="alert alert-danger">
                            {{Session::get('fail')}}
                        </div>
                        @endif
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
                    @foreach($setting as $item)

                    <div class="col" id="map-col">
                        <div class="mapouter">
                            <div class="gmap_canvas"> <iframe width="600" height="500" id="gmap_canvas"
                                    src="{{$item->map}}" frameborder="0" scrolling="no" marginheight="0"
                                    marginwidth="0"></iframe><a href="https://fmovies-online.net"><a
                                        href="https://fmovies-online.net"></a><br>


                            </div>
                        </div>
                    </div>
                    @endforeach

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
