@extends('layouts.app')

@section('title', __('reservation_form.title'))

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
    .display-4 {
        color: #B75FBE !important;
    }
</style>

<!-- ===== SECTION 1 - HERO SECTION RÉSERVATION ===== -->
<section class="impact-hero">
    <!-- Décorations géométriques -->
    <div class="impact-decoration impact-decoration-1"></div>
    <div class="impact-decoration impact-decoration-2"></div>
    
    <!-- Titre principal centré -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h1 class="impact-main-title" data-aos="fade-up" data-aos-duration="1000">{{ __('reservation_form.header_title') }}</h1>
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

                    <form action="{{ route('reservation.store') }}" method="POST">
                        @csrf

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="prenom" class="form-label">{{ __('reservation_form.first_name') }}</label>
                                <input type="text" class="form-control" id="prenom" name="prenom" required value="{{ old('prenom') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="nom" class="form-label">{{ __('reservation_form.last_name') }}</label>
                                <input type="text" class="form-control" id="nom" name="nom" required value="{{ old('nom') }}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="email" class="form-label">{{ __('reservation_form.email') }}</label>
                            <input type="email" class="form-control" id="email" name="email" required value="{{ old('email') }}">
                        </div>

                        <div class="mb-3">
                            <label for="telephone" class="form-label">{{ __('reservation_form.phone_number') }}</label>
                            <input type="tel" class="form-control" id="telephone" name="telephone" required value="{{ old('telephone') }}">
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="societe" class="form-label">{{ __('reservation_form.company') }}</label>
                                <input type="text" class="form-control" id="societe" name="societe" required value="{{ old('societe') }}">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="poste" class="form-label">{{ __('reservation_form.position') }}</label>
                                <input type="text" class="form-control" id="poste" name="poste" required value="{{ old('poste') }}">
                            </div>
                        </div>

                        <div class="mb-3">
                            <label for="type_reservation" class="form-label">{{ __('reservation_form.reservation_type') }}</label>
                            <select class="form-select" id="type_reservation" name="type_reservation" required>
                                <option value="" disabled selected>{{ __('reservation_form.choose_option') }}</option>
                                <option value="participant" {{ old('type_reservation') == 'participant' ? 'selected' : '' }}>{{ __('reservation_form.type_participant') }}</option>
                                <option value="sponsor" {{ old('type_reservation') == 'sponsor' ? 'selected' : '' }}>{{ __('reservation_form.type_sponsor') }}</option>
                                <option value="exposant" {{ old('type_reservation') == 'exposant' ? 'selected' : '' }}>{{ __('reservation_form.type_exhibitor') }}</option>
                            </select>
                        </div>

                        <div class="text-center mt-4">
                            <button type="submit" class="submit-btn">{{ __('reservation_form.submit_button') }}</button>
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
                        {{ __("reservation_form.sending_button") }}
                    `;
                }
            });
        }
    });
</script>

@endsection
