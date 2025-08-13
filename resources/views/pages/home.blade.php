@extends('layouts.app')

@section('title', 'ACCUEIL')

@section("content")


<style>
  .source-card {
    background-color: rgba(255, 255, 255, 0.15);
    padding: 25px 20px;
    border-radius: 12px;
    text-align: center;
    color: white;
    transition: all 0.3s ease-in-out;
    border: 1px solid rgba(255, 255, 255, 0.2);
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.2);
    min-height: 180px;
  }
  
  .source-card:hover {
    background-color: rgba(255, 255, 255, 0.25);
    transform: translateY(-5px);
    box-shadow: 0 12px 30px rgba(0, 0, 0, 0.35);
  }
  
  .icon {
    font-size: 32px;
    margin-bottom: 15px;
    color: #FFD700; /* Jaune-or pour contraster avec le fond */
  }
  
  .source-title {
    font-size: 18px;
    font-weight: 700;
    margin-bottom: 8px;
    color: #FFF;
  }
  
  .source-text {
    font-size: 14px;
    opacity: 0.9;
  }
  
  
</style>




<!-- Séparateur horizontal -->
<hr>
<div class="clearfix"></div>

<!-- Section principale d’introduction -->
<section>
  <div class="container">
    <div class="row nopadding">

      <p class="clearfix margin-bottom9"></p>

      <!-- Partie texte à gauche -->
      <div class="col-md-6 text-left marbo-resp">
        <h2 class="big font-weight7 margin-bottom3">{{ __("accueil.session1.titre") }}</h2>
        <h6 class="font-weight4 line-height3 less5 left">{{ __("accueil.session1.content1") }}</h6>
        <h6 class="font-weight4 line-height3 less5 left">{{ __("accueil.session1.content2") }}</h6>
        <div class="clearfix margin-bottom2"></div>
      </div>
      <!-- Fin partie texte -->

      <!-- Image à droite -->
      <div class="col-md-6">
        <img src="{{ asset("assets/images/about/1.jpg") }}" alt="" class="respoimg radius2">
      </div>
      <!-- Fin image -->



    </div> </div>

      

    <p class="clearfix margin-bottom9"></p>
    <section class="background-image110 padding-top-bottom3 text-center">
      <div class="container">
    
        <!-- Titre + description -->
        <div class="row nopadding">
          <div class="col-md-10 col-md-offset-1">
            <h2 class="big font-weight7 margin-bottom2">{{ __("accueil.processus.titre") }}</h2>
            <p class="font-weight4 line-height3 white less5 left margin-bottom4">
              {{ __("accueil.processus.content1") }}
            </p>
            <p class="font-weight4 line-height3 white less5 left margin-bottom5">
              {{ __("accueil.processus.content2") }}
            </p>
          </div>
        </div>
    
        <!-- Grille des sources -->
        <div class="row text-left">
          @for ($i = 1; $i <= 8; $i++)
            <div class="col-md-4 col-sm-6 col-xs-12 margin-bottom3">
              <div class="source-card">
                <div class="icon">
                  {{-- Exemple d’icônes Unicode dynamiques par index --}}
                  @php
                    $icons = ['💻', '🏛️', '📰', '🌐', '🏠', '👤', '⚖️', '💼'];
                  @endphp
                  {{ $icons[$i - 1] }}
                </div>
                <h6 class="source-title">{{ __("accueil.processus.titre$i") }}</h6>
                <p class="source-text">{{ __("accueil.processus.description$i") }}</p>
              </div>
            </div>
          @endfor
        </div>
    
      </div>
    </section>
    






    

    <div class="container">
      <div class="row nopadding">

      <p class="clearfix margin-bottom9"></p>



      <!-- Image à gauche -->
      <div class="col-md-6">
        <img src="{{ asset("assets/images/about/image_pi.jpg") }}" alt="" class="respoimg radius2">
      </div>
      <!-- Fin image -->


      <!-- Partie texte à droite -->
      <div class="col-md-6 text-left marbo-resp">
        <h2 class="big font-weight7 margin-bottom3">{{ __("accueil.session_2.titre") }}</h2>
        <h6 class="font-weight4 line-height3 less5 left margin-bottom3">{{ __("accueil.session_2.content1") }}</h6>

        <h6 class="font-weight4 line-height3 less5 left margin-bottom3">{{ __("accueil.session_2.content2") }}</h6>
        <h6 class="font-weight4 line-height3 less5 left margin-bottom3">{{ __("accueil.session_2.content3") }}</h6>
        <div class="clearfix margin-bottom2"></div>
      </div>
      <!-- Fin partie texte -->

    </div>
  </div>
</section>
<!-- Fin section introduction -->

<div class="clearfix margin-bottom3"></div>











<div class="clearfix margin-bottom3"></div>
<div class="clearfix margin-bottom3"></div>








<!-- LES AVANTAGES -->
<!-- Section avec icônes et textes améliorée UX/UI avec espacement -->
<section class="bg-color2 padding-top-bottom4">
  <div class="container">
    <div class="row gy-4">

      <!-- Bloc 1 -->
      <div class="col-lg-4 col-md-6 col-12 animate" data-anim-type="fadeIn" data-anim-delay="100">
        <div class="source-card h-100">
          <div class="icon" style="color:#FF6A5A;">&#9733;</div>
          <h6 class="source-title">{{ __("accueil.session2.titre1") }}</h6>
          <p class="source-text">{{ __("accueil.session2.content1") }}</p>
        </div>
      </div><!-- end col -->

      <!-- Bloc 2 -->
      <div class="col-lg-4 col-md-6 col-12 animate" data-anim-type="fadeIn" data-anim-delay="300">
        <div class="source-card h-100">
          <div class="icon" style="color:#FF6A5A;">&#128101;</div>
          <h6 class="source-title">{{ __("accueil.session2.titre2") }}</h6>
          <p class="source-text">{{ __("accueil.session2.content2") }}</p>
        </div>
      </div><!-- end col -->

      <!-- Bloc 3 -->
      <div class="col-lg-4 col-md-6 col-12 animate" data-anim-type="fadeIn" data-anim-delay="400">
        <div class="source-card h-100">
          <div class="icon" style="color:#FF6A5A;">&#128176;</div>
          <h6 class="source-title">{{ __("accueil.session2.titre3") }}</h6>
          <p class="source-text">{{ __("accueil.session2.content3") }}</p>
        </div>
      </div><!-- end col -->

      <!-- Bloc 4 -->
      <div class="col-lg-4 col-md-6 col-12 animate" data-anim-type="fadeIn" data-anim-delay="500">
        <div class="source-card h-100">
          <div class="icon" style="color:#FF6A5A;">&#128640;</div>
          <h6 class="source-title">{{ __("accueil.session2.titre4") }}</h6>
          <p class="source-text">{{ __("accueil.session2.content4") }}</p>
        </div>
      </div><!-- end col -->

      <!-- Bloc 5 -->
      <div class="col-lg-4 col-md-6 col-12 animate" data-anim-type="fadeIn" data-anim-delay="600">
        <div class="source-card h-100">
          <div class="icon" style="color:#FF6A5A;">&#128204;</div>
          <h6 class="source-title">{{ __("accueil.session2.titre5") }}</h6>
          <p class="source-text">{{ __("accueil.session2.content5") }}</p>
        </div>
      </div><!-- end col -->

      <!-- Bloc 6 -->
      <div class="col-lg-4 col-md-6 col-12 animate" data-anim-type="fadeIn" data-anim-delay="700">
        <div class="source-card h-100">
          <div class="icon" style="color:#FF6A5A;">&#128172;</div>
          <h6 class="source-title">{{ __("accueil.session2.titre6") }}</h6>
          <p class="source-text">{{ __("accueil.session2.content6") }}</p>
        </div>
      </div><!-- end col -->

    </div>
  </div>
</section>












<!-- Section Mot du Responsable -->
<section class="padding-top-bottom4">
  <div class="container">
    <div class="row">

      <!-- Image -->
      <div class="col-md-4 col-sm-4 marbo-resp12 animate" data-anim-type="fadeInUp" data-anim-delay="400">
        <img src="{{ asset("assets/images/mot/1.jpg") }}" alt="" class="respoimg" />
      </div>

      <!-- Texte -->
      <div class="col-md-8 col-sm-8 animate" data-anim-type="fadeInUp" data-anim-delay="800">
        <h2 class="font-weight7">{{ __("accueil.session3.titre1") }}</h2>
        <hr class="style-three color2 quarter margin-top2">
        <p class="clearfix margin-bottom"></p>
        <p class="margin-bottom2">{{ __("accueil.session3.para1") }}</p>
        <p>{{ __("accueil.session3.para2") }}</p>
        <p>
          {{ __("accueil.session3.para3") }}...
          <a href="{{ route('mot') }}">{{ __("accueil.session3.bouton") }}</a>
        </p>
        <br />
        <p><strong>Auguste César DEZA</strong></p>
        <p><img src="{{ asset("assets/images/mot/signature.png") }}" style="width:100px"></p>
      </div>

    </div>
  </div>
</section><!-- Fin section Mot -->

<div class="clearfix"></div>

<!-- Section Témoignages -->
<section class="background-image130 text-center">
  <div class="container">
    <div class="row nopadding">
      <div class="less4">

        <div class="owl-carousel two">

          <!-- Témoignage 1 -->
          <div class="item">
            <img src="{{ asset("assets/images/temoignages/testimonial-3.jpg") }}" alt="" class="radius5 respoimg4 border-all-opacity6 center" />
            <h4 class="green caps font-weight7 margin-bottom2 margin-top2"> - Me Kacou Angeline ({{ __("accueil.session5.titre1") }})</h4>
            <h5 class="white font-weight4 line-height3">" {{ __("accueil.session5.content1") }}"</h5>
          </div>

          <!-- Témoignage 2 -->
          <div class="item">
            <img src="{{ asset("assets/images/temoignages/testimonial-2.jpg") }}" alt="" class="radius5 respoimg4 border-all-opacity6 center" />
            <h4 class="green caps font-weight7 margin-bottom2 margin-top2"> - Mr TRAORE YSSIAKA ({{ __("accueil.session5.titre2") }})</h4>
            <h5 class="white font-weight4 line-height3">" {{ __("accueil.session5.content2") }}"</h5>
          </div>

          <!-- Témoignage 3 -->
          <div class="item">
            <img src="{{ asset("assets/images/temoignages/testimonial-1.jpg") }}" alt="" class="radius5 respoimg4 border-all-opacity6 center" />
            <h4 class="green caps font-weight7 margin-bottom2 margin-top2"> - Me KOUAME Athhanase ({{ __("accueil.session5.titre3") }})</h4>
            <h5 class="white font-weight4 line-height3">"{{ __("accueil.session5.content3") }}"</h5>
          </div>

        </div><!-- end carousel -->

      </div>
    </div>
  </div>
</section><!-- Fin section témoignages -->

<div class="clearfix"></div>

<!-- Section Logos Clients -->
<div class="padding-top-bottom">
  <div class="container">
    <div class="row">

      <div class="owl-carousel none">
        <div class="item">
          <div class="col-md-3 col-sm-4 col-xs-4"><img src="{{ asset("assets/images/client/1.jpg") }}" alt="" class="respoimg5 center opacity3" /></div>
          <div class="col-md-3 col-sm-4 col-xs-4"><img src="{{ asset("assets/images/client/2.jpg") }}" alt="" class="respoimg5 center opacity3" /></div>
          <div class="col-md-3 col-sm-4 col-xs-4"><img src="{{ asset("assets/images/client/3.jpg") }}" alt="" class="respoimg5 center opacity3" /></div>
          <div class="col-md-3 col-sm-4 col-xs-4"><img src="{{ asset("assets/images/client/4.jpg") }}" alt="" class="respoimg5 center opacity3" /></div>
        </div>

        <div class="item">
          <div class="col-md-3 col-sm-4 col-xs-4"><img src="{{ asset("assets/images/client/5.jpg") }}" alt="" class="respoimg5 center opacity3" /></div>
          <div class="col-md-3 col-sm-4 col-xs-4"><img src="{{ asset("assets/images/client/6.jpg") }}" alt="" class="respoimg5 center" /></div>
          <div class="col-md-3 col-sm-4 col-xs-4"><img src="{{ asset("assets/images/client/7.jpg") }}" alt="" class="respoimg5 center opacity3" /></div>
          <div class="col-md-3 col-sm-4 col-xs-4"><img src="{{ asset("assets/images/client/8.jpg") }}" alt="" class="respoimg5 center opacity3" /></div>
        </div>
      </div><!-- end carousel -->

    </div>
  </div>
</div><!-- Fin section logos clients -->

@endsection
