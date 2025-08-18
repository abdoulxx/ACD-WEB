@extends('layouts.app')

@section('title', 'Inscription - Rencontres Internationales 2026')

@section('content')

<style>
    .form-hero-section {
        background-color: #181818; /* Fond noir */
        padding: 60px 0;
    }
    .form-hero-title {
        font-size: 2.8rem;
        font-weight: 700;
        color: #fff;
    }
    .form-container {
        background-color: #fff;
        padding: 40px;
        border-radius: 15px;
        box-shadow: 0 10px 30px rgba(0,0,0,0.1);
    }
    .form-label {
        font-weight: 600;
    }
    .btn-submit-custom {
        background-color: #EA4D28;
        color: #fff;
        border-radius: 50px;
        padding: 12px 35px;
        font-weight: 600;
        transition: all 0.3s ease;
    }
    .btn-submit-custom:hover {
        background-color: #181818;
        color: #fff;
    }
</style>

<!-- Section Hero -->
<section class="form-hero-section text-center">
    <div class="container">
        <h1 class="form-hero-title">Formulaire d'inscription Rencontre 2026</h1>
    </div>
</section>

<!-- Section Formulaire -->
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="form-container">
                @if(session('success'))
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

                <form action="{{ route('inscription.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="nom_prenom" class="form-label">{{ __('page.modal_form_labels.name') }}</label>
                            <input type="text" class="form-control @error('nom_prenom') is-invalid @enderror" id="nom_prenom" name="nom_prenom" value="{{ old('nom_prenom') }}" required>
                            @error('nom_prenom')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="fonction" class="form-label">{{ __('page.modal_form_labels.position') }}</label>
                            <input type="text" class="form-control" id="fonction" name="fonction" value="{{ old('fonction') }}">
                        </div>
                    </div>
                    
                    <div class="mb-3">
                        <label for="entreprise" class="form-label">{{ __('page.modal_form_labels.company') }}</label>
                        <input type="text" class="form-control" id="entreprise" name="entreprise" value="{{ old('entreprise') }}">
                    </div>

                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="email" class="form-label">{{ __('page.modal_form_labels.email') }}</label>
                            <input type="email" class="form-control @error('email') is-invalid @enderror" id="email" name="email" value="{{ old('email') }}" required>
                             @error('email')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="telephone" class="form-label">{{ __('page.modal_form_labels.phone') }}</label>
                            <input type="tel" class="form-control @error('telephone') is-invalid @enderror" id="telephone" name="telephone" value="{{ old('telephone') }}" required>
                             @error('telephone')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">{{ __('page.modal_form_labels.pack_choice') }}</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pack_choisi" id="pack_standard" value="standard" checked>
                            <label class="form-check-label" for="pack_standard">
                                {{ __('page.pricing_pack_voyage_title') }}
                            </label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="pack_choisi" id="pack_premium" value="premium">
                            <label class="form-check-label" for="pack_premium">
                                {{ __('page.pricing_pack_premium_title') }}
                            </label>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label class="form-label">{{ __('page.modal_form_labels.countries') }}</label>
                        @foreach(__('page.destinations') as $destination)
                            <div class="form-check">
                                <input class="form-check-input" name="destinations[]" type="checkbox" value="{{ $destination['data_destination'] }}" id="dest-{{ strtolower($destination['data_destination']) }}">
                                <label class="form-check-label" for="dest-{{ strtolower($destination['data_destination']) }}">{{ $destination['country'] }}</label>
                            </div>
                        @endforeach
                         @error('destinations')
                            <div class="text-danger mt-1"><small>{{ $message }}</small></div>
                        @enderror
                    </div>
                    
                    <div class="text-center">
                        <button type="submit" class="btn btn-submit-custom">{{ __('page.modal_send_btn') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function() {
    const form = document.querySelector('form');
    if (form) {
        form.addEventListener('submit', function() {
            const submitButton = form.querySelector('.btn-submit-custom');
            if (submitButton) {
                submitButton.disabled = true;
                submitButton.innerHTML = `
                    <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
                    Envoi en cours...
                `;
            }
        });
    }
});
</script>
@endpush