@extends('layouts.projects')

@section('title', 'Technologies List')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-5">
        <h1 class="text-center">Technologies List</h1>
        <a href="{{ route('technologies.create') }}" class="btn btn-success">Nuova Tecnologia</a>
    </div>
    <div class="w-50 m-auto">
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Colore</th>
                    <th scope="col" class="text-center">Azioni</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($technologies as $technology)
                    <tr class="align-middle">
                        <td scope="row">{{ $technology->name }}</td>
                        <td>
                            <span class="badge" style="background-color: {{ $technology->color }}">Anteprima Badge</span>
                        </td>
                        <td class="text-center">
                            <div class="btn-group" role="group" aria-label="View, Edit and Delete Buttons">
                                <a href="{{ Route('technologies.show', $technology) }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                                <a href="{{ Route('technologies.edit', $technology) }}" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                                <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal-{{$technology->id}}">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </div>
                        </td>
                    </tr>
                    {{-- DELETE MODAL --}}
                    <div class="modal fade" id="deleteModal-{{$technology->id}}" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="staticBackdropLabel">Elimina Progetto</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Sei sicuro di eliminare definitivamente la tecnologia?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Annulla</button>
                                    <form action="{{ route('technologies.destroy', $technology) }}" method="POST">
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
                        <th class="text-center" colspan="5">Nessuna tecnologia in lista!</th>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection