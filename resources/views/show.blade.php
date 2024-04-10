@extends('layouts.master')

@section('content')
    {{-- Barre supérieure avec le titre et le lien de retour --}}
    <div class="d-flex justify-content-between mb-4">
        <h3>Afficher les Articles</h3>
        <a class="btn btn-success btn-sm" href="{{ route('index') }}">Liste des Articles</a>
    </div>

    {{-- Affichage des détails de l'article --}}
    <div class="form-group">
        <label>Nom</label>
        <input type="text" name="name" class="form-control" value="{{ $produit->name }}" disabled>
    </div>

    <div class="form-group">
        <label>Catégorie</label>
        <input type="text" name="category" class="form-control" value="{{ $produit->category }}" disabled>
    </div>

    <div class="form-group">
        <label>Numéro de Série</label>
        <input type="text" name="serialnumber" class="form-control" value="{{ $produit->serialnumber }}" disabled>
    </div>

    <div class="form-group">
        <label>Numéro IMEI</label>
        <input type="text" name="imei" class="form-control" value="{{ $produit->imei }}" disabled>
    </div>

    <div class="form-group">
        <label>Utilisateur</label>
        <input type="text" name="user" class="form-control" value="{{ $produit->user }}" disabled>
    </div>

    <div class="form-group">
        <label>Lieu</label>
        <input type="text" name="lieu" class="form-control" value="{{ $produit->lieu }}" disabled>
    </div>

    <div class="form-group">
        <label>Fournisseur</label>
        <input type="text" name="fournisseur" class="form-control" value="{{ $produit->fournisseur }}" disabled>
    </div>

    <div class="form-group">
        <label>État</label>
        <input type="text" name="etat" class="form-control" value="{{ $produit->etat }}" disabled>
    </div>
    <!-- Ajoutez d'autres champs selon vos besoins -->

    {{-- Section pour les actions (Modifier et Supprimer) --}}
    <div class="mt-4">
        <a href="{{ route('edit', ['id' => $produit->id]) }}" class="btn btn-primary">Modifier</a>
        <form action="{{ route('delete', ['id' => $produit->id]) }}" method="POST" class="d-inline-block">
            @csrf
            <button type="submit" class="btn btn-danger">Supprimer</button>
        </form>
    </div>
@endsection
