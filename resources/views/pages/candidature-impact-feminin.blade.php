@extends('layouts.app')

@section('title', __('impact_feminin_form.title'))

@section('content')

<!-- Inclure le CSS spécifique Impact Féminin -->
<link rel="stylesheet" href="{{ asset('assets/css/impactfeminin.css') }}">

<!-- AOS Animation Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<style>
    .form-section {
        background-color: #f8f9fa;
        padding: 40px;
        border-radius: 15px;
        margin-bottom: 30px;
    }
    .form-title {
        color: var(--impact-primary, #814cb0);
        font-weight: 700;
        margin-bottom: 25px;
    }
    .form-label {
        font-weight: 600;
        margin-bottom: 8px;
    }
    .form-control,
    .form-select {
        border-radius: 8px;
        padding: 12px 15px;
    }
    .submit-btn {
        background-color: #B75FBE;
        border: none;
        color: white;
        padding: 15px 40px;
        border-radius: 50px;
        font-weight: 600;
        font-size: 1.1rem;
        transition: all 0.3s ease;
    }
    .submit-btn:hover {
        filter: brightness(90%);
    }
    .awards-list {
        background: linear-gradient(135deg, #f8f9fa 0%, #e9ecef 100%);
        padding: 20px;
        border-radius: 10px;
        border-left: 4px solid #B75FBE;
    }
    .awards-list p {
        color: #495057;
        font-size: 1.1rem;
    }
    .display-4 {
        color: #B75FBE !important;
    }
    .text-primary {
        color: #814cb0 !important;
    }
    .text-secondary {
        color: #6c757d !important;
    }
    .text-info {
        color: #17a2b8 !important;
    }
</style>

<!-- ===== SECTION 1 - HERO SECTION CANDIDATURE ===== -->
<section class="impact-hero">
    <!-- Décorations géométriques -->
    <div class="impact-decoration impact-decoration-1"></div>
    <div class="impact-decoration impact-decoration-2"></div>
    
    <!-- Titre principal centré -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h1 class="impact-main-title" data-aos="fade-up" data-aos-duration="1000">{{ __('impact_feminin_form.header_title') }}</h1>
            </div>
        </div>
    </div>
</section>

<!-- Section informations candidature -->
<section class="impact-info-section py-5">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10 text-center">
                <h2 class="h3 text-primary mb-3" data-aos="fade-up" data-aos-duration="1000">{{ __('impact_feminin_form.header_subtitle1') }}</h2>
                <h3 class="h4 text-secondary mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">{{ __('impact_feminin_form.header_subtitle2') }}</h3>
                
                <h4 class="h5 text-info mb-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">{{ __('impact_feminin_form.header_subtitle3') }}</h4>
                
                <div class="awards-list mx-auto" style="max-width: 500px;" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                    <p class="mb-2"><strong>{{ __('impact_feminin_form.award_name_eclosion') }}</strong></p>
                    <p class="mb-2"><strong>{{ __('impact_feminin_form.award_name_resilience') }}</strong></p>
                    <p class="mb-0"><strong>{{ __('impact_feminin_form.award_name_visionnaire') }}</strong></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="padding-top-bottom3">
    <div class="container">        
        <div class="row justify-content-center">
            <div class="col-md-8">

                <div class="form-section shadow-sm">

                    @if (session('success'))
                        <div class="alert alert-success">
                            {{ session('success') }}
                        </div>
                    @endif

                    @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('impact_feminin.candidature.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="prenom" class="form-label">{{ __('impact_feminin_form.first_name') }}</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" required value="{{ old('prenom') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nom" class="form-label">{{ __('impact_feminin_form.last_name') }}</label>
                                <input type="text" class="form-control" id="nom" name="nom" required value="{{ old('nom') }}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('impact_feminin_form.email') }}</label>
                            <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}">
                        </div>

                        <div class="mb-3">
                            <label for="telephone" class="form-label">{{ __('impact_feminin_form.phone_number') }}</label>
                            <input type="tel" class="form-control" id="telephone" name="telephone" required value="{{ old('telephone') }}">
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="societe" class="form-label">{{ __('impact_feminin_form.company') }}</label>
                                <input type="text" class="form-control" id="societe" name="societe" required value="{{ old('societe') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="poste" class="form-label">{{ __('impact_feminin_form.position') }}</label>
                                <input type="text" class="form-control" id="poste" name="poste" required value="{{ old('poste') }}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="prix_choisi" class="form-label">{{ __('impact_feminin_form.award_choice') }}</label>
                            <select class="form-select" id="prix_choisi" name="prix_choisi" required>
                                <option value="" disabled selected>{{ __('impact_feminin_form.choose_award') }}</option>
                                <option value="eclosion" {{ old('prix_choisi') == 'eclosion' ? 'selected' : '' }}>{{ __('impact_feminin_form.award_eclosion') }}</option>
                                <option value="resilience" {{ old('prix_choisi') == 'resilience' ? 'selected' : '' }}>{{ __('impact_feminin_form.award_resilience') }}</option>
                                <option value="visionnaire" {{ old('prix_choisi') == 'visionnaire' ? 'selected' : '' }}>{{ __('impact_feminin_form.award_visionnaire') }}</option>
                            </select>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="submit-btn">{{ __('impact_feminin_form.submit_button') }}</button>
                        </div>

                    </form>
                </div>

            </div>
        </div>
    </div>
</section>

<script>
    // Initialiser AOS
    AOS.init();
    
    document.addEventListener('DOMContentLoaded', function() {
        const form = document.querySelector('form');
        if (form) {
            form.addEventListener('submit', function() {
                const submitButton = form.querySelector('.submit-btn');
                if (submitButton) {
                    // Désactiver le bouton pour éviter les clics multiples
                    submitButton.disabled = true;

                    // Changer le contenu du bouton pour afficher un spinner
                    submitButton.innerHTML = `
                        <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                        {{ __("impact_feminin_form.sending_button") }}
                    `;
                }
            });
        }
    });
</script>

@endsection