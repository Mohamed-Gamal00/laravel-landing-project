@extends('landing.layouts.partials.master')
@section('css')
@endsection
@section('page-header')
@endsection
@section('content')
    <div class="hero-2 overlay" style="background-image: url({{ URL::asset('landing/images/img_2.jpg') }});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mx-auto">
                    <h1 class="mb-5"><span>We love</span> <span class="d-block">architecture</span> <span class="d-block">&
                            interior design</span></h1>

                    <div class="intro-desc">
                        <div class="line"></div>
                        <p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea
                            molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et
                            natus accusamus itaque.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="section sec-1">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-3">
                    <h2 class="heading">We create architectural designs</h2>
                    <p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias
                        beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus
                        itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea
                        veniam.</p>

                    <p><a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a></p>
                </div>
                <div class="col-lg-7 ms-auto">
                    <img src="{{ URL::asset('landing/images/img_8.jpg') }}" alt="Image" class="img-fluid img-r">
                </div>
            </div>
        </div>
    </div>

    <div class="section sec-2">
        <div class="container">
            <div class="row g-0">
                <div class="col-lg-6 mb-4 mb-lg-0">
                    <img src="{{ URL::asset('landing/images/img_4.jpg') }}" alt="IMage" class="img-fluid">
                </div>
                <div class="col-lg-3 ms-auto">
                    <h2 class="heading">Modern Architecture</h2>
                    <p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias
                        beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus
                        itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea
                        veniam.</p>
                    <p><a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a></p>
                </div>
            </div>
        </div>
    </div>



    <div class="sec-3 section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <h2 class="heading">Services</h2>
                    <p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias
                        beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus
                        itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea
                        veniam.</p>
                </div>

                <div class="col-lg-6 ms-auto">

                    <div class="row g-4">
                        @if (count($services))
                            @foreach ($services as $service)
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-4">
                                    <div class="single-portfolio">
                                        <img src="{{ asset("storage/$service->image") }}" height="200px" width="100%"
                                            style="object-fit: cover;" alt="Image">
                                        <div class="contents">
                                            <h3>{{ $service->name }}</h3>
                                            <div class="cat">Construction</div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>


                </div>
            </div>
        </div>
    </div>


    <div class="section sec-5">
        @if (count($projects))
            <div class="container">
                <div class="row mb-5">
                    <div class="col-lg-6">
                        <h2 class="heading">Projects</h2>
                    </div>
                    <div class="col-lg-4">
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


                    <div class="col-md-12 text-center mt-5">
                        <p><a href="{{ Route('projects') }}" class="btn btn-primary me-4">See all projects</a></p>
                    </div>

                </div>
            </div>
        @endif
    </div>



    <div class="sec-4 section bg-light">

        <div class="text-center mb-5">
            <h2 class="heading mb-5 text-center">Testimonial</h2>
        </div>
        <div class="testimonial-slide-center-wrap" data-aos="fade-up" data-aos-delay="100">

            <div id="testimonial-nav">
                <span class="prev" data-controls="prev"><span class="icon-chevron-left"></span></span>

                <span class="next" data-controls="next"><span class="icon-chevron-right"></span></span>
            </div>

            <div class="testimonial-slide-center testimonial-center" id="testimonial-center">

                <div class="item">
                    <div class="testimonial-item">
                        <div class="testimonial-item-inner">
                            <div class="testimonial-author mb-5">
                                <img src="{{ URL::asset('landing/images/person_2.jpg') }}" alt="Image" class="img-fluid">
                                <strong class="d-block">James Campbell</strong>
                                <span>CEO, Co-Founder</span>
                            </div>
                            <blockquote>
                                Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea
                                molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et
                                natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat!
                                Et pariatur doloremque ea veniam.
                            </blockquote>

                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-item">
                        <div class="testimonial-item-inner">
                            <div class="testimonial-author mb-5">
                                <img src="{{ URL::asset('landing/images/person_1.jpg') }}" alt="Image"
                                    class="img-fluid">
                                <strong class="d-block">James Campbell</strong>
                                <span>CEO, Co-Founder</span>
                            </div>
                            <blockquote>
                                Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea
                                molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et
                                natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat!
                                Et pariatur doloremque ea veniam.
                            </blockquote>

                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-item">
                        <div class="testimonial-item-inner">
                            <div class="testimonial-author mb-5">
                                <img src="{{ URL::asset('landing/images/person_3.jpg') }}" alt="Image"
                                    class="img-fluid">
                                <strong class="d-block">James Campbell</strong>
                                <span>CEO, Co-Founder</span>
                            </div>
                            <blockquote>
                                Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea
                                molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et
                                natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat!
                                Et pariatur doloremque ea veniam.
                            </blockquote>

                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-item">
                        <div class="testimonial-item-inner">
                            <div class="testimonial-author mb-5">
                                <img src="{{ URL::asset('landing/images/person_4.jpg') }}" alt="Image"
                                    class="img-fluid">
                                <strong class="d-block">James Campbell</strong>
                                <span>CEO, Co-Founder</span>
                            </div>
                            <blockquote>
                                Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea
                                molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et
                                natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat!
                                Et pariatur doloremque ea veniam.
                            </blockquote>

                        </div>
                    </div>
                </div>


                <div class="item">
                    <div class="testimonial-item">
                        <div class="testimonial-item-inner">
                            <div class="testimonial-author mb-5">
                                <img src="{{ URL::asset('landing/images/person_5.jpg') }}" alt="Image"
                                    class="img-fluid">
                                <strong class="d-block">James Campbell</strong>
                                <span>CEO, Co-Founder</span>
                            </div>
                            <blockquote>
                                Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea
                                molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et
                                natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat!
                                Et pariatur doloremque ea veniam.
                            </blockquote>

                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-item">
                        <div class="testimonial-item-inner">
                            <div class="testimonial-author mb-5">
                                <img src="{{ URL::asset('landing/images/person_2.jpg') }}" alt="Image"
                                    class="img-fluid">
                                <strong class="d-block">James Campbell</strong>
                                <span>CEO, Co-Founder</span>
                            </div>
                            <blockquote>
                                Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea
                                molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et
                                natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat!
                                Et pariatur doloremque ea veniam.
                            </blockquote>

                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="testimonial-item">
                        <div class="testimonial-item-inner">
                            <div class="testimonial-author mb-5">
                                <img src="{{ URL::asset('landing/images/person_3.jpg') }}" alt="Image"
                                    class="img-fluid">
                                <strong class="d-block">James Campbell</strong>
                                <span>CEO, Co-Founder</span>
                            </div>
                            <blockquote>
                                Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea
                                molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et
                                natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat!
                                Et pariatur doloremque ea veniam.
                            </blockquote>

                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-item">
                        <div class="testimonial-item-inner">
                            <div class="testimonial-author mb-5">
                                <img src="{{ URL::asset('landing/images/person_4.jpg') }}" alt="Image"
                                    class="img-fluid">
                                <strong class="d-block">James Campbell</strong>
                                <span>CEO, Co-Founder</span>
                            </div>
                            <blockquote>
                                Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea
                                molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et
                                natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat!
                                Et pariatur doloremque ea veniam.
                            </blockquote>

                        </div>
                    </div>
                </div>

                <div class="item">
                    <div class="testimonial-item">
                        <div class="testimonial-item-inner">
                            <div class="testimonial-author mb-5">
                                <img src="{{ URL::asset('landing/images/person_1.jpg') }}" alt="Image"
                                    class="img-fluid">
                                <strong class="d-block">James Campbell</strong>
                                <span>CEO, Co-Founder</span>
                            </div>
                            <blockquote>
                                Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea
                                molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et
                                natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat!
                                Et pariatur doloremque ea veniam.
                            </blockquote>

                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
@section('js')
@endsection
