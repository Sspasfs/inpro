@extends('layouts.master')

@section('content')
    <h1>Créer une nouvelle catégorie</h1>

    <form action="{{ route('category.store') }}" method="POST">
        @csrf
        <label for="name">Nom de la catégorie:</label>
        <input type="text" name="name" required>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>
@endsection