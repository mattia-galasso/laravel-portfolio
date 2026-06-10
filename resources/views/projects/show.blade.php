@extends('layouts.projects')

@section('title', 'Projects List')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">
            <a href="{{ Route('projects.index') }}" class="btn btn-primary"><small><i class="bi bi-arrow-left mx-1"></i></small>  Torna indietro</a>
        </div>
        <div class="card-body">
            <div class="card-title text-center">
                <h5 class="mb-3 text-primary">Informazioni Progetto</h5>
                <h3>{{ $project->name }}</h3>
            </div>
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                    <div class="my-3 d-flex justify-content-around align-items-center text-center">
                        <div class="my-3">
                            <small class="text-primary fw-bold">Categoria:</small>
                            <p class="my-0">{{ $project->category }}</p>
                        </div>
                        <div>
                            <small class="text-primary fw-bold">Data Inizio:</small>
                            <p class="my-0">{{ date('d-m-Y', strtotime($project->project_start)) }}</p>
                        </div>
                        <div>
                            <small class="text-primary fw-bold">Data Fine:</small>
                            <p class="my-0">{{ date('d-m-Y', strtotime($project->project_end)) }}</p>
                        </div>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="my-3">
                        <small class="text-primary fw-bold">Cliente:</small>
                        <p class="my-0">{{ $project->customer }}</p>
                    </div>
                </li>
                <li class="list-group-item">
                    <div class="my-3">
                        <small class="text-primary fw-bold">Riassunto:</small>
                        <p class="my-0">{{ $project->summary }}</p>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>
@endsection