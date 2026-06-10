@extends('layouts.projects')

@section('title', 'Projects List')

@section('content')
<div class="container">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1 class="text-center">Projects List</h1>
        <a href="{{ route('projects.create') }}" class="btn btn-success">Nuovo Progetto</a>
    </div>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Cliente</th>
                <th scope="col">Inizio Progetto</th>
                <th scope="col">Fine Progetto</th>
                <th scope="col" class="text-center">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($projects as $project)
                <tr class="align-middle">
                    <td scope="row">{{ $project->name }}</td>
                    <td>{{ $project->customer }}</td>
                    <td>{{ $project->project_start }}</td>
                    <td>{{ $project->project_end }}</td>
                    <td class="text-center">
                        <div class="btn-group" role="group" aria-label="View, Edit and Delete Buttons">
                            <a href="{{ Route('projects.show', $project) }}" class="btn btn-primary"><i class="bi bi-eye"></i></a>
                            <a href="{{ Route('projects.edit', $project) }}" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                                <i class="bi bi-trash3"></i>
                            </button>
                        </div>
                    </td>
                </tr>
            @empty
                <tr>
                    <th class="text-center" colspan="5">Nessun progetto in lista!</th>
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
                <form action="{{ route('projects.destroy', $project) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" class="btn btn-danger" value="Elimina Definitivamente">
                </form>
            </div>
        </div>
    </div>
</div>

@endsection