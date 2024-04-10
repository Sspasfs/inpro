@extends('layouts.master')

@section('content')
    {{-- Barre supérieure avec titre et bouton de retour à la liste des produits --}}
    <div class="d-flex justify-content-between mb-4">
        <h3>Mettre à jour le Produit</h3>
        <a class="btn btn-success btn-sm" href="{{ route('index') }}">Liste des Produits</a>
    </div>

    {{-- Affichage des messages de succès ou d'erreur --}}
    @if(session()->has('success'))
        <label class="alert alert-success w-100">{{ session('success') }}</label>
    @elseif(session()->has('error'))
        <label class="alert alert-danger w-100">{{ session('error') }}</label>
    @endif

    {{-- Formulaire de mise à jour du produit --}}
    <form action="{{ route('update', ['id' => $produit->id]) }}" method="POST">
        @csrf

        {{-- Champ pour le nom du produit --}}
        <div class="form-group">
            <label>Nom</label>
            <input type="text" name="name" class="form-control" placeholder="Nom du Produit" value="{{ $produit->name }}">
        </div>

        {{-- Champ pour la catégorie du produit --}}
        <div class="form-group">
            <label for="category">Catégorie :</label>
            <select name="category" id="category" class="form-control" required>
                <option value="Ordinateur Portable">Ordinateur Portable</option>
                <option value="Souris">Souris</option>
                <option value="Téléphone Portable">Téléphone Portable</option>
            </select>
        </div>

        {{-- Champ pour le numéro de série du produit --}}
        <div class="form-group">
            <label>Numéro de Série</label>
            <input type="text" name="serialnumber" class="form-control" placeholder="Numéro de Série" value="{{ $produit->serialnumber }}">
        </div>

        {{-- Champ pour l'utilisateur du produit --}}
        <div class="form-group">
            <label>Utilisateur</label>
            <input type="text" name="user" class="form-control" placeholder="Utilisateur" value="{{ $produit->user }}">
        </div>

        {{-- Champ pour le lieu du produit --}}
        <div class="form-group">
            <label>Lieu</label>
            <input type="text" name="lieu" class="form-control" placeholder="Lieu" value="{{ $produit->lieu }}">
        </div>

        {{-- Champ pour les détails d'achat et fournisseur --}}
        <div class="form-group">
            <label>Fournisseur</label>
            <input type="text" name="achat" class="form-control" placeholder="Achat" value="{{ $produit->achat }}">
        </div>

        {{-- Champ pour l'état du produit --}}
        <div class="form-group">
            <label>État</label>
            <input type="text" name="etat" class="form-control" placeholder="État" value="{{ $produit->etat }}">
        </div>

        {{-- Bouton de soumission pour la mise à jour du produit --}}
        <button type="submit" class="btn btn-primary">Mettre à jour le Produit</button>
    </form>
@endsection
