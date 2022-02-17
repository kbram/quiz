<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">

    <meta name="csrf-token" content="{{ csrf_token() }}">

    <!-- site metas -->
    <title>Throughout with smart farming</title>
    <meta name="description" content="Hydroponics Farm">
    <meta name="keywords"
        content="Hydroponics,Farm,Auto,Bavaram,Vavuniya Campus,Jaffna University,new,technology,Karunaaharan Bavaram,Bavaram Karunaaharan,bavar,automation,IoT,auto farm,auto farming">
    <meta name="author" content="Karunaaharan Bavaram">

    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="custom-font/fonts.css" />
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- Responsive-->
    <link rel="stylesheet" href="css/responsive.css">

    <link rel="stylesheet" href="css/slick0.css">
    <!-- fevicon -->
    <link rel="shortcut icon" href="/favicon.ico">
    <!-- Scrollbar Custom CSS -->
    <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
    <!-- Tweaks for older IEs-->
    <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
        media="screen">
    {{-- sweet alert --}}
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->


    {{-- Contact --}}
    <script src="js/jquery.min.js"></script>
    <script src="js/slick.min.js"></script>
    <script src="js/main.js"></script>
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">

    <style>
        @media only screen and (min-width: 1400px) and (max-width: 5500px) {
            .logoIcon {
                max-width: 286px;
            }
        }

        @media only screen and (min-width: 1100px) and (max-width: 1400px) {
            .logoIcon {
                max-width: 256px;
            }
        }

        @media only screen and (min-width: 992px) and (max-width: 1100px) {
            .logoIcon {
                padding-top: 2px;
                max-width: 256px;
            }
        }

        @media only screen and (min-width: 769px) and (max-width: 991px) {
            .logoIcon {
                padding-top: 3px;
                max-width: 256px;
            }

            .header-top {}

            .menu-area {
                padding-top: 17px;
            }
        }

        @media only screen and (min-width: 768px) and (max-width: 768px) {
            .menu-area {

                padding-top: 17px;

            }

            .logoIcon {
                padding-top: 7px;
                max-width: 206px;
            }
        }

        @media only screen and (min-width: 576px) and (max-width: 767px) {
            .menu-area {
                max-width: 536px;
                padding-top: 21px;
                padding-left: 100px;
            }

            .logoIcon {
                padding-top: 3px;
                max-width: 206px;
            }
        }

        @media only screen and (min-width:0px) and (max-width: 575px) {
            .logoIcon {

                max-width: 276px;
            }
        }

    </style>
    <script data-ad-client="ca-pub-2997037429536695" async
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
</head>
<!-- body -->

<body class="main-layout mb-0 pb-0">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading1.gif" alt="#" /></div>
    </div>
    <!-- end loader -->
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="head">
            <div class="container-fluid">
                <div class="row pr-2 pl-5">
                    <div class="col-6 p-0 m-0 ">
                        <div class="row  pt-2 pl-0">
                            @guest
                                <div class=" pr-5 pl-0 mr-0 ml-0"><a href="#" class="text-light"><img src="icon/2.png"
                                            alt="#" /> (+94)076 7000249</a></div>
                                <div class=" pr-0 pl-0 mr-0 ml-0"><a href="#" class="text-light"><img src="icon/1.png"
                                            alt="#" /> nkbram95@gmail.com</a></div>
                            @else
                                <div class="col pr-0 pl-0 mr-0 ml-0"><a href="#" class="text-light"><img
                                            src="icon/1.png" alt="#" /> {{ Auth::user()->email }}</a></div>
                            @endguest
                        </div>
                    </div>
                    <div class="col-6 p-0 m-0">

                        @guest
                            @if (Route::has('login'))
                                @if (Route::current()->getName() !== 'login' && Route::current()->getName() !== 'register')
                                    <button class="btn btn-primary pull-right mt-1 ml-5" data-toggle="modal"
                                        data-target="#loginModal">Login</button>
                                @endif
                                <ul class="social_icon">
                                    <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                    <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
                                    <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></i></a></li>
                                    <li><a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></i></a></li>

                                </ul>
                            @endif

                            {{-- @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link " href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif --}}
                        @else
                            <div class="nav-item dropdown pull-right mt-1 ml-5">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle text-light" href="#" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                             document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                        class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        @endguest


                    </div>
                </div>
            </div>
        </div>
        <div class="header-top ">
            <div class="header pt-0 mt-0">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                            <div class="full">
                                <div class="center-desk">
                                    <div class="logo">
                                        <a href="/"><img src="images/logo.png" alt="#" class="logoIcon" /></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                            <div class="menu-area">
                                <div class="limit-box">
                                    <nav class="main-menu">

                                        <ul class="menu-area-main p-2 m-0">
                                            <li @if (Request::path() === '/')  class="active" @endif> <a href="/">Home</a> </li>
                                            <li> <a href="/#service">Service</a> </li>
                                            <li> <a href="/#clean">Real System</a> </li>
                                            {{-- <li> <a href="/#clean">Product</a> </li> --}}
                                            <li @if (Request::path() === 'aboutUs')  class="active" @endif> <a href="/aboutUs">About</a> </li>
                                            <li @if (Request::path() === 'contactUs')  class="active" @endif> <a href="/contactUs">Contact us</a> </li>

                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <main class="">
        @yield('content')
    </main>
    </div>

    <!-- Footer -->
    <footer>
        <!-- Footer top -->
        <div class="container footer_top">
            <div class="row">
                <div class="col-lg-4 col-sm-7">
                    <div class="footer_item">
                        <h4 class="fontStyle02">About Company</h4>
                        <a class="row" href="https://bavaram.info"><img class="logo"
                                style="width:250px;" src="images/throughout.png" alt="Construction" /></a>

                        <p class="row fontStyle01 pr-2 pl-3">
                            By providing constant and readily available nutrition, hydroponics allows plants to grow up
                            to 50% faster than they would in soil.
                            Also, fresh produce can be harvested from a hydroponic garden throughout the year.
                        </p>

                        <ul class="list-inline footer_social_icon">
                            <a href=""><span class="fa fa-facebook"></span></a>
                            <a href=""><span class="fa fa-twitter"></span></a>
                            <a href=""><span class="fa fa-youtube"></span></a>
                            <a href=""><span class="fa fa-google-plus"></span></a>
                            <a href=""><span class="fa fa-linkedin"></span></a>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-sm-5">
                    <div class="footer_item">
                        <h4 class="fontStyle02">Explore link</h4>
                        <ul class="list-unstyled footer_menu fontStyle01">
                            <li><a href=""><span class="fa fa-play"></span> Our services</a></li>
                            <li><a href=""><span class="fa fa-play"></span> Meet our team</a></li>
                            <li><a href=""><span class="fa fa-play"></span> Forum</a></li>
                            <li><a href=""><span class="fa fa-play"></span> Help center</a></li>
                            <li><a href=""><span class="fa fa-play"></span> Contact Cekas</a></li>
                            <li><a href=""><span class="fa fa-play"></span> Privacy Policy</a></li>
                            <li><a href=""><span class="fa fa-play"></span> Cekas terms</a></li>
                            <li><a href=""><span class="fa fa-play"></span> Site map</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-7">
                    <div class="footer_item">
                        <h4 class="fontStyle02">Latest post</h4>
                        <ul class="list-unstyled post fontStyle01">
                            <li><a href="https://www.youtube.com/watch?v=6kUm_I7bLYw"><span class="date">20
                                        <small>AUG</small></span>Describtion for Hydroponics</a></li>
                            <li><a href="https://www.youtube.com/watch?v=V1PcgtWAEnU"><span class="date">12
                                        <small>SEP</small></span>Auto Farm</a></li>
                            <li><a href="https://www.youtube.com/watch?v=q1ieL7x3AMg"><span class="date">27
                                        <small>SEP</small></span>Auto Farm Robots</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-5">
                    <div class="footer_item">
                        <h4 class="fontStyle02">Contact us</h4>
                        <ul class="list-unstyled footer_contact fontStyle01">
                            <li><a href=""><span class="fa fa-map-marker"></span>New Chemmany Road,Nallur North,
                                    Jaffna.</a></li>
                            <li><a href=""><span class="fa fa-envelope"></span> nkbram95@gmail.com</a></li>
                            <li><a href=""><span class="fa fa-mobile"></span>
                                    <p>+94 (076) 7000 249
                                </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div><!-- Footer top end -->

        <!-- Footer bottom -->
        <div class="footer_bottom text-center">
            <p class="wow fadeInRight fontStyle01">
                Made with
                <i class="fa fa-heart"></i>
                by Copyright ©
                <a target="_blank"
                    href="https://www.google.com/search?q=Bavaram+Karunaaharan&oq=Bavaram+Karunaaharan&aqs=chrome.0.69i59l2j69i60j69i61j69i60.4759j1j1&sourceid=chrome&ie=UTF-8">Karunaaharan
                    Bavaram</a>
                in 2021. All Rights Reserved
            </p>
        </div><!-- Footer bottom end -->
    </footer><!-- Footer end -->


    <!-- Modal -->
    <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color:#98c93c;">
                    <h5 class="modal-title" id="exampleModalLabel">Login</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="modal-body">
                        <div class="form-group row">
                            <label for="email"
                                class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email1" type="email" class="form-control " name="email"
                                    value="{{ old('email') }}" required autocomplete="email" autofocus>


                                <span class="text-danger d-none" id="error">
                                    <strong>These credentials do not match our records.</strong>
                                </span>


                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password"
                                class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control " name="password" required
                                    autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                        {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0 pt-0 pb-0 mt-0">
                            <div class="col-md text-center mb-0 pt-0 pb-0 mt-0">
                                @if (Route::has('password.request'))
                                    <a class="btn btn-link mb-0 pt-0 pb-0 mt-0"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                                <div class=" p-t-20 p-b-20 mt-3">
                                    <span class="txt1 p-b-9">
                                        Don’t have an account?
                                    </span>
                                    <br>

                                    <button id="pathRegister" type="button" class="btn btn-secondary"> Sign up
                                        now</button>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        {{-- <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button> --}}
                        <button type="button" class="btn btn-primary" id="login">
                            {{ __('Login') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- end footer -->
    <!-- Javascript files-->
    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.0.0.min.js"></script>
    <script src="js/plugin.js"></script>
    <!-- sidebar -->
    <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
    <script>
        // This example adds a marker to indicate the position of Bondi Beach in Sydney,
        // Australia.

        $(document).ready(function() {

            if ($("#authCheck").val() === "done") {
                $('#loginModal').modal('show')
            }
            var CSRF_TOKEN = $('meta[name="csrf-token"]').attr("content");
            $("#pathRegister").click(function(event) {
                window.location.replace("register");
            });
            $("#login").click(function(event) {
                $email = $('#email1').val();
                $password = $('#password').val();
                if ($email === "" || $password === "") {
                    swal("Please fill out the fields!");
                } else {
                    $.ajax({
                        type: "POST",
                        url: "{{ route('login') }}",
                        data: {
                            _token: CSRF_TOKEN,
                            email: $email,
                            password: $password
                        },
                        success: function(result) {
                            window.location.replace("dashboard");
                        },
                        error: function(response) {
                            $("#error").removeClass("d-none");
                            $("#email1").addClass("is-invalid");
                            $("#password").addClass("is-invalid");
                        }
                    });
                }
            });
        });


        // function pathRegister(){

        //    window.location.replace("/register");
        // }
        function initMap() {
            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 11,
                center: {
                    lat: 40.645037,
                    lng: -73.880224
                },
            });

            var image = 'images/maps-and-flags.png';
            var beachMarker = new google.maps.Marker({
                position: {
                    lat: 40.645037,
                    lng: -73.880224
                },
                map: map,
                icon: image
            });
        }
    </script>
    <!-- google map js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap">
    </script>
    <!-- end google map js -->

    <!-- JS Implementing Plugins -->
    <script src="old/js/isotope.js"></script>
    <script src="old/js/isotope-active.js"></script>
    <script src="old/js/jquery.fancybox.js?v=2.1.5"></script>

    <script src="old/js/jquery.scrollUp.min.js"></script>

    <script src="old/js/main.js"></script>

</body>

</html>
