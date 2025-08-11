@extends("layouts.app")
@section('title', __('networking.title1'))
@section("content")


   <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0" style="background-color: #000;">
        <div class="container-fluid py-5" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 animated zoomIn" style="color: #FFF;"> {{ __('networking.title1') }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
{{-- - QUETE DE L'EXCELLENCE --}}
            <div class="section-title position-relative">
                <h5 class="fw-bold text-success text-uppercase"> {{ __('networking.title2') }}</h5>
                <hr/>
            </div>

            <div class="row g-5">
                <div class="col-lg-6">
                    <p class="mb-4">
                        {{ __('networking.para1') }}
                    </p>

                    <p class="mb-4">
                         {{ __('networking.para2') }}

                    </p>
                    <p class="mb-4">
                        {{ __('networking.para3') }}
                    </p>



                    <p class="mb-4">
                        {{ __('networking.para4') }}
                    </p>
                </div>


                <div class="col-lg-6" style="min-height: 500px;">
                    <div class="position-relative h-100">
                        <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset("assets/solutions/about/networking.jpg") }}" style="object-fit: cover;">
                    </div>
                </div>
            </div>




           
</div>
</div>


@endsection
