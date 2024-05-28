@extends('dashboard.layouts.partials.master')
@section('css')
    <!--  Owl-carousel css-->
    <link href="{{ URL::asset('assets/plugins/owl-carousel/owl.carousel.css') }}" rel="stylesheet" />
    <!-- Maps css -->
    <link href="{{ URL::asset('assets/plugins/jqvmap/jqvmap.min.css') }}" rel="stylesheet">
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="left-content">
            <div>
                <h2 class="main-content-title tx-24 mg-b-1 mg-b-lg-1">settings</h2>
            </div>
        </div>
    </div>
    <!-- /breadcrumb -->
@endsection
@section('content')
    <div class="col-xl-12 px-0">
        <div class="card">
            <div class="card-header pb-0 mb-3">
                @if (Session::has('success'))
                    <div class="alert alert-success text-center" role="alert">
                        {{ Session::get('success') }}
                    </div>
                @endif
            </div>
            <div class="card-body">
                <div class="my-5">
                    @include('dashboard.layouts.partials.error_validation')
                    <form method="POST" action="{{ route('settings.update',$settings->id) }}" enctype="multipart/form-data">
                        @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="phone">Phone</label>
                            <input type="text" name="phone" value="{{ old('phone', $settings->phone) }}"
                                class="form-control" id="phone" placeholder="Enter phone">
                            @error('phone')
                                <div>
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="text" name="email" value="{{ old('email', $settings->email) }}"
                                class="form-control" id="email" placeholder="Enter email">
                            @error('email')
                                <div>
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="fb_link">Facebook Link</label>
                            <input type="text" name="fb_link" value="{{ old('fb_link', $settings->fb_link) }}"
                                class="form-control" id="fb_link" placeholder="Enter Facebook link">
                            @error('fb_link')
                                <div>
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="tw_link">Twitter Link</label>
                            <input type="text" name="tw_link" value="{{ old('tw_link', $settings->tw_link) }}"
                                class="form-control" id="tw_link" placeholder="Enter Twitter link">
                            @error('tw_link')
                                <div>
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="insta_link">Instagram Link</label>
                            <input type="text" name="insta_link" value="{{ old('insta_link', $settings->insta_link) }}"
                                class="form-control" id="insta_link" placeholder="Enter Instagram link">
                            @error('insta_link')
                                <div>
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="linkdin_link">LinkedIn Link</label>
                            <input type="text" name="linkin_link"
                                value="{{ old('linkin_link', $settings->linkin_link) }}" class="form-control"
                                id="linkdin_link" placeholder="Enter LinkedIn link">
                            @error('linkin_link')
                                <div>
                                    <p class="text-danger">{{ $message }}</p>
                                </div>
                            @enderror
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div><!-- bd -->
        </div><!-- bd -->
    </div>
@endsection
@section('js')
    <!--Internal  Chart.bundle js -->
    <script src="{{ URL::asset('assets/plugins/chart.js/Chart.bundle.min.js') }}"></script>
    <!-- Moment js -->
    <script src="{{ URL::asset('assets/plugins/raphael/raphael.min.js') }}"></script>
    <!--Internal  Flot js-->
    <script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.pie.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.resize.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jquery.flot/jquery.flot.settings.js') }}"></script>
    <script src="{{ URL::asset('assets/js/dashboard.sampledata.js') }}"></script>
    <script src="{{ URL::asset('assets/js/chart.flot.sampledata.js') }}"></script>
    <!--Internal Apexchart js-->
    <script src="{{ URL::asset('assets/js/apexcharts.js') }}"></script>
    <!-- Internal Map -->
    <script src="{{ URL::asset('assets/plugins/jqvmap/jquery.vmap.min.js') }}"></script>
    <script src="{{ URL::asset('assets/plugins/jqvmap/maps/jquery.vmap.usa.js') }}"></script>
    <script src="{{ URL::asset('assets/js/modal-popup.js') }}"></script>
    <!--Internal  index js -->
    <script src="{{ URL::asset('assets/js/index.js') }}"></script>
    <script src="{{ URL::asset('assets/js/jquery.vmap.sampledata.js') }}"></script>
@endsection
