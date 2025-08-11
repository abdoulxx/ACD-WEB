@extends('admin.layouts.admin')
@section('title', 'ÉVÈNEMENTS À VENIR')
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
                            <h4 class="text-black p-3">ÉVÈNEMENTS À VENIR</h4>
                        <h6 class="text-white p-3"><a class="btn bg-gradient-info" data-color="info" href="{{ route('admin.event-a-venir.create') }}">Ajouter un évènements</a></h6>

                    </div>
                    <div class="card-body px-0 pb-2">
                        <div class="table-responsive p-0">
                            <table class="table align-items-center mb-0">
                                <thead>
                                <tr>
                                    <th class="text-uppercase font-weight-bolder">ID</th>
                                    <th class="text-uppercase font-weight-bolder">Titre</th>
                                     <th class="text-uppercase font-weight-bolder">Image</th>
                                    <th class="text-center text-uppercase font-weight-bolder">Date</th>
                                    <th class="text-center text-uppercase font-weight-bolder">ACTION</th>

                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($events as $event)
                                    <tr>
                                        <td class="align-middle text-center">
                                            <p>{{ $event->id }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <p>{{ $event->title }}</p>
                                        </td>

                                        <td class="align-middle text-center">
                                            <img src="{{ asset('storage/' . $event->image) }}" alt="{{ $event->title }}" style="width: 150px">
                                        </td>


                                        <td class="align-middle text-center">
                                            <p>{{ \Carbon\Carbon::parse($event->created_at)->isoFormat('Do MMMM YYYY [à] HH[h]mm') }}</p>
                                        </td>

                                        <td class="align-middle d-flex gap-2" style="position: relative; left:80px">
                                           <a href="{{ route('admin.event-a-venir.edit', $event) }}"><button class="btn btn-sm btn-danger">Modifier</button></a>
                                          <form action="{{ route('admin.event-a-venir.destroy', $event) }}" method="post">
                                            @csrf
                                              @method('delete')
                                              <button class="btn btn-sm bg-gradient-info" data-color="info">Supprimer</button>
                                          </form>

                                        </td>
                                    </tr>
                                    @endforeach

                                </tbody>
                            </table>

                            {{ $events->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
@endsection