@extends('admin.layouts.admin')
@section('title', 'TOUS LES DEMANDE DE CONTACTS')
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
                        <h4 class="text-black p-3">LISTE DES DEMANDES DE CONTACT </h4>


                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase font-weight-bolder">ID</th>
                                    <th class="text-uppercase font-weight-bolder">Nom/Prénoms</th>
                                    <th class="text-center text-uppercase font-weight-bolder ">Email</th>
                                    <th class="text-uppercase font-weight-bolder">Objet</th>
                                    <th class="text-center text-uppercase font-weight-bolder ">Demande</th>
                                    <th class="text-center text-uppercase font-weight-bolder">Date</th>
                                    <th class="text-center text-uppercase font-weight-bolder">ACTION</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contacts as $contact)
                                    <tr>
                                        <td class="align-middle text-center">
                                            <p>{{ $contact->id }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p>{{ $contact->name }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p>{{ $contact->email }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p>{{ $contact->objet }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p>{{ $contact->message }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p>{{ \Carbon\Carbon::parse($contact->created_at)->isoFormat('Do MMMM YYYY [à] HH[h]mm') }}</p>
                                        </td>

                                        <td class="align-middle d-flex gap-2" style="position: relative; left:80px">
                                            <a href="{{ route('admin.contact.edit', $contact) }}"><button class="btn btn-sm btn-danger">Modifier</button></a>
                                            <form action="{{ route('admin.contact.destroy', $contact) }}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-sm bg-gradient-info" data-color="info">Supprimer</button>
                                            </form>

                                        </td>
                                    </tr>
                                @endforeach

                                </tbody>
                            </table>

                            {{ $contacts->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection