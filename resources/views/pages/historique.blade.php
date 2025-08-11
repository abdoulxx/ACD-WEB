@extends("layouts.app")
@section('title', __("historique.historique.titre") )
@section("content")


<div class="clearfix"></div>


<section class="background-image110 padding-top-bottom3 text-center">
<div class="container">
<div class="row nopadding">
	
	<h2 class="big2 white font-weight8">{{ __("historique.historique.titre") }}</h2>
    
</div>
</div>
</section><!-- end section -->

<div class="clearfix"></div>
   

<section class="padding-top-bottom3">
<div class="container">
<div class="row nopadding">

        
    <div class="col-md-4">
        <div class="img-hover-text11 text-center">
            <img src="{{ asset("assets/images/historique/1.jpg") }}" alt="" class="respoimg">
            <div class="distext">
                <h4 class="white caps font-weight8 line-height margin-bottom2">{{ __("historique.historique.diner") }} </h4>
                <h6 class="small2 white font-weight4 line-height margin-bottom3"><i class="fa fa-tags" aria-hidden="true"></i>&nbsp; Abidjan &nbsp;&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; 06/01/2024</h6>
                <div class="hidtext">
                    <div class="button24 caps letter-spacing1"><a href="{{ route("diner") }}">{{ __("historique.historique.button") }}</a></div>
                </div>
            </div>
        </div>
    </div><!-- end col -->
    
    <div class="col-md-4">
        <div class="img-hover-text11 text-center">
            <img src="{{ asset("assets/images/historique/2.jpg") }}" alt="" class="respoimg">
            <div class="distext">
                <h4 class="white caps font-weight8 line-height margin-bottom2">{{ __("historique.historique.prix1") }}</h4>
                <h6 class="small2 white font-weight4 line-height margin-bottom3"><i class="fa fa-tags" aria-hidden="true"></i>&nbsp; Dubaï &nbsp;&nbsp; <i class="fa fa-calendar" aria-hidden="true"></i>&nbsp; 11/11/2023</h6>
                <div class="hidtext">
                    <div class="button24 caps letter-spacing1"><a href="{{ route('prix') }}">{{ __("historique.historique.button") }}</a></div>
                </div>
            </div>
        </div>
    </div><!-- end col -->
    
    <div class="col-md-4">
        <div class="img-hover-text11 text-center">
            <img src="{{ asset("assets/images/historique/3.jpg") }}" alt="" class="respoimg">
            <div class="distext">
                <h4 class="white caps font-weight8 line-height margin-bottom2">{{ __("historique.historique.prix2") }}</h4>
                <h6 class="small2 white font-weight4 line-height margin-bottom3"><i class="fa fa-tags" aria-hidden="true"></i>&nbsp; DubaÏ &nbsp;&nbsp; </h6>
                <div class="hidtext">
                    <div class="button24 caps letter-spacing1"><a href="{{ route("retro") }}">{{ __("historique.historique.button") }}</a></div>
                </div>
            </div>
        </div>
    </div><!-- end col -->
    
   
</div>        
</div>
</section><!-- end section -->

<div class="clearfix"></div>




@endsection
