@extends("layouts.app")
@section('title', __('contact.title'))
@section("content")



  <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0" style="background-color: #000;">
        <div class="container-fluid py-5" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 animated zoomIn" style="color: #FFF;">{{__('contact.title')}}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->





      <!-- Contact Start -->

    <!-- Full Screen Search Start -->
    <div class="modal fade" id="searchModal" tabindex="-1">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content" style="background: rgba(9, 30, 62, .7);">
                <div class="modal-header border-0">
                    <button type="button" class="btn bg-white btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body d-flex align-items-center justify-content-center">
                    <div class="input-group" style="max-width: 600px;">
                        <input type="text" class="form-control bg-transparent border-success p-3" placeholder="Type search keyword">
                        <button class="btn btn-success px-4"><i class="bi bi-search"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Full Screen Search End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5 wow fadeInUp" data-wow-delay="0.1s">
        <div class="container">
            <div class="section-title text-center position-relative pb-3 mb-5 mx-auto" style="max-width: 600px;">
                <h1 class="mb-0"> <strong> {{ __('contact.adresse.titre') }}</strong></h1>
            </div>
            <div class="row g-5 mb-5">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.1s">
                        <div class="bg-success d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-phone-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{ __('contact.adresse.numero') }}</h5>
                            <h4 class="text-success mb-0">(+225) 27 22 21 83 33</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.4s">
                        <div class="bg-success d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-envelope-open text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{ __('contact.adresse.email') }}</h5>
                            <h4 class="text-success mb-0">contact@acdcorporateservices.com</h4>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="d-flex align-items-center wow fadeIn" data-wow-delay="0.8s">
                        <div class="bg-success d-flex align-items-center justify-content-center rounded" style="width: 60px; height: 60px;">
                            <i class="fa fa-map-marker-alt text-white"></i>
                        </div>
                        <div class="ps-4">
                            <h5 class="mb-2">{{ __('contact.adresse.siege') }}</h5>
                            <h4 class="text-success mb-0">ANGRE - Soleil 3 - Villa 105 - Abidjan - CI</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                
                <div class="col-lg-12 wow slideInUp" data-wow-delay="0.6s">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d5177.268851785671!2d-3.9832289239814114!3d5.390980335284905!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNcKwMjMnMjcuNSJOIDPCsDU4JzUwLjQiVw!5e1!3m2!1sfr!2sci!4v1690220852440!5m2!1sfr!2sci" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->
    <!-- Contact End -->


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('contact-form');
            form.addEventListener('submit', function(event) {
                if (!form.checkValidity()) {
                    event.preventDefault();
                    event.stopPropagation();
                }
                form.classList.add('was-validated');
            });

            // Validation personnalisée pour le champ "nom"
            const nomInput = document.getElementById('nom');
            nomInput.addEventListener('input', function() {
                const errorNom = document.getElementById('error-nom');
                if (nomInput.validity.valueMissing) {
                    errorNom.textContent = 'Le nom est requis.';
                } else {
                    errorNom.textContent = '';
                }
            });

            // Ajoutez ici des validations personnalisées pour les autres champs du formulaire
        });
    </script>




@endsection
