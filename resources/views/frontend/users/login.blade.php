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
        <title>Login Register</title>
    </head>

    <body>
        @include('frontend.navbar')
        <div class=" container d-flex justify-content-center align-items-center login-reg-whole">
            <div class="login-card">
                <div class="row">
                    <div class="col-md-5" id="tabs-section">

                        <div class="loginpage-title">
                            <p id="hello-text">Hey 👋</p>
                            <p id="nay-text">Welcome to Nepal Agro Yantra</p>
                        </div>
                        <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                            <li class="nav-item text-center" id="nav-menu-tab">
                                <a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home"
                                    role="tab" aria-controls="pills-home" aria-selected="true">Login</a>
                            </li>
                            <li class="nav-item text-center" id="nav-menu-tab">
                                <a class="nav-link btr text-white" id="pills-profile-tab" data-toggle="pill"
                                    href="#pills-profile" role="tab" aria-controls="pills-profile"
                                    aria-selected="false">Register</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-5" id="form-section">
                        <div class="tab-content" id="pills-tabContent">
                            <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                aria-labelledby="pills-home-tab">
                                <div class="login-title">
                                    <p>Login with your <span class="acc">account !</span></p>
                                </div>
                                <div class="form px-1 pt-1 login-form">
                                    <form method="post">
                                        <input type="text" name="" class="form-control" placeholder="Email or Phone">

                                        <input type="text" name="" class="form-control" placeholder="Password">
                                        <a href="resetpassword.html"" class=" forgot-password">Forgot Password</a>
                                        <button class="btn btn-dark btn-block">Login</button>
                                    </form>

                                </div>
                            </div>
                            <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                aria-labelledby="pills-profile-tab">
                                <div class="register-title">
                                    <p> <span class="acc">Register</span> Into Nepal Agro Yantra!</p>
                                </div>
                                <div class="form px-1 login-form">

                                    <div class="row">
                                        <div class="col">
                                            <input type="text" name="" class="form-control" required placeholder="Name">
                                        </div>
                                        <div class="col">
                                            <input type="email" name="" class="form-control" required
                                                placeholder="Email">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col"><input type="text" name="" class="form-control" required
                                                placeholder="Phone"></div>
                                        <div class="col"><input type="text" name="" class="form-control" required
                                                placeholder="Address"></div>
                                    </div>

                                    <div class="row">
                                        <div class="col"><input type="password" name="" class="form-control" required
                                                placeholder="Password"></div>
                                        <div class="col"><input type="password" name="" class="form-control" required
                                                placeholder="Confirm Password"></div>
                                    </div>
                                    <a href="register_login.html"" class=" already-have-account">Already Have Account?
                                        <span class="login">Login</span>Now</a>
                                    <button class="btn btn-dark btn-block">Signup</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
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
    </body>

</html>
