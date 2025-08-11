@extends("layouts.app")
@section('title', __('about.about.titre'))
@section("content")

<div class="clearfix"></div>


<section class="background-image110 padding-top-bottom3 text-center">
<div class="container">
<div class="row nopadding">
	
	<h2 class="big2 white font-weight8">{{ __("about.about.titre") }}</h2>
    
</div>
</div>
</section><!-- end section -->

<div class="clearfix"></div>

<section class="padding-top-bottom4">
<div class="container">
<div class="row nopadding">
    
    <div class="col-md-6 text-left marbo-resp">
        <h2 class="big font-weight7 margin-bottom3">{{ __("about.about.titre1") }}</h2>
        
        <div class="clearfix margin-bottom2"></div>
        <p>{{ __("about.about.para1") }}</p>

        <p>{{ __("about.about.para2") }}</p>
    </div>
    
    <div class="col-md-6">
		<img src="{{ asset("assets/images/about/1.jpg") }}" alt="" class="respoimg radius2">
    </div>
        
</div>
</div>
</section>


<div class="clearfix"></div>





@endsection
