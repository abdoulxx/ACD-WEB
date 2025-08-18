@extends('layouts.app')

@section('title', __('page.hero_title_1') . ' ' . __('page.hero_title_2'))

@section('content')

    <!-- Page-specific CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css">
    <link href="{{ asset('assets/css/rencontre-2026.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


    <main>
        <!-- Section d'intro immersive -->
        <section class="acd-hero-section d-flex align-items-center justify-content-center text-center">
            <div class="container">
                <h1 class="acd-hero-title mb-4">
                    <span class="animate-mask">
                        <span class="animate-slide-up" data-aos="fade-up" data-aos-duration="800">{{ __('page.hero_title_1') }}</span>
                    </span>
                    <br>
                    <span class="animate-mask">
                        <span class="animate-slide-up acd-red" data-aos="fade-up" data-aos-duration="800" data-aos-delay="200">{{ __('page.hero_title_2') }}</span>
                    </span>
                </h1>
                <p class="acd-hero-desc mx-auto mb-4" data-aos="fade-up" data-aos-duration="800" data-aos-delay="400">
                    {!! __('page.hero_description') !!}
                </p>
                <div data-aos="fade-up" data-aos-duration="800" data-aos-delay="600">
                    <a href="{{ route('rencontre2026.formulaire') }}" class="btn btn-reserver acd-btn-hero">{{ __('page.hero_register_btn') }}</a>
                </div>
            </div>
        </section>


        <!-- Section Programme annuel  -->
        <section id="programme" class="acd-section py-5 bg-white" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <div class="acd-section-header mb-5 text-center">
                    <h2 class="acd-section-title">{{ __('page.program_title') }}</h2>
                    <div class="acd-section-bar mx-auto"></div>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach(__('page.destinations') as $destination)
                        <div class="col-12 col-sm-6 col-lg-4 d-flex">
                            <div class="acd-dest-card-visual flex-fill text-center" 
                                 style="background-image: url('{{ asset('assets/images-pro/images/' . $destination['image']) }}');"
                                 data-aos="zoom-in" 
                                 data-aos-delay="{{ 100 * $loop->index }}" >
                                <div class="acd-dest-card-overlay">
                                    <div class="acd-dest-month">{{ $destination['month'] }}</div>
                                    <div class="acd-dest-country">{{ $destination['country'] }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Section Objectifs -->
        <section id="objectifs" class="acd-section acd-section-dark py-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <div class="acd-section-header mb-5 text-center">
                    <h2 class="acd-section-title">{{ __('page.objectives_title') }}</h2>
                    <div class="acd-section-bar mx-auto"></div>
                </div>
                <div class="row g-4 justify-content-center">
                    @foreach(__('page.objectives') as $objective)
                        <div class="col-12 col-sm-6 col-lg-4 d-flex">
                            <div class="acd-obj-card flex-fill text-center" data-aos="fade-up" data-aos-delay="{{ 100 * $loop->index }}">
                                <div class="acd-obj-icon mb-3"><i class="bi bi-{{ $objective['icon'] ?? 'check-circle-fill' }}"></i></div>
                                <div class="acd-obj-title mb-2">{{ $objective['title'] }}</div>
                                <div class="acd-obj-desc">{{ $objective['description'] }}</div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        <!-- Section Tarifs  -->
        <section id="reservation" class="acd-section bg-white py-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <div class="acd-section-header mb-5 text-center">
                    <h2 class="acd-section-title">{{ __('page.pricing_title') }}</h2>
                    <div class="acd-section-bar mx-auto"></div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-12 col-lg-10">
                        <div class="acd-tarif-card" data-aos="zoom-in" data-aos-delay="200">
                            <div class="row align-items-center">
                                <div class="col-lg-6 tarif-details">
                                    <h3 class="pack-title">{{ __('page.pricing_pack_voyage_title') }}</h3>
                                    <div class="pack-price">{{ __('page.pricing_pack_voyage_price') }} <span class="pack-currency">{{ __('page.pricing_currency') }}</span></div>
                                    <h3 class="pack-title mt-4">{{ __('page.pricing_pack_premium_title') }}</h3>
                                    <div class="pack-price">{{ __('page.pricing_pack_premium_price') }} <span class="pack-currency">{{ __('page.pricing_currency') }}</span></div>
                                    <p class="reservation-fee mt-3 mb-4">{!! str_replace(':amount', __('page.pricing_reservation_amount'), __('page.pricing_reservation_fee')) !!}</p>
                                    <a href="{{ route('rencontre2026.formulaire') }}" class="btn btn-reserver fw-bold">{{ __('page.pricing_reserve_btn') }}</a>
                                </div>
                                <div class="col-lg-6 tarif-includes mt-4 mt-lg-0">
                                    <h4 class="includes-title mb-3">{{ __('page.pricing_includes_title') }}</h4>
                                    <ul class="includes-list mb-4">
                                        @foreach(__('page.pricing_includes') as $index => $include)
                                            <li>
                                                @switch($index)
                                                    @case(0)
                                                        <i class="bi bi-airplane-fill"></i>
                                                        @break
                                                    @case(1)
                                                        <i class="bi bi-building-fill"></i>
                                                        @break
                                                    @case(2)
                                                        <i class="bi bi-people-fill"></i>
                                                        @break
                                                    @case(3)
                                                        <i class="bi bi-briefcase-fill"></i>
                                                        @break
                                                    @case(4)
                                                        <i class="bi bi-patch-check-fill"></i>
                                                        @break
                                                    @case(5)
                                                        <i class="bi bi-trophy-fill"></i>
                                                        @break
                                                    @case(6)
                                                        <i class="bi bi-mic-fill"></i>
                                                        @break
                                                    @case(7)
                                                        <i class="bi bi-book-fill"></i>
                                                        @break
                                                    @case(8)
                                                        <i class="bi bi-cup-hot-fill"></i>
                                                        @break
                                                    @case(9)
                                                        <i class="bi bi-cup-fill"></i>
                                                        @break
                                                    @case(10)
                                                        <i class="bi bi-chat-dots-fill"></i>
                                                        @break
                                                    @case(11)
                                                        <i class="bi bi-geo-alt-fill"></i>
                                                        @break
                                                    @default
                                                        <i class="bi bi-check-circle-fill"></i>
                                                @endswitch

                                                @if($include['premium'])
                                                    <del>{{ $include['text'] }}</del> <small class="text-muted"><em>({{ __('page.premium_only_note') }})</em></small>
                                                @else
                                                    {{ $include['text'] }}
                                                @endif
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Galerie -->
        <section id="galerie" class="acd-section acd-section-dark py-5" data-aos="fade-up" data-aos-duration="1000">
            <div class="container">
                <div class="acd-section-header mb-5 text-center">
                    <h2 class="acd-section-title">{{ __('page.gallery_title') }}</h2>
                    <div class="acd-section-bar mx-auto"></div>
                </div>
                <div class="row g-4">
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ asset('assets/images-pro/galerie/image1.png') }}" class="glightbox" data-gallery="gallery1">
                            <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="100">
                                <img src="{{ asset('assets/images-pro/galerie/image1.png') }}" class="acd-gallery-img" alt="Galerie Image 1">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ asset('assets/images-pro/galerie/image2.png') }}" class="glightbox" data-gallery="gallery1">
                            <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="200">
                                <img src="{{ asset('assets/images-pro/galerie/image2.png') }}" class="acd-gallery-img" alt="Galerie Image 2">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ asset('assets/images-pro/galerie/image3.png') }}" class="glightbox" data-gallery="gallery1">
                            <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="300">
                                <img src="{{ asset('assets/images-pro/galerie/image3.png') }}" class="acd-gallery-img" alt="Galerie Image 3">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ asset('assets/images-pro/galerie/image4.png') }}" class="glightbox" data-gallery="gallery1">
                            <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="400">
                                <img src="{{ asset('assets/images-pro/galerie/image4.png') }}" class="acd-gallery-img" alt="Galerie Image 4">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ asset('assets/images-pro/galerie/image5.png') }}" class="glightbox" data-gallery="gallery1">
                            <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="500">
                                <img src="{{ asset('assets/images-pro/galerie/image5.png') }}" class="acd-gallery-img" alt="Galerie Image 5">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ asset('assets/images-pro/galerie/image6.png') }}" class="glightbox" data-gallery="gallery1">
                            <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="600">
                                <img src="{{ asset('assets/images-pro/galerie/image6.png') }}" class="acd-gallery-img" alt="Galerie Image 6">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ asset('assets/images-pro/galerie/image7.png') }}" class="glightbox" data-gallery="gallery1">
                            <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="700">
                                <img src="{{ asset('assets/images-pro/galerie/image7.png') }}" class="acd-gallery-img" alt="Galerie Image 7">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ asset('assets/images-pro/galerie/image8.png') }}" class="glightbox" data-gallery="gallery1">
                            <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="800">
                                <img src="{{ asset('assets/images-pro/galerie/image8.png') }}" class="acd-gallery-img" alt="Galerie Image 8">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ asset('assets/images-pro/galerie/image9.png') }}" class="glightbox" data-gallery="gallery1">
                            <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="900">
                                <img src="{{ asset('assets/images-pro/galerie/image9.png') }}" class="acd-gallery-img" alt="Galerie Image 9">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ asset('assets/images-pro/galerie/image10.png') }}" class="glightbox" data-gallery="gallery1">
                            <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="1000">
                                <img src="{{ asset('assets/images-pro/galerie/image10.png') }}" class="acd-gallery-img" alt="Galerie Image 10">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ asset('assets/images-pro/galerie/image11.png') }}" class="glightbox" data-gallery="gallery1">
                            <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="1100">
                                <img src="{{ asset('assets/images-pro/galerie/image11.png') }}" class="acd-gallery-img" alt="Galerie Image 11">
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <a href="{{ asset('assets/images-pro/galerie/image12.png') }}" class="glightbox" data-gallery="gallery1">
                            <div class="acd-gallery-item" data-aos="fade-up" data-aos-delay="1200">
                                <img src="{{ asset('assets/images-pro/galerie/image12.png') }}" class="acd-gallery-img" alt="Galerie Image 12">
                            </div>
                        </a>
                    </div>
                </div>
                <div class="text-center mt-5">
                    <a href="https://bibliotheque.acdcorporateservices.com/phototheque.php" target="_blank" class="btn acd-btn-outline">{{ __('page.gallery_see_more') }}</a>
                </div>
            </div>
        </section>
    </main>

@endsection

@push('scripts')
<script src="https://cdn.jsdelivr.net/npm/glightbox/dist/js/glightbox.min.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    AOS.init({ once: true });

    const lightbox = GLightbox({
        selector: '.glightbox'
    });

    @if(session('show_success_modal'))
        // This logic would be on the form page now, but leaving it here doesn't hurt.
        var successModal = new bootstrap.Modal(document.getElementById('successModal'));
        successModal.show();
    @endif
});
</script>
@endpush
