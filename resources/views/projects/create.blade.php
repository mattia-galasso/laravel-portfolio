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
                    <input type="text" class="form-control" id="name" name="name">
                </div>
                <div class="col-6">
                    <label for="customer" class="form-label">Cliente</label>
                    <input type="text" class="form-control" id="customer" name="customer">
                </div>
                <div class="col-4">
                    <label for="project_start" class="form-label">Inizio Progetto</label>
                    <input type="date" class="form-control" id="project_start" name="project_start">
                </div>
                <div class="col-4">
                    <label for="project_end" class="form-label">Fine Progetto</label>
                    <input type="date" class="form-control" id="project_end" name="project_end">
                </div>
                <div class="col-4">
                    <label for="category" class="form-label">Categoria</label>
                    <select id="category" name="category" class="form-select">
                        <option selected>Seleziona Categoria...</option>
                        <option>Front-end</option>
                        <option>Back-end</option>
                        <option>Web Design</option>
                        <option>Full-Stack</option>
                    </select>
                </div>
                <div class="col-12">
                    <label for="summary" class="form-label">Riassunto</label>
                    <textarea name="summary" id="summary" class="form-control"  rows="7"></textarea>
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