<!DOCTYPE html>
<html lang="eng">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title')</title>

    {{-- link font awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.min.css"
        integrity="sha512-rqQltXRuHxtPWhktpAZxLHUVJ3Eombn3hvk9PHjV/N5DMUYnzKPC1i3ub0mEXgFzsaZNeJcoE0YHq0j/GFsdGg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    {{-- google fonts --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Nunito+Sans:ital,opsz,wght@0,6..12,200;0,6..12,300;0,6..12,400;0,6..12,500;0,6..12,600;0,6..12,700;0,6..12,800;0,6..12,900;0,6..12,1000;1,6..12,200;1,6..12,300;1,6..12,400;1,6..12,500;1,6..12,600;1,6..12,700;1,6..12,800;1,6..12,900;1,6..12,1000&display=swap"
        rel="stylesheet">

    {{-- link bootstrap css and js file --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous" />

    {{-- link css file --}}
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/media.css" />
</head>

<body>
    {{-- head --}}
    <section class="bg-dark high d-flex align-items-center">
        <div class="container-fluid container-lg">
            <div class="row justify-content-between">
                <div class="col-12 col-md-6">
                    <ul class="d-flex justify-content-center justify-content-md-start mb-2 mb-md-0 ps-0">
                        <li class="me-2 me-lg-3 d-flex align-items-center mt-2">
                            <a href="mailto:2712chandra@gmail.com" class="">
                                <i class="far fa-envelope mx-0 mx-lg-1 text-danger"></i>
                                <span class="hover-on ms-0 ms-lg-2">
                                    2712chandra@gmail.com
                                </span>
                            </a>
                        </li>
                        <li class="ms-0 ms-lg-0 d-flex align-items-center mt-2">
                            <a href="https://goo.gl/maps/s1Z1HHLnjJRqatYe9" target="_blank">
                                <i class="fas fa-map-marker-alt mx-0 mx-lg-1 text-danger"></i>
                                <span class="hover-on ms-0 ms-lg-2">
                                    Haldwani
                                </span>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6">
                    <ul class="d-flex justify-content-center justify-content-md-end mb-0">
                        <li class="d-flex align-items-center header__media-link">
                            <a href="https://www.facebook.com/pawan.bhatt.58367" target="_blank">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                        </li>
                        <li class="ms-2 d-flex align-items-center header__media-link">
                            <a href="https://twitter.com/home?lang=en" target="_blank">
                                <i class="fab fa-twitter"></i>
                            </a>
                        </li>
                        <li class="ms-2 d-flex align-items-center header__media-link">
                            <a href="https://www.instagram.com/pawanbhatt65/" target="_blank">
                                <i class="fab fa-instagram"></i>
                            </a>
                        </li>
                        <li class="ms-2 d-flex align-items-center header__media-link">
                            <a href="https://www.linkedin.com/in/pawan-bhatt-72961511b/" target="_blank">
                                <i class="fab fa-linkedin-in"></i>
                            </a>
                        </li>
                        <li class="ms-2 d-flex align-items-center">
                            <button type="button" class="text-white btn add">
                                Add Listing
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    {{-- navbar --}}
    <section class="main__home">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid container-lg">
                <a class="navbar-brand" href="{{ route('home') }}"><img src="images/logo%20(1).png"
                        class="img-fluid" /></a>
                <button class="navbar-toggler navbar-togler-btn" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavDropdown">
                    <ul class="navbar-nav">
                        <li
                            class="nav-item home__active-link {{ request()->is('/') || request()->is('home') ? 'current' : '' }}">
                            <a class="nav-link" href="{{ route('home') }}">Home</a>
                        </li>
                        <li
                            class="nav-item homeOne__active-link {{ request()->is('home-style-one') ? 'current' : '' }}">
                            <a class="nav-link" href="{{ route('homeStyeOne') }}">Home One</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="javascript:void(0)">Shop</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="javascript:void(0)">News</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link" href="javascript:void(0)">Pages</a>
                        </li>
                        <li class="nav-item contact__active-link {{ request()->is('connect-us') ? 'current' : '' }}">
                            <a class="nav-link" href="{{ route('connectUs') }}">Contact</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ms-auto home-media-list">
                        <li class="nav-item back-ground">
                            <button class="nav-link" type="button">
                                <i class="fas fa-search"></i>
                            </button>
                        </li>
                        <li class="nav-item back-ground">
                            <button class="nav-link" type="button">
                                <i class="far fa-user"></i>
                            </button>
                        </li>
                        <li class="nav-item back-ground">
                            <button class="nav-link" type="button">
                                <i class="fas fa-shopping-cart"></i>
                            </button>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>

    {{-- content --}}
    @yield('content')
    {{-- content --}}

    {{-- dream home --}}
    <section class="container-fluid container-lg">
        <div class="position-relative gap">
            <h1 class="ms-4 text-white">Looking for a dream home?</h1>
            <p class="ms-4 text-white">
                We can help you realize your dream of a new home
            </p>
            <button type="submit" class="button-position posi-tion">
                Explore Properties<i class="fas fa-long-arrow-alt-right ps-3"></i>
            </button>
        </div>
    </section>

    {{-- ------------------footer---------------------- --}}
    <footer class="bg-dark">
        <div class="container-fluid container-lg">
            <div class="row padding gy-4">
                <div class="col-12 col-md-6 col-xl-3">
                    <ul class="ps-0">
                        <li>
                            <a href="{{ route('home') }}">
                                <img src="images/logo-2.png" alt="" class="img-fluid" />
                            </a>
                        </li>
                        <li>
                            <p class="text-white my-2">
                                Lorem Ipsum is simply dummy text of the and
                                typesetting industry. Lorem Ipsum is dummy
                                text of the printing.
                            </p>
                        </li>
                        <li>
                            <i class="fas fa-map-marker-alt pe-3 text-white"></i>
                            <span class="text-white">Brooklyn, New York, United State</span>
                        </li>
                        <li class="my-3">
                            <i class="fas fa-phone-volume pe-3 text-white"></i>
                            <a href="tel:7351754927" class="hover-on">7351754927</a>
                        </li>
                        <li>
                            <i class="far fa-envelope pe-3 text-white"></i>
                            <a href="mailto:2712chandra@gmail.com" class="hover-on">2712chandra@gmail.com</a>
                        </li>
                    </ul>
                    <ul class="list-inline">
                        <li class="list-inline-item">
                            <a href="https://www.facebook.com/pawan.bhatt.58367" target="_blank" class="d-block">
                                <i class="fab fa-facebook-f text-white"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://twitter.com/home?lang=en" target="_blank" class="d-block">
                                <i class="fab fa-twitter text-white"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.linkedin.com/in/pawan-bhatt-72961511b/" target="_blank"
                                class="d-block">
                                <i class="fab fa-linkedin text-white"></i>
                            </a>
                        </li>
                        <li class="list-inline-item">
                            <a href="https://www.instagram.com/pawanbhatt65/" target="_blank" class="d-block">
                                <i class="fab fa-instagram mx-1 text-white"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <ul class="ps-0">
                        <li>
                            <h4 class="text-white">Company</h4>
                        </li>
                        <li><a href="javascript:void(0)" class="space">About</a></li>
                        <li><a href="javascript:void(0)" class="space">Blog</a></li>
                        <li><a href="javascript:void(0)" class="space">All Products</a></li>
                        <li><a href="javascript:void(0)" class="space">Location Map</a></li>
                        <li><a href="javascript:void(0)" class="space">FAQ</a></li>
                        <li><a href="{{ route('connectUs') }}" class="space">Contact us</a></li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <ul class="ps-0">
                        <li>
                            <h4 class="text-white">Services</h4>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="space">Order Tracking</a>
                        </li>
                        <li><a href="javascript:void(0)" class="space">Whish List</a></li>
                        <li><a href="javascript:void(0)" class="space">Login</a></li>
                        <li><a href="javascript:void(0)" class="space">My Acount</a></li>
                        <li>
                            <a href="javascript:void(0)" class="space">Terms and Conditions</a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" class="space">Promotional Offers</a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-md-6 col-xl-3">
                    <ul class="ps-0">
                        <li>
                            <h4 class="text-white">Newsletter</h4>
                        </li>
                        <li>
                            <p class="text-white">
                                Subscribe to our weekly Newsletter and
                                receive updates via email.
                            </p>
                        </li>
                        <li>
                            <input type="email" placeholder="Email" class="form-control form-control-lg" />
                        </li>
                        <li>
                            <h5 class="text-white">We Accept</h5>
                        </li>
                        <li>
                            <img src="images/payment-4.png" alt="image" class="d-block w-100 img-fluid" />
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="copy-write">
            <div class="container-fluid container-lg">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 d-flex justify-content-center justify-content-lg-start">
                        <span class="text-white d-block align-items-center margin-top">All Rights Reserved @ Company
                            2021</span>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 d-flex justify-content-center justify-content-lg-end">
                        <ul class="terms margin-top ps-0">
                            <li>
                                <a href="javascript:void(0)" class="px-3 hover-on claim">Terms & Condition
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="hover-on claim">Claim</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="hover-on claim">Privacy & Policy</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    {{-- bottom to top --}}
    <button type="button" class="bottomToTop">
        <i class="fas fa-long-arrow-alt-up"></i>
    </button>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous">
    </script>
    <script src="js/script.js"></script>

    @yield('scripts')
</body>

</html>
