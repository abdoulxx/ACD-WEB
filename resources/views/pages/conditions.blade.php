@extends("layouts.app")
@section('title', __('conditions.title'))
@section("content")


    <!-- Navbar Start -->
    <div class="container-fluid position-relative p-0" style="background-color: #000;">
        <div class="container-fluid py-5" style="margin-bottom: 90px;">
            <div class="row py-5">
                <div class="col-12 pt-lg-5 mt-lg-5 text-center">
                    <h1 class="display-4 animated zoomIn" style="color: #FFF;">{{__('conditions.title')}}</h1>
                </div>
            </div>
        </div>
    </div>
    <!-- Navbar End -->



    <div class="container-fluid" data-wow-delay="0.1s">
        <div class="container">
{{-- - QUETE DE L'EXCELLENCE --}}
        
            <div class="row g-5">
                <div class="col-lg-12">
                     
                    <p class="mb-4">
                        {{__('conditions.content1')}}
                    </p>

                    <p class="mb-4">
                         {{__('conditions.content2')}}

                    </p>
                    <p class="mb-4">
                        <strong> {{__('conditions.paragraphe2')}}</strong>
                    </p>

                     <p class="mb-4">
                         {{__('conditions.content3')}}
                    </p>

                      <p class="mb-4">
                         <strong>{{__('conditions.paragraphe3')}}</strong>
                    </p>
                      <p class="mb-4">
                         {{__('conditions.content4')}}
                    </p>


                      <p class="mb-4">
                         <strong>{{__('conditions.paragraphe4')}}</strong>
                    </p>
                      <p class="mb-4">
                         {{__('conditions.content5')}}
                    </p>



                      <p class="mb-4">
                         <strong>{{__('conditions.paragraphe5')}}</strong>
                    </p>
                      <p class="mb-4">
                         {{__('conditions.content6')}}
                    </p>

                       <p class="mb-4">
                        <strong> {{__('conditions.paragraphe6')}}</strong>
                    </p>
                      <p class="mb-4">
                         {{__('conditions.content7')}}
                    </p>

                         <p class="mb-4">
                        <strong> {{__('conditions.paragraphe7')}}</strong>
                    </p>
                      <p class="mb-4">
                         {{__('conditions.content8')}}
                    </p>


                    <p class="mb-4">
                        <strong> {{__('conditions.paragraphe8')}}</strong>
                    </p>
                      <p class="mb-4">
                         {{__('conditions.content9')}}
                    </p>

                       <p class="mb-4">
                        <strong> {{__('conditions.content10')}}</strong>
                    </p>

                      <p class="mb-4">
                        <strong> {{__('conditions.content11')}}</strong>
                    </p>
                    
                
                </div>


            </div>

        
            </div>
        </div>
    </div>


    </div>








@endsection
