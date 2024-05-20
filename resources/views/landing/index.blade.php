@extends('landing.layouts.partials.master')
@section('css')
@endsection
@section('page-header')
@endsection
@section('content')
	<div class="hero-2 overlay" style="background-image: url({{ URL::asset('landing/images/img_2.jpg')}});">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-lg-5 mx-auto">
					<h1 class="mb-5"><span>We love</span> <span class="d-block">architecture</span> <span class="d-block">& interior design</span></h1>

					<div class="play-vid">
						<a href="https://www.youtube.com/watch?v=mwtbEGNABWU" class="play glightbox">
							<span class="icon-play"></span>
						</a>
					</div>

					<div class="intro-desc">
						<div class="line"></div>
						<p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque.</p>
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
					<p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.</p>

					<p><a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a></p>
				</div>
				<div class="col-lg-7 ms-auto">
					<img src="{{ URL::asset('landing/images/img_8.jpg')}}" alt="Image" class="img-fluid img-r">
				</div>
			</div>
		</div>
	</div>

	<div class="section sec-2">
		<div class="container">
			<div class="row g-0">
				<div class="col-lg-6 mb-4 mb-lg-0">
					<img src="{{ URL::asset('landing/images/img_4.jpg')}}" alt="IMage" class="img-fluid">
				</div>
				<div class="col-lg-3 ms-auto">
					<h2 class="heading">Modern Architecture</h2>
					<p>Delectus voluptatum distinctio quos eius excepturi sunt pariatur, aut, doloribus officia ea molestias beatae laudantium, quam odio ipsum veritatis est maiores velit quasi blanditiis et natus accusamus itaque. Veniam quidem debitis odio amet voluptas distinctio dicta placeat! Et pariatur doloremque ea veniam.</p>
					<p><a href="#" class="more-2">Learn more <span class="icon-arrow_forward"></span></a></p>
				</div>
			</div>
		</div>
	</div>
@endsection
@section('js')
@endsection
