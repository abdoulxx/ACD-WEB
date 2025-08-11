@extends('admin.layouts.admin')
@section('title', $contact->exists ? "MODIFIER" : "NOUVELLE DEMANDE")
@section('content')

    <div class="container-fluid py-4">

        <!-- Message Flash --->
        @include('partials.message')
        <div class="row">
            <div class="col-12">

                <div class="card">


                    <div class="card-header d-flex justify-content-between align-items-center">

                        <h4 class="text-black">@yield('title')</h4>
                        <h6 class="text-white p-3"><a class="btn bg-gradient-info" data-color="info" href="{{ route('admin.contact.index') }}">Voir la liste</a></h6>

                    </div>

                    <div class="card-body">
                        <!--- Formulaire --->
                        <form action="{{ route($contact->exists ? 'admin.contact.update' : 'admin.contact.store', ['contact' =>$contact]) }}" method="post">
                            @csrf
                            @method($contact->exists ? 'put' : 'post')
                            <div class="row">
                                <div class="col-4">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Nom / Prénoms</label>
                                        <input type="text" name="name" id="name" value="{{ $contact->exists ? $contact->name : old('name')}}"  class="form-control @error("name") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                        @error("name")
                                        <div class="invalid-feedback">{{ $message}} </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Objet</label>
                                        <input type="text" name="objet" id="objet" value="{{ $contact->exists ? $contact->objet : old('objet')}}" class="form-control @error("objet") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                        @error("objet")
                                        <div class="invalid-feedback">{{ $message}} </div>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-4">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Adresse E-mail</label>
                                        <input type="text" name="email" id="email" value="{{ $contact->exists ? $contact->email : old('email')}}" class="form-control @error("email") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                        @error("email")
                                        <div class="invalid-feedback">{{ $message}} </div>
                                        @enderror
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-12">
                                    <div class="input-group input-group-outline mb-3">
                                        <label class="form-label">Message</label>
                                        <textarea name="message" id="message"  rows="10" class="form-control @error("message") is-invalid @enderror" onfocus="focused(this)" onfocusout="defocused(this)">
                                            {{ $contact->exists ? $contact->message : old('message')}}
                                        </textarea>
                                            @error("message")
                                        <div class="invalid-feedback">{{ $message}} </div>
                                        @enderror
                                    </div>
                                </div>

                            </div>


                            <button  class="btn bg-gradient-info" data-color="info">
                                @if($contact->exists)
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