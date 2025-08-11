@extends("layouts.app")
@section('title', __("solution.item4.title"))
@section("content")

<div class="clearfix"></div>


<section class="background-image110 padding-top-bottom3 text-center">
<div class="container">
<div class="row nopadding">
	
	<h2 class="big2 white font-weight8"></h2>
    
</div>
</div>
</section><!-- end section -->

<div class="clearfix"></div>

<section class="padding-top-bottom4">
    <div class="container">
    <div class="row nopadding">
        
        <div class="col-md-6 text-left marbo-resp">
            <h2 class="big font-weight7 margin-bottom3">{{ __("solution.item4.title") }}</h2>
            
            <div class="clearfix margin-bottom2"></div>
            <p>{{ __("solution.item4.para1") }}</p>
     <div class="clearfix margin-bottom2"></div>
    <p class="margin-bottom3"> {{ __("solution.item4.para2") }}</p>
    
       <a href="{{ route("excellence.index") }}" class="button6 sty3">{{ __("solution.item4.button") }}</a>
        </div>
        
        <div class="col-md-6">
            <img src="{{ asset("assets/images/solutions/4.jpg") }}" alt="" class="respoimg radius2">
        </div>
            
    </div>
    </div>
    </section>
    
    
    <div class="clearfix"></div>


@endsection
