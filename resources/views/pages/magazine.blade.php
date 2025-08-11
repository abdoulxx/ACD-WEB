@extends("layouts.app")
@section('title', __("magazine.magazine.titre"))
@section("content")



<div class="clearfix"></div>


<section class="background-image110 padding-top-bottom3 text-center">
<div class="container">
<div class="row nopadding">
    
    <h2 class="big2 white font-weight8">{{ __("magazine.magazine.titre") }}</h2>
    
</div>
</div>
</section><!-- end section -->

<section class="padding-top-bottom3">
<div class="container">
<div class="row nopadding">
	
    <div class="owl-carousel four">
    
        <div class="item">
            <div class="col-md-6 col-sm-6 marbo-resp4">
                <a href="{{ asset("assets/images/magazine/MAGAZINE PRIX D'EXCELLENCE 2024.pdf") }}" target="_blank"><div class="text-center border4 darkgray padding-percent2 hover-shadow8">
                <img src="{{ asset("assets/images/magazine/1.jpg") }}" alt="" class="respoimg margin-bottom3" />
                <h2 class="playfair big font-weight3 margin-bottom2">{{ __("magazine.magazine.fr") }}</h2>
                <h6 class="font-weight4 line-height4"></h6>
            </div></a>
            </div><!-- end col -->
        
            <div class="col-md-6 col-sm-6">
                <a href="{{ asset("assets/images/magazine/MAGAZINE PRIX D'EXCELLENCE 2024 EN.pdf") }}" target="_blank"><div class="text-center border4 darkgray padding-percent2 hover-shadow8">
                <img src="{{ asset("assets/images/magazine/2.jpg") }}" alt="" class="respoimg margin-bottom3" />
                <h2 class="playfair big font-weight3 margin-bottom2">{{ __("magazine.magazine.en") }}</h2>
                <h6 class="font-weight4 line-height4"></h6>
            </div></a>
            </div><!-- end col -->
        </div><!-- end item slide -->
        
        <div class="item">
            <div class="col-md-6 col-sm-6 marbo-resp4">
                <a href="#" target="_blank"><div class="text-center border4 darkgray padding-percent2 hover-shadow8">
                <img src="{{ asset("assets/images/magazine/3.jpg") }}" alt="" class="respoimg margin-bottom3" />
                <h2 class="playfair big font-weight3 margin-bottom2">{{ __("magazine.magazine.es") }}</h2>
                <h6 class="font-weight4 line-height4"></h6>
            </div></a>
            </div><!-- end col -->
    
        </div><!-- end item slide -->
    
	</div>
    
    
</div>
</div>
</section><!-- end section -->


@endsection
