@extends('layouts.master')

@section('content')
    {{-- Barre supérieure avec le titre et le bouton d'ajout --}}
    <div class="d-flex justify-content-between mb-4">
        <h3>Liste des Lieux</h3>
        <a href="{{ route('lieux.create') }}" class="btn btn-primary">Ajouter un Lieu</a>
    </div>

    {{-- Vérifie s'il y a des lieux à afficher --}}
    @if (count($lieux) > 0)
        {{-- Tableau affichant la liste des lieux --}}
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nom</th>
                    <th>Salles</th>
                    <th>Actions</th> <!-- Nouvelle colonne pour les actions -->
                    <!-- Ajoutez d'autres colonnes si nécessaire -->
                </tr>
            </thead>
            <tbody>
                {{-- Boucle à travers les lieux et affichage des détails --}}
                @foreach ($lieux as $lieu)
                    <tr>
                        <td>{{ $lieu->id }}</td>
                        <td>{{ $lieu->name }}</td>
                        <td>
                            {{-- Affiche les noms des salles séparés par des virgules --}}
                            @foreach ($lieu->salles as $salle)
                                {{ $salle->name }}
                                @if (!$loop->last)
                                    ,
                                @endif
                            @endforeach
                        </td>
                        <td>
                            {{-- Bouton de modification --}}
                            <a href="{{ route('lieux.edit', $lieu->id) }}" class="btn btn-warning">Modifier</a>

                            {{-- Bouton de suppression avec formulaire de confirmation --}}
                            <form action="{{ route('lieux.destroy', $lieu->id) }}" method="POST" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce lieu ?')">Supprimer</button>
                            </form>
                        </td>
                        <!-- Ajoutez d'autres colonnes si nécessaire -->
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>Aucun lieu trouvé.</p>
    @endif

@endsection
