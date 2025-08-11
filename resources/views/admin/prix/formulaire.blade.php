@extends('admin.layouts.admin')
@section('title', $prix->exists ? "MODIFIER" : "NOUVEAU PARTICIPANT")
@section('content')

    <div class="container-fluid py-4">

        <!-- Message Flash --->
        @include('partials.message')
        <div class="row">
            <div class="col-12">

                <div class="card">


                    <div class="card-header d-flex justify-content-between align-items-center">

                        <h4 class="text-black">@yield('title')</h4>
                        <h6 class="text-white p-3"><a class="btn bg-gradient-info" data-color="info" href="{{ route('admin.prix.index') }}">Voir la liste</a></h6>

                    </div>

                    <div class="card-body">
                        <!--- Formulaire --->
                        <form action="{{ route($prix->exists ? 'admin.prix.update' : 'admin.prix.store', ['prix' =>$prix]) }}" method="post">
                            @csrf
                            @method($prix->exists ? 'put' : 'post')
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Nom / Prénoms</label>
                                        <input type="text" name="nom" id="nom" value="{{ $prix->exists ? $prix->nom : old('nom')}}"  class="form-control @error("nom") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                        @error("nom")
                                        <div class="invalid-feedback">{{ $message}} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Fonction</label>
                                        <input type="text" name="fonction" id="fonction" value="{{ $prix->exists ? $prix->fonction : old('fonction')}}" class="form-control @error("fonction") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                        @error("fonction")
                                        <div class="invalid-feedback">{{ $message}} </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Adresse E-mail</label>
                                        <input type="text" name="email" id="email" value="{{ $prix->exists ? $prix->email : old('email')}}" class="form-control @error("email") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                        @error("email")
                                        <div class="invalid-feedback">{{ $message}} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <select class="form-control @error("statut") is-invalid @enderror" name="statut" id="statut" value="{{ old('statut') }}">
                                            <option value="" >Selectionner votre statut</option>
                                            <option value="Participant">Participant</option>
                                            <option value="Sponsor Gold">Sponsor Gold</option>
                                            <option value="Sponsor Diamond">Sponsor Diamond</option>
                                            @error("statut")
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
                                        <input type="number"  name="numero_whatsapp" id="numero_whatsapp" value="{{ $prix->exists ? $prix->numero_whatsapp : old('numero_whatsapp')}}" class="form-control @error("numero_whatsapp") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                        @error("numero_whatsapp")
                                        <div class="invalid-feedback">{{ $message}} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Entreprise</label>
                                        <input type="text" name="entreprise" id="entreprise" value="{{ $prix->exists ? $prix->entreprise : old('entreprise')}}" class="form-control @error("entreprise") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                        @error("entreprise")
                                        <div class="invalid-feedback">{{ $message}} </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button  class="btn bg-gradient-info" data-color="info">
                                @if($prix->exists)
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