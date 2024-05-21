@extends('landing.layouts.partials.master')
@section('css')
@endsection
@section('page-header')
@endsection
@section('content')
    <div class="hero-2 overlay" style="background-image: url({{ URL::asset('landing/images/img_3.jpg') }});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mx-auto ">
                    <h1 class="mb-5 text-center"><span>About Us</span></h1>


                    <div class="intro-desc text-left">
                        <div class="line"></div>
                        <p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea
                            molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et
                            natus accusamus itaque.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section sec-4">
        <div class="container">
            <div class="row border-bottom mb-5 pb-5 justify-content-between">
                <div class="col-lg-4 align-self-center mb-5">
                    <h2 class="heading mb-4">We create architectural designs</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                        paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                <div class="col-lg-7 video-wrap  glightbox">
                    <img src="{{ URL::asset('landing/images/img_7.jpg') }}" alt="Image" class="img-fluid">
                </div>
            </div>
            <div class="row g-5">
                <div class="col-lg-4">

                    <div class="d-flex custom-card">
                        <div class="img">
                            <i class="flaticon-compass"></i>
                        </div>
                        <div class="text">
                            <h3 class="h6 fw-bold text-black">We provide best services</h3>
                            <p class="text-black-50">Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut,
                                doloribus officia ea molestias beatae laudantium.</p>
                            <p>
                                <a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex custom-card">
                        <div class="img">
                            <i class="flaticon-plan"></i>
                        </div>
                        <div class="text">
                            <h3 class="h6 fw-bold text-black">We provide best services</h3>
                            <p class="text-black-50">Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut,
                                doloribus officia ea molestias beatae laudantium.</p>
                            <p>
                                <a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex custom-card">
                        <div class="img">
                            <i class="flaticon-architect"></i>
                        </div>
                        <div class="text">
                            <h3 class="h6 fw-bold text-black">We provide best services</h3>
                            <p class="text-black-50">Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut,
                                doloribus officia ea molestias beatae laudantium.</p>
                            <p>
                                <a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section sec-team sec-4 pb-5">
        <div class="container">
            <div class="row mb-5">
                <div class="col-lg-6 mx-auto text-center">
                    <h2 class="heading">We Are The Team</h2>
                </div>

            </div>
            <div class="row g-5">
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="person">
                        <img src="{{ URL::asset('landing/images/person_1.jpg') }}" alt="Image"
                            class="img-fluid rounded-circle mx-auto w-50 mb-3">
                        <h3 class="mb-1">Jayson Campbell</h3>
                        <span class="d-block text-black-50 mb-3">CEO, Partner</span>
                        <p class="text-black-50">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts.</p>
                        <ul class="social-2 list-unstyled mb-5">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-dribbble"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="person">
                        <img src="{{ URL::asset('landing/images/person_2.jpg') }}" alt="Image"
                            class="img-fluid rounded-circle mx-auto w-50 mb-3">
                        <h3 class="mb-1">Jayson Campbell</h3>
                        <span class="d-block text-black-50 mb-3">CEO, Partner</span>
                        <p class="text-black-50">Far far away, behind the word mountains, far from the countries Vokalia and
                            Consonantia, there live the blind texts.</p>
                        <ul class="social-2 list-unstyled mb-5">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-dribbble"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="person">
                        <img src="{{ URL::asset('landing/images/person_3.jpg') }}" alt="Image"
                            class="img-fluid rounded-circle mx-auto w-50 mb-3">
                        <h3 class="mb-1">Jayson Campbell</h3>
                        <span class="d-block text-black-50 mb-3">CEO, Partner</span>
                        <p class="text-black-50">Far far away, behind the word mountains, far from the countries Vokalia
                            and Consonantia, there live the blind texts.</p>
                        <ul class="social-2 list-unstyled mb-5">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-dribbble"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-3">
                    <div class="person">
                        <img src="{{ URL::asset('landing/images/person_4.jpg') }}" alt="Image"
                            class="img-fluid rounded-circle mx-auto w-50 mb-3">
                        <h3 class="mb-1">Jayson Campbell</h3>
                        <span class="d-block text-black-50 mb-3">CEO, Partner</span>
                        <p class="text-black-50">Far far away, behind the word mountains, far from the countries Vokalia
                            and Consonantia, there live the blind texts.</p>
                        <ul class="social-2 list-unstyled mb-5">
                            <li><a href="#"><span class="icon-facebook"></span></a></li>
                            <li><a href="#"><span class="icon-twitter"></span></a></li>
                            <li><a href="#"><span class="icon-instagram"></span></a></li>
                            <li><a href="#"><span class="icon-dribbble"></span></a></li>
                            <li><a href="#"><span class="icon-linkedin"></span></a></li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('js')
@endsection
