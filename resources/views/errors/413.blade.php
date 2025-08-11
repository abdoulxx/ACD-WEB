
@extends("layouts.app")

@section('title', __('TAILLE TROP GRANDE'))
@section('code', '413')
@section("content")


<!-- Navbar Start -->
    <div class="container-fluid position-relative p-0">


        <div class="container-fluid bg-primary py-5 bg-header" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 text-white animated zoomIn">Taille trop grande</h1>
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
                        <h3 class="text-success" style="font-size: 20px">La taille du fichier ne doit pas dépassée 2Mo.</h3>
                    </div>
                    <a href="{{ route("expert.index") }}" target="_blank"><button class="btn btn-success w-100 py-3" type="submit">Réessayez</button></a>
                </div>
            </div>
        </div>
    </div>
    <!-- document End -->

@endsection

