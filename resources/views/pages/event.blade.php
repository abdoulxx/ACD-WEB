@extends("layouts.app")
@section('title', __('event.meta_title'))
@section("content")

<!-- Inclure le CSS spécifique Impact Féminin -->
<link rel="stylesheet" href="{{ asset('assets/css/impactfeminin.css') }}">

<!-- AOS Animation Library -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

<!-- ===== SECTION 1 - HERO SECTION IMPACT FÉMININ ===== -->
<section class="impact-hero">
    <!-- Décorations géométriques -->
    <div class="impact-decoration impact-decoration-1"></div>
    <div class="impact-decoration impact-decoration-2"></div>
    
    <!-- Titre principal centré -->
    <div class="container">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h1 class="impact-main-title" data-aos="fade-up" data-aos-duration="1000">{{ __('event.hero_title') }}</h1>
            </div>
        </div>
    </div>
</section>

<!-- Section contenu avec image et texte -->
<section class="impact-content-section">
    <div class="container">
        <div class="row align-items-center">
            <!-- Image à gauche -->
            <div class="col-lg-6 col-md-6 mb-4">
                <div class="impact-image-container" data-aos="fade-right" data-aos-duration="1000">
                    <img src="{{ asset('assets/images/impact-feminin/image1.jpg') }}" 
                         alt="Femmes entrepreneures Impact Féminin" 
                         class="impact-main-image">
                </div>
            </div>
            
            <!-- Contenu texte à droite -->
            <div class="col-lg-6 col-md-6">
                <div class="impact-text-content">
                    <h2 class="impact-section-title" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                        {{ __('event.intro_title') }}
                    </h2>
                    
                    <p class="impact-description" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        {!! __('event.intro_description') !!}
                    </p>
                    
                    <div class="mt-4">
                        <a href="{{ route('impact_feminin.candidature.create') }}" class="impact-candidate-btn">
                            {{ __('event.intro_button') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 2 - APPEL À CANDIDATURE ===== -->
<section class="impact-cta-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto text-center">
                <p class="impact-cta-text" data-aos="fade-up" data-aos-duration="1000">
                    {{ __('event.cta_text') }}
                </p>
                
                <div class="mt-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <a href="{{ route('impact_feminin.candidature.create') }}" class="impact-cta-btn">
                        {{ __('event.intro_button') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 3 - POURQUOI IMPACT FÉMININ ===== -->
<section class="impact-why-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto text-center">
                <h2 class="impact-why-title" data-aos="fade-up" data-aos-duration="1000">{{ __('event.why_title') }}</h2>
                <p class="impact-why-description" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    {!! __('event.why_description') !!}
                </p>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 4 - PRIX D'IMPACT FÉMININ ===== -->
<section class="impact-awards-section">
    <div class="container">
        <!-- Titre et description -->
        <div class="row mb-5">
            <div class="col-12 text-center">
                <h2 class="impact-awards-title" data-aos="fade-up" data-aos-duration="1000">{{ __('event.awards_title') }}</h2>
                <p class="impact-awards-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    {{ __('event.awards_subtitle') }}
                </p>
            </div>
        </div>
        
        <!-- Les trois prix -->
        <div class="row g-4 mb-5">
            <!-- Prix Éclosion Féminin -->
            <div class="col-lg-4 col-md-12">
                <div class="impact-award-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="award-header">
                        <h3 class="award-title">{{ __('event.award1_title') }}</h3>
                    </div>
                    <div class="award-content">
                        <p class="award-description">
                            {{ __('event.award1_description') }}
                        </p>
                        
                        <div class="award-section">
                            <h4 class="section-title">{{ __('event.award_conditions') }}</h4>
                            <ul class="conditions-list">
                                <li>{{ __('event.award1_condition1') }}</li>
                                <li>{{ __('event.award1_condition2') }}</li>
                            </ul>
                        </div>
                        
                        <div class="award-section">
                            <h4 class="section-title">{{ __('event.award_criteria') }}</h4>
                            <ul class="criteria-list">
                                <li>{{ __('event.award1_criterion1') }}</li>
                                <li>{{ __('event.award1_criterion2') }}</li>
                                <li>{{ __('event.award1_criterion3') }}</li>
                                <li>{{ __('event.award1_criterion4') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Prix Résilience Féminin -->
            <div class="col-lg-4 col-md-12">
                <div class="impact-award-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="award-header">
                        <h3 class="award-title">{{ __('event.award2_title') }}</h3>
                    </div>
                    <div class="award-content">
                        <p class="award-description">
                            {{ __('event.award2_description') }}
                        </p>
                        
                        <div class="award-section">
                            <h4 class="section-title">{{ __('event.award_conditions') }}</h4>
                            <ul class="conditions-list">
                                <li>{{ __('event.award2_condition1') }}</li>
                                <li>{{ __('event.award2_condition2') }}</li>
                            </ul>
                        </div>
                        
                        <div class="award-section">
                            <h4 class="section-title">{{ __('event.award_criteria') }}</h4>
                            <ul class="criteria-list">
                                <li>{{ __('event.award2_criterion1') }}</li>
                                <li>{{ __('event.award2_criterion2') }}</li>
                                <li>{{ __('event.award2_criterion3') }}</li>
                                <li>{{ __('event.award2_criterion4') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Prix Visionnaire Féminin -->
            <div class="col-lg-4 col-md-12">
                <div class="impact-award-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <div class="award-header">
                        <h3 class="award-title">{{ __('event.award3_title') }}</h3>
                    </div>
                    <div class="award-content">
                        <p class="award-description">
                            {{ __('event.award3_description') }}
                        </p>
                        
                        <div class="award-section">
                            <h4 class="section-title">{{ __('event.award_conditions') }}</h4>
                            <ul class="conditions-list">
                                <li>{{ __('event.award3_condition1') }}</li>
                                <li>{{ __('event.award3_condition2') }}</li>
                            </ul>
                        </div>
                        
                        <div class="award-section">
                            <h4 class="section-title">{{ __('event.award_criteria') }}</h4>
                            <ul class="criteria-list">
                                <li>{{ __('event.award3_criterion1') }}</li>
                                <li>{{ __('event.award3_criterion2') }}</li>
                                <li>{{ __('event.award3_criterion3') }}</li>
                                <li>{{ __('event.award3_criterion4') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bouton candidature -->
        <div class="row">
            <div class="col-12 text-center">
                <a href="{{ route('impact_feminin.candidature.create') }}" class="impact-awards-btn">
                    {{ __('event.intro_button') }}
                </a>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 5 - THÉMATIQUES ABORDÉES ===== -->
<section class="impact-themes-section py-5">
    <div class="container">
        <!-- Titre de la section -->
        <div class="row">
            <div class="col-12">
                <div class="text-center mb-5">
                    <h2 class="themes-main-title" data-aos="fade-up" data-aos-duration="1000">{{ __('event.themes_title') }}</h2>
                </div>
            </div>
        </div>
        
        <!-- Cartes thématiques -->
        <div class="row g-4 justify-content-center">
            <!-- Thématique 1 : Entrepreneuriat Féminin -->
            <div class="col-lg-5 col-md-6">
                <div class="theme-card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                    <img src="{{ asset('assets/images/impact-feminin/image2.png') }}" alt="Entrepreneuriat Féminin" class="theme-image">
                    <div class="theme-overlay">
                        <div class="theme-content">
                            <h3 class="theme-title">{{ __('event.theme1_title') }}</h3>
                            <p class="theme-description">
                                {{ __('event.theme1_description') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Thématique 2 : Leadership Féminin -->
            <div class="col-lg-5 col-md-6">
                <div class="theme-card" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
                    <img src="{{ asset('assets/images/impact-feminin/image3.png') }}" alt="Leadership Féminin" class="theme-image">
                    <div class="theme-overlay">
                        <div class="theme-content">
                            <h3 class="theme-title">{{ __('event.theme2_title') }}</h3>
                            <p class="theme-description">
                                {{ __('event.theme2_description') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bouton de réservation -->
        <div class="row">
            <div class="col-12">
                <div class="text-center mt-5">
                    <a href="{{ route('reservation.create') }}" class="impact-reserve-btn" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        {{ __('event.reserve_button') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 6 - APPEL À LA CANDIDATURE ===== -->
<section class="impact-candidature-section py-5">
    <div class="container">
        <!-- Titre de la section -->
        <div class="row">
            <div class="col-12">
                <div class="text-center mb-4">
                    <h2 class="candidature-main-title" data-aos="fade-up" data-aos-duration="1000">{{ __('event.application_title') }}</h2>
                    <p class="candidature-subtitle" data-aos="fade-up" data-aos-delay="300">
                        {!! __('event.application_subtitle') !!}
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Cartes de candidature -->
        <div class="row g-4 justify-content-center mb-5">
            <!-- Devenir Participant -->
            <div class="col-lg-4 col-md-6">
                <div class="candidature-card" data-aos="zoom-in" data-aos-delay="100">
                    <div class="candidature-header">
                        <h3 class="candidature-card-title">{{ __('event.role1_title') }}</h3>
                    </div>
                    <div class="candidature-content">
                        <p class="candidature-question">
                            {{ __('event.role1_question') }}
                        </p>
                        <p class="candidature-description">
                            {{ __('event.role1_description') }}
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Devenir Sponsor -->
            <div class="col-lg-4 col-md-6">
                <div class="candidature-card" data-aos="zoom-in" data-aos-delay="300">
                    <div class="candidature-header">
                        <h3 class="candidature-card-title">{{ __('event.role2_title') }}</h3>
                    </div>
                    <div class="candidature-content">
                        <p class="candidature-question">
                            {{ __('event.role2_question') }}
                        </p>
                        <p class="candidature-description">
                            {{ __('event.role2_description') }}
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Devenir Exposant -->
            <div class="col-lg-4 col-md-6">
                <div class="candidature-card" data-aos="zoom-in" data-aos-delay="500">
                    <div class="candidature-header">
                        <h3 class="candidature-card-title">{{ __('event.role3_title') }}</h3>
                    </div>
                    <div class="candidature-content">
                        <p class="candidature-question">
                            {{ __('event.role3_question') }}
                        </p>
                        <p class="candidature-description">
                            {{ __('event.role3_description') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bouton de réservation principal -->
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <a href="{{ route('reservation.create') }}" class="impact-candidature-btn">
                        {{ __('event.reserve_button') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 7 - PROGRAMME OFFICIEL ===== -->
<section class="impact-programme-section py-5">
    <div class="container">
        <!-- Titre de la section -->
        <div class="row">
            <div class="col-12">
                <div class="text-center mb-5">
                    <h2 class="programme-main-title" data-aos="fade-up" data-aos-duration="1000">{{ __('event.program_title') }}</h2>
                </div>
            </div>
        </div>
        
        <!-- Grille du programme -->
        <div class="row g-4">
            <!-- Accueil & Installation -->
            <div class="col-lg-6 col-md-6">
                <div class="programme-card" data-aos="fade-left" data-aos-delay="100">
                    <div class="programme-header">
                        <h3 class="programme-title">{{ __('event.event1_title') }}</h3>
                        <p class="programme-subtitle">{{ __('event.event1_subtitle') }}</p>
                        <span class="programme-time">{{ __('event.event1_time') }}</span>
                    </div>
                </div>
            </div>
            
            <!-- Mot de bienvenue -->
            <div class="col-lg-6 col-md-6">
                <div class="programme-card" data-aos="fade-right" data-aos-delay="200">
                    <div class="programme-header">
                        <h3 class="programme-title">{{ __('event.event2_title') }}</h3>
                        <p class="programme-subtitle">{{ __('event.event2_subtitle') }}</p>
                        <span class="programme-time">{{ __('event.event2_time') }}</span>
                    </div>
                </div>
            </div>
            
            <!-- Panel -->
            <div class="col-lg-6 col-md-6">
                <div class="programme-card" data-aos="fade-left" data-aos-delay="300">
                    <div class="programme-header">
                        <h3 class="programme-title">{{ __('event.event3_title') }}</h3>
                        <p class="programme-subtitle">{{ __('event.event3_subtitle') }}</p>
                        <span class="programme-time">{{ __('event.event3_time') }}</span>
                    </div>
                    <div class="programme-details">
                        <p>{{ __('event.event3_details') }}</p>
                    </div>
                </div>
            </div>
            
            <!-- Atelier Interactif -->
            <div class="col-lg-6 col-md-6">
                <div class="programme-card" data-aos="fade-right" data-aos-delay="400">
                    <div class="programme-header">
                        <h3 class="programme-title">{{ __('event.event4_title') }}</h3>
                        <p class="programme-subtitle">{{ __('event.event4_subtitle') }}</p>
                        <span class="programme-time">{{ __('event.event4_time') }}</span>
                    </div>
                    <div class="programme-details">
                        <p>{{ __('event.event4_details') }}</p>
                    </div>
                </div>
            </div>
            
            <!-- Remise des Prix -->
            <div class="col-lg-6 col-md-6">
                <div class="programme-card" data-aos="fade-left" data-aos-delay="500">
                    <div class="programme-header">
                        <h3 class="programme-title">{{ __('event.event5_title') }}</h3>
                        <p class="programme-subtitle">{{ __('event.event5_subtitle') }}</p>
                        <span class="programme-time">{{ __('event.event5_time') }}</span>
                    </div>
                    <div class="programme-details">
                        <p>{!! __('event.event5_details') !!}</p>
                        
                        <p>{{ __('event.event5_details2') }}</p>
                    </div>
                </div>
            </div>
            
            <!-- Cocktail de Clôture -->
            <div class="col-lg-6 col-md-6">
                <div class="programme-card" data-aos="fade-right" data-aos-delay="600">
                    <div class="programme-header">
                        <h3 class="programme-title">{{ __('event.event6_title') }}</h3>
                        <p class="programme-subtitle">{{ __('event.event6_subtitle') }}</p>
                        <span class="programme-time">{{ __('event.event6_time') }}</span>
                    </div>
                    <div class="programme-details">
                        <p>{{ __('event.event6_details') }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bouton de réservation -->
        <div class="row">
            <div class="col-12">
                <div class="text-center mt-5">
                    <a href="{{ route('reservation.create') }}" class="impact-programme-btn">
                        {{ __('event.reserve_button') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 8 - INTERVENANTS & PANÉLISTES ===== -->
<section class="impact-speakers-section py-5">
    <div class="container">
        <!-- Titre de la section -->
        <div class="row">
            <div class="col-12">
                <div class="text-center mb-5">
                    <h2 class="speakers-main-title" data-aos="fade-up" data-aos-duration="1000">{{ __('event.speakers_title') }}</h2>
                </div>
            </div>
        </div>
        
        <!-- Cartes des intervenants -->
        <div class="row g-4 justify-content-center mb-5">
            <!-- Intervenant 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="speaker-card" data-aos="fade-up" data-aos-delay="100">
                    <div class="speaker-image-container">
                        <img src="{{ asset('assets/images/impact-feminin/speaker.jpg') }}" alt="Intervenante 1" class="speaker-image">
                    </div>
                    <div class="speaker-info">
                        <h4 class="speaker-name">{{ __('event.speaker_name') }}</h4>
                        <p class="speaker-title">{{ __('event.speaker_role') }}</p>
                        <p class="speaker-company">{{ __('event.speaker_company') }}</p>
                    </div>
                </div>
            </div>
            
            <!-- Intervenant 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="speaker-card" data-aos="fade-up" data-aos-delay="200">
                    <div class="speaker-image-container">
                        <img src="{{ asset('assets/images/impact-feminin/speaker.jpg') }}" alt="Intervenante 2" class="speaker-image">
                    </div>
                    <div class="speaker-info">
                        <h4 class="speaker-name">{{ __('event.speaker_name') }}</h4>
                        <p class="speaker-title">{{ __('event.speaker_role') }}</p>
                        <p class="speaker-company">{{ __('event.speaker_company') }}</p>
                    </div>
                </div>
            </div>
            
            <!-- Intervenant 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="speaker-card" data-aos="fade-up" data-aos-delay="300">
                    <div class="speaker-image-container">
                        <img src="{{ asset('assets/images/impact-feminin/speaker.jpg') }}" alt="Intervenante 3" class="speaker-image">
                    </div>
                    <div class="speaker-info">
                        <h4 class="speaker-name">{{ __('event.speaker_name') }}</h4>
                        <p class="speaker-title">{{ __('event.speaker_role') }}</p>
                        <p class="speaker-company">{{ __('event.speaker_company') }}</p>
                    </div>
                </div>
            </div>
            
            <!-- Intervenant 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="speaker-card" data-aos="fade-up" data-aos-delay="400">
                    <div class="speaker-image-container">
                        <img src="{{ asset('assets/images/impact-feminin/speaker.jpg') }}" alt="Intervenante 4" class="speaker-image">
                    </div>
                    <div class="speaker-info">
                        <h4 class="speaker-name">{{ __('event.speaker_name') }}</h4>
                        <p class="speaker-title">{{ __('event.speaker_role') }}</p>
                        <p class="speaker-company">{{ __('event.speaker_company') }}</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bouton de réservation -->
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <a href="{{ route('reservation.create') }}" class="impact-speakers-btn" data-aos="fade-up" data-aos-delay="500">
                        {{ __('event.reserve_button') }}
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ===== SECTION 9 - PARTENAIRES ===== -->
<section class="impact-partners-section py-5">
    <div class="container">
        <!-- Titre de la section -->
        <div class="row">
            <div class="col-12">
                <div class="text-center mb-5">
                    <h2 class="partners-main-title" data-aos="fade-up" data-aos-duration="1000">{{ __('event.partners_title') }}</h2>
                </div>
            </div>
        </div>
        
        <!-- Logos des partenaires -->
        <div class="row justify-content-center">
            <!-- Première rangée -->
            <div class="col-lg-2 col-md-3 col-4 mb-4">
                <div class="partner-logo" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('assets/images/impact-feminin/logo.png') }}" alt="Partenaire" class="partner-image">
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4 mb-4">
                <div class="partner-logo" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('assets/images/impact-feminin/logo.png') }}" alt="Partenaire" class="partner-image">
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4 mb-4">
                <div class="partner-logo" data-aos="zoom-in" data-aos-delay="300">
                    <img src="{{ asset('assets/images/impact-feminin/logo.png') }}" alt="Partenaire" class="partner-image">
                </div>
            </div>
            
            <!-- Deuxième rangée -->
            <div class="col-lg-2 col-md-3 col-4 mb-4">
                <div class="partner-logo" data-aos="zoom-in" data-aos-delay="400">
                    <img src="{{ asset('assets/images/impact-feminin/logo.png') }}" alt="Partenaire" class="partner-image">
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4 mb-4">
                <div class="partner-logo" data-aos="zoom-in" data-aos-delay="500">
                    <img src="{{ asset('assets/images/impact-feminin/logo.png') }}" alt="Partenaire" class="partner-image">
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4 mb-4">
                <div class="partner-logo" data-aos="zoom-in" data-aos-delay="600">
                    <img src="{{ asset('assets/images/impact-feminin/logo.png') }}" alt="Partenaire" class="partner-image">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Script pour les animations au scroll -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Smooth scroll pour les liens d'ancrage
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
    
    // Initialiser la bibliothèque d'animation AOS
    AOS.init({
        duration: 800,         // Durée de l'animation
        once: false,           // L'animation se répète à chaque défilement
        offset: 50,            // Décalage pour déclencher l'animation (en px)
        easing: 'ease-out-cubic', // Courbe de vitesse de l'animation
        mirror: false          // L'animation ne se joue qu'une fois dans chaque direction
    });
});
</script>

@endsection