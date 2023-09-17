@extends('layout.default')

@section('title')
    Quarter: Home Style One
@endsection

@section('content')
    <!--    bg-image-->
    <section class="bg-image">
        <div class="container-fluid container-lg">
            <h1 class="text-capitalize">contact us</h1>
            <a href="{{ route('home') }}">
                <i class="fas fa-home text-danger"></i>
                <span class="text-hover">Home</span>
            </a>
            <i class="fas fa-chevron-right"></i> Contact
        </div>
    </section>

    <section class="container-fluid container-lg">
        <div class="row margin">
            <div class="col-12 col-sm-12 col-md-4">
                <div class="row box">
                    <div class="col-12 center">
                        <i class="fas fa-envelope-open-text"></i>
                    </div>
                    <div class="col-12 center">
                        <h3 class="text-capitalize">email address</h3>
                    </div>
                    <div class="col-12 text-center">
                        <p>pawana@gmail.com</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4">
                <div class="row box">
                    <div class="col-12 center">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="col-12 center">
                        <h3 class="text-capitalize">phone number</h3>
                    </div>
                    <div class="col-12 text-center">
                        <p>7846382913</p>
                    </div>
                </div>
            </div>
            <div class="col-12 col-sm-12 col-md-4">
                <div class="row box">
                    <div class="col-12 center">
                        <i class="fas fa-map-marked-alt"></i>
                    </div>
                    <div class="col-12 center">
                        <h3 class="text-capitalize">office address</h3>
                    </div>
                    <div class="col-12 text-center">
                        <p>Haldwani, Uttarakhand, India</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!--    contact-->
    <section class="contact__form">
        <form action="{{ route('connectUs.store') }}" name="contactForm" enctype="multipart/form-data" method="POST">
            @csrf
            <div class="container-fluid container-lg">
                <div class="row gy-2 g-5 bor-der">
                    <div class="col-12">
                        <h1 class="text-capitalize border-start border-danger border-3 ps-3">
                            get a quote
                        </h1>
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 position-relative">
                        <input class="form-control form-control-lg pe-5 enter-focus" type="text"
                            placeholder="Enter your name" id="name" name="name" />
                        <span class="icon-position position-absolute">
                            <i class="fas fa-user text-danger"></i>
                        </span>
                        <span class="nameError error"></span>
                        @error('name')
                            <span class="error"></span>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 position-relative">
                        <input class="form-control form-control-lg pe-5 enter-focus" type="email"
                            placeholder="Enter email address" id="email" name="email" />
                        <span class="icon-position position-absolute">
                            <i class="fas fa-envelope text-danger"></i>
                        </span>
                        <span class="emailError error"></span>
                        @error('email')
                            <span class="error"></span>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 position-relative">
                        <select class="form-select form-select-lg pe-5 enter-focus" id="serviceType" name="serviceType">
                            <option value="" selected>select Servie Type</option>
                            <option value="1">Poperty Management</option>
                            <option value="2">Mortage Service</option>
                            <option value="5">Consulting Service</option>
                            <option value="4">Home Buying</option>
                            <option value="3">Home Selling</option>
                        </select>
                        <span class="icon-position position-absolute">
                            <i class="fas fa-arrow-down text-danger"></i>
                        </span>
                        <span class="serviceTypeError error"></span>
                        @error('serviceType')
                            <span class="error"></span>
                        @enderror
                    </div>
                    <div class="col-12 col-sm-12 col-md-6 position-relative">
                        <input class="form-control form-control-lg pe-5 enter-focus" type="text"
                            placeholder="Enter phone number" maxlength="10" id="phone" name="phone" />
                        <span class="icon-position position-absolute">
                            <i class="fas fa-phone text-danger"></i>
                        </span>
                        <span class="phoneError error"></span>
                        @error('phone')
                            <span class="error"></span>
                        @enderror
                    </div>
                    <div class="col-12 position-relative">
                        <textarea class="form-control pe-5 enter-focus" id="message" name="message" rows="5" placeholder="Enter message"
                            maxlength="500"></textarea>
                        <span class="icon-position position-absolute">
                            <i class="fas fa-pencil-alt text-danger"></i>
                        </span>
                        <span id="maxLength" class="max-length">0/500</span>
                        <span class="messageError error"></span>
                        @error('message')
                            <span class="error"></span>
                        @enderror
                    </div>
                    <div class="col-12">
                        <div class="form-check">
                            <input class="form-check-input" id="checkbox" type="checkbox" name="checkbox" />
                            <label for="checkbox" class="form-check-label checkbox__label">
                                Save my name, email, and website in this browser for the next time I comment
                            </label>
                            <span class="checkBoxError error d-block"></span>
                            @error('checkbox')
                                <span class="error"></span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12">
                        <button type="submit" class="btn btn-danger">
                            Get A Free Service
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </section>

    <!--    location-->
    <section class="">
        <div class="ratio ratio-16x9">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13933.728834138145!2d79.48932593585666!3d29.181399690362348!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39a08502d8d952c3%3A0x986686c6dc5d8e33!2sMorris%20Garages%20MG!5e0!3m2!1sen!2sin!4v1637123390770!5m2!1sen!2sin"
                width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"></iframe>
        </div>
    </section>
@endsection

@section('scripts')
    <script></script>
@endsection
