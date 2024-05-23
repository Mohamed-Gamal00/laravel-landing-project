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
                    <h1 class="mb-5 text-center"><span>{{ $project->name }}</span></h1>


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


    <div class="section sec-3">
        <div class="container">

            <div class="row mb-5 justify-content-between">
                <div class="col-lg-6 mb-lg-0 mb-4">
                    <img src="{{ asset("storage/$project->image") }}" height="400px" width="100%"
                        style="object-fit: cover;" alt="Image">
                </div>
                <div class="col-lg-5">
                    <div class="heading">Description</div>
                    <p>{{ $project->description }}</p>

                    @if ($project->link)
                        <p><a href="#" class="btn btn-primary">Visit Website</a></p>
                    @endif

                </div>
            </div>
            <div class="row">
                @if ($project->work_year)
                    <div class="col-sm-3 border-left">
                        <span class="text-black-50 d-block">Work year:</span> {{ $project->work_year }}
                    </div>
                @endif
                @if ($project->client)
                    <div class="col-sm-3 border-left">
                        <span class="text-black-50 d-block">Client:</span>{{ $project->client }}.
                    </div>
                @endif
                @if ($project->started)
                    <div class="col-sm-3 border-left">
                        <span class="text-black-50 d-block">Started:</span> {{ $project->started }}
                    </div>
                @endif
                @if ($project->finished)
                    <div class="col-sm-3 border-left">
                        <span class="text-black-50 d-block">Finished:</span> {{$project->finished}}
                    </div>
                @endif
            </div>
        </div>
    </div>
@endsection
@section('js')
@endsection
