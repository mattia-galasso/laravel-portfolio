@extends('layouts.projects')

@section('title', 'Projects List')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th scope="col">Nome</th>
                <th scope="col">Cliente</th>
                <th scope="col">Inizio Progetto</th>
                <th scope="col">Fine Progetto</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($projects as $project)
                <tr class="align-middle">
                    <td scope="row">{{ $project->name }}</td>
                    <td>{{ $project->customer }}</td>
                    <td>{{ $project->project_start }}</td>
                    <td>{{ $project->project_end }}</td>
                    <td><a href="{{ Route('projects.show', $project) }}" class="btn btn-primary"><i class="bi bi-eye"></i></a></td>
                </tr>
            @empty
                <tr>
                    <th class="text-center" colspan="5">Nessun progetto in lista!</th>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection