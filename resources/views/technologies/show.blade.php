@extends('layouts.projects')

@section('title', $technology->name)

@section('content')
<div class="container">
    <div class="card w-50 m-auto my-5">
        <div class="card-header">
            <div class="d-flex justify-content-between align-items-center px-2">
                <a href="{{ Route('technologies.index') }}" class="btn btn-primary"><small><i class="bi bi-arrow-left mx-1"></i></small>  Torna indietro</a>
                <div class="btn-group" role="group" aria-label="Edit and Delete Buttons">
                    <a href="{{ Route('technologies.edit', $technology) }}" class="btn btn-warning"><i class="bi bi-pencil"></i></a>
                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#deleteModal">
                        <i class="bi bi-trash3"></i>
                    </button>
                </div>
            </div>
        </div>
        <div class="card-body">
            <div class="card-title text-center">
                <h4 class="mt-2 mb-3 text-primary">Informazioni Tecnologia</h4>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="my-3">
                        <small class="text-primary fw-bold">Nome Tecnologia:</small>
                        <p class="my-0">{{ $technology->name }}</p>
                    </div>
                    <div class="my-3 d-flex flex-column">
                        <small class="text-primary fw-bold">Colore Badge:</small>
                        <div>
                            <span class="badge" style="background-color: {{ $technology->color }}">Anteprima Badge</span>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="modal fade" id="deleteModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Elimina Tipologia</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                Sei sicuro di eliminare definitivamente la tipologia?
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
@endsection