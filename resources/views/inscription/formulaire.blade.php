@extends("layouts.app")
@section('title', 'SOUMETTRE MA CANDIDATURE')
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
	
	<h2 class="big2 white font-weight8">S'INSCRIRE</h2>
    
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
              <h2>Informations Générales sur l’Entreprise</h2>
              <hr/>
              <div class="row">
                <div class="col-md-6">

                  <label>Nom officiel de l’entreprise :</label>
                  <input type="text" name="nom_entreprise" required>
          
            
                  <label>Statut juridique :</label>
                  <input type="text" name="statut_juridique" required>
            
                  <label>Numéro d’immatriculation / RCCM :</label>
                  <input type="text" name="numero_rccm" required>
            
                  <label>Pays & ville de siège :</label>
                  <input type="text" name="pays_ville_siege" required>
            
                </div>
            
                <div class="col-md-6">
          
                  <label>Nom du responsable de la candidature :</label>
                  <input type="text" name="nom_responsable" required>
            
                  <label>Fonction du responsable de la candidature :</label>
                  <input type="text" name="fonction_responsable" required>
            
                  <label>Email du responsable :</label>
                  <input type="email" name="email_responsable" required>
            
                  <label>Téléphone du responsable :</label>
                  <input type="tel" name="telephone_responsable" required>
                </div>
              </div>
            
              <br/>
              <br/>
              <!-- SECTION 2 -->
              <h2 class="mt-4">Profil & Activité</h2>
              <hr/>
              <div class="row">
                <div class="col-md-6">
                  <label>Présentation de votre entrerise</label>
                  <textarea name="produits_services" rows="5" required></textarea>
                </div>
                <div class="col-md-6">
                 
                  <label>Chiffre d’affaires des 2 ou 3 dernières années :</label>
                  <textarea name="chiffre_affaires" rows="5" required></textarea>
                </div>
              </div>
            
              <br/>
              <br/>
           
              <!-- SECTION 4 -->
              <h2 class="mt-4">Documents à Joindre</h2>
              <hr/>
              <div class="row">
                <div class="col-md-6">
                  <label>Logo HD :</label>
                  <input type="file" name="logo_hd" accept="image/*" required>
                 
                </div>
                <div class="col-md-6">
                  <label>Pièce d'identité du responsable :</label>
                  <input type="file" name="piece_identite" accept=".pdf,image/*" required>
            
                
                </div>
              </div>


            
            
              <!-- Confirmation -->
              <div class="mt-4 p-3 border rounded bg-light">
                <div class="form-check d-flex">
                
                  <label class="form-check-label" for="confirmation">
                  
                    En remplissant ce formulaire, vous acceptez <a href=""> les conditions générales du Prix International d'Excellence.</a>

                  </label>
                </div>
              </div>
            
              <!-- Soumission -->
              <br>
              <br>
              <button type="submit" class="button6 sty3">Soumettre ma candidature</button>
            </form>
            
            
        <p class="clearfix"></p>
        
        </div>
    
    </div>
    
    
    
    
</div>        
</div>
</section>


<div class="clearfix"></div>


@endsection
