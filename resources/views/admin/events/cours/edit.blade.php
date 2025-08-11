@extends('admin.layouts.admin')
@section('title', "ÉDITER L'ÉVÉNEMENT")
@section('content')

<div class="container-fluid py-4">

    <!-- Message Flash --->
    @include('partials.message')
    <div class="row">
        <div class="col-12">

            <div class="card">

                <div class="card-header d-flex justify-content-between align-items-center">

                    <h4 class="text-black">@yield('title')</h4>
                    <h6 class="text-white p-3"><a class="btn bg-gradient-info" data-color="info"
                            href="{{ route('admin.event-en-cours.index') }}">Voir la liste</a></h6>

                </div>

                <div class="card-body">
                    <!--- Formulaire --->
                    <form action="{{ route('admin.event-en-cours.update', $event->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="row">
                            <div class="col-6">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Titre de l'évènement</label>
                                    <input type="text" name="title" id="title"
                                        value="{{ old('title', $event->title) }}"
                                        class="form-control @error('title') is-invalid @enderror"
                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                    @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">URL</label>
                                    <input type="text" name="slug" id="slug"
                                        value="{{ old('slug', $event->slug) }}"
                                        class="form-control @error('slug') is-invalid @enderror"
                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                    @error('slug')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="input-group input-group-outline mb-3">
                                    <label class="form-label">Image</label>
                                    <input type="file" name="image" id="image"
                                        class="form-control @error('image') is-invalid @enderror"
                                        onfocus="focused(this)" onfocusout="defocused(this)">
                                    @error('image')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>

                        <div class="col lg-12">
                            <div class="input-group input-group-outline mb-3">
                                <label class="form-label">Présentation</label>
                                <textarea name="content" id="content"
                                    class="form-control @error('content') is-invalid @enderror"
                                    onfocus="focused(this)" onfocusout="defocused(this)" rows="10">
                                        {{ old('content', $event->content) }}
                                    </textarea>
                                @error('content')
                                <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                        </div>

                        <input type="submit" class="btn bg-gradient-info" value="Enregistrer les modifications">
                    </form>

                </div>
            </div>
        </div>
    </div>

</div>

@endsection
