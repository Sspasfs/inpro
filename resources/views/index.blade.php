@extends('layouts.master')

@section('content')
    {{-- Barre supérieure avec titre et bouton d'ajout d'un nouveau produit --}}
    <div class="d-flex justify-content-between mb-4">
        <h3>Liste des Produits</h3>
        <a class="btn btn-success btn-sm" href="{{ route('create') }}">Ajouter un nouveau Produit</a>
    </div>

    {{-- Affichage des messages de succès ou d'erreur --}}
    @if (session()->has('success'))
        <label class="alert alert-success w-100">{{ session('success') }}</label>
    @elseif(session()->has('error'))
        <label class="alert alert-danger w-100">{{ session('error') }}</label>
    @endif

    {{-- Tableau affichant la liste des produits --}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Créé le</th>
                <th>Catégorie</th>
                <th>Marque</th>
                <th>Numéro de Série</th>
                <th>Lieu</th>
                <th>Salle</th>
                <th>Utilisateur</th>
                <th>Date d'achat</th>
                <th>État</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($produits as $produit)
                <tr>
                    <td>{{ $produit->created_at }}</td>
                    <td>{{ $produit->category }}</td>
                    <td>{{ $produit->name }}</td>
                    <td>{{ $produit->serialnumber }}</td>
                    <td>{{ $produit->lieu }}</td>
                    <td>{{ $produit->salle_id }}</td>
                    <td>{{ $produit->user }}</td>
                    <td>{{ $produit->achat }}</td>
                    <td>{{ $produit->etat }}</td>
                    <td>
                        {{-- Boutons pour mettre à jour, afficher et supprimer un produit --}}
                        <a href="{{ route('edit', ['id' => $produit->id]) }}" class="btn btn-success btn-sm">Mettre à Jour</a>
                        <a href="{{ route('show', ['id' => $produit->id]) }}" class="btn btn-info btn-sm">Afficher</a>
                        <form action="{{ route('delete', ['id' => $produit->id]) }}" method="POST" class="d-inline-block">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- Pagination --}}
    <div class="d-flex justify-content-between">
        {{ $produits->render() }}
    </div>
@endsection
