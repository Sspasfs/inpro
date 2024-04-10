<!-- resources/views/personnels/create.blade.php -->
@extends('layouts.master')

@section('content')
    <h1>Créer un Nouveau Membre du Personnel</h1>

    <!-- Formulaire de création -->
    <form action="{{ route('personnels.store') }}" method="post">
        @csrf
        <label for="nom">Nom:</label>
        <input type="text" name="nom" required>
        <br>
        <label for="prenom">Prénom:</label>
        <input type="text" name="prenom" required>
        <br>
        <label for="ecole">École:</label>
        <input type="text" name="ecole" required>
        <br>
        <button type="submit">Enregistrer</button>
    </form>
@endsection
