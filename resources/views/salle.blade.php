@extends('layouts.master')

@section('content')
    {{-- Barre supérieure avec le titre et éventuellement le lien vers l'ajout d'une nouvelle salle --}}
    <div class="d-flex justify-content-between mb-4">
        <h3>Salles par Lieux</h3>
        <!-- Ajoutez ici le lien vers l'ajout d'une nouvelle salle si nécessaire -->
    </div>

    {{-- Vérifie s'il y a des salles à afficher --}}
    @if (count($salles) > 0)
        {{-- Tableau affichant la liste des salles --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <!-- Ajoutez d'autres colonnes si nécessaire -->
                </tr>
            </thead>
            <tbody>
                {{-- Boucle à travers les salles et affichage des détails --}}
                @foreach ($salles as $salle)
                    <tr>
                        <td>{{ $salle->id }}</td>
                        <td>{{ $salle->nom }}</td>
                        <!-- Ajoutez d'autres colonnes si nécessaire -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        {{-- Aucune salle trouvée pour ce lieu --}}
        <p>Aucune salle trouvée pour ce lieu.</p>
    @endif

@endsection
