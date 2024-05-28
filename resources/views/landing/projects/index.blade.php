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
                    <h1 class="mb-5 text-center"><span>Our Projects</span></h1>


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


    <div class="section sec-5">
        @if (count($projects))
            <div class="container">
                <div class="row mb-5">

                    <div class="col-lg-6 ms-auto">
                        <p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea
                            molestias
                            beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus
                            accusamus
                            itaque.</p>
                    </div>
                </div>

                <div class="row g-4">
                    @foreach ($projects as $project)
                        <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                            <div class="single-portfolio">
                                <a href="{{ route('project', $project->id) }}">
                                    <img src="{{ asset("storage/$project->image") }}" height="200px" width="100%"
                                        style="object-fit: cover;" alt="Image">
                                    <div class="contents">
                                        <h3>{{ $project->name }}</h3>
                                        <div class="cat">Construction</div>
                                    </div>
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        @endif
    </div>


    <div class="section">
        <div class="container">
            <div class="row border-bottom mb-5 pb-5 justify-content-between">
                <div class="col-lg-4 align-self-center mb-5">
                    <span class="d-block subheading mb-3">We are committed</span>
                    <h2 class="heading mb-4">The road of success is always under construction</h2>
                    <p>A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a
                        paradisematic country, in which roasted parts of sentences fly into your mouth.</p>
                </div>
                <div class="col-lg-7">
                    <a href="" class="video-wrap glightbox">
                        <img src="{{ URL::asset('landing/images/img_4.jpg') }}" alt="Image" class="img-fluid">
                    </a>
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
@endsection
@section('js')
@endsection
