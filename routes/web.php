<?php

use App\Models\Candidature;
use Barryvdh\DomPDF\Facade\Pdf;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    AboutController,
    ContactController,
    HistoriqueController,
    NetworkingController,
    CandidatureController,
    NosLaureatsController,
    PrixExcellenceController,
    MentionsLegalesController,
    ConditionsUtilisationsController
};

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
| Routes publiques avec gestion multilingue
|--------------------------------------------------------------------------
*/

Route::group([
    'prefix' => LaravelLocalization::setLocale(),
    'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
], function () {

    // Accueil
    Route::view('/', 'pages.home');

    /*
    |--------------------------------------------------------------------------
    | À propos / Présentation / Équipe
    |--------------------------------------------------------------------------
    */
    Route::prefix('présentation-acd-corporate-services')->group(function () {
        Route::get('/', [AboutController::class, 'index'])->name('about.index');
        Route::get('/mot-du-directeur-general', [AboutController::class, 'mot'])->name('mot');
        Route::get('/notre-equipe', [AboutController::class, 'team'])->name('team');
    });

    /*
    |--------------------------------------------------------------------------
    | Nos missions / Nos solutions
    |--------------------------------------------------------------------------
    */
    Route::get('/nos-missions', [AboutController::class, 'mission'])->name('mission');
    Route::get('/recherche-marches-afrique-europe-asie', [AboutController::class, 'mission1'])->name('mission1');
    Route::get('/developpement-de-produits-en-afrique-europe-et-asie', [AboutController::class, 'mission2'])->name('mission2');
    Route::get('/implantation-entreprises-en-afrique-france-espagne-et-dubai', [AboutController::class, 'mission3'])->name('mission3');
    Route::get('/connecter-les-entreprises-africaines-a-europe-et-asie', [AboutController::class, 'mission4'])->name('mission4');

    Route::get('/nos-solutions', [AboutController::class, 'solution'])->name('solution');
    Route::get('/promoteur-du-prix-d-excellence-international', [AboutController::class, 'solution1'])->name('solution1');
    Route::get('/diner-des-chefs-d-entreprises', [AboutController::class, 'solution2'])->name('solution2');
    Route::get('/diner-des-investisseurs', [AboutController::class, 'solution3'])->name('solution3');
    Route::get('/conference-forum', [AboutController::class, 'solution4'])->name('solution4');
    Route::get('/rencontre-b2b-b2c', [AboutController::class, 'solution5'])->name('solution5');
    Route::get('/networking-partenariat-avec-l-afrique', [AboutController::class, 'solution6'])->name('solution6');

    // Magazine
    Route::get('/notre-magazine', [AboutController::class, 'magazine'])->name('magazine');

    /*
    |--------------------------------------------------------------------------
    | Networking, Références & Prix
    |--------------------------------------------------------------------------
    */
    Route::get('/networking-reseautage', [NetworkingController::class, 'index'])->name('networking.index');
    Route::get('/nos-references', [NosLaureatsController::class, 'index'])->name('laureat.index');
    Route::get('/promoteur-d-excellence', [PrixExcellenceController::class, 'index'])->name('prix.index');

    /*
    |--------------------------------------------------------------------------
    | Historique & Événements passés
    |--------------------------------------------------------------------------
    */
    Route::get('/nos-historiques', [HistoriqueController::class, 'historique'])->name('historique.index');
    Route::get('/publi-reportage', [HistoriqueController::class, 'reportage'])->name('reportage');
    Route::get('/evenement-en-cours', [HistoriqueController::class, 'event'])->name('event');
    Route::get('/historique/diner-des-chefs-entreprises', [HistoriqueController::class, 'diner'])->name('diner');
    Route::get('/historique/prix-international-excellence', [HistoriqueController::class, 'prix'])->name('prix');
    Route::get('/historique/retro-prix-international-excellence', [HistoriqueController::class, 'retro'])->name('retro');

    /*
    |--------------------------------------------------------------------------
    | Contact
    |--------------------------------------------------------------------------
    */
    Route::get('/nous-contacter', [ContactController::class, 'index'])->name('contact.index');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');

    /*
    |--------------------------------------------------------------------------
    | Appel à la candidature
    |--------------------------------------------------------------------------
    */
    Route::get('/appel-a-la-candidature', [CandidatureController::class, 'index'])->name('excellence.index');
    Route::get('/appel-a-la-candidature/inscription', [CandidatureController::class, 'indexAppelCandidature'])->name('appel.formulaire');
    Route::post('/appel-a-la-candidature/inscription', [CandidatureController::class, 'storeAppelCandidature'])->name('appel.store');


    /*
    |--------------------------------------------------------------------------
    | Appel à la candidature - Impact Féminin
    |--------------------------------------------------------------------------
    */
    Route::get('/impact-feminin/candidature', [App\Http\Controllers\ImpactFemininController::class, 'create'])->name('impact_feminin.candidature.create');
    Route::post('/impact-feminin/candidature', [App\Http\Controllers\ImpactFemininController::class, 'store'])->name('impact_feminin.candidature.store');

    /*
    |--------------------------------------------------------------------------
    | Réservation de place - Impact Féminin
    |--------------------------------------------------------------------------
    */
    Route::get('/reservation', [App\Http\Controllers\ReservationController::class, 'create'])->name('reservation.create');
    Route::post('/reservation', [App\Http\Controllers\ReservationController::class, 'store'])->name('reservation.store');



    /*
    |--------------------------------------------------------------------------
    | Générer le pdf de candidature
    |--------------------------------------------------------------------------
    */
    Route::get('/candidature/{id}/telecharger', function ($id) {
        $candidature = Candidature::findOrFail($id);
        $data = $candidature->toArray();

        $pdf = Pdf::loadView('pdf.candidature', ['data' => $data]);

        return $pdf->download('candidature_' . now()->format('Ymd_His') . '.pdf');
    })->name('candidature.telecharger');



    /*
    |--------------------------------------------------------------------------
    | Footer : Mentions légales & Conditions
    |--------------------------------------------------------------------------
    */
    Route::get('/mentions-legales', [MentionsLegalesController::class, 'index'])->name('mentions.index');
    Route::get('/conditions-utilisations', [ConditionsUtilisationsController::class, 'index'])->name('condition.index');

    /*
    |--------------------------------------------------------------------------
    | Espace membre (auth)
    |--------------------------------------------------------------------------
    */
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->middleware(['auth', 'verified'])->name('dashboard');

    // Auth routes
    require __DIR__ . '/auth.php';
});

/*
|--------------------------------------------------------------------------
| Routes Admin
|--------------------------------------------------------------------------
*/

Route::prefix('admin')->group(function () {
    // Connexion admin
    Route::get('/login', [App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login');
    Route::post('/login', [App\Http\Controllers\Admin\AuthController::class, 'doLogin']);
    Route::delete('/logout', [App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');

    // Routes protégées par le middleware auth
    Route::middleware('auth')->name('admin.')->group(function () {
        Route::resource('home', \App\Http\Controllers\Admin\HomeController::class);
        Route::resource('contact', \App\Http\Controllers\Admin\ContactController::class);
        Route::resource('candidatures', \App\Http\Controllers\Admin\CandidatureController::class);
        Route::get('candidatures-export', [\App\Http\Controllers\Admin\CandidatureController::class, 'export'])->name('candidatures.export');
        Route::resource('impact-feminin', \App\Http\Controllers\Admin\ImpactFemininController::class);
        Route::get('impact-feminin-export', [\App\Http\Controllers\Admin\ImpactFemininController::class, 'export'])->name('impact-feminin.export');
        Route::resource('reservations', \App\Http\Controllers\Admin\ReservationController::class);
        Route::get('reservations-export', [\App\Http\Controllers\Admin\ReservationController::class, 'export'])->name('reservations.export');
    });
});
