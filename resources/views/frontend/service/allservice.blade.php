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
        <title>Service</title>
    </head>

    <body>
        @include('frontend.navbar')

        <!-- service heade -->

        <div class="service-head-image">
            <img src="img/basket-full-eggs-nest-white-table.jpg" class="img-fluid service-head-image"
                alt="srvices us image">
        </div>
        <div class="service-page-title">
            <div class="container">
                <p id="service-page-head">Our Services</p>
                <p id="service-page-subhead">We provide industry leading services.</p>
            </div>
        </div>


        <!-- service page body section -->
        <section class="services-page-section">
            <img src="img/Group 99.png" class="ser-img img-fluid" alt="img backgrounf">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="our-teams">
                            <p id="title-team">our team is</p>
                            <h4>High qualifed</h4>
                            <p id="team-description">
                                In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to
                                demonstrate the visual form of a
                                document or a typeface without relying on meaningful content. Lorem ipsum may be used as
                                a
                                placeholder before final copy
                                is available.
                            </p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="our-teams">
                            <p id="title-team">We Have</p>
                            <h4>Modern fleet</h4>
                            <p id="team-description">
                                In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to
                                demonstrate the visual form of a
                                document or a typeface without relying on meaningful content. Lorem ipsum may be used as
                                a
                                placeholder before final copy
                                is available.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="all-services">
                    <p>Here is our service's !</p>
                    <div class="row gx-5 " id="service-card-row">
                        @foreach ($service as $item)
                        <div class="col-md-4" data-aos="fade-up">
                            <div class="card mt-5" id="service-card">
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
                <!-- questions -->
                <div class="question-header">
                    <p>Here is client questions & answers</p>
                </div>
                <div class="ans-qst">
                    <div class="row">
                        @foreach($question as $item)
                        <div class="col-md-6">
                            <p>
                                <a class="btn btn-question-ask" data-toggle="collapse" href="#multiCollapseExample1"
                                    role="button" aria-expanded="false" aria-controls="multiCollapseExample1">
                                    {{$item->question}} <img src="icon/down-arrow.png" class="img-fluid down-arrow"
                                        alt="icon for hide show"></a>
                            </p>
                            <div class=" row">
                                <div class="col">
                                    <div class="collapse multi-collapse" id="multiCollapseExample1">
                                        <div class="card card-body">
                                            {{$item->answer}}
                                        </div>
                                    </div>
                                </div>
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
