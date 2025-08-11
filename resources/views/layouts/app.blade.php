<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""  />
    <meta name="keywords" content="" />
    
    <title>@yield('title') - ACD CORPORATE SERVCICES</title>
    
    <!-- Favicon --> 
  <link rel="shortcut icon" href="{{ asset("assets/images/logo/favicon.jpg") }}">
    <!-- google web fonts -->
    <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,100italic,200,200italic,300,300italic,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700italic,700,800,800italic" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic" rel="stylesheet">
    
    <!-- Bootstrap -->
    <link href="{{ asset("assets/css/bootstrap/bootstrap.min.css") }}" rel="stylesheet">
    
  <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <!-- ######### CSS STYLES ######### -->
  <link rel="stylesheet" href="{{ asset("assets/css/reset.css") }}" type="text/css" />
  <link rel="stylesheet" href="{{ asset("assets/css/style.css") }}" type="text/css" />
    
    <!-- font icons -->
    <link rel="stylesheet" href="{{ asset("assets/css/font-awesome/css/font-awesome.min.css") }}">
  <link rel="stylesheet" type="text/css" href="{{ asset("assets/css/simpleline-icons/css/simple-line-icons.css") }}" media="screen" />
    <link rel="stylesheet" href="{{ asset("assets/css/et-linefont/etlinefont.css") }}">
    
    <!-- animations -->
    <link href="{{ asset("assets/js/animations/css/animations.min.css") }}" rel="stylesheet" type="text/css" media="all" />
    
    <!-- responsive devices styles -->
  <link rel="stylesheet" media="screen" href="{{ asset("assets/css/responsive-leyouts.css") }}" type="text/css" />
    
    <!-- mega navigation menu -->
    <link rel="stylesheet" href="{{ asset("assets/js/megamenu/stylesheets/screen.css") }}">
    
    <!-- masterslider -->
    <link rel="stylesheet" href="{{ asset("assets/js/masterslider/style/masterslider.css") }}" />
  <link href="{{ asset("assets/js/masterslider/skins/default/style.css") }}" rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="{{ asset("assets/js/masterslider/style/style.css") }}">
  
    <link href='{{ asset("assets/js/masterslider/ms-tablet-style.css") }}' rel='stylesheet' type='text/css'>
    <link href='{{ asset("assets/js/masterslider/ms-partialview.css") }}' rel='stylesheet' type='text/css'>
    
    <!-- cubeportfolio -->
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/js/cubeportfolio/css/cubeportfolio.min.css") }}">
    
    <!-- horizontal slider -->
    <link rel="stylesheet" href="{{ asset("assets/js/hslider/style.css") }}">
    
    <link rel="stylesheet" href="{{ asset("assets/js/sheetslider/sheet.css") }}">
    
    <!-- owl carousel -->
    <link rel='stylesheet' type='text/css' href='{{ asset("assets/js/owlcarousel/assets/owl.carousel.css") }}' />
    
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/js/lightslider/lightslider.min.css") }}">
    
    <!-- image hover effects -->
  <link rel="stylesheet" type="text/css" href="{{ asset("assets/js/imgheffects/set1.css") }}" />
    
    <!-- tabs -->
    <link rel='stylesheet' type='text/css' href='{{ asset("assets/js/tabs/one/opentabby.css") }}' />
    
    <link rel="stylesheet" href="{{ asset("assets/js/jFlickrFeed/style.css") }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset("assets/js/lightslider/lightslider.min.css") }}">
    <link rel="stylesheet" type="text/css" href="{{ asset("assets/js/lightbox/simplelightbox.css") }}" />

  
    
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Modern navbar styles -->
    <link rel="stylesheet" href="{{ asset("assets/css/modern-navbar.css") }}">
    
</head>
<body>
<div class="site-wrapper">

<nav class="navbar navbar-expand-lg navbar-light bg-white fixed-top modern-navbar-acd">
  <div class="container">
    <!-- Logo -->
    <a class="navbar-brand" href="/" title="ACD Corporate Services">
      <img src="{{ asset('assets/images/logo/1.png') }}" alt="ACD Logo" style="height: 50px; width: auto;">
    </a>

    <!-- Mobile toggle button -->
    <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navigation menu -->
    <div class="collapse navbar-collapse" id="navbarNav">
      <!-- Main menu items closer to center -->
      <ul class="navbar-nav ms-auto">
        <li class="nav-item">
          <a class="nav-link text-uppercase fw-bold text-dark {{ Request::is('/') ? 'active text-danger' : '' }}" href="/">{{ __("menu.accueil") }}</a>
        </li>
        
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-uppercase fw-bold text-secondary" href="#" id="navbarDropdown1" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ __("menu.presentation.menu1") }}
          </a>
          <ul class="dropdown-menu shadow border-0" aria-labelledby="navbarDropdown1">
            <li><a class="dropdown-item" href="{{ route("about.index") }}">{{ __("menu.presentation.about") }}</a></li>
            <li><a class="dropdown-item" href="{{ route("mot") }}">{{ __("menu.presentation.mot") }}</a></li>
            <li><a class="dropdown-item" href="{{ route("team") }}">{{ __("menu.presentation.equipe") }}</a></li>
            <li><a class="dropdown-item" href="{{ route("laureat.index") }}">{{ __("menu.presentation.reference") }}</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-uppercase fw-bold text-secondary" href="#" id="navbarDropdown2" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ __("menu.identite.menu2") }}
          </a>
          <ul class="dropdown-menu shadow border-0" aria-labelledby="navbarDropdown2">
            <li><a class="dropdown-item" href="{{ route("mission") }}">{{ __("menu.identite.mission") }}</a></li>
            <li><a class="dropdown-item" href="{{ route("solution") }}">{{ __("menu.identite.solution") }}</a></li>
            <li><a class="dropdown-item" href="{{ route("magazine") }}">{{ __("menu.identite.magazine") }}</a></li>
          </ul>
        </li>

        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-uppercase fw-bold text-secondary" href="#" id="navbarDropdown3" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{ __("menu.actualite.menu3") }}
          </a>
          <ul class="dropdown-menu shadow border-0" aria-labelledby="navbarDropdown3">
            <li><a class="dropdown-item" href="{{ route("historique.index") }}">{{ __("menu.actualite.historique") }}</a></li>
            <li><a class="dropdown-item" href="{{ route("reportage") }}">{{ __("menu.actualite.reportage") }}</a></li>
            <li><a class="dropdown-item" href="{{ route("event") }}">{{ __("menu.actualite.event") }}</a></li>
          </ul>
        </li>
      </ul>

      <!-- Right side items - very close to menu -->
      <ul class="navbar-nav align-items-center ms-1">
        <!-- Language selector dropdown -->
        <li class="nav-item dropdown me-2">
          <a class="nav-link dropdown-toggle d-flex align-items-center language-selector" href="#" id="languageDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset('assets/images/flags/' . app()->getLocale() . '-flag.png') }}" alt="{{ app()->getLocale() }}" style="width: 20px; margin-right: 8px;">
            <span class="text-capitalize fw-semibold">{{ app()->getLocale() === 'fr' ? 'Français' : (app()->getLocale() === 'en' ? 'English' : 'Español') }}</span>
          </a>
          <ul class="dropdown-menu dropdown-menu-end shadow border-0" aria-labelledby="languageDropdown">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
              <li>
                <a class="dropdown-item d-flex align-items-center" 
                   rel="alternate" 
                   hreflang="{{ $localeCode }}" 
                   href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                  <img src="{{ asset('assets/images/flags/' . $localeCode . '-flag.png') }}" 
                       alt="{{ $properties['native'] }}" 
                       style="width: 20px; margin-right: 8px;">
                  {{ $properties['native'] }}
                </a>
              </li>
            @endforeach
          </ul>
        </li>

        <!-- Application button -->
        <li class="nav-item">
          <a href="{{ route("excellence.index") }}" class="btn btn-candidature text-white text-uppercase fw-bold px-4 py-2 rounded-pill">
            {{ __("menu.register") }}
          </a>
        </li>
        
        <!-- Impact Féminin button 
        <li class="nav-item">
          <a href="https://app.acdcorporateservices.com/" target="_blank" class="btn btn-impact-feminin text-white text-uppercase fw-bold px-4 py-2 rounded-pill">
            Impact Féminin
          </a>
        </li>
        -->
        <!-- Rencontre 2026 button 
        <li class="nav-item">
          <a href="https://plaquette.acdcorporateservices.com/" target="_blank" class="btn btn-rencontre-2026 text-white text-uppercase fw-bold px-4 py-2 rounded-pill">
            Rencontre 2026
          </a>
        </li>
        -->
      </ul>
    </div>
  </div>
</nav>
<!-- end navigation -->

<div class="clearfix"></div>

<!--- Body ---->
@yield('content')


<footer class="background-image82">
    <div class="row nopadding">
        
        <div id="triangle-down-center"></div>
        <p class="clearfix margin-bottom8"></p>
        
        <div class="container">
            
            <div class="col-md-7 col-sm-6 col-xs-12 marbo-resp4">
                <h6 class="white caps font-weight7 margin-bottom3">{{ __("footer.menu3.titre") }}</h6>
                <ul class="none valign3 left white opacity3">
                    <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; ANGRE - Soleil 3 - Villa 105 - Abidjan - CI</li>
                    <li><i class="fa fa-phone"></i>&nbsp; +97 15 06 80 56 67 / +225 05 96 79 08 02</li>
                    <li><a href="mailto:prix@acdcorporateservices.com" class="graylink7"><i class="fa fa-envelope"></i>&nbsp; prix@acdcorporateservices.com</a></li>
                    <hr>
                     <li><i class="fa fa-map-marker fa-lg"></i>&nbsp; Barcelone - CL FLORIDABLANCA NUM.98 P.EN PTA.2 - ESPAGNE</li>
                    <hr>
                </ul>
            </div><!-- end col -->
            
            <div class="col-md-3 col-sm-6 col-xs-12 marbo-resp4">
                <h6 class="white caps font-weight7 margin-bottom3">{{ __("footer.menu1.titre") }}</h6>
                <ul class="none valign3 left">
                    <li><a href="{{ route('about.index') }}" class="graylink7">{{ __("footer.menu1.titre") }}</a></li>
                    <li><a href="{{ route("mission") }}" class="graylink7">{{ __("footer.menu1.lien1") }}</a></li>
                    <li><a href="{{ route("contact.index") }}" class="graylink7">{{ __("footer.menu1.lien2") }}</a></li>
                    <li><a href="{{ route("laureat.index") }}" class="graylink7">{{ __("footer.menu1.lien3") }}</a></li>
                    <li><a href="{{ route("magazine") }}" class="graylink7">{{ __("footer.menu1.lien4") }}</a></li>
                    <li><a href="{{ route("event") }}" class="graylink7">{{ __("footer.menu1.lien5") }}</a></li>
                </ul>
            </div><!-- end col -->
            
            <div class="col-md-2 col-sm-6 col-xs-12 marbo-resp4">
                <h6 class="white caps font-weight7 margin-bottom3">{{ __("footer.menu2.titre") }}</h6>
                <ul class="none valign3 left">
                    <li><a href="https://web.facebook.com/ACDCORPORATESERVICES/" class="graylink7" target="_blank"><i class="fa fa-facebook iconsize14 margin-right1"></i> Facebook</a></li>
                    <li><a href="https://twitter.com/acd_corporate" class="graylink7" target="_blank"><i class="fa fa-twitter iconsize14 margin-right1"></i> Twitter</a></li>
                    <li><a href=" https://www.instagram.com/acd_corporateservices/" class="graylink7" target="_blank"><i class="fa fa-instagram iconsize14 margin-right1"></i> Instagram</a></li>
                    <li><a href="https://www.linkedin.com/company/76147121/" class="graylink7" target="_blank"><i class="fa fa-linkedin iconsize14 margin-right1"></i> Linkedin</a></li>
                    <li><a href="https://www.youtube.com/@acdcorporateservices6635" class="graylink7" target="_blank"><i class="fa fa-youtube iconsize14 margin-right1"></i> Youtube</a></li>
                </ul>
            </div><!-- end col -->
            
           
            
            <p class="clearfix margin-bottom6"></p>
            
            <div class="padding-top3 border-top-opacity2">
                <img src="{{ asset("assets/images/logo-icon-light.png") }}" alt="" class="left opacity4" /><p class="sfont white opacity2 right">Copyright © 2024 <a href="" class="graylink7">ACD CORPORATE SERVICES</a> | {{ __("footer.copyright.titre") }}.</p>
            </div>
            
            <p class="clearfix margin-bottom3"></p>
            
        </div>
        
    </div>
    </footer><!-- end footer -->
    
    
    <a href="#" class="scrollup">Scroll</a><!-- end scroll to top of the page-->
    
    </div>
    
   



<!-- ######### JS FILES ######### -->
<!-- get jQuery from the google apis -->
<script src="{{ asset('assets/js/universal/jquery.js') }}"></script>
<!-- Bootstrap 5 JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Modern navbar functionality
  $(document).ready(function() {
    // Add smooth scrolling
    $('a[href^="#"]').on('click', function(event) {
      var target = $(this.getAttribute('href'));
      if( target.length ) {
        event.preventDefault();
        $('html, body').stop().animate({
          scrollTop: target.offset().top - 80
        }, 1000);
      }
    });

    // Add active class based on current page
    var currentPath = window.location.pathname;
    $('.navbar-nav .nav-link').each(function() {
      var linkPath = $(this).attr('href');
      if (linkPath === currentPath) {
        $(this).addClass('active text-danger');
      }
    });

    // Navbar scroll effect
    $(window).scroll(function() {
      if ($(window).scrollTop() > 50) {
        $('.navbar').addClass('navbar-scrolled');
      } else {
        $('.navbar').removeClass('navbar-scrolled');
      }
    });
  });
</script>
// ...existing code...

<script src="{{ asset("assets/js/masterslider/tab.js") }}"></script>

<script src="{{ asset("assets/js/scrolltotop/totop.js") }}"></script>

<script src="{{ asset("assets/js/cubeportfolio/js/jquery.cubeportfolio.min.js") }}"></script>
<script src="{{ asset("assets/js/cubeportfolio/js/main.js") }}"></script>

<script src="{{ asset("assets/js/jFlickrFeed/jflickrfeed.min.js") }}"></script>


<script src="{{ asset("assets/js/parallax/parallax.js") }}"></script>

<script src="{{ asset("assets/js/lightslider/lightslider.min.js") }}"></script>
<script>
    $('#lightSlider').lightSlider({
        gallery: true,
        item: 1,
        loop: true,
        slideMargin: 0,
        thumbItem: 3
    });
</script>

<script src='{{ asset("assets/js/tabs/one/opentabby.js") }}'></script>
<script>
    // tabs
    $(".openTabby").openTabby();
    $(".openTabby2").openTabby2();

</script>

<script>
  $(document).ready(function () {
      var image_b = $('#basicuse').data('image-b');
      var image_s = $('#basicuse').data('image-s');
      var title = $('#basicuse').data('title');

      $('#basicuse').jflickrfeed({
          limit: 6,
          qstrings: {
              id: '133294431@N08'
          },
          itemTemplate:
              '<li>' +
              '<a href="' + image_b + '"><img src="' + image_s + '" alt="' + title + '" /></a>' +
              '</li>'
      });
  });
</script>

  
  

<script src="{{ asset("assets/js/owlcarousel/owl.carousel.js") }}"></script>
<script src="{{ asset("assets/js/owlcarousel/owl.carousel.min.js") }}"></script>
<script src="{{ asset("assets/js/owlcarousel/owl-custom.js") }}"></script>
<script src="{{ asset("assets/js/cform/form-validate.js") }}"></script>
<script src="{{ asset("assets/js/universal/custom.js") }}"></script>
<script src="{{ asset("assets/js/aninum/jquery.animateNumber.min.js") }}"></script>


<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

  

<script src="{{ asset("assets/js/lightbox/simple-lightbox.js") }}"></script>
<script>
	$(function(){
		var $gallery = $('.gallery a').simpleLightbox();

		$gallery.on('show.simplelightbox', function(){
			console.log('Requested for showing');
		})
		.on('shown.simplelightbox', function(){
			console.log('Shown');
		})
		.on('close.simplelightbox', function(){
			console.log('Requested for closing');
		})
		.on('closed.simplelightbox', function(){
			console.log('Closed');
		})
		.on('change.simplelightbox', function(){
			console.log('Requested for change');
		})
		.on('next.simplelightbox', function(){
			console.log('Requested for next');
		})
		.on('prev.simplelightbox', function(){
			console.log('Requested for prev');
		})
		.on('nextImageLoaded.simplelightbox', function(){
			console.log('Next image loaded');
		})
		.on('prevImageLoaded.simplelightbox', function(){
			console.log('Prev image loaded');
		})
		.on('changed.simplelightbox', function(){
			console.log('Image changed');
		})
		.on('nextDone.simplelightbox', function(){
			console.log('Image changed to next');
		})
		.on('prevDone.simplelightbox', function(){
			console.log('Image changed to prev');
		})
		.on('error.simplelightbox', function(e){
			console.log('No image found, go to the next/prev');
			console.log(e);
		});
	});
</script>

<script src="{{ asset("assets/js/scrolltotop/totop.js") }}"></script>
<script src="{{ asset("assets/js/parallax/parallax.js") }}"></script>
<script src="{{ asset("assets/js/universal/custom.js") }}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>



<script>
  function updateDestination() {
      var editionSelect = document.getElementById("edition");
      var destinationSpan = document.getElementById("destination");

      // Récupérer la valeur sélectionnée
      var selectedEdition = editionSelect.value;

      // Mettre à jour la destination en fonction de l'édition sélectionnée
      switch (selectedEdition) {
          case "06 AU 10 Mai":
              destinationSpan.textContent = "Destination 1";
              break;
          case "05 au 10 Août":
              destinationSpan.textContent = "Destination 2";
              break;
          case "11 au 15 Novembre":
              destinationSpan.textContent = "Destination 3";
              break;
          default:
              destinationSpan.textContent = "Aucune édition choisie";
              break;
      }
  }
</script>
    
<script src="//code.tidio.co/hhbmtsbdx2kuuw5fbsuta6g8dmqaqmsi.js" async></script>

</body>

<!-- Mirrored from codelayers.net/templates/aikra/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Mon, 15 Jan 2024 14:26:07 GMT -->
</html>