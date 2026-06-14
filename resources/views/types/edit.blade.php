@extends('layouts.projects')

@section('title', 'Edit Project')

@section('content')
<div class="container">
    <div class="card pt-1 px-3 pb-3">
        <div class="card-body">
            <h3 class="card-title text-center">Modifica Tipologia</h3>
            <hr class="my-4">
            <form class="row g-3" method="POST" action="{{ route('types.update', $type) }}">
                
                @csrf
                @method('PUT')

                <div class="col-12">
                    <label for="name" class="form-label">Nome Tipologia</label>
                    <input type="text" class="form-control" id="name" name="name" value="{{ $type->name }}">
                </div>
                <div class="col-12">
                    <label for="descriprion" class="form-label">Descrizione</label>
                    <textarea name="descriprion" id="descriprion" class="form-control"  rows="7">{{ $type->description }}</textarea>
                </div>
                <hr class="my-5">
                <div class="d-flex align-items-center justify-content-around mt-0 mb-3">
                    <a href="{{ route('types.show', $type) }}" class="btn btn-danger w-25"> 
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




