@extends('layouts.projects')

@section('title', 'New Project')

@section('content')
<div class="container">
    <div class="card pt-1 px-3 pb-3">
        <div class="card-body">
            <h3 class="card-title text-center">Nuovo Progetto</h3>
            <hr class="my-4">
            <form class="row g-3" method="POST" action="{{ route('projects.store') }}">
                
                @csrf

                <div class="col-6">
                    <label for="name" class="form-label">Nome Progetto</label>
                    <input type="text" class="form-control" id="name" name="name" required>
                </div>
                <div class="col-6">
                    <label for="customer" class="form-label">Cliente</label>
                    <input type="text" class="form-control" id="customer" name="customer" required>
                </div>
                <div class="col-6">
                    <label for="project_start" class="form-label">Inizio Progetto</label>
                    <input type="date" class="form-control" id="project_start" name="project_start" required>
                </div>
                <div class="col-6">
                    <label for="project_end" class="form-label">Fine Progetto</label>
                    <input type="date" class="form-control" id="project_end" name="project_end" required>
                </div>
                <div class="col-6">
                    <label for="type_id" class="form-label">Categoria</label>
                    <select id="category" name="type_id" class="form-select" required>
                        <option selected disabled>Seleziona Categoria...</option>
                        @foreach ($types as $type)
                            <option value="{{ $type->id }}">{{ $type->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="col-6 d-flex flex-column gap-3">
                    <span class="">Tecnologie</span>
                    <div class="d-flex flex-wrap justify-content-center align-items-end gap-2">
                        @foreach ($technologies as $technology)
                        <div>
                            <input class="form-check-input" type="checkbox" value="{{$technology->id}}" id="technology-{{$technology->id}}" name="technologies[]">
                            <label for="technology-{{$technology->id}}" class="form-label me-3">{{$technology->name}}</label>
                        </div>
                        @endforeach
                    </div>
                </div>

                <div class="col-12">
                    <label for="summary" class="form-label">Riassunto</label>
                    <textarea name="summary" id="summary" class="form-control" rows="7" required></textarea>
                </div>
                <hr class="my-5">
                <div class="d-flex align-items-center justify-content-around mt-0 mb-3">
                    <a href="{{ route('projects.index') }}" class="btn btn-danger w-25"> 
                        Annulla
                    </a>
                    <input type="submit" class="btn btn-primary w-25">
                    <input type="reset" class="btn btn-secondary w-25">
                </div>
            </form>
        </div>
    </div>
</div>
@endsection