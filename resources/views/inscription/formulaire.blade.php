@extends("layouts.app")
@section('title', __('form_candidature.meta_title'))
@section("content")

<div class="clearfix"></div>

<style>
    /* Ajoutez du style supplémentaire si nécessaire */
    .destination {
      font-weight: bold;
      color: red;
    }
  </style>

<section class="background-image110 padding-top-bottom3 text-center">
<div class="container">
<div class="row nopadding">
	
	<h2 class="big2 white font-weight8">{{ __('form_candidature.main_title') }}</h2>
    
</div>
</div>
</section><!-- end section -->
   

<section>
<div class="container">
<div class="row nopadding">

  <div class="col-md-12 bg-color-white nopadding marbo-resp13">
      <div class="cforms-sty3 padding-percent1">
        
       
            @if (session('success'))
                <div class="alert success">
                    <span class="closebtn">&times;</span>  
                    {{ session('success') }}
                </div>
               
            @endif

          
            <form action="{{ route('appel.store') }}" method="POST" enctype="multipart/form-data">
              @csrf
            
              <!-- SECTION 1 : Informations Générales -->
              <h2>{{ __('form_candidature.section_title_info') }}</h2>
              <hr/>
              <div class="row">
                <div class="col-md-6">

                  <label>{{ __('form_candidature.label_company_name') }}</label>
                  <input type="text" name="nom_entreprise" required>
          
            
                  <label>{{ __('form_candidature.label_legal_status') }}</label>
                  <input type="text" name="statut_juridique" required>
            
                  <label>{{ __('form_candidature.label_registration_number') }}</label>
                  <input type="text" name="numero_rccm" required>
            
                  <label>{{ __('form_candidature.label_country_city') }}</label>
                  <input type="text" name="pays_ville_siege" required>
            
                </div>
            
                <div class="col-md-6">
          
                  <label>{{ __('form_candidature.label_applicant_name') }}</label>
                  <input type="text" name="nom_responsable" required>
            
                  <label>{{ __('form_candidature.label_applicant_function') }}</label>
                  <input type="text" name="fonction_responsable" required>
            
                  <label>{{ __('form_candidature.label_applicant_email') }}</label>
                  <input type="email" name="email_responsable" required>
            
                  <label>{{ __('form_candidature.label_applicant_phone') }}</label>
                  <input type="tel" name="telephone_responsable" required>
                </div>
              </div>
            
              <br/>
              <br/>
              <!-- SECTION 2 -->
              <h2 class="mt-4">{{ __('form_candidature.section_title_profile') }}</h2>
              <hr/>
              <div class="row">
                <div class="col-md-6">
                  <label>{{ __('form_candidature.label_company_presentation') }}</label>
                  <textarea name="produits_services" rows="5" required></textarea>
                </div>
                <div class="col-md-6">
                 
                  <label>{{ __('form_candidature.label_turnover') }}</label>
                  <textarea name="chiffre_affaires" rows="5" required></textarea>
                </div>
              </div>
            
              <br/>
              <br/>
           
              <!-- SECTION 4 -->
              <h2 class="mt-4">{{ __('form_candidature.section_title_documents') }}</h2>
              <hr/>
              <div class="row">
                <div class="col-md-6">
                  <label>{{ __('form_candidature.label_logo') }}</label>
                  <input type="file" name="logo_hd" accept="image/*" required>
                 
                </div>
                <div class="col-md-6">
                  <label>{{ __('form_candidature.label_id_document') }}</label>
                  <input type="file" name="piece_identite" accept=".pdf,image/*" required>
            
                
                </div>
              </div>


            
            
              <!-- Confirmation -->
              <div class="mt-4 p-3 border rounded bg-light">
                <div class="form-check d-flex">
                
                  <label class="form-check-label" for="confirmation">
                  
                    {{ __('form_candidature.terms_agreement') }}

                  </label>
                </div>
              </div>
            
              <!-- Soumission -->
              <br>
              <br>
              <button type="submit" class="button6 sty3">{{ __('form_candidature.submit_button') }}</button>
            </form>
            
            
        <p class="clearfix"></p>
        
        </div>
    
    </div>
    
    
    
    
</div>        
</div>
</section>


<div class="clearfix"></div>


@endsection