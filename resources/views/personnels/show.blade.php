<!-- resources/views/personnels/show.blade.php -->
@extends('layouts.master')

@section('content')
    <div class="d-flex justify-content-between mb-4">
        <h3>Détails du Membre du Personnel</h3>
        <a class="btn btn-success btn-sm" href="{{ route('personnels.index') }}">Liste des Membres du Personnel</a>
    </div>

    <div class="form-group">
        <label>Nom</label>
        <input type="text" name="nom" class="form-control" value="{{ $personnel->nom }}" disabled>
    </div>

    <div class="form-group">
        <label>Prénom</label>
        <input type="text" name="prenom" class="form-control" value="{{ $personnel->prenom }}" disabled>
    </div>

    <div class="form-group">
        <label>École</label>
        <input type="text" name="ecole" class="form-control" value="{{ $personnel->ecole }}" disabled>
    </div>

    <!-- Ajoutez d'autres champs selon vos besoins -->

    <div class="mt-4">
        <a href="{{ route('personnels.edit', ['id' => $personnel->id]) }}" class="btn btn-primary">Modifier</a>
        <form action="{{ route('personnels.delete', ['id' => $personnel->id]) }}" method="POST" class="d-inline-block">
            @csrf
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    </div>

    <!-- Section pour afficher les produits associés -->
    <div class="mt-4">
        <h4>Produits associés :</h4>
        @if($personnel->produits->isEmpty())
            <p>Aucun produit associé.</p>
        @else
            <ul>
                @foreach($personnel->produits as $produit)
                    <li>{{ $produit->name }} - {{ $produit->serialnumber }}</li>
                @endforeach
            </ul>
        @endif
    </div>
@endsection
