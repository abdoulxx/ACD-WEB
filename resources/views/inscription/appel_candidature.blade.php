@extends("layouts.app")
@section('title', 'APPEL À LA CANDIDATURE')
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
    <h2 class="big2 white font-weight8">APPEL À LA CANDIDATURE</h2>
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
            <section id="1" data-tab-name="Catégories" class="openTabby--slide py-5">
              <div class="container">
                <h3 class="font-weight7 text-uppercase text-dark mb-4">
                  Catégories d'Excellence Sectorielle
                </h3>
            
                <div class="carousel-wrapper">
                  <!-- Boutons navigation à l'extrémité -->
                  <button class="scroll-btn left" onclick="scrollCards(-1)">&#10094;</button>
                  <button class="scroll-btn right" onclick="scrollCards(1)">&#10095;</button>
            
                  <div class="horizontal-carousel" id="cardCarousel">
                    @php
                      $categories = [
                        ['titre' => "Excellence Agro-Industrielle", 'image' => "categories/2.jpg", 'description' => "Leadership en innovation agricole durable..."],
                        ['titre' => "Excellence Manufacturière", 'image' => "categories/2.jpg", 'description' => "Innovation dans l'industrie 4.0..."],
                        ['titre' => "Excellence Bancaire & FinTech", 'image' => "categories/3.jpg", 'description' => "Services financiers numériques, blockchain..."],
                        ['titre' => "Excellence Médicale", 'image' => "categories/4.jpg", 'description' => "Télémédecine, médecine prédictive, soins personnalisés."],
                        ['titre' => "Innovation Technologique", 'image' => "categories/5.jpg", 'description' => "IA, IoT, cloud computing pour l'Afrique."],
                        ['titre' => "Excellence en Infrastructure", 'image' => "categories/6.jpg", 'description' => "Mobilité durable, optimisation énergétique..."],
                        ['titre' => "Excellence Minière", 'image' => "categories/7.jpg", 'description' => "Extraction responsable, technologies vertes..."],
                        ['titre' => "Des Talents Nationaux", 'image' => "categories/8.jpg", 'description' => "Leaders émergents, vision stratégique..."],
                      ];
                    @endphp
            
                    @foreach ($categories as $cat)
                      <div class="card-custom">
                        <img src="{{ asset('assets/images/' . $cat['image']) }}" alt="{{ $cat['titre'] }}" class="card-img">
                        <h5 class="font-weight5 margin-top2 margin-bottom">{{ $cat['titre'] }}</h5>
                        <p class="margin-bottom1" style="line-height: 20px;">{{ $cat['description'] }}</p>
                        <br/>
                         <a href="{{ route("appel.formulaire") }}" class="button6 sty3">S'inscrire</a>
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
                  Catégories immobilieres
                </h3>
            
            
                    @php
                      $categories = [
                        ['titre' => "promoteur
                        immobilier innovant", 'image' => "categories/9.jpg", 'description' => "Distingue les promoteurs
                        immobiliers qui excellent dans
                        la création de projets avantgardistes,
                        alliant innovation
                        technologique et développement
                        durable. Cette récompense
                        honore ceux qui transforment
                        le secteur immobilier à
                        travers des concepts
                        révolutionnaires et des
                        solutions d'habitat
                        intelligent."],

                        ['titre' => "Cabinet architectural
                        innovant", 'image' => "categories/10.jpg", 'description' => "Récompense l'excellence
                        architecturale à travers des
                        projets qui redéfinissent les
                        standards du design
                        contemporain. Cette
                        distinction met en valeur les
                        cabinets qui créent des
                        espaces exceptionnels,
                        conjuguant innovation
                        technique, respect
                        environnemental et élégance
                        architecturale."],

                        ['titre' => "Constructeur
                        innovant", 'image' => "categories/11.jpg", 'description' => "Honore les constructeurs
                        d'excellence qui se démarquent
                        par la qualité exceptionnelle
                        de leurs réalisations, leur
                        maîtrise technique et leur
                        engagement envers la
                        satisfaction client. Cette
                        récompense souligne
                        l'expertise, la fiabilité et
                        l'innovation dans l'exécution
                        des projets de construction."],
                        
                      ];
                    @endphp
            
                    @foreach ($categories as $cat)
                      <div class="col-md-4">
                        <img src="{{ asset('assets/images/' . $cat['image']) }}" alt="{{ $cat['titre'] }}" class="card-img">
                        <h5 class="font-weight5 margin-top2 margin-bottom">{{ $cat['titre'] }}</h5>
                        <p class="margin-bottom1" style="line-height: 20px;">{{ $cat['description'] }}</p>
                        <br/>
                        <a href="{{ route("appel.formulaire") }}" class="button6 sty3">S'inscrire</a>
                      </div>
                    @endforeach
                  </div>





                  <br/>
                  <br/>
                  <br/>
     
                   <div class="container">
                     <h3 class="font-weight7 text-uppercase text-dark mb-4">
                      Catégories de Prix Techniques
                     </h3>
                 
                 
                         @php
                           $categories = [
                             ['titre' => "Aménageur
                             Foncier
                             innovant", 'image' => "categories/12.jpg", 'description' => "Reconnaît
                             l'excellence dans
                             l'optimisation et
                             l'aménagement des
                             terrains, avec une
                             expertise
                             particulière dans la
                             viabilisation
                             intelligente, la
                             gestion écologique
                             des ressources et la
                             création d'espaces
                             urbains durables
                             répondant aux défis
                             du futur."],
     
                             ['titre' => "Génie
                             Électrique
                             innovant", 'image' => "categories/13.jpg", 'description' => "Met en valeur les
                             innovations
                             révolutionnaires dans
                             les systèmes
                             électriques
                             intelligents,
                             l'optimisation
                             énergétique et les
                             solutions
                             d'automation
                             avancées, favorisant
                             la transition vers
                             des bâtiments plus
                             économes et
                             connectés."],
     
                             ['titre' => "Cabinet
                             Ingénieurie
                             innovant", 'image' => "categories/14.jpg", 'description' => "Récompense
                             l'excellence en
                             ingénierie à travers
                             des solutions
                             techniques
                             innovantes, une
                             expertise pointue en
                             calculs structurels
                             et une vision avantgardiste
                             dans la
                             conception de projets
                             complexes et
                             durables."],



                             ['titre' => "Agent
                             Immobilier
                             innovant", 'image' => "categories/15.jpg", 'description' => "Distingue les
                             professionnels de
                             l'immobilier qui
                             excellent dans la
                             gestion de projets
                             prestigieux,
                             démontrant une
                             maîtrise
                             exceptionnelle des
                             standards
                             internationaux et une
                             capacité à délivrer
                             des résultats
                             remarquables avec une
                             précision technique
                             irréprochable."],
                             
                           ];
                         @endphp
                 
                         @foreach ($categories as $cat)
                           <div class="col-md-3">
                             <img src="{{ asset('assets/images/' . $cat['image']) }}" alt="{{ $cat['titre'] }}" class="card-img">
                             <h5 class="font-weight5 margin-top2 margin-bottom">{{ $cat['titre'] }}</h5>
                             <p class="margin-bottom1" style="line-height: 20px;">{{ $cat['description'] }}</p>
                             <br/>
                              <a href="{{ route("appel.formulaire") }}" class="button6 sty3">S'inscrire</a>
                           </div>
                         @endforeach
                       </div>




                  <br/>
                  <br/>
                  <br/>
     
                   <div class="container">
                     <h3 class="font-weight7 text-uppercase text-dark mb-4">
                      Catégories de Prix Spécialisés
                     </h3>
                 
                 
                         @php
                           $categories = [
                             ['titre' => "Urbaniste
                             Innovant
                             ", 'image' => "categories/16.jpg", 'description' => "Récompense
                             l'excellence en
                             matière de
                             planification urbaine
                             innovante et de
                             conception durable
                             des espaces publics
                             qui façonnent les
                             villes de demain."],
     
                             ['titre' => "Cabinet
                             innovant de
                             Géomètre", 'image' => "categories/17.jpg", 'description' => "Distingue l'expertise
                             exceptionnelle dans
                             les relevés
                             topographiques, la
                             cartographie
                             numérique et les
                             solutions cadastrales
                             de haute précision."],
     
                             ['titre' => "Ingénieurie en
                             eau et
                             assainissement", 'image' => "categories/18.jpg", 'description' => "Célèbre l'innovation
                             dans les techniques
                             de forage,
                             l'excellence en
                             exploration
                             géotechnique et la
                             gestion responsable
                             des ressources
                             souterraines."],



                             ['titre' => "Excellence en
                             Plomberie", 'image' => "categories/19.jpg", 'description' => "Honore la maîtrise
                             technique
                             exceptionnelle dans
                             les systèmes
                             hydrauliques,
                             l'innovation en
                             plomberie et les
                             solutions durables
                             pour le confort
                             moderne."],
                             
                           ];
                         @endphp
                 
                         @foreach ($categories as $cat)
                           <div class="col-md-3">
                             <img src="{{ asset('assets/images/' . $cat['image']) }}" alt="{{ $cat['titre'] }}" class="card-img">
                             <h5 class="font-weight5 margin-top2 margin-bottom">{{ $cat['titre'] }}</h5>
                             <p class="margin-bottom1" style="line-height: 20px;">{{ $cat['description'] }}</p>
                             <br/>
                              <a href="{{ route("appel.formulaire") }}" class="button6 sty3">S'inscrire</a>
                           </div>
                         @endforeach
                       </div>



               


             <br/>
             <br/>
             <br/>

              <div class="container">
                <h3 class="font-weight7 text-uppercase text-dark mb-4">
                  Categorie Gouvernance et
                  Leadership Administratif
                </h3>
            
            
                    @php
                      $categories = [
                        ['titre' => "Leadership
                        Visionnaire", 'image' => "categories/9.jpg", 'description' => "Célèbre les dirigeants qui
                        transforment leur vision en
                        succès tangible : Gestion stratégique
                        innovante - Développement de talents
                        exceptionnels - Impact mesurable sur la
                        croissance"],

                        ['titre' => "Gouvernance
                        Éthique", 'image' => "categories/10.jpg", 'description' => "Honore l'excellence en
                        matière de transparence et
                        responsabilité : Pratiques commerciales
                        exemplaires - Conformité réglementaire
                        rigoureuse - Initiatives de
                        responsabilité sociale"],

                        ['titre' => "Innovation
                        Administrative", 'image' => "categories/11.jpg", 'description' => "Récompense les solutions
                        administratives
                        révolutionnaires qui
                        optimisent l'efficacité
                        organisationnelle : Digitalisation des
                        processus - Systèmes de gestion
                        novateurs - Excellence opérationnelle
                        mesurable"],
                        
                      ];
                    @endphp
            
                    @foreach ($categories as $cat)
                      <div class="col-md-4">
                       
                        <h5 class="font-weight5 margin-top2 margin-bottom">{{ $cat['titre'] }}</h5>
                        <p class="margin-bottom1" style="line-height: 20px;">{{ $cat['description'] }}</p>
                        <br/>
                         <a href="{{ route("appel.formulaire") }}" class="button6 sty3">S'inscrire</a>
                      </div>
                    @endforeach
                  </div>




             <br/>
             <br/>
             <br/>


                  <div class="container">
                    <h3 class="font-weight7 text-uppercase text-dark mb-4">
                      Categorie Gouvernance et
                      Leadership Administratif
                    </h3>
                
                    <div class="carousel-wrapper">
                      <!-- Boutons navigation à l'extrémité -->
                      <button class="scroll-btn left" onclick="scrollCards(-1)">&#10094;</button>
                      <button class="scroll-btn right" onclick="scrollCards(1)">&#10095;</button>
                
                      <div class="horizontal-carousel" id="cardCarousel">
                        @php
                          $categories = [
                            ['titre' => "Gestion des
                            Ressources", 'image' => "categories/20.jpg", 'description' => "Optimisation
                            exemplaire des
                            ressources humaines
                            et financières pour
                            des résultats
                            mesurables et
                            efficaces dans
                            l'administration
                            publique."],

                            ['titre' => "Innovation
                            Administrative", 'image' => "categories/21.jpg", 'description' => "Solutions innovantes
                            et réformes
                            transformatives pour
                            améliorer la qualité
                            des services publics
                            et leur
                            accessibilité."],

                            ['titre' => "Développement
                            Durable", 'image' => "categories/22.jpg", 'description' => "Leadership dans les
                            initiatives
                            environnementales et
                            l'inclusion sociale
                            pour un développement
                            harmonieux et
                            durable."],

                            ['titre' => "Modernisation
                            Numérique", 'image' => "categories/23.jpg", 'description' => "Transformation
                            digitale des services
                            publics pour une
                            administration
                            moderne et
                            efficiente."],

                            ['titre' => "Impact
                            Communautaire", 'image' => "categories/24.jpg", 'description' => "Programmes et projets
                            à fort impact social,
                            améliorant
                            directement la vie
                            des populations
                            locales."],

                            ['titre' => "Partenariat
                            Public-Privé", 'image' => "categories/25.jpg", 'description' => "Développement de
                            collaborations
                            stratégiques entre
                            secteurs public et
                            privé pour une
                            meilleure efficacité
                            administrative."],

                           
                          ];
                        @endphp
                
                        @foreach ($categories as $cat)
                          <div class="card-custom">
                            <img src="{{ asset('assets/images/' . $cat['image']) }}" alt="{{ $cat['titre'] }}" class="card-img">
                            <h5 class="font-weight5 margin-top2 margin-bottom">{{ $cat['titre'] }}</h5>
                            <p class="margin-bottom1" style="line-height: 20px;">{{ $cat['description'] }}</p>
                            <br/>
                             <a href="{{ route("appel.formulaire") }}" class="button6 sty3">S'inscrire</a>
                          </div>
                        @endforeach
                      </div>
                    </div>
                  </div>

            </section>
            
            
            



            

            <!-- Onglet 2 -->
            <section id="2" data-tab-name="Domaines d'Activités Éligibles" class="openTabby--slide">
              <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 padding-left3">
                  <h3 class="font-weight7 margin-bottom2 text-uppercase text-dark">Domaines d'Activités Éligibles</h3>
                  <p class="line-height3 text-muted">
                    Éducation et Formation - Ministères ou départements chargés de l'éducation et de la
formation professionnelle
Santé Publique - Administrations responsables de la gestion des infrastructures et des
politiques sanitaires
Infrastructures et Transports - Services liés au développement des infrastructures
routières, ferroviaires, aériennes et maritimes
Économie et Finances - Institutions gérant les budgets nationaux, la fiscalité, et les
politiques économiques
Environnement et Développement Durable - Administrations en charge de la gestion des
ressources naturelles
Sécurité et Justice - Ministères ou départements de l'intérieur, de la défense et de la
justice
Culture et Tourisme - Responsables de la préservation du patrimoine culturel et du
développement touristique
Travail et Affaires Sociales - Administrations en charge des politiques sociales et de
l'emploi
                  </p>
                </div>
              </div>
            </section>





            <!-- Onglet 3 -->
            <section id="3" data-tab-name="Critères d'Évaluation" class="openTabby--slide">
              <div class="row align-items-center">
                <div class="col-md-12 padding-right3">
                  <h3 class="font-weight7 margin-bottom2 text-uppercase text-dark">Un soutien constant pour vos projets</h3>
                  <p class="line-height3 text-muted">
                    Leadership et Vision Stratégique - Capacité à élaborer et à mettre en Suvre une vision
                    claire et ambitieuse. Influence positive sur les équipes et les parties prenantes.
                    1.
                    Résultats et Impact - Indicateurs clés de performance (KPI) atteints ou dépassés. Impact
                    mesurable des initiatives sur la vie des citoyens et le développement national.
                    2.
                    Innovation et Créativité - Intégration de nouvelles technologies ou méthodologies dans le
                    fonctionnement des administrations. Mise en place de solutions innovantes aux problèmes
                    structurels.
                    3.
                    Gestion des Ressources - Utilisation optimale des ressources humaines, matérielles et
                    financières. Transparence dans la gestion des fonds publics.
                    4.
                    Contribution au Développement Durable - Initiatives favorisant un développement respectueux
                    de l'environnement. Actions en faveur de l'inclusion et de la réduction des inégalités.
                    5.
                    Réputation et Reconnaissance - Retour positif des citoyens et des bénéficiaires des
                    services publics. Distinctions ou récompenses précédentes (nationales ou internationales).
                    6.
                    Collaboration et Partenariats - Promotion d'une coopération intersectorielle (secteur
                    privé, ONG, autres administrations). Engagement pour des partenariats gagnant-gagnant.
                    7.
                    Intégrité et Éthique - Respect des principes d'éthique et de transparence. Absence de
                    scandales ou d'accusations de corruption.
                    8.
                    Communication et Sensibilisation - Capacité à communiquer efficacement avec le public et
                    les parties prenantes. Campagnes de sensibilisation réussies.
                    9.
                    Résilience et Gestion des Crises - Réaction et adaptation face à des situations d'urgence
                    ou de crise. Mesures efficaces pour atténuer les impacts des crises.
                  </p>
                </div>
               
              </div>
            </section>




            <!-- Onglet 4 -->
            <section id="4" data-tab-name="Confirmation" class="openTabby--slide">
              <div class="row align-items-center flex-row-reverse">
                <div class="col-md-12 padding-left3">
                  <h3 class="font-weight7 margin-bottom2 text-uppercase text-dark">Confirmation pour
                    le Prix d'Excellence
                    Dubai</h3>
                  <p class="line-height3 text-muted">
                    Le processus de confirmation pour le Prix d'Excellence
                    Dubai repose sur une méthodologie d'évaluation
                    rigoureuse et internationalement reconnue. Notre
                    Directeur Régional supervise personnellement chaque
                    candidature, assurant une analyse approfondie et
                    impartiale de chaque dossier selon les plus hauts
                    standards professionnels.
                    L'évaluation s'appuie sur quatre piliers fondamentaux
                    :
                    Conformité réglementaire : Évaluation exhaustive
                    de la constitution légale de l'entreprise et
                    vérification des licences professionnelles
                    requises selon la juridiction applicable.
                    Excellence en gouvernance : Analyse détaillée de
                    la structure organisationnelle, incluant la
                    gestion des ressources humaines et la stratégie
                    client.
                    Performance financière : Examen approfondi du
                    portfolio de projets, des processus d'acquisition,
                    du chiffre d'affaires et de la gestion de la masse
                    salariale.
                    Stratégie commerciale : Évaluation des processus
                    de vente et des initiatives marketing démontrant
                    une approche innovante et durable.
                    À l'issue de cette évaluation minutieuse, les
                    entreprises candidates reçoivent une notification
                    officielle par voie électronique dans un délai de cinq
                    jours ouvrables, les informant de la décision finale
                    du comité de sélection.
                  </p>


<br/>
<br/>
<br/>
                </div>
                



                <div class="col-md-12 padding-left3">
                  <h3 class="font-weight7 margin-bottom2 text-uppercase text-dark">
                    Notation du Prix d'Excellence International
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
                         <a href="{{ route("appel.formulaire") }}" class="button6 sty3">S'inscrire</a>
                      </div>
                    @endforeach

                </div>



                <div class="col-md-12 padding-left3">
                  <br/>
<br/>
<br/>
        
                  <h3 class="font-weight7 margin-bottom2 text-uppercase text-dark">
                    Bénéficiaires
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
                         <a href="{{ route("appel.formulaire") }}" class="button6 sty3">S'inscrire</a>
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