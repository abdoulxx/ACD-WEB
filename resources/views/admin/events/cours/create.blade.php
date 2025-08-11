@extends('admin.layouts.admin')
@section('title', "NOUVEAU ÉVÈNEMENT")
@section('content')

    <div class="container-fluid py-4">

        <!-- Message Flash --->
        @include('partials.message')
        <div class="row">
            <div class="col-12">

                <div class="card">


                    <div class="card-header d-flex justify-content-between align-items-center">

                        <h4 class="text-black">@yield('title')</h4>
                        <h6 class="text-white p-3"><a class="btn bg-gradient-info" data-color="info" href="{{ route('admin.event-en-cours.index') }}">Voir la liste</a></h6>

                    </div>

                    <div class="card-body">
                    <!--- Formulaire --->
                    <form action="{{ route('admin.event-en-cours.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                       
                          <div class="row">
                              <div class="col-6">
                                  <div class="input-group input-group-outline mb-3">
                                      <label class="form-label">Titre de l'évènement</label>
                                      <input type="text" name="title" id="title" {{ old('title')}}"  class="form-control @error("nom") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                      @error("title")
                                            <div class="invalid-feedback">{{ $message}} </div>
                                      @enderror
                                  </div>
                              </div>

                              <div class="col-6">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">URL</label>
                                    <input type="text" name="slug" id="slug" {{  old('slug')}}" class="form-control @error("slug") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                    @error("slug")
                                        <div class="invalid-feedback">{{ $message}} </div>
                                    @enderror
                                </div>
                            </div>
                             
                          </div>

                        <div class="row">
                           

                            <div class="col-12">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Image</label>
                                    <input type="file" name="image" id="image" {{ old('image')}}" class="form-control @error("image") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                    @error("image")
                                        <div class="invalid-feedback">{{ $message}} </div>
                                    @enderror
                                </div>
                            </div>
                           
                        </div>

                        <div class="col lg-12">
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">Présentation</label>
                                <textarea name="content" id="content"  class="form-control @error("content") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)" rows="10">
                                  {{ old('content')}}
                                </textarea>
                                @error("content")
                                      <div class="invalid-feedback">{{ $message}} </div>
                                @enderror
                            </div>
                        </div>

                      

                          <input type="submit" class="btn bg-gradient-info" value="Publier" >
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>


@endsection