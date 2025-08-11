
@extends("layouts.app")
@section('title', __('mot.mot.titre'))
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
<div class="row">

    <div class="col-md-4 col-sm-4 marbo-resp12 animate" data-anim-type="fadeInUp" data-anim-delay="400">
        <img src="{{ asset("assets/images/mot/1.jpg") }}" alt="" class="respoimg" />
    </div><!-- end col -->
    
   
    
    <div class="col-md-8 col-sm-8 animate" data-anim-type="fadeInUp" data-anim-delay="800">

        <h2 class="font-weight7">{{ __("mot.mot.titre") }}</h2>

        <hr class="style-three color2 quarter margin-top2">
        <p class="clearfix margin-bottom"></p>
        <p class="margin-bottom2">
            {{ __("mot.mot.para1") }}
        </p>
        <p>{{ __("mot.mot.para2") }}
        </p>
         <div class="clearfix margin-bottom2"></div>
         <p>
            {{ __("mot.mot.para3") }}
         </p>

         <div class="clearfix margin-bottom2"></div>
         <p>
            {{ __("mot.mot.para4") }}
         </p>

           <br/>
        <p><strong>Auguste César DEZA</strong></p>
        <p>  <img src="{{ asset("assets/images/mot/signature.png") }}" style="width:100px"></p>
    </div><!-- end col -->

</div>
</div>
</section><!-- end section -->

<div class="clearfix"></div>

@endsection
