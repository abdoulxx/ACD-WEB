@extends('admin.layouts.admin')
@section('title', 'DEMANDES DE FORMATIONS')
@section('content')
    <div class="container-fluid py-4">
        <!-- Message Flash --->

        @if(session('success'))
            <div class="alert alert-success alert-dismissible text-white" role="alert">
                <span class="text-sm"> {{ session("success") }} </span>
                <button type="button" class="btn-close text-lg py-3 opacity-10" data-bs-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        @endif

        <div class="row">
            <div class="col-12">
                <div class="card my-4">

                    <div class="card-header d-flex justify-content-between align-items-center">
                            <h4 class="text-black p-3">LISTE DES DEMANDES DE FORMATION </h4>
                        <h6 class="text-white p-3"><a class="btn bg-gradient-info" data-color="info" href="{{ route('admin.formation.create') }}">Ajouter une nouvelle demande</a></h6>

                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase font-weight-bolder">ID</th>
                                    <th class="text-uppercase font-weight-bolder">Nom/Prénoms</th>
                                    <th class="text-uppercase font-weight-bolder">Domaine de formation</th>
                                    <th class="text-center text-uppercase font-weight-bolder ">Email</th>
                                    <th class="text-center text-uppercase font-weight-bolder ">Numéro Whatsap</th>
                                    <th class="text-center text-uppercase font-weight-bolder ">Niveau</th>
                                    <th class="text-center text-uppercase font-weight-bolder ">Suggestion</th>
                                    <th class="text-center text-uppercase font-weight-bolder">Date</th>
                                    <th class="text-center text-uppercase font-weight-bolder">ACTION</th>

                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($formations as $formation)
                                    <tr>
                                        <td class="align-middle text-center">
                                            <p>{{ $formation->id }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p>{{ $formation->nom }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p>{{ $formation->domaine }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p>{{ $formation->email }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p>{{ $formation->numero_whatsapp }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p>{{ $formation->niveau }}</p>
                                        </td>
                                        <td class="align-middle text-center">
                                            <p>{{ $formation->message }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p>{{ \Carbon\Carbon::parse($formation->created_at)->isoFormat('Do MMMM YYYY [à] HH[h]mm') }}</p>
                                        </td>

                                        <td class="align-middle d-flex gap-2" style="position: relative; left:80px">
                                           <a href="{{ route('admin.formation.edit', $formation) }}"><button class="btn btn-sm btn-danger">Modifier</button></a>
                                          <form action="{{ route('admin.formation.destroy', $formation) }}" method="post">
                                            @csrf
                                              @method('delete')
                                              <button class="btn btn-sm bg-gradient-info" data-color="info">Supprimer</button>
                                          </form>

                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>

                            {{ $formations->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection