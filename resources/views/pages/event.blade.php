@extends("layouts.app")
@section('title', __('event.meta_title'))
@section("content")

    <!-- Inclure le CSS spécifique Impact Féminin -->
    <link rel="stylesheet" href="{{ asset('assets/css/impactfeminin.css') }}">

    <!-- Font Awesome pour les icônes -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

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
                    <h1 class="impact-main-title" data-aos="fade-up" data-aos-duration="1000">{{ __('event.hero_title') }}
                    </h1>
                    <div style="color: white; margin-top: 20px;">
                        <p style="font-size: 1.5rem; font-weight: 600; margin-bottom: 5px;">
                            19 Novembre 2025 | 19h30 - 22h30
                        </p>
                        <p style="font-size: 1.2rem;">
                            NOVOTEL PLATEAU
                        </p>
                    </div>
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
                            alt="Femmes entrepreneures Impact Féminin" class="impact-main-image">
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

    <!-- ===== SECTION 2 - POURQUOI IMPACT FÉMININ ===== -->
    <section class="impact-why-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-md-10 mx-auto text-center">
                    <h2 class="impact-why-title" data-aos="fade-up" data-aos-duration="1000">{{ __('event.why_title') }}
                    </h2>
                    <p class="impact-why-description" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                        {!! __('event.why_description') !!}
                    </p>

                    <!-- Bouton Je candidate repositionné -->
                    <div class="mt-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="400">
                        <a href="{{ route('impact_feminin.candidature.create') }}" class="impact-cta-btn">
                            {{ __('event.intro_button') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ===== SECTION 3 - PRIX D'IMPACT FÉMININ ===== -->
    <section class="impact-awards-section">
        <div class="container">
            <!-- Titre et description -->
            <div class="row mb-5">
                <div class="col-12 text-center">
                    <h2 class="impact-awards-title" data-aos="fade-up" data-aos-duration="1000">
                        {{ __('event.awards_title') }}
                    </h2>
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

    <!-- ===== SECTION 4.5 - NOMINEES IMPACT FÉMININ ===== -->
    <section class="impact-nominees-section py-5">
        <div class="container">
            <!-- Titre de la section -->
            <div class="row">
                <div class="col-12">
                    <div class="text-center mb-5">
                        <h2 class="nominees-main-title" data-aos="fade-up" data-aos-duration="1000">
                            {{ __('event.nominees_title') }}
                        </h2>
                        <p class="nominees-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                            {{ __('event.nominees_description') }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Cartes des nominees -->
            <div class="row g-3 justify-content-center mb-5 nominees-grid">
                <!-- LIGNE 1 -->
                <!-- Nominee 1 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}"
                                alt="MAITRE KACOU ANGELINA ANDRESS" class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Maitre KACOU ANGELINA ANDRESS</h4>
                            <p class="nominee-title">Notaire</p>
                            <p class="nominee-company">Cabinet de Notariat</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 2 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}"
                                alt="MAITRE YAPO NINA ROSELINE" class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Maitre YAPO NINA ROSELINE</h4>
                            <p class="nominee-title">Notaire</p>
                            <p class="nominee-company">Cabinet de Notariat</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 3 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}"
                                alt="MAITRE AMOIKON BEUGRE GLADYS" class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Maitre AMOIKON BEUGRE GLADYS</h4>
                            <p class="nominee-title">Notaire</p>
                            <p class="nominee-company">Cabinet de Notariat</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 4 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="MAITRE TOURE HAWA"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Maitre TOURE HAWA</h4>
                            <p class="nominee-title">Notaire</p>
                            <p class="nominee-company">Cabinet de Notariat</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 5 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}"
                                alt="MAITRE KONE EPSE CAMARA HABIBATA" class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Maitre KONE Epse CAMARA HABIBATA</h4>
                            <p class="nominee-title">Notaire</p>
                            <p class="nominee-company">Cabinet de Notariat</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 6 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="MAITRE COULIBALY AWA"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Maitre COULIBALY AWA</h4>
                            <p class="nominee-title">Notaire</p>
                            <p class="nominee-company">Cabinet de Notariat</p>
                        </div>
                    </div>
                </div>

                <!-- LIGNE 2 -->
                <!-- Nominee 7 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="MME OUATTARA MAMAN"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Mme OUATTARA MAMAN</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">ETD (BTP)</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 8 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="PEHE EPSE TAHOU"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">PEHE Epse TAHOU</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">EL SHADDAI CONSTRUCTION</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 9 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}"
                                alt="MADAME N'DOUFFOU MARIE-SYLVIE" class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Mme N'DOUFFOU MARIE-SYLVIE</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">LYS DE MARIE</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 10 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}"
                                alt="MADAME PATRICIA GUERRIER" class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Mme PATRICIA GUERRIER</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">ISIS AGENCE DE GESTION</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 11 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}"
                                alt="MADAME VICTORINE KOUADIO" class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Mme VICTORINE KOUADIO</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">KOVIBAT</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 12 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="MME BAYO BINTOU"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Mme BAYO BINTOU</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">INTERLUXE FINANCE</p>
                        </div>
                    </div>
                </div>

                <!-- LIGNE 3 - MASQUÉE INITIALEMENT -->
                <!-- Nominee 13 -->
                <div class="col-lg-2 col-md-4 col-6" data-line="3">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="MME KANE STEPHANIE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Mme KANE STEPHANIE</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">ANTILIA IMMOBILIER</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 14 -->
                <div class="col-lg-2 col-md-4 col-6" data-line="3">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="MADAME YEO ELISABETH"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Mme YEO ELISABETH</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">CISLO</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 15 -->
                <div class="col-lg-2 col-md-4 col-6" data-line="3">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}"
                                alt="MADAME NINTIN YABA SYNTHIA" class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Mme NINTIN YABA SYNTHIA</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">NYCE GROUP</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 16 -->
                <div class="col-lg-2 col-md-4 col-6" data-line="3">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="MADAME ASSY EPSE POLA"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Mme ASSY Epse POLA</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">POLA ASSY ARCHITECTE</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 17 -->
                <div class="col-lg-2 col-md-4 col-6" data-line="3">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="MADAME HONORINE VEHI"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Mme HONORINE VEHI</h4>
                            <p class="nominee-title">PCA</p>
                            <p class="nominee-company">ONG GFM3</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 18 -->
                <div class="col-lg-2 col-md-4 col-6" data-line="3">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="MADAME FLEAN ELODIE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Mme FLEAN ELODIE</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">DIVANA</p>
                        </div>
                    </div>
                </div>

                <!-- LIGNE 4 - MASQUE INITIALEMENT -->
                <!-- Nominee 19 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}"
                                alt="MADAME TAGRO HONKPA JEANNE" class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Mme TAGRO HONKPA JEANNE</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">NADRE INSTITUT</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 20 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="MADAME FATIM KOUYATE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Mme FATIM KOUYATE</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">ONYX AGENCE DE VOYAGE</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 21 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="MADAME SYLVIE FADIKA"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Mme SYLVIE FADIKA</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">SMA BTP</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 22 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="MADAME MARINA NEBOUT"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Mme MARINA NEBOUT</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">OHEL INTERNATIONAL</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 23 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="JEANNE SISSOKO ZEZE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">JEANNE SISSOKO ZEZE</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">REFLET CONSULTING</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 24 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="DANIELLE LIDEGOUE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">DANIELLE LIDEGOUE</h4>
                            <p class="nominee-title">Fondatrice</p>
                            <p class="nominee-company">ONG BLOOM</p>
                        </div>
                    </div>
                </div>

                <!-- LIGNE 5 - MASQUE INITIALEMENT -->
                <!-- Nominee 25 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="Aissatou DIOP"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Mme KEITA KADY</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">VFC</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 26 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="Mariame CISSE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Mme KONNIE TOURE</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">KONNIEVENCE PRODUCTIONS</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 27 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="Ramata SIDIBE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">AMINATA DOSSO Epse DIOMANDE</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">CORAIL IMMOBILIER</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 28 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="Fatouma SANGARE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Mme OLLO CAROLE Pouse AGNERO</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">KRENO CONSULTING</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 29 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="Habibatou BARRY"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Mme DJOMAN ROSALIE DJETOU</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">ROSEBATE (BTP)</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 30 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="Zeynab CONDE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Mme FATOUMATA KONE</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">AGENCE FATY SERVICES</p>
                        </div>
                    </div>
                </div>

                <!-- LIGNE 6 - MASQUE INITIALEMENT -->
                <!-- Nominee 31 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="Aicha BALDE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">PATRICIA ZOUNDI YAO</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">QUICKCASH</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 32 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="Adama KONE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">EDITH YAH BROU</h4>
                            <p class="nominee-title">Cofondatrice</p>
                            <p class="nominee-company">AYANA WEBZINE</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 33 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="Aminata SOW"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">MARIE-ANGELE TOURE</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">AGENCE MAT</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 34 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="Salimata TRAORE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">FLORENCE DOUZOUA NANGA</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">CENTRE FLORENCE SANTE</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 35 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="Coumba GUEYE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">CAROLYNE DASILVA</h4>
                            <p class="nominee-title">Promotrice</p>
                            <p class="nominee-company">DROLES DE FEMMES</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 36 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="Maimouna NDIAYE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">MARIE PAULE ADJE</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">MPA COSMETICS</p>
                        </div>
                    </div>
                </div>

                <!-- LIGNE 7 - MASQUE INITIALEMENT -->
                <!-- Nominee 37 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="Djénaba KABA"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">ASSATA KONE</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">QUEEN HOME CLINIC SPA</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 38 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="Maryam OUEDRAOGO"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">AKOUBA ANGOLA</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">DABALI XPRESS</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 39 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="MARIAM SYLLA"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">MARIAM SYLLA</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">LA PERGOLA SECTEUR RESTAURATION</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 40 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="PASCALE ELVIRE TANH"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">PASCALE ELVIRE TANH</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">TEP EVENTS SECTEUR COMMUNICATION</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 41 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="ANNICK KOFFI"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">ANNICK KOFFI</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">OPTIC BEL VUE</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 42 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}"
                                alt="JOCELYNE AGNERO EPSE SILUE" class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">JOCELYNE AGNERO EPSE SILUE</h4>
                            <p class="nominee-title">PCA</p>
                            <p class="nominee-company">FONDATION JOCELYNE SILUE</p>
                        </div>
                    </div>
                </div>

                <!-- LIGNE 8 - MASQUE INITIALEMENT -->
                <!-- Nominee 43 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="YAO CHANTALE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">YAO CHANTALE</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">YRISSA IMMOBILIER</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 44 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}"
                                alt="KOUAME FLEUR YENI EPSE ABDOU" class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">KOUAME FLEUR YENI EPSE ABDOU</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">A'FY IMMOBILIER</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 45 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="JULIE ESSE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">JULIE ESSE</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">ROSCHESLI CRÉATION</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 46 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}"
                                alt="N'GOM EHOUMAN INGRID RAISSA OULY" class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">N'GOM EHOUMAN INGRID RAISSA OULY</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">CARRE PREMIUM SARL</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 47 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="TIMINI BINKO AMINATA"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">TIMINI BINKO AMINATA</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">BINKO ET ASSOCIES</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 48 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="HAWA SAKHO"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">HAWA SAKHO</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">OKHAMARE</p>
                        </div>
                    </div>
                </div>

                <!-- LIGNE 9 - MASQUE INITIALEMENT -->
                <!-- Nominee 49 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="DOUMBIA FANTA"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">DOUMBIA FANTA</h4>
                            <p class="nominee-title">PRESIDENTE</p>
                            <p class="nominee-company">ONG OFACI</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 50 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="MAIMOUNA SISSOKO"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">MAIMOUNA SISSOKO</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">TULIPE FOOD</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 51 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="LUCIE GBAKAYORO"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">LUCIE GBAKAYORO</h4>
                            <p class="nominee-title">PRESIDENTE</p>
                            <p class="nominee-company">PLATEFORME FEMMES SECTEUR VIVRIER</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 52 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}"
                                alt="OUHONOHI JEANETTE EPSE KIPRE" class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">OUHONOHI JEANETTE EPSE KIPRE</h4>
                            <p class="nominee-title">PCA</p>
                            <p class="nominee-company">COOPERATIVE DJOLO</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 53 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="ARAMATOU COULIBALY"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">ARAMATOU COULIBALY</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">RAMA CEREAL</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 54 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="KOUADIO B CLAUDINE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">KOUADIO B CLAUDINE</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">NEDJE COUTURE</p>
                        </div>
                    </div>
                </div>

                <!-- LIGNE 10 - MASQUE INITIALEMENT -->
                <!-- Nominee 55 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="AIZAN FLORENCE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">AIZAN FLORENCE</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">AGF ENTREPRISES</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 56 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="EDWIGE G HAMMOND"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">EDWIGE G HAMMOND</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">FARM INVEST</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 57 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="OLLIBO ALICE YAGBA"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">OLLIBO ALICE YAGBA</h4>
                            <p class="nominee-title">PCA</p>
                            <p class="nominee-company">SOCOMAP</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 58 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}"
                                alt="ADEBISI ESSIKAN FATOUMATA" class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">ADEBISI ESSIKAN FATOUMATA</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">MAISON DU DECORATEUR</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 59 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="MOULARE CELINE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">MOULARE CELINE</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">CALINE KARITESTHETIC</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 60 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="OUATTARA EDMONDE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">OUATTARA EDMONDE</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">SCOOPS OWEDJO</p>
                        </div>
                    </div>
                </div>

                <!-- LIGNE 11 - MASQUE INITIALEMENT -->
                <!-- Nominee 61 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="LAWSON KOHOUE HUGUETTE"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">LAWSON KOHOUE HUGUETTE</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">SAGES-CI</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 62 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}"
                                alt="BLA PAULINE EPOUSE MINHOUE" class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">BLA PAULINE EPOUSE MINHOUE</h4>
                            <p class="nominee-title">DG</p>
                            <p class="nominee-company">IRIMONTO</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 63 -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/nominee.png') }}" alt="DAGRY YACE MANDY"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">DAGRY YACE MANDY</h4>
                            <p class="nominee-title">PDG</p>
                            <p class="nominee-company">GROUPE BATIDECOR</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 64: Véronique Vonan -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/vero.png') }}" alt="Véronique Vonan"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Véronique Vonan</h4>
                             <p class="nominee-title">PDG</p>
                            <p class="nominee-title">Fondatrice du Placali abouré</p>
                            <p class="nominee-company">&nbsp;</p>
                        </div>
                    </div>
                </div>

                <!-- Nominee 65: Fatim Cissé -->
                <div class="col-lg-2 col-md-4 col-6">
                    <div class="nominee-card">
                        <div class="nominee-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/fatim.png') }}" alt="Fatim Cissé"
                                class="nominee-image">
                        </div>
                        <div class="nominee-info">
                            <h4 class="nominee-name">Fatim Cissé</h4>
                            <p class="nominee-title">PDG</p>
                            <p class="nominee-title">DG DUX Côte d’Ivoire et d’IHS Towers CI</p>
                            <p class="nominee-company">&nbsp;</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ===== SECTION TÉLÉCHARGER LE PROGRAMME ===== -->
    <section class="impact-download-section py-5" style="background: white;">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <img src="{{ asset('assets/images/impact-feminin/image2.jpg') }}" alt="Programme Impact Féminin"
                        class="img-fluid"
                        style="max-width: 300px; border-radius: 15px; box-shadow: 0 10px 30px rgba(0,0,0,0.2);">
                </div>
                <div class="col-lg-6">
                    <div class="download-content text-center text-lg-start">
                        <h2 class="download-title"
                            style="color: var(--impact-primary); font-weight: 700; font-size: 2.5rem;">
                            {{ __('event.download_title') }}</h2>
                        <p class="download-subtitle" style="color: #666; font-size: 1.2rem; margin-bottom: 30px;">
                            {{ __('event.download_subtitle') }}</p>
                        <a href="{{ asset('assets/pdf/Impact_Feminin_2025_Programme.pdf') }}" class="btn-download"
                            style="background: var(--impact-button); color: white; padding: 15px 35px; border-radius: 50px; font-weight: 600; text-decoration: none; display: inline-flex; align-items: center; transition: all 0.3s ease;">
                            <i class="fas fa-download me-2"></i>
                            {{ __('event.download_button') }}
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- ===== SECTION 7 - INTERVENANTS & PANÉLISTES ===== -->
    <section class="impact-speakers-section py-5">
        <div class="container">
            <!-- Titre de la section -->
            <div class="row">
                <div class="col-12">
                    <div class="text-center mb-5">
                        <h2 class="speakers-main-title" data-aos="fade-up" data-aos-duration="1000">
                            {{ __('event.speakers_title') }}
                        </h2>
                    </div>
                </div>
            </div>

            <!-- Cartes des intervenants -->
            <div class="row g-4 justify-content-center mb-5">



                <!-- Modérateur : ALI Diarassouba -->
                <div class="col-lg-3 col-md-6">
                    <div class="speaker-card" data-aos="fade-up" data-aos-delay="200">
                        <div class="speaker-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/ali.png') }}" alt="ALI Diarassouba"
                                class="speaker-image">
                        </div>
                        <div class="speaker-info">
                            <h4 class="speaker-name">ALI Diarassouba</h4>
                            <p class="speaker-title">Modérateur</p>
                            <p class="speaker-company">Journaliste / Directeur de l’information NCI</p>
                        </div>
                    </div>
                </div>

                <!-- Modératrice : Marième TOURÉ -->
                <div class="col-lg-3 col-md-6">
                    <div class="speaker-card" data-aos="fade-up" data-aos-delay="150">
                        <div class="speaker-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/marieme.png') }}" alt="Marième TOURÉ"
                                class="speaker-image">
                        </div>
                        <div class="speaker-info">
                            <h4 class="speaker-name">Marième TOURÉ</h4>
                            <p class="speaker-title">Modératrice</p>
                            <p class="speaker-company">Journaliste / Animatrice RTI</p>
                        </div>
                    </div>
                </div>

                <!-- Panéliste : Dr. Anuraag Guglaani -->
                <div class="col-lg-3 col-md-6">
                    <div class="speaker-card" data-aos="fade-up" data-aos-delay="250">
                        <div class="speaker-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/anuraag.png') }}"
                                alt="Dr. Anuraag Guglaani" class="speaker-image">
                        </div>
                        <div class="speaker-info">
                            <h4 class="speaker-name">Dr. Anuraag Guglaani</h4>
                            <p class="speaker-title">Board Member</p>
                            <p class="speaker-company">Family business groups investisseur</p>
                        </div>
                    </div>
                </div>

                <!-- Panéliste : Augustin Dago SERIKPA -->
                <div class="col-lg-3 col-md-6">
                    <div class="speaker-card" data-aos="fade-up" data-aos-delay="300">
                        <div class="speaker-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/augustin.png') }}" alt="Augustin Dago SERIKPA"
                                class="speaker-image">
                        </div>
                        <div class="speaker-info">
                            <h4 class="speaker-name">Augustin Dago SERIKPA</h4>
                            <p class="speaker-title">Vice President FIPME</p>
                            <p class="speaker-company">&nbsp;</p>
                        </div>
                    </div>
                </div>

                <!-- Panéliste : Agnès KRAIDY -->
                <div class="col-lg-3 col-md-6">
                    <div class="speaker-card" data-aos="fade-up" data-aos-delay="350">
                        <div class="speaker-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/krady.png') }}" alt="Agnès KRAIDY"
                                class="speaker-image">
                        </div>
                        <div class="speaker-info">
                            <h4 class="speaker-name">Agnès KRAIDY</h4>
                            <p class="speaker-title">Presidente AIP et REFJPCI</p>
                            <p class="speaker-company">Ex rédactrice en chef du magazine Femme d'Afrique et Frat Mat</p>
                        </div>
                    </div>
                </div>

                <!-- Panéliste : Euphrasie Kouassi Yao -->
                <div class="col-lg-3 col-md-6">
                    <div class="speaker-card" data-aos="fade-up" data-aos-delay="400">
                        <div class="speaker-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/kouassi.png') }}" alt="Euphrasie Kouassi Yao"
                                class="speaker-image">
                        </div>
                        <div class="speaker-info">
                            <h4 class="speaker-name">Euphrasie Kouassi Yao</h4>
                            <p class="speaker-title">Conseillère spéciale du président et du premier ministre chargée du
                                genre</p>
                            <p class="speaker-company">&nbsp;</p>
                        </div>
                    </div>
                </div>

                <!-- Panéliste : Patricia Zoundi Yao -->
                <div class="col-lg-3 col-md-6">
                    <div class="speaker-card" data-aos="fade-up" data-aos-delay="450">
                        <div class="speaker-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/patricia.png') }}" alt="Patricia Zoundi Yao"
                                class="speaker-image">
                        </div>
                        <div class="speaker-info">
                            <h4 class="speaker-name">Patricia Zoundi Yao</h4>
                            <p class="speaker-title">fondatrice de Quickcash (fintech) et Canaan Land (agribusiness)</p>
                            <p class="speaker-company">&nbsp;</p>
                        </div>
                    </div>
                </div>

                <!-- Panéliste : Bénédicte Janine Kacou Diagou -->
                <div class="col-lg-3 col-md-6">
                    <div class="speaker-card" data-aos="fade-up" data-aos-delay="500">
                        <div class="speaker-image-container">
                            <img src="{{ asset('assets/images/impact-feminin/benedicte.png') }}"
                                alt="Bénédicte Janine Kacou Diagou" class="speaker-image">
                        </div>
                        <div class="speaker-info">
                            <h4 class="speaker-name">Bénédicte Janine Kacou Diagou</h4>
                            <p class="speaker-title">PCA NSA GROUP</p>
                            <p class="speaker-company">&nbsp;</p>
                        </div>
                    </div>
                </div>


                
            </div>
        <!-- Bouton de réservation -->
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <a href="{{ route('reservation.create') }}" class="impact-speakers-btn" data-aos="fade-up"
                        data-aos-delay="500">
                        {{ __('event.reserve_button') }}
                    </a>
                </div>
            </div>
        </div>
        </div>
    </div>


        </div>
    </section>



    <!-- ===== SECTION 8 - ENTREPRISES NOMINEES ===== -->
    <section class="impact-partners-section py-5">
        <div class="container">
            <!-- Titre de la section -->
            <div class="row">
                <div class="col-12">
                    <div class="text-center mb-5">
                        <h2 class="partners-main-title" data-aos="fade-up" data-aos-duration="1000">
                            {{ __('event.partners_title') }}
                        </h2>
                    </div>
                </div>
            </div>

            <!-- Logos des entreprises nominees - Système statique -->
            <div class="companies-logos-grid row justify-content-center">
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/afy.png') }}"
                                alt="A'FY Immobilier" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">A'FY Immobilier</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/agf.png') }}"
                                alt="AGF Entreprises" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">AGF Entreprises</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/antilia.png') }}"
                                alt="Antilia Immobilier" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Antilia Immobilier</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/ayana.png') }}"
                                alt="Ayana Webzine" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Ayana Webzine</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/batidecor.png') }}"
                                alt="Groupe Batidecor" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Groupe Batidecor</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/binko.png') }}"
                                alt="Binko et Associés" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Binko et Associés</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/caline.png') }}"
                                alt="Caaaline Karitesthetic" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Caaaline Karitesthetic</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/carre.png') }}"
                                alt="Carré Premium SARL" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Carré Premium SARL</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/cislo.png') }}" alt="CISLO"
                                class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">CISLO</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/corail.png') }}"
                                alt="Corail Immobilier" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Corail Immobilier</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/dbalixpress.png') }}"
                                alt="Dabali Xpress" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Dabali Xpress</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/divina.png') }}" alt="Divana"
                                class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Divana</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/djolo.png') }}"
                                alt="Coopérative Djolo" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Coopérative Djolo</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/etd.png') }}" alt="ETD"
                                class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">ETD</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/farm.png') }}"
                                alt="Farm Invest" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Farm Invest</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/faty.png') }}"
                                alt="Agence Faty Services" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Agence Faty Services</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/florence.png') }}"
                                alt="Centre Florence" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Centre Florence</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/gfm3.png') }}" alt="ONG GFM3"
                                class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">ONG GFM3</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/isis.png') }}"
                                alt="ISIS Agence" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">ISIS Agence</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/konnievenence.png') }}"
                                alt="Konnievence Productions" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Konnievence Productions</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/kovibat.png') }}" alt="Kovibat"
                                class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Kovibat</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/kreno.png') }}"
                                alt="Kreno Consulting" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Kreno Consulting</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/lys.png') }}"
                                alt="Lys de Marie" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Lys de Marie</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/maisondeco.png') }}"
                                alt="Maison du Décorateur" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Maison du Décorateur</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/mat.png') }}" alt="Agence MAT"
                                class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Agence MAT</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/mpa.png') }}"
                                alt="MPA Cosmetics" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">MPA Cosmetics</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/nadre.png') }}"
                                alt="Nadre Institut" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Nadre Institut</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/nedje.png') }}"
                                alt="Nedje Couture" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Nedje Couture</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/nycegroupe.png') }}"
                                alt="NYCE Groupe" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">NYCE Groupe</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/ofaci.png') }}" alt="ONG OFACI"
                                class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">ONG OFACI</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/ohel.png') }}"
                                alt="Ohel International" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Ohel International</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/okhamare.png') }}"
                                alt="Okhamar" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Okhamar</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/ongbloom.png') }}"
                                alt="ONG Bloom" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">ONG Bloom</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/onyx.png') }}"
                                alt="Onyx Agence" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Onyx Agence</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/opticbelvue.png') }}"
                                alt="Optic Bel Vue" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Optic Bel Vue</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/pfsvci.png') }}" alt="PFSVCI"
                                class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">PFSVCI</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/quickcash.png') }}"
                                alt="QuickCash" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">QuickCash</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/rama.png') }}"
                                alt="Rama Cereal" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Rama Cereal</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/reflet.png') }}"
                                alt="Reflet Consulting" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Reflet Consulting</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/rosebate.png') }}"
                                alt="Rosebate" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Rosebate</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/roseline.png') }}"
                                alt="Roschesli Création" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Roschesli Création</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/sage.png') }}" alt="SAGES-CI"
                                class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">SAGES-CI</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/shadai.png') }}"
                                alt="El Shaddai Construction" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">El Shaddai Construction</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/sma.png') }}" alt="SMA BTP"
                                class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">SMA BTP</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/socomap.png') }}" alt="SOCOMAP"
                                class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">SOCOMAP</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/tepevent.png') }}"
                                alt="TEP Events" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">TEP Events</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/tulipe.png') }}"
                                alt="Tulipe Food" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Tulipe Food</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/vfc.png') }}" alt="VFC"
                                class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">VFC</span></div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-3 col-sm-4 col-6 mb-4">
                    <div class="company-logo-card">
                        <div class="logo-container">
                            <img src="{{ asset('assets/images/impact-feminin/logo_entreprise/yrissa.png') }}"
                                alt="Yrissa Immobilier" class="company-logo-img" loading="lazy">
                            <div class="logo-overlay"><span class="company-name">Yrissa Immobilier</span></div>
                        </div>
                    </div>
                </div>

                
            </div>
        </div>
    </section>

    <!-- Script pour les animations au scroll -->
    <script>
        document.addEventListener('DOMContentLoaded', function () {
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