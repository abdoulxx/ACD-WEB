@extends('admin.layouts.admin')
@section('title', $formateur->exists ? "MODIFIER" : "NOUVEAU FORMATEUR")
@section('content')

    <div class="container-fluid py-4">

        <!-- Message Flash --->
        @include('partials.message')
        <div class="row">
            <div class="col-12">

                <div class="card">


                    <div class="card-header d-flex justify-content-between align-items-center">

                        <h4 class="text-black">@yield('title')</h4>
                        <h6 class="text-white p-3"><a class="btn bg-gradient-info" data-color="info" href="{{ route('admin.formateur.index') }}">Voir la liste</a></h6>

                    </div>

                    <div class="card-body">
                        <!--- Formulaire --->
                        <form action="{{ route($formateur->exists ? 'admin.formateur.update' : 'admin.formateur.store', ['formateur' =>$formateur]) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method($formateur->exists ? 'put' : 'post')
                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Nom / Prénoms</label>
                                        <input type="text" name="nom" id="nom" value="{{ $formateur->exists ? $formateur->nom : old('nom')}}"  class="form-control @error("nom") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                        @error("nom")
                                        <div class="invalid-feedback">{{ $message}} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Prénoms</label>
                                        <input type="text" name="prenom" id="prenom" value="{{ $formateur->exists ? $formateur->prenom : old('prenom')}}" class="form-control @error("prenom") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                        @error("prenom")
                                        <div class="invalid-feedback">{{ $message}} </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Adresse E-mail</label>
                                        <input type="text" name="email" id="email" value="{{ $formateur->exists ? $formateur->email : old('email')}}" class="form-control @error("email") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                        @error("email")
                                        <div class="invalid-feedback">{{ $message}} </div>
                                        @enderror
                                    </div>
                                </div>
                                
                            </div>

                            <div class="row">
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Numéro Whatsapp</label>
                                        <input type="number"  name="whatsapp" id="whatsapp" value="{{ $formateur->exists ? $formateur->whatsapp : old('whatsapp')}}" class="form-control @error("whatsapp") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                        @error("whatsapp")
                                        <div class="invalid-feedback">{{ $message}} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">CV</label>
                                        <input type="file" name="cv" id="cv" value="{{ $formateur->exists ? $formateur->cv : old('cv')}}" class="form-control @error("cv") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                        @error("cv")
                                        <div class="invalid-feedback">{{ $message}} </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <button  class="btn bg-gradient-info" data-color="info">
                                @if($formateur->exists)
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