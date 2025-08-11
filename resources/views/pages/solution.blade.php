
@extends("layouts.app")
@section('title', __("solution.solution.titre"))
@section("content")


<div class="clearfix"></div>


<section class="background-image110 padding-top-bottom3 text-center">
<div class="container">
<div class="row nopadding">
	
	<h2 class="big2 white font-weight8">{{ __("solution.solution.titre") }}</h2>
    
</div>
</div>
</section><!-- end section -->

<div class="clearfix"></div>
   
<section class="bg-color-white padding-top-bottom4 text-center">
<div class="container">
<div class="row nopadding">
    
  <div class="col-md-4 marbo-resp4 animate" data-anim-type="fadeIn" data-anim-delay="300">
    <img src="{{ asset("assets/images/solutions/1.jpeg") }}" alt="" class="respoimg center hover-shadow10" />
        <h5 class="font-weight5 margin-top3 margin-bottom">{{ __("solution.solution.solution1.titre") }}</h5>
        <p  class="margin-bottom3">{{ __("solution.solution.solution1.content") }}</p>
          <a href="{{ route('solution1') }}" class="button6 sty3">{{ __("solution.solution.button") }}</a>
    </div><!-- end col -->
  
    <div class="col-md-4 marbo-resp4 animate" data-anim-type="fadeIn" data-anim-delay="400">
    <img src="{{ asset("assets/images/solutions/2.jpg") }}" alt="" class="respoimg center hover-shadow10" />
        <h5 class="font-weight5 margin-top3 margin-bottom">{{ __("solution.solution.solution2.titre") }} </h5>
        <p class="margin-bottom3">{{ __("solution.solution.solution2.content") }}</p>
        <a href="{{ route('solution2') }}" class="button6 sty3">{{ __("solution.solution.button") }}</a>
    </div><!-- end col -->
    
    <div class="col-md-4 animate" data-anim-type="fadeIn" data-anim-delay="500">
    <img src="{{ asset("assets/images/solutions/3.jpg") }}" alt="" class="respoimg center hover-shadow10" />
        <h5 class="font-weight5 margin-top3 margin-bottom">{{ __("solution.solution.solution3.titre") }}</h5>
        <p class="margin-bottom3">{{ __("solution.solution.solution3.content") }}</p>
        <a href="{{ route('solution3') }}" class="button6 sty3">{{ __("solution.solution.button") }}</a>
    </div><!-- end col -->



       <div class="clearfix margin-bottom2"></div>

     <div class="col-md-4 animate" data-anim-type="fadeIn" data-anim-delay="500">
    <img src="{{ asset("assets/images/solutions/4.jpg") }}" alt="" class="respoimg center hover-shadow10" />
        <h5 class="font-weight5 margin-top3 margin-bottom">{{ __("solution.solution.solution4.titre") }}</h5>
        <p class="margin-bottom3">{{ __("solution.solution.solution4.content") }}</p>
        <a href="{{ route('solution4') }}" class="button6 sty3">{{ __("solution.solution.button") }}</a>
    </div><!-- end col -->

     <div class="col-md-4 animate" data-anim-type="fadeIn" data-anim-delay="500">
    <img src="{{ asset("assets/images/solutions/5.jpg") }}" alt="" class="respoimg center hover-shadow10" />
        <h5 class="font-weight5 margin-top3 margin-bottom">{{ __("solution.solution.solution5.titre") }}</h5>
        <p class="margin-bottom3">{{ __("solution.solution.solution5.content") }}</p>
        <a href="{{ route('solution5') }}" class="button6 sty3">{{ __("solution.solution.button") }}</a>
    </div><!-- end col -->


    <div class="col-md-4 animate" data-anim-type="fadeIn" data-anim-delay="500">
    <img src="{{ asset("assets/images/solutions/6.jpg") }}" alt="" class="respoimg center hover-shadow10" />
        <h5 class="font-weight5 margin-top3 margin-bottom">{{ __("solution.solution.solution6.titre") }}</h5>
        <p class="margin-bottom3">{{ __("solution.solution.solution6.content") }}</p>
        <a href="{{ route('solution6') }}" class="button6 sty3">{{ __("solution.solution.button") }}</a>
    </div><!-- end col -->
    
</div>
</div>
</section><!-- end section -->

<div class="clearfix"></div>


@endsection
