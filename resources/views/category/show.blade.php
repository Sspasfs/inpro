@extends('layouts.master')

@section('content')
    <h1>Détails de la catégorie {{ $category->name }}</h1>

    <p>Nom: {{ $category->name }}</p>

    <a href="{{ route('category.edit', $category) }}" class="btn btn-warning">Modifier</a>

    <form action="{{ route('category.delete', $category) }}" method="POST" style="display:inline">
        @csrf
        @method('POST')
        <button type="submit" class="btn btn-danger">Supprimer</button>
    </form>
@endsection