@extends('layouts.projects')

@section('title', 'Types List')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-center">Types List</h1>
        <a href="{{ route('types.create') }}" class="btn btn-success">Nuova Tipologia</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Descrizione</th>
                <th scope="col" class="text-center">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($types as $type)
                <tr class="align-middle">
                    <td scope="row">{{ $type->name }}</td>
                    <td>{{ $type->description }}</td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="View, Edit and Delete Buttons">
                            <a href="{{ Route('types.show', $type) }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                            <a href="{{ Route('types.edit', $type) }}" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$type->id}}">
                                <i class="bi bi-trash3"></i>
                            </button>
                        </div>
                        
                    </td>
                </tr>

                {{-- DELETE MODAL --}}
                <div class="modal fade" id="deleteModal-{{$type->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="staticBackdropLabel">Elimina Progetto</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                Sei sicuro di eliminare definitivamente il progetto?
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                <form action="{{ route('types.destroy', $type) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <input type="submit" class="btn btn-danger" value="Elimina Definitivamente">
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <tr>
                    <th class="text-center" colspan="5">Nessuna categoria in lista!</th>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
<div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Elimina Progetto</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Sei sicuro di eliminare definitivamente il progetto?
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                <form action="{{ route('types.destroy', $type) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Elimina Definitivamente">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection