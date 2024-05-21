@extends('landing.layouts.partials.master')
@section('css')
@endsection
@section('page-header')
@endsection
@section('content')
    <div class="hero-2 overlay" style="background-image: url({{ URL::asset('landing/images/img_6.jpg') }});">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mx-auto ">
                    <h1 class="mb-5 text-center"><span>Contact Us</span></h1>


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


    <div class="section sec-contact">
        <div class="container">
            <div class="pb-0 mb-3">
                @if (Session::has('success'))
                    <div class="alert alert-success text-center" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
            </div>
            <div class="row mb-5 justify-content-center text-center">
                <div class="col-lg-5">
                    <h2 class="heading">Get in touch</h2>
                    <p class="text-black-50">Far far away, behind the word mountains, far from the countries Vokalia and
                        Consonantia, there live the blind texts.</p>
                </div>
            </div>
            <form class="row" action="{{ Route('contact.store') }}" method="POST">
                @csrf
                <div class="col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label for="name" class="ps-3 mb-2">Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" class="form-control"
                            id="name">
                        @error('name')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label for="email" class="ps-3 mb-2">Email</label>
                        <input type="text" name="email" value="{{ old('email') }}" class="form-control"
                            id="email">
                        @error('email')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label for="phone" class="ps-3 mb-2">Phone</label>
                        <input type="text" name="phone" value="{{ old('phone') }}" class="form-control"
                            id="phone">
                        @error('phone')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-6 col-lg-6">
                    <div class="mb-3">
                        <label for="subject" class="ps-3 mb-2">Subject</label>
                        <input type="text" name="subject" {{ old('message') }} class="form-control" id="subject">
                        @error('subject')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror

                    </div>
                </div>

                <div class="col-md-12 col-lg-12">
                    <div class="mb-3">
                        <label for="message" class="ps-3 mb-2">Message</label>
                        <textarea class="form-control" name="message" id="message" cols="30" rows="7">{{ old('message') }}</textarea>
                        @error('message')
                            <span class="text-danger">{{ $message }}</span>
                        @enderror
                    </div>
                </div>

                <div class="col-md-12">
                    <input type="submit" value="Send message" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
@endsection
@section('js')
@endsection
