@extends("layouts.app")
@section('title', 'DÉTAILS DE L\'ÉVÈNEMENT')
@section("content")


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0" style="background-color: #000;">
        <div class="container-fluid py-5" style="margin-bottom: 50px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 animated zoomIn" style="color: #FFF;">{{  $event->title }}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
          {{--- <div class="col-lg-12" style="min-height: 500px;">
                <div class="position-relative h-100">
                    <img class="position-absolute w-100 h-100 rounded wow zoomIn" data-wow-delay="0.9s" src="{{ asset('storage/' . $event->image) }}" style="object-fit: cover;" alt="{{  $event->title }}">
                </div>
            </div> --}} 
            <div class="container-fluid wow fadeInUp" data-wow-delay="0.1s" style="font-size:18px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
            
                            <p class="mb-4">
                                {!! $event->content !!}

                            </p>

                        </div>
                    </div>

                </div>
            </div>
    </div>
@endsection
