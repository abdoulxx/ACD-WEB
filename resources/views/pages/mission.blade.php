@extends("layouts.app")
@section('title', __("mission.mission.titre"))
@section("content")


<div class="clearfix"></div>


<section class="background-image110 padding-top-bottom3 text-center">
<div class="container">
<div class="row nopadding">
	
	<h2 class="big2 white font-weight8">{{ __("mission.mission.titre") }}</h2>
    
</div>
</div>
</section><!-- end section -->

<div class="clearfix"></div>

<section class="bg-color-white padding-top-bottom4 text-center">
<div class="container">
<div class="row nopadding">
    
    <div class="col-md-3 marbo-resp4 animate" data-anim-type="fadeIn" data-anim-delay="300">
        <img src="{{ asset("assets/images/missions/1.jpg") }}" alt="" class="respoimg center hover-shadow10" />
        <h5 class="font-weight5 margin-top3 margin-bottom">{{ __("mission.mission.mission1") }}</h5>
        <p class="margin-bottom5"></p>
         <a href="{{ route('mission1') }}" class="button6 sty3">{{ __("mission.mission.button") }}</a>
    </div><!-- end col -->
    
    <div class="col-md-3 marbo-resp4 animate" data-anim-type="fadeIn" data-anim-delay="400">
        <img src="{{ asset("assets/images/missions/2.jpg") }}" alt="" class="respoimg center hover-shadow10" />
        <h5 class="font-weight5 margin-top3 margin-bottom">{{ __("mission.mission.mission2") }}</h5>
         <p class="margin-bottom3"></p>
         <a href="{{ route('mission2') }}" class="button6 sty3">{{ __("mission.mission.button") }}</a>
    </div><!-- end col -->
    
    <div class="col-md-3 animate" data-anim-type="fadeIn" data-anim-delay="500">
        <img src="{{ asset("assets/images/missions/3.jpg") }}" alt="" class="respoimg center hover-shadow10" />
        <h5 class="font-weight5 margin-top3 margin-bottom">{{ __("mission.mission.mission3") }}</h5>
        <p class="margin-bottom3"></p>
         <a href="{{ route('mission3') }}" class="button6 sty3">{{ __("mission.mission.button") }}</a>
    </div><!-- end col -->

       <div class="col-md-3 marbo-resp4 animate" data-anim-type="fadeIn" data-anim-delay="300">
        <img src="{{ asset("assets/images/missions/4.jpg") }}" alt="" class="respoimg center hover-shadow10" />
        <h5 class="font-weight5 margin-top3 margin-bottom">{{ __("mission.mission.mission4") }}</h5>
         <p class="margin-bottom3"></p>
         <a href="{{ route('mission4') }}" class="button6 sty3">{{ __("mission.mission.button") }}</a>
    </div><!-- end col -->
    
    
</div>
</div>
</section><!-- end section -->

<div class="clearfix"></div>



@endsection
