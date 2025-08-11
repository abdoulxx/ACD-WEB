
@extends("layouts.app")
@section('title', __("reportage.reportage.titre"))
@section("content")



<div class="clearfix"></div>


<section class="background-image110 padding-top-bottom3 text-center">
<div class="container">
<div class="row nopadding">
	
	<h2 class="big2 white font-weight8">{{ __("reportage.reportage.titre") }}</h2>
    
</div>
</div>
</section>

<div class="clearfix"></div>

<div class="container padding-top-bottom3">
<div class="row nopadding">
    <div id="js-grid-mosaic" class="cbp cbp-l-grid-mosaic">
        
        <div class="cbp-item motion graphic">
            <a href="{{ asset("assets/videos/diner.mp4") }}" class="cbp-caption cbp-lightbox" data-title="Dîner des Chefs d'Entreprises">
                <div class="cbp-caption-defaultWrap">
                    <img src="{{ asset("assets/images/videos/diner.jpg") }}" alt="" />
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">{{ __("reportage.reportage.diner") }}</div>
                            <div class="cbp-l-caption-desc">{{ __("reportage.reportage.button") }}</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="cbp-item print graphic">
            <a href="https://www.youtube.com/watch?v=1NAR_xuF11E" class="cbp-caption cbp-lightbox" data-title="RIX D'EXCELLENCE INTERNATIONAL 2022">
                <div class="cbp-caption-defaultWrap">
                    <img src="{{ asset("assets/images/videos/7.jpg") }}" alt="" />
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">{{ __("reportage.reportage.prix1") }}</div>
                            <div class="cbp-l-caption-desc">{{ __("reportage.reportage.button") }}</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
        
        <div class="cbp-item print motion">
            <a href="https://www.youtube.com/watch?v=fRk2FlvXbz4" class="cbp-caption cbp-lightbox" data-title="Prix d'Excellence International mars 2023">
                <div class="cbp-caption-defaultWrap">
                    <img src="{{ asset("assets/images/videos/6.jpg") }}" alt="" />
                </div>
                <div class="cbp-caption-activeWrap">
                    <div class="cbp-l-caption-alignCenter">
                        <div class="cbp-l-caption-body">
                            <div class="cbp-l-caption-title">{{ __("reportage.reportage.prix2") }}</div>
                            <div class="cbp-l-caption-desc">{{ __("reportage.reportage.button") }}</div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
       
    
        
        
    </div>

</div>
</div><!-- end works -->



@endsection
