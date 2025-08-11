@extends('admin.layouts.admin')
@section('title', 'LISTE DES FORMATEURS')
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
                            <h4 class="text-black p-3">LISTE DES FORMATEURS </h4>
                        <h6 class="text-white p-3"><a class="btn bg-gradient-info" data-color="info" href="{{ route('admin.formateur.create') }}">Ajouter un formateur</a></h6>

                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase font-weight-bolder">ID</th>
                                    <th class="text-uppercase font-weight-bolder">Nom</th>
                                    <th class="text-uppercase font-weight-bolder">Prénoms</th>
                                    <th class="text-center text-uppercase font-weight-bolder ">Email</th>
                                    <th class="text-center text-uppercase font-weight-bolder ">Numéro Whatsap</th>
                                    <th class="text-center text-uppercase font-weight-bolder ">CV</th>
                                    <th class="text-center text-uppercase font-weight-bolder">Date</th>
                                    <th class="text-center text-uppercase font-weight-bolder">ACTION</th>

                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($formateurs as $formateur)
                                    <tr>
                                        <td class="align-middle text-center">
                                            <p>{{ $formateur->id }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p>{{ $formateur->nom }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p>{{ $formateur->prenom }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p>{{ $formateur->email }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p>{{ $formateur->whatsapp }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p><a href="{{  asset('uploads/cv/' .$formateur->cv )}}" target="_blank">Voir</a></p>
                                        </td>
                                    

                                        <td class="align-middle text-center">
                                            <p>{{ \Carbon\Carbon::parse($formateur->created_at)->isoFormat('Do MMMM YYYY [à] HH[h]mm') }}</p>
                                        </td>

                                        <td class="align-middle d-flex gap-2" style="position: relative; left:80px">
                                           <a href="{{ route('admin.formateur.edit', $formateur) }}"><button class="btn btn-sm btn-danger">Modifier</button></a>
                                          <form action="{{ route('admin.formateur.destroy', $formateur) }}" method="post">
                                            @csrf
                                              @method('delete')
                                              <button class="btn btn-sm bg-gradient-info" data-color="info">Supprimer</button>
                                          </form>

                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>

                            {{ $formateurs->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection