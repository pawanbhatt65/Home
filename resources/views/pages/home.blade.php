@extends('layout.default')

@section('title')
    Quarter
@endsection

@section('content')
    <!------------------real estate------------>
    <section class="home__realEstate-section">
        <div class="background">
            <div class="ontainer-fluid container-lg padding-estate">
                <div class="row">
                    <div class="col-12 col-lg-6 dolar-home order-2 order-lg-1">
                        <div class="row">
                            <div class="col-12">
                                <h6 class="real-estate-h6">
                                    <i class="fas fa-home text-danger mr-1"></i>
                                    <span>Real Estate Agency</span>
                                </h6>
                            </div>
                            <div class="col-12">
                                <h1 class="your-house">
                                    Find Your Dream House BY Us
                                </h1>
                                <p class="doler-space">
                                    Lorem ipsum dolor sit amet, consectetur
                                    adipisicing elit, sed do eiusmod tempor
                                    incididunt ut labore.
                                </p>
                            </div>
                            <div class="col-12">
                                <button type="button" class="button-enquire">
                                    Make An Enquire
                                </button>
                                <span class=""><i class="fas fa-play video-play"></i></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6 order-1 order-lg-2">
                        <div class="home-img">
                            <img src="images/img1.png" alt="image" class="d-block img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="background-white">
                <div class="row gy-5">
                    <div class="col-12 col-lg-3">
                        <select class="form-select form-shadow form-shadow-margin-top">
                            <option selected>Choose Area</option>
                            <option>London</option>
                            <option>Los Angeles</option>
                            <option>New York</option>
                            <option>New Jersey</option>
                            <option>Chicago</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-3">
                        <select class="form-select form-shadow">
                            <option selected>Property Status</option>
                            <option>Open House</option>
                            <option>Rent</option>
                            <option>sale</option>
                            <option>Sold</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-3">
                        <select class="form-select form-shadow">
                            <option selected>Property Type</option>
                            <option>Apartment</option>
                            <option>Co-op</option>
                            <option>Condo</option>
                            <option>Single Family Home</option>
                        </select>
                    </div>
                    <div class="col-12 col-lg-3 d-flex justify-content-center">
                        <button type="submit" class="button-now">
                            Find Now
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--------------leading------------------------>
    <section class="leading__home-section">
        <div class="ontainer-fluid container-lg">
            <div class="row">
                <div class="col-12 col-lg-6">
                    <div class="position-relative">
                        <img src="images/img2.png" alt="image" class="d-block w-100 img-fluid" />
                        <div class="position-image">
                            <img src="images/img2-1.png" alt="image" class="img-fluid" />
                            <span class="position-icon"><i class="fas fa-play"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-lg-6">
                    <span class="about">About Us</span>
                    <h1 class="rent">
                        The Leading Real Estate Rental Marketplace.
                    </h1>
                    <p class="work">
                        Over 39,000 people work for us in more than 70
                        countries all over the This breadth of global
                        coverage, combined with specialist services
                    </p>
                    <div class="row">
                        <div class="col-12 col-sm-12 col-md-6">
                            <i class="fas fa-home icon-style"></i><span class="rent">Smart Home Design</span>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6">
                            <i class="fas fa-mountain icon-style"></i><span class="rent">Beautiful Scene
                                Arround</span>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6">
                            <i class="fas fa-weight icon-style"></i><span class="rent">Exceptional
                                Lifestyle</span>
                        </div>
                        <div class="col-12 col-sm-12 col-md-6">
                            <i class="fas fa-user-secret icon-style"></i><span class="rent">complete 24/7
                                Security</span>
                        </div>
                        <div class="col-12">
                            <p class="minim">
                                "Enimad minim veniam quis nostrud
                                exercitationllamco laboris. Lorem ipsum
                                dolor sit amet"
                            </p>
                        </div>
                        <div class="col-12">
                            <button type="submit" alt="img" class="button-now">
                                Our Services
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-------------- number --------------------->
    <section class="bg-number">
        <div class="container-fluid container-lg">
            <div class="row g-3">
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="number-box">
                        <p class="text-center text-icon py-1">
                            <i class="far fa-file-audio fa-4x"></i>
                        </p>
                        <h1 class="text-center py-1" id="totalSquareAreaCount">0+</h1>
                        <h6 class="text-center py-1">Total Area Sq</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="number-box">
                        <p class="text-center text-icon py-1">
                            <i class="fas fa-hotel fa-4x"></i>
                        </p>
                        <h1 class="text-center py-1" id="solidApartmentCount">0K+</h1>
                        <h6 class="text-center py-1">Apartment Soild</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="number-box">
                        <p class="text-center text-icon py-1">
                            <i class="fas fa-toolbox fa-4x"></i>
                        </p>
                        <h1 class="text-center py-1" id="totalConstructionsCount">0+</h1>
                        <h6 class="text-center py-1">Total Constructions</h6>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-md-3">
                    <div class="number-box">
                        <p class="text-center text-icon py-1">
                            <i class="fas fa-chair fa-4x"></i>
                        </p>
                        <h1 class="text-center py-1" id="apartioRoomsCount">0+</h1>
                        <h6 class="text-center py-1">Apartio Rooms</h6>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------properties----------------->
    <section class="home__sell-properties-section">
        <div class="container-fluid container-lg">
            <div class="row gy-3">
                <div class="col-12 col-lg-6">
                    <span class="about">About Us</span>
                    <h1 class="rent">Today Sells Properties</h1>
                    <p class="work">
                        Houzez allow you to design unlimited panels and real
                        estate custom forms to capture leads and keep record
                        of all information
                    </p>
                    <ul>
                        <li class="li-before position-relative">
                            Live Music Cocerts at Luviana
                        </li>
                        <li class="li-before position-relative">
                            Our SecretIsland Boat Tour is Just for You
                        </li>
                        <li class="li-before position-relative">
                            Live Music Cocerts at Luviana
                        </li>
                        <li class="li-before position-relative">
                            Live Music Cocerts at Luviana
                        </li>
                    </ul>
                    <ul class="list-inline my-4">
                        <li class="list-inline-item li-after position-relative">
                            <span class="d-block">3<i class="fas fa-bed"></i></span>Bedrooms
                        </li>
                        <li class="list-inline-item li-after position-relative">
                            <span class="d-block">2<i class="fas fa-sink"></i></span>Bathrooms
                        </li>
                        <li class="list-inline-item li-after position-relative">
                            <span class="d-block">2<i class="fas fa-car"></i></span>Car Parking
                        </li>
                        <li class="list-inline-item mt-3 mt-lg-0">
                            <span class="d-block">3450<i class="fas fa-vector-square"></i></span>Square Ft
                        </li>
                    </ul>
                    <ul class="list-inline">
                        <li class="list-inline-item w-image">
                            <a href="images/img4.jpg" target="_blank">
                                <img src="images/img4.jpg" alt="image" class="w-100 d-block" />
                            </a>
                        </li>
                        <li class="list-inline-item w-image">
                            <a href="images/img5.jpg" target="_blank"><img src="images/img5.jpg" alt="image"
                                    class="w-100 d-block" /></a>
                        </li>
                        <li class="list-inline-item w-image">
                            <a href="images/img6.jpg" target="_blank"><img src="images/img6.jpg" alt="image"
                                    class="w-100 d-block" /></a>
                        </li>
                    </ul>
                </div>
                <div class="col-12 col-lg-6">
                    <img src="images/img3.png" alt="image" class="w-100 d-block img-fluid" />
                </div>
            </div>
        </div>
    </section>

    <!----------------services------------------------>
    <section class="background-service">
        <div class="container-fluid container-lg">
            <div class="row gy-5 gx-4">
                <div class="col-12">
                    <h6 class="text-center">
                        <span class="about">Our Services</span>
                    </h6>
                    <h1 class="text-center">Our Main Focus</h1>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="bg-white box-shadow">
                        <img src="images/img7.png" alt="image" class="d-block mx-auto py-4 img-fluid" />
                        <h3 class="text-center">
                            <a href="javascript:void(0)" class="text-hover ps-0">Buy a home</a>
                        </h3>
                        <p class="text-center px-3">
                            over 1 million+ homes for sale available on the
                            website, we can match you with a house you will
                            want to call home.
                        </p>
                        <p class="text-center">
                            <a href="javascript:void(0)">
                                <span>
                                    Find A Home<i class="fas fa-long-arrow-alt-right"></i>
                                </span>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="bg-white box-shadow">
                        <img src="images/img8.png" alt="image" class="d-block mx-auto py-4 img-fluid" />
                        <h3 class="text-center">
                            <a href="javascript:void(0)" class="text-hover ps-0">Rent a home</a>
                        </h3>
                        <p class="text-center px-3">
                            over 1 million+ homes for sale available on the
                            website, we can match you with a house you will
                            want to call home.
                        </p>
                        <p class="text-center">
                            <a href="javascript:void(0)">
                                <span>
                                    Find A Home<i class="fas fa-long-arrow-alt-right"></i>
                                </span>
                            </a>
                        </p>
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-4">
                    <div class="bg-white box-shadow">
                        <img src="images/img9.png" alt="image" class="d-block mx-auto py-4 img-fluid" />
                        <h3 class="text-center">
                            <a href="javascript:void(0)" class="text-hover ps-0">Sell a home</a>
                        </h3>
                        <p class="text-center px-3">
                            over 1 million+ homes for sale available on the
                            website, we can match you with a house you will
                            want to call home.
                        </p>
                        <p class="text-center">
                            <a href="javascript:void(0)">
                                <span>
                                    Find A Home<i class="fas fa-long-arrow-alt-right"></i>
                                </span>
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!----------------feature listing----------------------->
    <section class="padding-listing">
        <div class="container-fluid">
            <div class="row gy-2 gx-4">
                <div class="col-12">
                    <p class="text-center">
                        <span class="about">Propertis</span>
                    </p>
                    <h1 class="text-center">Featured Listing</h1>
                </div>
                <div class="col-12 col-lg-6 col-xxl-4">
                    <div class="position-relative hover-image-box">
                        <div class="position-relative">
                            <div class="for-rent">
                                <a href="javascript:void(0)">
                                    <img src="images/img10.jpg" alt="image" class="d-block w-100 img-fluid" />
                                </a>
                            </div>
                            <div class="rent-badge position-absolute">
                                <ul class="m-0 p-0">
                                    <li>For Rent</li>
                                </ul>
                            </div>
                            <div class="location">
                                <div class="location-1">
                                    <ul class="mb-0">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-map-marker-alt"></i>
                                                Balmont Gardens, Chicago
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="location-2">
                                    <ul class="mb-0 terms">
                                        <li class="location-2-camera">
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-camera"></i> 4
                                            </a>
                                        </li>
                                        <li class="location-2-camera">
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-film"></i> 2
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="backgroun">
                            <div class="pt-5 pb-0 pb-lg-5 px-4">
                                <h6 class="text-danger">$34900/Month</h6>
                                <h3>
                                    <a href="javascript:void(0)" class="nice-view">
                                        New Appartment Nice View
                                    </a>
                                </h3>
                                <p class="py-3">
                                    Beautiful Huge 1 Family House In Heart
                                    Of Westbury. Newly Renovated With New
                                    Wood
                                </p>
                                <ul class="list-inline">
                                    <li class="list-inline-item li-after position-relative">
                                        <span class="d-block">
                                            3 <i class="fas fa-bed"></i>
                                        </span>
                                        Bedrooms
                                    </li>
                                    <li class="list-inline-item li-after position-relative">
                                        <span class="d-block">
                                            2 <i class="fas fa-sink"></i>
                                        </span>
                                        Bathrooms
                                    </li>
                                    <li class="list-inline-item mt-3 mt-lg-0">
                                        <span class="d-block">
                                            3450 <i class="fas fa-vector-square"></i>
                                        </span>
                                        Square Ft
                                    </li>
                                </ul>
                            </div>
                            <hr />
                            <div class="likes row">
                                <div
                                    class="d-flex justify-content-center justify-content-sm-start align-items-center col-12 col-sm-6 mb-2 mb-sm-0">
                                    <div class="owner me-2">
                                        <img src="images/img13.jpg" alt="image" class="img-13 img-fluid" />
                                    </div>
                                    <div class="owner-ship">
                                        <h6>
                                            <a href="javascript:void(0)" class="nice-view">William Seklo</a>
                                        </h6>
                                        <p class="mb-0">Estate Agents</p>
                                    </div>
                                </div>
                                <div
                                    class="col-12 col-sm-6 d-flex justify-content-center justify-content-sm-end align-items-center">
                                    <ul class="terms ps-0">
                                        <li class="heart">
                                            <i class="fas fa-expand"></i>
                                        </li>
                                        <li class="heart">
                                            <i class="far fa-heart"></i>
                                        </li>
                                        <li class="heart">
                                            <i class="fas fa-plus-circle"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xxl-4">
                    <div class="position-relative hover-image-box">
                        <div class="position-relative">
                            <div class="for-rent">
                                <a href="javascript:void(0)">
                                    <img src="images/img11.jpg" alt="image" class="d-block w-100 img-fluid" />
                                </a>
                            </div>
                            <div class="rent-badge position-absolute bg-danger">
                                <ul class="m-0 p-0">
                                    <li>For Sale</li>
                                </ul>
                            </div>
                            <div class="location">
                                <div class="location-1">
                                    <ul class="mb-0">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-map-marker-alt"></i>
                                                Balmont Gardens, Chicago
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="location-2">
                                    <ul class="mb-0 terms">
                                        <li class="location-2-camera">
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-camera"></i> 4
                                            </a>
                                        </li>
                                        <li class="location-2-camera">
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-film"></i> 2
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="backgroun">
                            <div class="py-5 px-4">
                                <h6 class="text-danger">$34900/Month</h6>
                                <h3>
                                    <a href="javascript:void(0)" class="nice-view">Modern Appartment</a>
                                </h3>
                                <p class="py-3">
                                    Beautiful Huge 1 Family House In Heart
                                    Of Westbury. Newly Renovated With New
                                    Wood
                                </p>
                                <ul class="list-inline">
                                    <li class="list-inline-item li-after position-relative">
                                        <span class="d-block">
                                            3 <i class="fas fa-bed"></i>
                                        </span>
                                        Bedrooms
                                    </li>
                                    <li class="list-inline-item li-after position-relative">
                                        <span class="d-block">
                                            2 <i class="fas fa-sink"></i>
                                        </span>
                                        Bathrooms
                                    </li>
                                    <li class="list-inline-item">
                                        <span class="d-block">
                                            3450 <i class="fas fa-vector-square"></i>
                                        </span>
                                        Square Ft
                                    </li>
                                </ul>
                            </div>
                            <hr />
                            <div class="likes row">
                                <div
                                    class="d-flex justify-content-center justify-content-sm-start align-items-center col-12 col-sm-6 mb-2 mb-sm-0">
                                    <div class="owner me-2">
                                        <img src="images/img13.jpg" alt="image" class="img-13 img-fluid" />
                                    </div>
                                    <div class="owner-ship">
                                        <h6>
                                            <a href="javascript:void(0)" class="nice-view">William Seklo</a>
                                        </h6>
                                        <p class="mb-0">Estate Agents</p>
                                    </div>
                                </div>
                                <div
                                    class="col-12 col-sm-6 d-flex justify-content-center justify-content-sm-end align-items-center">
                                    <ul class="terms ps-0">
                                        <li class="heart">
                                            <i class="fas fa-expand"></i>
                                        </li>
                                        <li class="heart">
                                            <i class="far fa-heart"></i>
                                        </li>
                                        <li class="heart">
                                            <i class="fas fa-plus-circle"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-lg-6 col-xxl-4">
                    <div class="position-relative hover-image-box">
                        <div class="position-relative">
                            <div class="for-rent">
                                <a href="javascript:void(0)">
                                    <img src="images/img12.jpg" alt="image" class="d-block w-100 img-fluid" />
                                </a>
                            </div>
                            <div class="rent-badge position-absolute">
                                <ul class="m-0 p-0">
                                    <li>For Rent</li>
                                </ul>
                            </div>
                            <div class="location">
                                <div class="location-1">
                                    <ul class="mb-0">
                                        <li>
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-map-marker-alt"></i>
                                                Balmont Gardens, Chicago
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="location-2">
                                    <ul class="mb-0 terms">
                                        <li class="location-2-camera">
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-camera"></i> 4
                                            </a>
                                        </li>
                                        <li class="location-2-camera">
                                            <a href="javascript:void(0)">
                                                <i class="fas fa-film"></i> 2
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="backgroun">
                            <div class="py-5 px-4">
                                <h6 class="text-danger">$34900/Month</h6>
                                <h3>
                                    <a href="javascript:void(0)" class="nice-view">Comfortable Appartment</a>
                                </h3>
                                <p class="py-3">
                                    Beautiful Huge 1 Family House In Heart
                                    Of Westbury. Newly Renovated With New
                                    Wood
                                </p>
                                <ul class="list-inline">
                                    <li class="list-inline-item li-after position-relative">
                                        <span class="d-block">
                                            3 <i class="fas fa-bed"></i>
                                        </span>
                                        Bedrooms
                                    </li>
                                    <li class="list-inline-item li-after position-relative">
                                        <span class="d-block">
                                            2 <i class="fas fa-sink"></i>
                                        </span>
                                        Bathrooms
                                    </li>
                                    <li class="list-inline-item">
                                        <span class="d-block">
                                            3450 <i class="fas fa-vector-square"></i>
                                        </span>
                                        Square Ft
                                    </li>
                                </ul>
                            </div>
                            <hr />
                            <div class="likes row">
                                <div
                                    class="d-flex justify-content-center justify-content-sm-start align-items-center col-12 col-sm-6 mb-2 mb-sm-0">
                                    <div class="owner me-2">
                                        <img src="images/img13.jpg" alt="image" class="img-13 img-fluid" />
                                    </div>
                                    <div class="owner-ship">
                                        <h6>
                                            <a href="javascript:void(0)" class="nice-view">William Seklo</a>
                                        </h6>
                                        <p class="mb-0">Estate Agents</p>
                                    </div>
                                </div>
                                <div
                                    class="col-12 col-sm-6 d-flex justify-content-center justify-content-sm-end align-items-center">
                                    <ul class="terms ps-0">
                                        <li class="heart">
                                            <i class="fas fa-expand"></i>
                                        </li>
                                        <li class="heart">
                                            <i class="far fa-heart"></i>
                                        </li>
                                        <li class="heart">
                                            <i class="fas fa-plus-circle"></i>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!------------appartment sketch----------------->
    <section class="sketch">
        <div class="container-fluid container-lg">
            <div class="row gy-4">
                <div class="col-12">
                    <div class="">
                        <p class="text-center">
                            <span class="about">Appartment Sketch</span>
                        </p>
                        <h1 class="text-center rent">Appartment Plans</h1>
                    </div>
                </div>
                <div class="col-12">
                    <div class="tabs">
                        <ul class="tabs-header">
                            <li>
                                <button type="button" class="tab-header-btn active" data-filter="the-studio">
                                    The Studio
                                </button>
                            </li>
                            <li>
                                <button type="button" class="tab-header-btn" data-filter="delux-portion">
                                    Delux Portion
                                </button>
                            </li>
                            <li>
                                <button type="button" class="tab-header-btn" data-filter="penthose">
                                    Penthose
                                </button>
                            </li>
                            <li>
                                <button type="button" class="tab-header-btn" data-filter="top-garden">
                                    Top Garden
                                </button>
                            </li>
                            <li>
                                <button type="button" class="tab-header-btn" data-filter="double-height">
                                    Double Height
                                </button>
                            </li>
                        </ul>
                        <div class="tabs-body">
                            <div class="tab-body the-studio active">
                                <div class="row gy-3">
                                    <div class="col-12 col-lg-6">
                                        <div class="background-studio">
                                            <h2 class="fw-bold">
                                                The Studio
                                            </h2>
                                            <p>
                                                Enimad minim veniam quis
                                                nostrud exercitation ullamco
                                                laboris. Lorem ipsum dolor
                                                sit amet cons aetetur
                                                adipisicing elit sedo
                                                eiusmod tempor.Incididunt
                                                labore et dolore magna
                                                aliqua. sed ayd minim
                                                veniam.
                                            </p>
                                            <div class="">
                                                <ul class="ps-0">
                                                    <li class="area">
                                                        <label>Total
                                                            Area</label><span>2800 sq.
                                                            ft</span>
                                                    </li>
                                                    <li class="area">
                                                        <label>Bedrooms</label><span>150 sq.
                                                            ft</span>
                                                    </li>
                                                    <li class="area">
                                                        <label>Bathrooms</label><span>45 sq. ft</span>
                                                    </li>
                                                    <li class="area">
                                                        <label>Balcony/Pets</label><span>Allowed</span>
                                                    </li>
                                                    <li class="area">
                                                        <label>Lounge</label><span>650 sq.
                                                            ft</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="">
                                            <img src="images/img14.png" alt="image" class="d-block w-100 img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-body delux-portion">
                                <div class="row gy-3">
                                    <div class="col-12 col-lg-6">
                                        <div class="background-studio">
                                            <h2 class="fw-bold">
                                                Delux Portion
                                            </h2>
                                            <p>
                                                Enimad minim veniam quis
                                                nostrud exercitation ullamco
                                                laboris. Lorem ipsum dolor
                                                sit amet cons aetetur
                                                adipisicing elit sedo
                                                eiusmod tempor.Incididunt
                                                labore et dolore magna
                                                aliqua. sed ayd minim
                                                veniam.
                                            </p>
                                            <div class="">
                                                <ul class="ps-0">
                                                    <li class="area">
                                                        <label>Total
                                                            Area</label><span>2800 sq.
                                                            ft</span>
                                                    </li>
                                                    <li class="area">
                                                        <label>Bedrooms</label><span>150 sq.
                                                            ft</span>
                                                    </li>
                                                    <li class="area">
                                                        <label>Bathrooms</label><span>45 sq. ft</span>
                                                    </li>
                                                    <li class="area">
                                                        <label>Balcony/Pets</label><span>Allowed</span>
                                                    </li>
                                                    <li class="area">
                                                        <label>Lounge</label><span>650 sq.
                                                            ft</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="">
                                            <img src="images/img14.png" alt="image" class="d-block w-100 img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-body penthose">
                                <div class="row gy-3">
                                    <div class="col-12 col-lg-6">
                                        <div class="background-studio">
                                            <h2 class="fw-bold">
                                                Penthose
                                            </h2>
                                            <p>
                                                Enimad minim veniam quis
                                                nostrud exercitation ullamco
                                                laboris. Lorem ipsum dolor
                                                sit amet cons aetetur
                                                adipisicing elit sedo
                                                eiusmod tempor.Incididunt
                                                labore et dolore magna
                                                aliqua. sed ayd minim
                                                veniam.
                                            </p>
                                            <div class="">
                                                <ul class="ps-0">
                                                    <li class="area">
                                                        <label>Total
                                                            Area</label><span>2800 sq.
                                                            ft</span>
                                                    </li>
                                                    <li class="area">
                                                        <label>Bedrooms</label><span>150 sq.
                                                            ft</span>
                                                    </li>
                                                    <li class="area">
                                                        <label>Bathrooms</label><span>45 sq. ft</span>
                                                    </li>
                                                    <li class="area">
                                                        <label>Balcony/Pets</label><span>Allowed</span>
                                                    </li>
                                                    <li class="area">
                                                        <label>Lounge</label><span>650 sq.
                                                            ft</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="">
                                            <img src="images/img14.png" alt="image" class="d-block w-100 img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-body top-garden">
                                <div class="row gy-3">
                                    <div class="col-12 col-lg-6">
                                        <div class="background-studio">
                                            <h2 class="fw-bold">
                                                Top Garden
                                            </h2>
                                            <p>
                                                Enimad minim veniam quis
                                                nostrud exercitation ullamco
                                                laboris. Lorem ipsum dolor
                                                sit amet cons aetetur
                                                adipisicing elit sedo
                                                eiusmod tempor.Incididunt
                                                labore et dolore magna
                                                aliqua. sed ayd minim
                                                veniam.
                                            </p>
                                            <div class="">
                                                <ul class="ps-0">
                                                    <li class="area">
                                                        <label>Total
                                                            Area</label><span>2800 sq.
                                                            ft</span>
                                                    </li>
                                                    <li class="area">
                                                        <label>Bedrooms</label><span>150 sq.
                                                            ft</span>
                                                    </li>
                                                    <li class="area">
                                                        <label>Bathrooms</label><span>45 sq. ft</span>
                                                    </li>
                                                    <li class="area">
                                                        <label>Balcony/Pets</label><span>Allowed</span>
                                                    </li>
                                                    <li class="area">
                                                        <label>Lounge</label><span>650 sq.
                                                            ft</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="">
                                            <img src="images/img14.png" alt="image" class="d-block w-100 img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-body double-height">
                                <div class="row gy-3">
                                    <div class="col-12 col-lg-6">
                                        <div class="background-studio">
                                            <h2 class="fw-bold">
                                                Double Height
                                            </h2>
                                            <p>
                                                Enimad minim veniam quis
                                                nostrud exercitation ullamco
                                                laboris. Lorem ipsum dolor
                                                sit amet cons aetetur
                                                adipisicing elit sedo
                                                eiusmod tempor.Incididunt
                                                labore et dolore magna
                                                aliqua. sed ayd minim
                                                veniam.
                                            </p>
                                            <div class="">
                                                <ul class="ps-0">
                                                    <li class="area">
                                                        <label>Total
                                                            Area</label><span>2800 sq.
                                                            ft</span>
                                                    </li>
                                                    <li class="area">
                                                        <label>Bedrooms</label><span>150 sq.
                                                            ft</span>
                                                    </li>
                                                    <li class="area">
                                                        <label>Bathrooms</label><span>45 sq. ft</span>
                                                    </li>
                                                    <li class="area">
                                                        <label>Balcony/Pets</label><span>Allowed</span>
                                                    </li>
                                                    <li class="area">
                                                        <label>Lounge</label><span>650 sq.
                                                            ft</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12 col-lg-6">
                                        <div class="">
                                            <img src="images/img14.png" alt="image" class="d-block w-100 img-fluid" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!----------------attachment----------------------->
    <section class="attachment">
        <div class="container-fluid container-lg">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">
                        <span class="center-play"><i class="fas fa-play"></i></span>
                    </h1>
                </div>
            </div>
        </div>
    </section>

    <!-------------aminities-------------------->
    <section class="aminities">
        <div class="container-fluid container-lg">
            <div class="row gy-5 gx-3">
                <div class="col-12">
                    <div class="">
                        <p class="text-center">
                            <span class="about">Our Aminities</span>
                        </p>
                        <h1 class="text-center rent">Building Aminities</h1>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="facility position-relative">
                        <span class="d-block text-center"><i class="fas fa-car icon-center"></i></span>
                        <h4 class="text-center fw-bold">Parking Space</h4>
                        <span class="absolute-position"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="facility position-relative">
                        <span class="d-block text-center"><i class="fas fa-swimming-pool icon-center"></i></span>
                        <h4 class="text-center fw-bold">Swimming Pools</h4>
                        <span class="absolute-position"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="facility position-relative">
                        <span class="d-block text-center"><i class="fas fa-shield-alt icon-center"></i></span>
                        <h4 class="text-center fw-bold">
                            Parivate Security
                        </h4>
                        <span class="absolute-position"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="facility position-relative">
                        <span class="d-block text-center"><i class="fas fa-book-reader icon-center"></i></span>
                        <h4 class="text-center fw-bold">Library Area</h4>
                        <span class="absolute-position"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="facility position-relative">
                        <span class="d-block text-center"><i class="fas fa-couch icon-center"></i></span>
                        <h4 class="text-center fw-bold">King Size Beds</h4>
                        <span class="absolute-position"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="facility position-relative">
                        <span class="d-block text-center"><i class="fas fa-home icon-center"></i></span>
                        <h4 class="text-center fw-bold">Smart Homes</h4>
                        <span class="absolute-position"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="facility position-relative">
                        <span class="d-block text-center"><i class="fas fa-landmark icon-center"></i></span>
                        <h4 class="text-center fw-bold">Kid's Playland</h4>
                        <span class="absolute-position"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>

                <div class="col-6 col-sm-6 col-md-6 col-lg-3">
                    <div class="facility position-relative">
                        <span class="d-block text-center"><i class="fas fa-car icon-center"></i></span>
                        <h4 class="text-center fw-bold">Parking Space</h4>
                        <span class="absolute-position"><i class="fas fa-long-arrow-alt-right"></i></span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---------------------feedback---------------------------->

    <section class="feedback">
        <div class="container-fluid container-lg">
            <div class="row gx-3 gy-5">
                <div class="col-12">
                    <div class="">
                        <p class="text-center">
                            <span class="about">Our Testimonial</span>
                        </p>
                        <h1 class="text-center rent">Clints Feedback</h1>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="clints">
                        <p>
                            <span class="quote"><i class="fas fa-quote-left"></i></span>
                            Precious ipsum dolor sit amet consectetur
                            adipisicing elit, sed dos mod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad min
                            veniam, quis nostrud Precious sit amet, consecte
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="images/img16.jpg" alt="image" class="image-16 img-fluid" />
                            <div class="">
                                <h6>Adam Joseph</h6>
                                <p class="mb-0">SELLINGS AGENTS</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="clints">
                        <p>
                            <span class="quote"><i class="fas fa-quote-left"></i></span>
                            Precious ipsum dolor sit amet consectetur
                            adipisicing elit, sed dos mod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad min
                            veniam, quis nostrud Precious sit amet, consecte
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="images/img16.jpg" alt="image" class="image-16" />
                            <div class="">
                                <h6>Adam Joseph</h6>
                                <p class="mb-0">SELLINGS AGENTS</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-6 col-lg-4">
                    <div class="clints">
                        <p>
                            <span class="quote"><i class="fas fa-quote-left"></i></span>
                            Precious ipsum dolor sit amet consectetur
                            adipisicing elit, sed dos mod tempor incididunt
                            ut labore et dolore magna aliqua. Ut enim ad min
                            veniam, quis nostrud Precious sit amet, consecte
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="images/img16.jpg" alt="image" class="image-16" />
                            <div class="">
                                <h6>Adam Joseph</h6>
                                <p class="mb-0">SELLINGS AGENTS</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!---------------------------news & blogs-------------------------->
    <section class="news-blogs">
        <div class="container-fluid container-lg">
            <div class="row gy-3">
                <div class="col-12">
                    <div class="">
                        <p class="text-center">
                            <span class="about">News & Blogs</span>
                        </p>
                        <h1 class="text-center rent py-4">
                            Leatest News Feeds
                        </h1>
                    </div>
                </div>
                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="blogs image-17-hover">
                        <div class="overflow-hidden">
                            <img src="images/img17.jpg" alt="image" class="d-block w-100 img-fluid" />
                        </div>
                        <div class="brilliant">
                            <ul class="list-inline">
                                <li class="list-inline-item me-3">
                                    <i class="far fa-user text-danger"></i>
                                    <a href="#" class="nice-view">by: Admin</a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fas fa-tags text-danger"></i>
                                    <a href="#" class="nice-view">by: Decorate</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="#" class="nice-view">10 Brilliant Ways To Decorate Your
                                    Home</a>
                            </h3>
                            <hr />
                            <ul class="d-flex justify-content-between ps-0">
                                <li>
                                    <i class="fas fa-calendar text-danger"></i>
                                    June 24, 2021
                                </li>
                                <li>
                                    <a href="#" class="text-danger">READ MORE</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="blogs image-17-hover">
                        <div class="overflow-hidden">
                            <img src="images/img18.jpg" alt="image" class="d-block w-100 img-fluid" />
                        </div>
                        <div class="brilliant">
                            <ul class="list-inline">
                                <li class="list-inline-item me-3">
                                    <i class="far fa-user text-danger"></i>
                                    <a href="#" class="nice-view">by: Admin</a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fas fa-tags text-danger"></i>
                                    <a href="#" class="nice-view">by: Decorate</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="#" class="nice-view">The Most Inspiring Interior Design Of
                                    2021</a>
                            </h3>
                            <hr />
                            <ul class="d-flex justify-content-between ps-0">
                                <li>
                                    <i class="fas fa-calendar text-danger"></i>
                                    June 24, 2021
                                </li>
                                <li>
                                    <a href="#" class="text-danger">READ MORE</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-6 col-lg-4">
                    <div class="blogs image-17-hover">
                        <div class="overflow-hidden">
                            <img src="images/img19.jpg" alt="image" class="d-block w-100 img-fluid" />
                        </div>
                        <div class="brilliant">
                            <ul class="list-inline">
                                <li class="list-inline-item me-3">
                                    <i class="far fa-user text-danger"></i>
                                    <a href="#" class="nice-view">by: Admin</a>
                                </li>
                                <li class="list-inline-item">
                                    <i class="fas fa-tags text-danger"></i>
                                    <a href="#" class="nice-view">by: Decorate</a>
                                </li>
                            </ul>
                            <h3>
                                <a href="#" class="nice-view">Recent Commercial Real Estate
                                    Transactions</a>
                            </h3>
                            <hr />
                            <ul class="d-flex justify-content-between ps-0">
                                <li>
                                    <i class="fas fa-calendar text-danger"></i>
                                    June 24, 2021
                                </li>
                                <li>
                                    <a href="#" class="text-danger">READ MORE</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('scripts')
    <script></script>
@endsection
