@extends('layouts.master')

@section('content')
    {{-- Barre supérieure avec le titre et le bouton de retour --}}
    <div class="d-flex justify-content-between mb-4">
        <h3>Inventaire</h3>
        <a class="btn btn-success btn-sm" href="{{ route('index') }}">Retour à la Liste des Produits</a>
    </div>

    {{-- Tableau affichant l'inventaire des catégories de produits --}}
    <table class="table">
        <thead>
            <tr>
                <th>Catégorie</th>
                <th>Nombre de Produits</th>
            </tr>
        </thead>
        <tbody>
            {{-- Boucle à travers les catégories et affichage du nombre de produits par catégorie --}}
            @foreach ($category as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>{{ $category->products->count() }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
