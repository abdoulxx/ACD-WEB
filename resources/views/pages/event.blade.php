
@extends("layouts.app")
@section('title', 'Impact Féminin - Événement en cours')
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
                <h1 class="impact-main-title" data-aos="fade-up" data-aos-duration="1000">IMPACT FÉMININ 2025</h1>
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
                        Célébrons le leadership, la vision et la réussite des femmes entrepreneures
                    </h2>
                    
                    <p class="impact-description" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="400">
                        Le 19 novembre, nous célébrons le courage, la vision et l'audace des femmes entrepreneures qui transforment l'Afrique et le monde.<br>
                        Votre histoire mérite d'être entendue.
                    </p>
                    
                    <div class="mt-4">
                        <a href="#inscription" class="impact-candidate-btn">
                            Je candidate
                        </a>
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
                    Participez à une série exclusive de rencontres internationales réunissant investisseurs, chefs d'entreprises, porteurs de projets, institutions publiques et partenaires étrangers autour d'opportunités stratégiques multisectorielles.
                </p>
                
                <div class="mt-4" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <a href="#inscription" class="impact-cta-btn">
                        Je candidate
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
                <h2 class="impact-why-title" data-aos="fade-up" data-aos-duration="1000">Pourquoi Impact Féminin ?</h2>
                <p class="impact-why-description" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    Impact Féminin est une célébration annuelle qui met en lumière<br>
                    les femmes entrepreneures ayant marqué leur secteur par leur détermination, leur vision et leur résilience
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
                <h2 class="impact-awards-title" data-aos="fade-up" data-aos-duration="1000">Prix d'Impact Féminin</h2>
                <p class="impact-awards-subtitle" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    Mettre en lumière l'audace, la résilience et la vision des femmes qui non seulement bâtissent l'économie, mais génèrent également un impact ESG significatif sur la communauté après la création de leur entreprise, dont la durée d'existence est comprise entre 3 et 10 ans et plus.
                </p>
            </div>
        </div>
        
        <!-- Les trois prix -->
        <div class="row g-4 mb-5">
            <!-- Prix Éclosion Féminin -->
            <div class="col-lg-4 col-md-12">
                <div class="impact-award-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="100">
                    <div class="award-header">
                        <h3 class="award-title">Prix Éclosion Féminin</h3>
                    </div>
                    <div class="award-content">
                        <p class="award-description">
                            Ce prix met en lumière les femmes entrepreneures qui ont lancé une entreprise jeune et prometteuse
                        </p>
                        
                        <div class="award-section">
                            <h4 class="section-title">●Conditions</h4>
                            <ul class="conditions-list">
                                <li>- Durée d'existence : 3 à 5 ans</li>
                                <li>- Nombre minimum d'employés : 2</li>
                            </ul>
                        </div>
                        
                        <div class="award-section">
                            <h4 class="section-title">●Critères valorisés</h4>
                            <ul class="criteria-list">
                                <li>- Une croissance régulière depuis la création</li>
                                <li>- La première structuration réussie de l'équipe</li>
                                <li>- L'établissement de partenariats ou de clients significatifs</li>
                                <li>- La capacité à innover ou à se différencier sur le marché</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Prix Résilience Féminin -->
            <div class="col-lg-4 col-md-12">
                <div class="impact-award-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="300">
                    <div class="award-header">
                        <h3 class="award-title">Prix Résilience Féminin</h3>
                    </div>
                    <div class="award-content">
                        <p class="award-description">
                            Ce prix honore les femmes dirigeantes qui ont traversé des étapes critiques du développement et de la consolidation. Il célèbre leur persévérance, leur stabilité et leur adaptabilité dans la construction d'une base solide pour une croissance durable.
                        </p>
                        
                        <div class="award-section">
                            <h4 class="section-title">●Conditions</h4>
                            <ul class="conditions-list">
                                <li>- Durée d'existence : 6 à 9 ans</li>
                                <li>- Nombre minimum d'employés : 5</li>
                            </ul>
                        </div>
                        
                        <div class="award-section">
                            <h4 class="section-title">●Critères valorisés</h4>
                            <ul class="criteria-list">
                                <li>- Une gestion relationnelle saine</li>
                                <li>- Le développement de l'équipe et la structuration interne</li>
                                <li>- La capacité à surmonter les crises ou à pivoter avec succès</li>
                                <li>- Des impacts positifs mesurables sur le marché ou la communauté</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Prix Visionnaire Féminin -->
            <div class="col-lg-4 col-md-12">
                <div class="impact-award-card" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="500">
                    <div class="award-header">
                        <h3 class="award-title">Prix Visionnaire Féminin</h3>
                    </div>
                    <div class="award-content">
                        <p class="award-description">
                            Ce prix récompense les femmes entrepreneures qui ont bâti une entreprise pérenne, influente et résonnent parmi vers l'avenir avec une vision stratégique, l'impact sociétal et l'héritage entrepreneurial des dirigeantes les plus expérimentées
                        </p>
                        
                        <div class="award-section">
                            <h4 class="section-title">●Conditions</h4>
                            <ul class="conditions-list">
                                <li>- Durée d'existence : 10 ans et plus</li>
                                <li>- Nombre minimum d'employés : 6 et plus</li>
                            </ul>
                        </div>
                        
                        <div class="award-section">
                            <h4 class="section-title">●Critères valorisés</h4>
                            <ul class="criteria-list">
                                <li>- La pérennité de l'entreprise sur plus d'une décennie</li>
                                <li>- Un leadership reconnu dans le secteur</li>
                                <li>- La création d'emplois et une contribution significative à l'économie</li>
                                <li>- L'engagement avéré dans l'innovation, le développement durable ou le mentorat</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bouton candidature -->
        <div class="row">
            <div class="col-12 text-center">
                <a href="#inscription" class="impact-awards-btn">
                    Je candidate
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
                    <h2 class="themes-main-title impact-slide-up" data-aos="fade-up" data-aos-duration="1000">Thématiques Abordées</h2>
                </div>
            </div>
        </div>
        
        <!-- Cartes thématiques -->
        <div class="row g-4 justify-content-center">
            <!-- Thématique 1 : Entrepreneuriat Féminin -->
            <div class="col-lg-5 col-md-6">
                <div class="theme-card impact-slide-up" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="200">
                    <img src="{{ asset('assets/images/impact-feminin/image2.png') }}" alt="Entrepreneuriat Féminin" class="theme-image">
                    <div class="theme-overlay">
                        <div class="theme-content">
                            <h3 class="theme-title">L'Entrepreneuriat Féminin comme Levier de Transformation Sociale</h3>
                            <p class="theme-description">
                                Découvrez comment les femmes chefs d'entreprise contribuent activement à la réduction des inégalités et à l'autonomisation des communautés.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Thématique 2 : Leadership Féminin -->
            <div class="col-lg-5 col-md-6">
                <div class="theme-card impact-slide-up" data-aos="zoom-in" data-aos-duration="1000" data-aos-delay="400">
                    <img src="{{ asset('assets/images/impact-feminin/image3.png') }}" alt="Leadership Féminin" class="theme-image">
                    <div class="theme-overlay">
                        <div class="theme-content">
                            <h3 class="theme-title">Leadership Féminin : Audace, Éthique et Durabilité</h3>
                            <p class="theme-description">
                                Explorez les styles de leadership uniques que les femmes mettent en œuvre pour bâtir un monde plus équitable et résilient.
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
                    <a href="#" class="impact-reserve-btn impact-slide-up" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="600">
                        Je réserve ma place
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
                    <h2 class="candidature-main-title impact-slide-up" data-aos="fade-up" data-aos-duration="1000">Appel à la Candidature</h2>
                    <p class="candidature-subtitle impact-slide-up" data-aos="fade-up" data-aos-delay="300">
                        Que vous soyez femme entrepreneure, partenaire engagé ou marque visionnaire, il existe une place pour vous dans cet événement unique.<br>
                        Faites partie de celles et ceux qui écrivent l'histoire.
                    </p>
                </div>
            </div>
        </div>
        
        <!-- Cartes de candidature -->
        <div class="row g-4 justify-content-center mb-5">
            <!-- Devenir Participant -->
            <div class="col-lg-4 col-md-6">
                <div class="candidature-card impact-slide-up" data-aos="zoom-in" data-aos-delay="100">
                    <div class="candidature-header">
                        <h3 class="candidature-card-title">Devenir Participant</h3>
                    </div>
                    <div class="candidature-content">
                        <p class="candidature-question">
                            Vous êtes une femme entrepreneure et vous souhaitez partager votre parcours ?
                        </p>
                        <p class="candidature-description">
                            Candidatez pour l'une de nos 3 distinctions et donnez à votre histoire la visibilité qu'elle mérite.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Devenir Sponsor -->
            <div class="col-lg-4 col-md-6">
                <div class="candidature-card impact-slide-up" data-aos="zoom-in" data-aos-delay="300">
                    <div class="candidature-header">
                        <h3 class="candidature-card-title">Devenir Sponsor</h3>
                    </div>
                    <div class="candidature-content">
                        <p class="candidature-question">
                            Associez votre marque à l'excellence féminine.
                        </p>
                        <p class="candidature-description">
                            En tant que sponsor, vous soutenez l'autonomisation des femmes tout en offrant à votre marque une visibilité prestigieuse auprès d'un public influent et engagé.
                        </p>
                    </div>
                </div>
            </div>
            
            <!-- Devenir Exposant -->
            <div class="col-lg-4 col-md-6">
                <div class="candidature-card impact-slide-up" data-aos="zoom-in" data-aos-delay="500">
                    <div class="candidature-header">
                        <h3 class="candidature-card-title">Devenir Exposant</h3>
                    </div>
                    <div class="candidature-content">
                        <p class="candidature-question">
                            Exposez vos produits et innovations devant un public qualifié.
                        </p>
                        <p class="candidature-description">
                            Profitez de notre espace d'exposition pour présenter vos produits ou services, rencontrer des prospects de qualité et nouer des partenariats stratégiques.
                        </p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bouton de réservation principal -->
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <a href="#" class="impact-candidature-btn impact-slide-up">
                        Je réserve ma place
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
                    <h2 class="programme-main-title impact-slide-up" data-aos="fade-up" data-aos-duration="1000">PROGRAMME OFFICIEL</h2>
                </div>
            </div>
        </div>
        
        <!-- Grille du programme -->
        <div class="row g-4">
            <!-- Accueil & Installation -->
            <div class="col-lg-6 col-md-6">
                <div class="programme-card impact-slide-up" data-aos="fade-left" data-aos-delay="100">
                    <div class="programme-header">
                        <h3 class="programme-title">Accueil & Installation</h3>
                        <p class="programme-subtitle">Enregistrement et distribution des badges.</p>
                        <span class="programme-time">19h00 - 19h30</span>
                    </div>
                </div>
            </div>
            
            <!-- Mot de bienvenue -->
            <div class="col-lg-6 col-md-6">
                <div class="programme-card impact-slide-up" data-aos="fade-right" data-aos-delay="200">
                    <div class="programme-header">
                        <h3 class="programme-title">Mot de bienvenue</h3>
                        <p class="programme-subtitle">Ouverture officielle de la cérémonie.</p>
                        <span class="programme-time">19h30 - 20h00</span>
                    </div>
                </div>
            </div>
            
            <!-- Panel -->
            <div class="col-lg-6 col-md-6">
                <div class="programme-card impact-slide-up" data-aos="fade-left" data-aos-delay="300">
                    <div class="programme-header">
                        <h3 class="programme-title">Panel</h3>
                        <p class="programme-subtitle">« L'Entrepreneuriat féminin au service de l'impact social ».</p>
                        <span class="programme-time">20h00 - 20h30</span>
                    </div>
                    <div class="programme-details">
                        <p>Témoignages inspirants de femmes qui transforment des vies grâce à leurs entreprises. Participation d'entrepreneuses représentantes d'ONG, incubateurs. Modératrice : journaliste ou coach expérimentée.</p>
                    </div>
                </div>
            </div>
            
            <!-- Atelier Interactif -->
            <div class="col-lg-6 col-md-6">
                <div class="programme-card impact-slide-up" data-aos="fade-right" data-aos-delay="400">
                    <div class="programme-header">
                        <h3 class="programme-title">Atelier Interactif</h3>
                        <p class="programme-subtitle">« Structurer son entreprise à impact ».</p>
                        <span class="programme-time">20h30 - 21h00</span>
                    </div>
                    <div class="programme-details">
                        <p>Session pratique sur les modèles économiques durables et les indicateurs d'impact. Animé par : un consultant ou expert en entrepreneuriat social. Structure : exercices interactifs d'impact.</p>
                    </div>
                </div>
            </div>
            
            <!-- Remise des Prix -->
            <div class="col-lg-6 col-md-6">
                <div class="programme-card impact-slide-up" data-aos="fade-left" data-aos-delay="500">
                    <div class="programme-header">
                        <h3 class="programme-title">Remise des Prix</h3>
                        <p class="programme-subtitle">Cérémonie de remise des prix d'Impact Féminin.</p>
                        <span class="programme-time">21h00 - 21h40</span>
                    </div>
                    <div class="programme-details">
                        <p>Présentation des 3 catégories de prix :<br>
                        Prix Éclosion Féminin (entreprises de 3 à 5 ans)<br>
                        Prix Résilience Féminin (entreprises de 6 à 9 ans)<br>
                        Prix Visionnaire Féminin (entreprises de 10 ans et plus)</p>
                        
                        <p>Remise officielle des trophées et certificats, Séance photo de groupe et remerciements.</p>
                    </div>
                </div>
            </div>
            
            <!-- Cocktail de Clôture -->
            <div class="col-lg-6 col-md-6">
                <div class="programme-card impact-slide-up" data-aos="fade-right" data-aos-delay="600">
                    <div class="programme-header">
                        <h3 class="programme-title">Cocktail de Clôture</h3>
                        <p class="programme-subtitle">Moment privilégié pour les échanges, le networking, les photos et plus encore.</p>
                        <span class="programme-time">21h40 - 22h30</span>
                    </div>
                    <div class="programme-details">
                        <p>Inclut également des interviews presse.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bouton de réservation -->
        <div class="row">
            <div class="col-12">
                <div class="text-center mt-5">
                    <a href="#" class="impact-programme-btn impact-slide-up">
                        Je réserve ma place
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
                    <h2 class="speakers-main-title impact-slide-up" data-aos="fade-up" data-aos-duration="1000">Intervenants & Panélistes</h2>
                </div>
            </div>
        </div>
        
        <!-- Cartes des intervenants -->
        <div class="row g-4 justify-content-center mb-5">
            <!-- Intervenant 1 -->
            <div class="col-lg-3 col-md-6">
                <div class="speaker-card impact-slide-up" data-aos="fade-up" data-aos-delay="100">
                    <div class="speaker-image-container">
                        <img src="{{ asset('assets/images/impact-feminin/speaker.jpg') }}" alt="Intervenante 1" class="speaker-image">
                    </div>
                    <div class="speaker-info">
                        <h4 class="speaker-name">Nom de l'Intervenante</h4>
                        <p class="speaker-title">Titre / Fonction</p>
                        <p class="speaker-company">Entreprise</p>
                    </div>
                </div>
            </div>
            
            <!-- Intervenant 2 -->
            <div class="col-lg-3 col-md-6">
                <div class="speaker-card impact-slide-up" data-aos="fade-up" data-aos-delay="200">
                    <div class="speaker-image-container">
                        <img src="{{ asset('assets/images/impact-feminin/speaker.jpg') }}" alt="Intervenante 2" class="speaker-image">
                    </div>
                    <div class="speaker-info">
                        <h4 class="speaker-name">Nom de l'Intervenante</h4>
                        <p class="speaker-title">Titre / Fonction</p>
                        <p class="speaker-company">Entreprise</p>
                    </div>
                </div>
            </div>
            
            <!-- Intervenant 3 -->
            <div class="col-lg-3 col-md-6">
                <div class="speaker-card impact-slide-up" data-aos="fade-up" data-aos-delay="300">
                    <div class="speaker-image-container">
                        <img src="{{ asset('assets/images/impact-feminin/speaker.jpg') }}" alt="Intervenante 3" class="speaker-image">
                    </div>
                    <div class="speaker-info">
                        <h4 class="speaker-name">Nom de l'Intervenante</h4>
                        <p class="speaker-title">Titre / Fonction</p>
                        <p class="speaker-company">Entreprise</p>
                    </div>
                </div>
            </div>
            
            <!-- Intervenant 4 -->
            <div class="col-lg-3 col-md-6">
                <div class="speaker-card impact-slide-up" data-aos="fade-up" data-aos-delay="400">
                    <div class="speaker-image-container">
                        <img src="{{ asset('assets/images/impact-feminin/speaker.jpg') }}" alt="Intervenante 4" class="speaker-image">
                    </div>
                    <div class="speaker-info">
                        <h4 class="speaker-name">Nom de l'Intervenante</h4>
                        <p class="speaker-title">Titre / Fonction</p>
                        <p class="speaker-company">Entreprise</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Bouton de réservation -->
        <div class="row">
            <div class="col-12">
                <div class="text-center">
                    <a href="#" class="impact-speakers-btn impact-slide-up" data-aos="fade-up" data-aos-delay="500">
                        Je réserve ma place
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
                    <h2 class="partners-main-title impact-slide-up" data-aos="fade-up" data-aos-duration="1000">Partenaires</h2>
                </div>
            </div>
        </div>
        
        <!-- Logos des partenaires -->
        <div class="row justify-content-center">
            <!-- Première rangée -->
            <div class="col-lg-2 col-md-3 col-4 mb-4">
                <div class="partner-logo impact-slide-up" data-aos="zoom-in" data-aos-delay="100">
                    <img src="{{ asset('assets/images/impact-feminin/logo.png') }}" alt="Partenaire" class="partner-image">
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4 mb-4">
                <div class="partner-logo impact-slide-up" data-aos="zoom-in" data-aos-delay="200">
                    <img src="{{ asset('assets/images/impact-feminin/logo.png') }}" alt="Partenaire" class="partner-image">
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4 mb-4">
                <div class="partner-logo impact-slide-up" data-aos="zoom-in" data-aos-delay="300">
                    <img src="{{ asset('assets/images/impact-feminin/logo.png') }}" alt="Partenaire" class="partner-image">
                </div>
            </div>
            
            <!-- Deuxième rangée -->
            <div class="col-lg-2 col-md-3 col-4 mb-4">
                <div class="partner-logo impact-slide-up" data-aos="zoom-in" data-aos-delay="400">
                    <img src="{{ asset('assets/images/impact-feminin/logo.png') }}" alt="Partenaire" class="partner-image">
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4 mb-4">
                <div class="partner-logo impact-slide-up" data-aos="zoom-in" data-aos-delay="500">
                    <img src="{{ asset('assets/images/impact-feminin/logo.png') }}" alt="Partenaire" class="partner-image">
                </div>
            </div>
            <div class="col-lg-2 col-md-3 col-4 mb-4">
                <div class="partner-logo impact-slide-up" data-aos="zoom-in" data-aos-delay="600">
                    <img src="{{ asset('assets/images/impact-feminin/logo.png') }}" alt="Partenaire" class="partner-image">
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Script pour les animations au scroll -->
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Animation au scroll
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate__animated', 'animate__fadeInUp');
            }
        });
    }, observerOptions);

    // Observer tous les éléments avec animation
    document.querySelectorAll('.impact-slide-up, .impact-slide-right').forEach(el => {
        observer.observe(el);
    });

    // Smooth scroll pour les liens
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
    
    // Initialiser AOS
    AOS.init({
        duration: 800,
        once: false,
        offset: 20,
        easing: 'ease-out-cubic',
        disable: false,
        mirror: true
    });

    // Debug AOS - optionnel
    console.log('AOS éléments détectés:', document.querySelectorAll('[data-aos]').length);
});
</script>

@endsection
