
@extends("layouts.app")

@section('title', __('PAGE INTROUVABLE'))
@section('code', '404')
@section("content")

  <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0" style="background-color: #ccc;">
        <div class="container-fluid py-5" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 animated zoomIn" style="color: #000;">{{__('404.title')}}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->





    <!-- document Start -->
    <div class="container-fluid " data-wow-delay="0.1s">
        <div class="container">
            <div class="col-lg-12" data-wow-delay="0.9s">
                <div class="team-item bg-light rounded overflow-hidden">
                    <div class="team-img position-relative overflow-hidden">
                    </div>
                    <div class="text-center py-4">
                        <h3 class="text-success" style="font-size: 20px">{{__('404.content')}}</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- document End -->

@endsection

