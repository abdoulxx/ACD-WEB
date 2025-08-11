@extends('admin.layouts.admin')
@section('title', $formation->exists ? "MODIFIER" : "NOUVELLE DEMANDE")
@section('content')

    <div class="container-fluid py-4">

        <!-- Message Flash --->
        @include('partials.message')
        <div class="row">
            <div class="col-12">

                <div class="card">


                    <div class="card-header d-flex justify-content-between align-items-center">

                        <h4 class="text-black">@yield('title')</h4>
                        <h6 class="text-white p-3"><a class="btn bg-gradient-info" data-color="info" href="{{ route('admin.formation.index') }}">Voir la liste</a></h6>

                    </div>

                    <div class="card-body">
                    <!--- Formulaire --->
                    <form action="{{ route($formation->exists ? 'admin.formation.update' : 'admin.formation.store', ['formation' =>$formation]) }}" method="post">
                        @csrf
                        @method($formation->exists ? 'put' : 'post')
                          <div class="row">
                              <div class="col-6">
                                  <div class="input-group input-group-outline mb-3">
                                      <label class="form-label">Nom / Prénoms</label>
                                      <input type="text" name="nom" id="nom" value="{{ $formation->exists ? $formation->nom : old('nom')}}"  class="form-control @error("nom") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                      @error("nom")
                                            <div class="invalid-feedback">{{ $message}} </div>
                                      @enderror
                                  </div>
                              </div>
                              <div class="col-6">
                                  <div class="input-group input-group-outline mb-3">
                                      <label class="form-label">Domaine de formation</label>
                                      <input type="text" name="domaine" id="domaine" value="{{ $formation->exists ? $formation->domaine : old('domaine')}}" class="form-control @error("domaine") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                      @error("domaine")
                                            <div class="invalid-feedback">{{ $message}} </div>
                                      @enderror
                                  </div>
                              </div>
                          </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Adresse E-mail</label>
                                    <input type="text" name="email" id="email" value="{{ $formation->exists ? $formation->email : old('email')}}" class="form-control @error("email") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                    @error("email")
                                        <div class="invalid-feedback">{{ $message}} </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group input-group-outline mb-3">
                                    <select class="form-control @error("niveau") is-invalid @enderror" name="niveau" id="niveau" value="{{ old('niveau') }}">
                                        <option value="" >Niveau de formation</option>
                                        <option value="Débutant">Débutant</option>
                                        <option value="Intermédiaire">Intermédiaire</option>
                                        <option value="Avancé">Avancé</option>
                                        @error("niveau")
                                            <div class="invalid-feedback">{{ $message}} </div>
                                        @enderror
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Numéro Whatsapp</label>
                                    <input type="number"  name="numero_whatsapp" id="numero_whatsapp" value="{{ $formation->exists ? $formation->numero_whatsapp : old('numero_whatsapp')}}" class="form-control @error("numero_whatsapp") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                    @error("numero_whatsapp")
                                        <div class="invalid-feedback">{{ $message}} </div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Suggestion</label>
                                    <input type="text" name="message" id="message" value="{{ $formation->exists ? $formation->message : old('message')}}" class="form-control @error("message") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                    @error("message")
                                        <div class="invalid-feedback">{{ $message}} </div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                            <button  class="btn bg-gradient-info" data-color="info">
                                    @if($formation->exists)
                                        Modifier
                                    @else
                                        Créer
                                    @endif
                            </button>
                        </div>

                    </form>

                </div>
            </div>
        </div>

    </div>
@endsection