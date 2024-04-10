@extends('layouts.master')

@section('content')
    <h1>Modifier la catégorie {{ $category->name }}</h1>

    <form action="{{ route('category.update', $category) }}" method="POST">
        @csrf
        @method('POST')
        <label for="name">Nom de la catégorie:</label>
        <input type="text" name="name" value="{{ $category->name }}" required>

        <button type="submit" class="btn btn-primary">Enregistrer les modifications</button>
    </form>
@endsection