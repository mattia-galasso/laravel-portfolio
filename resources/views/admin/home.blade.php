@extends('layouts.admin')

@section('title', 'Administration')
    
@section('content')
    <h1 class="text-center mt-5">Benvenuto {{ Auth::user()->name }}</h1>
    <h1 class="text-center ">Nella Pagina di Amministrazione del Sito</h1>
    
@endsection