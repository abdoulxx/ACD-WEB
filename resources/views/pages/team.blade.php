
@extends("layouts.app")
@section('title', __("equipe.team.titre"))
@section("content")


<<section class="background-image110 padding-top-bottom3 text-center">
    <div class="container">
        <div class="row nopadding">
      
        <h2 class="big2 white font-weight8">{{ __('equipe.team.titre') }}</h2>
        
    </div>
    </div>
    </section><!-- end section -->
    
    
    <div class="clearfix"></div>
  
    
    <!-- Section Équipe de Direction -->
    <section class="padding-top-bottom4 text-center">
      <div class="container">
        <div class="row nopadding">
          
          <!-- Membre 1 -->
          <div class="col-md-3 col-sm-3 marbo-resp animate fadeInUp" data-anim-type="fadeInUp" data-anim-delay="300">
            <div class="imghoverzoom">
              <img src="{{ asset('assets/images/team/direction/1.jpg') }}" alt="Dr. Anuraag Guglaani" class="respoimg">
              <div class="textbox">
                <h5 class="white font-weight6 margin-bottom padding-top7">Dr. Anuraag Guglaani</h5>
                <p class="white sfont margin-bottom2">
                  {{ __('equipe.direction.anuraag_guglaani.poste') }}<br>
                  {{ __('equipe.direction.anuraag_guglaani.description') }}
                </p>
              </div>
            </div>
          </div><!-- end col -->
    
          <!-- Membre 2 -->
          <div class="col-md-3 col-sm-3 marbo-resp animate fadeInUp" data-anim-type="fadeInUp" data-anim-delay="400">
            <div class="imghoverzoom">
              <img src="{{ asset('assets/images/team/direction/2.jpg') }}" alt="Farooq Cheema" class="respoimg">
              <div class="textbox">
                <h5 class="white font-weight6 margin-bottom padding-top7">Farooq Cheema</h5>
                <p class="white sfont margin-bottom2">
                  {{ __('equipe.direction.farooq_cheema.poste') }}<br>
                  {{ __('equipe.direction.farooq_cheema.description') }}
                </p>
              </div>
            </div>
          </div><!-- end col -->
    
          <!-- Membre 3 -->
          <div class="col-md-3 col-sm-3 animate fadeInUp" data-anim-type="fadeInUp" data-anim-delay="600">
            <div class="imghoverzoom">
              <img src="{{ asset('assets/images/team/direction/3.jpg') }}" alt="Auguste Deza" class="respoimg">
              <div class="textbox">
                <h5 class="white font-weight6 margin-bottom padding-top7">Auguste Deza</h5>
                <p class="white sfont margin-bottom2">
                  {{ __('equipe.direction.auguste_deza.poste') }}<br>
                  {{ __('equipe.direction.auguste_deza.description') }}
                </p>
              </div>
            </div>
          </div><!-- end col -->
    
          <!-- Membre 4 -->
          <div class="col-md-3 col-sm-3 marbo-resp animate fadeInUp" data-anim-type="fadeInUp" data-anim-delay="700">
            <div class="imghoverzoom">
              <img src="{{ asset('assets/images/team/direction/4.jpg') }}" alt="Sadja Bob" class="respoimg">
              <div class="textbox">
                <h5 class="white font-weight6 margin-bottom padding-top7">Sadja Bob</h5>
                <p class="white sfont margin-bottom2">
                  {{ __('equipe.direction.sadja_bob.poste') }}<br>
                  {{ __('equipe.direction.sadja_bob.description') }}
                </p>
              </div>
            </div>
          </div><!-- end col -->
    
        </div><!-- end row -->
      </div><!-- end container -->
    </section><!-- end section -->
    












    
    
    <section class="background-image110 padding-top-bottom text-center">
        <div class="container">
        <div class="row nopadding">
      
            <h2 class="big2 white font-weight8">{{ __('equipe.reseau_investisseurs') ?? 'Réseau investisseurs international' }}</h2>
        
        </div>
        </div>
    </section><!-- end section -->
    
    
    <!-- Section des partenaires stratégiques -->
<section class="padding-top-bottom text-center">
  <div class="container">
    <div class="row nopadding">
      
      <!-- Bloc 1 : Khwarizmi Ventures -->
      <div class="col-md-3 col-sm-3 marbo-resp animate fadeInDown" data-anim-type="fadeInDown" data-anim-delay="300">
        <div class="imghoverzoom">
          <img src="{{ asset('assets/images/team/investisseurs/1.jpg') }}" alt="Khwarizmi Ventures" class="respoimg">
          <div class="textbox">
            <h5 class="white font-weight6 margin-bottom padding-top7">Khwarizmi Ventures</h5>
            <p class="white sfont margin-bottom2">
              Type: Venture Capital and Private Equity Principals<br>
              Offers: Venture Capital, Fintech, E-commerce, Warehousing & Last-mile Delivery.
            </p>
          </div>
        </div>
      </div><!-- end col -->

      <!-- Bloc 2 : Annex
Investments -->
      <div class="col-md-3 col-sm-3 marbo-resp animate fadeInUp" data-anim-type="fadeInUp" data-anim-delay="400">
        <div class="imghoverzoom">
          <img src="{{ asset('assets/images/team/investisseurs/2.jpg') }}" alt="Annex
Investments" class="respoimg">
          <div class="textbox">
            <h5 class="white font-weight6 margin-bottom padding-top7">Dr Anuraag Guglaani</h5>
            <p class="white sfont margin-bottom2">
              Achievement Award<br>
              Board Member - Multiple Family Business Groups<br>
              Managing Partner & CEO - Wazir Advisors<br>
              Co-Founder - Bettingsharks
            </p>
          </div>
        </div>
      </div><!-- end col -->

      <!-- Bloc 3 : Ruya Partners -->
      <div class="col-md-3 col-sm-3 marbo-resp15 animate fadeInUp" data-anim-type="fadeInUp" data-anim-delay="500">
        <div class="imghoverzoom">
          <img src="{{ asset('assets/images/team/investisseurs/3.jpg') }}" alt="Ruya Partners" class="respoimg">
          <div class="textbox">
            <h5 class="white font-weight6 margin-bottom padding-top7">Ruya Partners</h5>
            <p class="white sfont margin-bottom2">
              Type: Venture
              Capital and Private
              Equity Principals
              Offers: Investments
              in transformative
              startups across
              various sectors .
            </p>
          </div>
        </div>
      </div><!-- end col -->

      <!-- Bloc 4 : ADQ -->
      <div class="col-md-3 col-sm-3 marbo-resp animate fadeInUp" data-anim-type="fadeInUp" data-anim-delay="700">
        <div class="imghoverzoom">
          <img src="{{ asset('assets/images/team/investisseurs/4.jpg') }}" alt="ADQ" class="respoimg">
          <div class="textbox">
            <h5 class="white font-weight6 margin-bottom padding-top7">Mr. Rasik Thakker on
              joining;</h5>
            <p class="white sfont margin-bottom2">
              Investors Com - A
              Cross-Pollinating
              Community ò for
              Active Investors &
              Funded Founders
            </p>
          </div>
        </div>
      </div><!-- end col -->



  

      <!-- Bloc 1 : Khwarizmi Ventures -->
      <div class="col-md-3 col-sm-3 marbo-resp animate fadeInDown" data-anim-type="fadeInDown" data-anim-delay="300">
        <div class="imghoverzoom">
          <img src="{{ asset('assets/images/team/investisseurs/5.jpg') }}" alt="Waha Capital" class="respoimg">
          <div class="textbox">
            <h5 class="white font-weight6 margin-bottom padding-top7">Waha Capital</h5>
            <p class="white sfont margin-bottom2">
              Type: Venture
              Capital and Private
              Equity Principals
              Offers: Principal
              Investments, Asset
              Management, Capital
              Markets, Private
              Debt, Fixed Income &
              Equities
            </p>
          </div>
        </div>
      </div><!-- end col -->

      <!-- Bloc 2 : Dr Anuraag Guglaani -->
      <div class="col-md-3 col-sm-3 marbo-resp animate fadeInUp" data-anim-type="fadeInUp" data-anim-delay="400">
        <div class="imghoverzoom">
          <img src="{{ asset('assets/images/team/investisseurs/6.jpg') }}" alt="Dr Anuraag Guglaani" class="respoimg">
          <div class="textbox">
            <h5 class="white font-weight6 margin-bottom padding-top7">Annex
              Investments</h5>
            <p class="white sfont margin-bottom2">
              Type: Venture
              Capital and Private
              Equity Principals
              Offers: Investments
              in transformative
              startups across
              various sectors.
            </p>
          </div>
        </div>
      </div><!-- end col -->

      <!-- Bloc 3 : Ruya Partners -->
      <div class="col-md-3 col-sm-3 marbo-resp15 animate fadeInUp" data-anim-type="fadeInUp" data-anim-delay="500">
        <div class="imghoverzoom">
          <img src="{{ asset('assets/images/team/investisseurs/7.jpg') }}" alt="Ruya Partners" class="respoimg">
          <div class="textbox">
            <h5 class="white font-weight6 margin-bottom padding-top7">Mr. Rasik Thakker on
              joining</h5>
            <p class="white sfont margin-bottom2">
              Investors Com - A
              Cross-Pollinating
              Community ò for
              Active Investors &
              Funded Founders
            </p>
          </div>
        </div>
      </div><!-- end col -->

      <!-- Bloc 4 : ADQ -->
      <div class="col-md-3 col-sm-3 marbo-resp animate fadeInUp" data-anim-type="fadeInUp" data-anim-delay="700">
        <div class="imghoverzoom">
          <img src="{{ asset('assets/images/team/investisseurs/8.jpg') }}" alt="ADQ" class="respoimg">
          <div class="textbox">
            <h5 class="white font-weight6 margin-bottom padding-top7">Investment
              Corporation of Dubai
              (ICD)</h5>
            <p class="white sfont margin-bottom2">
              Type: Venture
              Capital and Private
              Equity Principals
              Offers: Venture
              Capital, Utilities &
              Energy Sector,
              Transportation
              Sector, Financial
              Sector, Industrial
              Sector, Real Estate
              & Leisure Sector
            </p>
          </div>
        </div>
      </div><!-- end col -->

    </div><!-- end row -->
  </div><!-- end container -->
</section><!-- end section -->



    <div class="clearfix"></div>
@endsection
