@extends("layouts.app")
@section('title', __('candidature.title'))
@section("content")



<style>
  .openTabby--nav {
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    gap: 15px; /* Distance entre les boutons */
    margin-bottom: 15px;
    padding-top: 15px;
  }
  
  .openTabby--nav ul {
    padding: 0;
    margin: 0;
    display: flex;
    flex-wrap: wrap;
    list-style: none;
    gap: 15px; /* Distance entre les <li> */
  }
  
  .openTabby--nav li {
    padding: 10px 18px; /* Bouton plus large */
    border-radius: 15px; /* Angle à 15px */
    background-color: #f0f0f0;
    color: #333;
    font-size: 15px;
    font-weight: 600;
    cursor: pointer;
    transition: all 0.3s ease;
    border: 1px solid transparent;
    min-width: 200px;
    text-align: center;
  }
  
  .openTabby--nav li:hover {
    background-color: #e4e4e4;
  }
  
  .openTabby--nav li.active {
    background-color: #FF6A5A;
    color: #fff;
    border-color: #FF6A5A;
    box-shadow: 0 4px 10px rgba(255, 106, 90, 0.3);
  }
  

/* Slide */
.openTabby--slide {
  padding: 40px 20px;
  animation: fadeInUp 0.6s ease;
}

/* Animation douce */
@keyframes fadeInUp {
  from {
    opacity: 0;
    transform: translateY(20px);
  } to {
    opacity: 1;
    transform: translateY(0);
  }
}

/* Image responsive */
.respoimg {
  width: 100%;
  height: auto;
  border-radius: 12px;
  box-shadow: 0 8px 24px rgba(0, 0, 0, 0.08);
}

/* Titres harmonieux */
.playfair {
  font-family: 'Playfair Display', serif;
}

.text-dark {
  color: #111;
}

.text-muted {
  color: #666;
}

.padding-left3, .padding-right3 {
  padding: 0 25px;
}

h3 {
  font-size: 24px;
  line-height: 1.4;
}

p {
  font-size: 15px;
  line-height: 1.8;
  margin-bottom: 0;
}


.horizontal-scroll {
  display: flex;
  overflow-x: auto;
  gap: 1rem;
  padding-bottom: 1rem;
}

.card-custom{
  flex: 0 0 250px; /* largeur fixe */
  background: #f9f9f9;
  border-radius: 8px;
  padding: 1rem;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  text-align: center;
  transition: transform 0.3s;
}

.col-md-4{
  flex: 0 0 250px; /* largeur fixe */
  background: #f9f9f9;
  border-radius: 8px;
  padding: 2rem;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  text-align: center;
  transition: transform 0.3s;
}


.col-md-3{
  flex: 0 0 250px; /* largeur fixe */

  border-radius: 8px;
  padding: 2rem;
  box-shadow: 0 4px 10px rgba(0,0,0,0.1);
  text-align: center;
  transition: transform 0.3s;
}


.card-custom:hover {
  transform: translateY(-5px);
}

.card-img {
  width: 100%;
  height: 150px;
  object-fit: cover;
  border-radius: 4px;
  margin-bottom: 1rem;
}

.card-title {
  font-weight: bold;
  margin-bottom: 0.5rem;
}

.card-desc {
  font-size: 0.9rem;
  line-height: 1.4;
}


/* Boutons de navigation */
.carousel-wrapper {
  position: relative;
}

.horizontal-carousel {
  display: flex;
  overflow-x: auto;
  scroll-snap-type: x mandatory;
  scroll-behavior: auto;
  gap: 1.5rem;
  padding: 1rem 0;
}

.card-custom {
  flex: 0 0 250px;
  scroll-snap-align: start;
  background: #fff;
  border-radius: 8px;
  padding: 1rem;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
  text-align: center;
  box-sizing: border-box;
}

.card-img {
  width: 100%;
  height: 150px;
  object-fit: cover;
  border-radius: 4px;
  margin-bottom: 1rem;
}

.scroll-btn {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(255, 255, 255, 0.9);
  color: #000;
  border: 2px solid #ccc;
  font-size: 32px;
  padding: 12px 16px;
  cursor: pointer;
  z-index: 1000;
  border-radius: 50%;
  box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
  transition: all 0.3s ease;
}

.scroll-btn:hover {
  background: #ff6a5a;
  color: #fff;
  border-color: #ff6a5a;
}

.scroll-btn.left {
  left: 0;
}

.scroll-btn.right {
  right: 0;
}




</style>



<!-- En-tête de la page -->
<section class="background-image110 padding-top-bottom3 text-center">
  <div class="container">
    <h2 class="big2 white font-weight8">{{ __('candidature.title') }}</h2>
  </div>
</section>

<div class="clearfix"></div>
<br/>

<section>
  <div class="container">
    <div class="row nopadding">
      <div class="col-md-12 bg-color-white nopadding marbo-resp13">
        <div class="openTabby sty3" id="tabs1">
          <div class="openTabby--slidesContainer">

            <!-- Onglet 1 : Catégories -->
            <section id="1" data-tab-name="{{ __('candidature.categories.title') }}" class="openTabby--slide py-5">
              <div class="container">
                <h3 class="font-weight7 text-uppercase text-dark mb-4">
                  {{ __('candidature.categories.excellence_sectorielle') }}
                </h3>
            
                <div class="carousel-wrapper">
                  <!-- Boutons navigation à l'extrémité -->
                  <button class="scroll-btn left" onclick="scrollCards(-1)">&#10094;</button>
                  <button class="scroll-btn right" onclick="scrollCards(1)">&#10095;</button>
            
                  <div class="horizontal-carousel" id="cardCarousel">
                    @php
                      $categories = [
                        ['titre' => __('candidature.cards.excellence_agro'), 'image' => "categories/2.jpg", 'description' => __('candidature.cards.excellence_agro_desc')],
                        ['titre' => __('candidature.cards.excellence_manufacturiere'), 'image' => "categories/2.jpg", 'description' => __('candidature.cards.excellence_manufacturiere_desc')],
                        ['titre' => __('candidature.cards.excellence_bancaire'), 'image' => "categories/3.jpg", 'description' => __('candidature.cards.excellence_bancaire_desc')],
                        ['titre' => __('candidature.cards.excellence_medicale'), 'image' => "categories/4.jpg", 'description' => __('candidature.cards.excellence_medicale_desc')],
                        ['titre' => __('candidature.cards.innovation_tech'), 'image' => "categories/5.jpg", 'description' => __('candidature.cards.innovation_tech_desc')],
                        ['titre' => __('candidature.cards.excellence_infrastructure'), 'image' => "categories/6.jpg", 'description' => __('candidature.cards.excellence_infrastructure_desc')],
                        ['titre' => __('candidature.cards.excellence_miniere'), 'image' => "categories/7.jpg", 'description' => __('candidature.cards.excellence_miniere_desc')],
                        ['titre' => __('candidature.cards.talents_nationaux'), 'image' => "categories/8.jpg", 'description' => __('candidature.cards.talents_nationaux_desc')],
                      ];
                    @endphp
            
                    @foreach ($categories as $cat)
                      <div class="card-custom">
                        <img src="{{ asset('assets/images/' . $cat['image']) }}" alt="{{ $cat['titre'] }}" class="card-img">
                        <h5 class="font-weight5 margin-top2 margin-bottom">{{ $cat['titre'] }}</h5>
                        <p class="margin-bottom1" style="line-height: 20px;">{{ $cat['description'] }}</p>
                        <br/>
                         <a href="{{ route("appel.formulaire") }}" class="button6 sty3">{{ __("candidature.buttons.inscrire") }}</a>
                      </div>
                    @endforeach
                  </div>
                </div>
              </div>


             <br/>
             <br/>
             <br/>

              <div class="container">
                <h3 class="font-weight7 text-uppercase text-dark mb-4">
                  {{ __('candidature.categories.immobilieres') }}
                </h3>
            
            
                    @php
                      $categories = [
                        ['titre' => __('candidature.cards.promoteur_immobilier'), 'image' => "categories/9.jpg", 'description' => __('candidature.cards.promoteur_immobilier_desc')],
                        ['titre' => __('candidature.cards.cabinet_architectural'), 'image' => "categories/10.jpg", 'description' => __('candidature.cards.cabinet_architectural_desc')],
                        ['titre' => __('candidature.cards.constructeur_innovant'), 'image' => "categories/11.jpg", 'description' => __('candidature.cards.constructeur_innovant_desc')],
                      ];
                    @endphp
            
                    @foreach ($categories as $cat)
                      <div class="col-md-4">
                        <img src="{{ asset('assets/images/' . $cat['image']) }}" alt="{{ $cat['titre'] }}" class="card-img">
                        <h5 class="font-weight5 margin-top2 margin-bottom">{{ $cat['titre'] }}</h5>
                        <p class="margin-bottom1" style="line-height: 20px;">{{ $cat['description'] }}</p>
                        <br/>
                        <a href="{{ route("appel.formulaire") }}" class="button6 sty3">{{ __("candidature.buttons.inscrire") }}</a>
                      </div>
                    @endforeach
                  </div>





                  <br/>
                  <br/>
                  <br/>
     
                   <div class="container">
                     <h3 class="font-weight7 text-uppercase text-dark mb-4">
                      {{ __('candidature.categories.prix_techniques') }}
                     </h3>
                 
                 
                         @php
                           $categories = [
                             __('candidature.categories_techniques.amenageur_foncier'),
                             __('candidature.categories_techniques.genie_electrique'),
                             __('candidature.categories_techniques.cabinet_ingenierie'),
                             __('candidature.categories_techniques.agent_immobilier'),
                           ];
                         @endphp
                 
                         @foreach ($categories as $cat)
                           <div class="col-md-3">
                             <img src="{{ asset('assets/images/' . $cat['image']) }}" alt="{{ $cat['titre'] }}" class="card-img">
                             <h5 class="font-weight5 margin-top2 margin-bottom">{{ $cat['titre'] }}</h5>
                             <p class="margin-bottom1" style="line-height: 20px;">{{ $cat['description'] }}</p>
                             <br/>
                              <a href="{{ route("appel.formulaire") }}" class="button6 sty3">{{ __("candidature.buttons.inscrire") }}</a>
                           </div>
                         @endforeach
                       </div>




                  <br/>
                  <br/>
                  <br/>
     
                   <div class="container">
                     <h3 class="font-weight7 text-uppercase text-dark mb-4">
                      {{ __('candidature.categories.prix_specialises') }}
                     </h3>
                 
                 
                         @php
                           $categories = [
                             __('candidature.categories_specialisees.urbaniste'),
                             __('candidature.categories_specialisees.cabinet_geometre'),
                             __('candidature.categories_specialisees.ingenierie_eau'),
                             __('candidature.categories_specialisees.excellence_plomberie'),
                           ];
                         @endphp
                 
                         @foreach ($categories as $cat)
                           <div class="col-md-3">
                             <img src="{{ asset('assets/images/' . $cat['image']) }}" alt="{{ $cat['titre'] }}" class="card-img">
                             <h5 class="font-weight5 margin-top2 margin-bottom">{{ $cat['titre'] }}</h5>
                             <p class="margin-bottom1" style="line-height: 20px;">{{ $cat['description'] }}</p>
                             <br/>
                              <a href="{{ route("appel.formulaire") }}" class="button6 sty3">{{ __("candidature.buttons.inscrire") }}</a>
                           </div>
                         @endforeach
                       </div>



               


             <br/>
             <br/>
             <br/>

              <div class="container">
                <h3 class="font-weight7 text-uppercase text-dark mb-4">
                  {{ __('candidature.categories.gouvernance_leadership') }}
                </h3>
            
            
                    @php
                      $categories = [
                        __('candidature.categories_gouvernance_leadership.leadership_visionnaire'),
                        __('candidature.categories_gouvernance_leadership.gouvernance_ethique'),
                        __('candidature.categories_gouvernance_leadership.innovation_administrative'),
                      ];
                    @endphp
            
                    @foreach ($categories as $cat)
                      <div class="col-md-4">
                        <h5 class="font-weight5 margin-top2 margin-bottom">{{ $cat['titre'] }}</h5>
                        <p class="margin-bottom1" style="line-height: 20px;">{{ $cat['description'] }}</p>
                        <br/>
                         <a href="{{ route("appel.formulaire") }}" class="button6 sty3">{{ __("candidature.buttons.inscrire") }}</a>
                      </div>
                    @endforeach
                  </div>




             <br/>
             <br/>
             <br/>


                  <div class="container">
                    <h3 class="font-weight7 text-uppercase text-dark mb-4">
                      {{ __('candidature.categories.gestion_ressources') }}
                    </h3>
                
                    <div class="carousel-wrapper">
                      <!-- Boutons navigation à l'extrémité -->
                      <button class="scroll-btn left" onclick="scrollCards(-1)">&#10094;</button>
                      <button class="scroll-btn right" onclick="scrollCards(1)">&#10095;</button>
                
                      <div class="horizontal-carousel" id="cardCarousel">
                        @php
                          $categories = [
                            __('candidature.categories_gestion_ressources.gestion_ressources'),
                            __('candidature.categories_gestion_ressources.innovation_administrative_2'),
                            __('candidature.categories_gestion_ressources.developpement_durable'),
                            __('candidature.categories_gestion_ressources.modernisation_numerique'),
                            __('candidature.categories_gestion_ressources.impact_communautaire'),
                            __('candidature.categories_gestion_ressources.partenariat_public_prive'),
                          ];
                        @endphp
                
                        @foreach ($categories as $cat)
                          <div class="card-custom">
                            <img src="{{ asset('assets/images/' . $cat['image']) }}" alt="{{ $cat['titre'] }}" class="card-img">
                            <h5 class="font-weight5 margin-top2 margin-bottom">{{ $cat['titre'] }}</h5>
                            <p class="margin-bottom1" style="line-height: 20px;">{{ $cat['description'] }}</p>
                            <br/>
                             <a href="{{ route("appel.formulaire") }}" class="button6 sty3">{{ __("candidature.buttons.inscrire") }}</a>
                          </div>
                        @endforeach
                      </div>
                    </div>
                  </div>

            </section>
            
            
            



            

            <!-- Onglet 2 -->
            <section id="2" data-tab-name="{{ __('candidature.domaines.title') }}" class="openTabby--slide">
              <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 padding-left3">
                  <h3 class="font-weight7 margin-bottom2 text-uppercase text-dark">{{ __('candidature.domaines.title') }}</h3>
                  <p class="line-height3 text-muted">
                    {{ __('candidature.domaines.content') }}
                  </p>
                </div>
              </div>
            </section>





            <!-- Onglet 3 -->
            <section id="3" data-tab-name="{{ __('candidature.criteres.tab_name') }}" class="openTabby--slide">
              <div class="row align-items-center">
                <div class="col-md-12 padding-right3">
                  <h3 class="font-weight7 margin-bottom2 text-uppercase text-dark">{{ __('candidature.criteres.title') }}</h3>
                  <p class="line-height3 text-muted">
                    {{ __('candidature.criteres.content') }}
                  </p>
                </div>
               
              </div>
            </section>




            <!-- Onglet 4 -->
            <section id="4" data-tab-name="{{ __('candidature.confirmation.tab_name') }}" class="openTabby--slide">
              <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 padding-left3">
                  <h3 class="font-weight7 margin-bottom2 text-uppercase text-dark">{{ __('candidature.confirmation.title') }}</h3>
                  <p class="line-height3 text-muted">
                    {{ __('candidature.confirmation.content') }}
                  </p>


<br/>
<br/>
<br/>
                </div>
                



                <div class="col-md-12 padding-left3">
                  <h3 class="font-weight7 margin-bottom2 text-uppercase text-dark">
                    {{ __('candidature.notation.title') }}
                    </h3>
                  
                    @php
                      $categories = [
                        ['titre' => "Conformité
                        Administrat
                        ive", 'image' => "categories/9.jpg", 'description' => "Évaluation basée
                        sur :
                        Constitution
                        légale de
                        l'entreprise
                        Minimum de 3
                        ans
                        d'activité
                        continue
                        Inscriptions
                        professionnel
                        les valides
                        Présence
                        digitale et
                        communication
                        professionnel
                        le"],

                        ['titre' => "Gouvernan
                        ce et
                        Durabilité", 'image' => "categories/10.jpg", 'description' => "Analyse
                        approfondie de
                        :
                        Satisfactio
                        n client
                        documentée
                        Gestion des
                        ressources
                        humaines
                        Pratiques
                        environneme
                        ntales
                        Responsabil
                        ité sociale"],

                        ['titre' => "Performa
                        nce
                        Financièr
                        e", 'image' => "categories/11.jpg", 'description' => "Évaluation
                        portant sur
                        :
                        Patrimoin
                        e et
                        actifs
                        professio
                        nnels
                        Historiqu
                        e des
                        projets
                        réalisés
                        Évolution
                        du
                        chiffre
                        d'affaire
                        s
                        Stabilité
                        financièr
                        e globale"],
                        
                      ];
                    @endphp
            
                    @foreach ($categories as $cat)
                      <div class="col-md-4">
                       
                        <h5 class="font-weight5 margin-top2 margin-bottom">{{ $cat['titre'] }}</h5>
                        <p class="margin-bottom1" style="line-height: 20px;">{{ $cat['description'] }}</p>
                        <br/>
                         <a href="{{ route("appel.formulaire") }}" class="button6 sty3">{{ __("candidature.buttons.inscrire") }}</a>
                      </div>
                    @endforeach

                </div>



                <div class="col-md-12 padding-left3">
                  <br/>
<br/>
<br/>
        
                  <h3 class="font-weight7 margin-bottom2 text-uppercase text-dark">
                    {{ __('candidature.beneficiaires.title') }}
                    </h3>
                  
                    @php
                      $categories = [
                        ['titre' => "Expertise
                        Stratégique", 'image' => "categories/beneficiaires/1.jpg", 'description' => "Bénéficiez d'une
                        analyse approfondie
                        réalisée par nos
                        experts, incluant un
                        diagnostic complet de
                        votre performance et
                        des recommandations
                        personnalisées pour
                        accélérer votre
                        croissance."],

                        ['titre' => "Rayonnement
                        International", 'image' => "categories/beneficiaires/2.jpg", 'description' => "Participez à un
                        événement prestigieux
                        à Dubaï réunissant
                        plus de 200
                        investisseurs
                        internationaux. Une
                        opportunité unique de
                        visibilité mondiale
                        et de développement
                        de partenariats
                        stratégiques."],

                        ['titre' => "Networking
                        Local", 'image' => "categories/beneficiaires/3.jpg", 'description' => "Rejoignez une
                        cérémonie exclusive
                        en Côte d'Ivoire,
                        vous permettant de
                        créer des connexions
                        directes avec les
                        leaders économiques
                        locaux et de
                        développer votre
                        réseau régional."],


                        ['titre' => "Support
                        Financier", 'image' => "categories/beneficiaires/4.jpg", 'description' => "Accédez à un réseau
                        privilégié de 500+
                        entreprises et
                        investisseurs,
                        incluant des
                        solutions de
                        financement
                        préférentielles et un
                        accompagnement sur
                        mesure pour votre
                        développement."],
                        
                      ];
                    @endphp
            
                    @foreach ($categories as $cat)
                      <div class="col-md-3">
                        <img src="{{ asset('assets/images/' . $cat['image']) }}" alt="{{ $cat['titre'] }}" class="card-img">
                        <h5 class="font-weight5 margin-top2 margin-bottom">{{ $cat['titre'] }}</h5>
                        <p class="margin-bottom1" style="line-height: 20px;">{{ $cat['description'] }}</p>
                        <br/>
                         <a href="{{ route("appel.formulaire") }}" class="button6 sty3">{{ __("candidature.buttons.inscrire") }}</a>
                      </div>
                    @endforeach

                </div>




                
                
              </div>
            </section>



          

          </div><!-- /.openTabby--slidesContainer -->
        </div><!-- /.openTabby -->
      </div><!-- /.col-md-12 -->
    </div>
  </div>
</section>

<!-- Activation des onglets -->
@push('scripts')
<script>
  $(".openTabby").openTabby();
</script>
@endpush


<script>
  document.addEventListener('DOMContentLoaded', function () {
    const container = document.getElementById('cardCarousel');
    const cardWidth = 250 + 24; // largeur carte + marge droite (1.5rem = 24px)
    let intervalId;

    // Scroll automatique toutes les 3s
    function autoScroll() {
      if (container.scrollLeft + container.clientWidth >= container.scrollWidth) {
        container.scrollLeft = 0; // retour au début
      } else {
        container.scrollLeft += cardWidth;
      }
    }

    // Scroll manuel avec bouton
    window.scrollCards = function (direction) {
      container.scrollLeft += direction * cardWidth;
    };

    // Lancer auto scroll
    intervalId = setInterval(autoScroll, 3000);

    // Pause au survol
    container.addEventListener('mouseenter', () => clearInterval(intervalId));
    container.addEventListener('mouseleave', () => {
      intervalId = setInterval(autoScroll, 3000);
    });
  });
</script>


@endsection
