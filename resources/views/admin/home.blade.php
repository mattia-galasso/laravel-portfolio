@extends('layouts.app')

@section('title', 'Administration')
    
@section('content')
    <h1 class="text-center my-5">Pagina di Amministrazione del Sito</h1>
    <div class="my-5 text-center">
        <a href="{{ route('projects.index') }}"><button class="btn btn-primary">Project List</button></a>
    </div>
@endsection