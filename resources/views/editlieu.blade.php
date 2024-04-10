@extends('layouts.master')

@section('content')
    {{-- Barre supérieure avec titre et bouton de retour à la liste des lieux --}}
    <div class="d-flex justify-content-between mb-4">
        <h3>Mettre à jour le Lieu</h3>
        <a class="btn btn-success btn-sm" href="{{ route('lieux.index') }}">Liste des Lieux</a>
    </div>

    {{-- Affichage des messages de succès ou d'erreur --}}
    @if(session()->has('success'))
        <label class="alert alert-success w-100">{{ session('success') }}</label>
    @elseif(session()->has('error'))
        <label class="alert alert-danger w-100">{{ session('error') }}</label>
    @endif

    {{-- Formulaire de mise à jour du lieu --}}
    <form action="{{ route('lieux.update', ['lieu' => $lieu->id]) }}" method="POST">
        @csrf
        @method('PUT')

        {{-- Champ pour le nom du lieu --}}
        <div class="form-group">
            <label>Nom</label>
            <input type="text" name="name" class="form-control" placeholder="Nom du Lieu" value="{{ $lieu->name }}">
        </div>

        {{-- Tableau pour afficher les salles du lieu --}}
        <div class="form-group">
            <label>Salles :</label>
            <table class="table">
                <thead>
                    <tr>
                        <th>Nom</th>
                        <th>Nombre de Places</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($lieu->salles as $salle)
                        <tr>
                            <td>{{ $salle->name }}</td>
                            <td>
                                <!-- Ajoutez ici les actions que vous souhaitez, par exemple, des boutons pour modifier ou supprimer la salle -->
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        {{-- Ajoutez un champ caché pour maintenir les salles existantes --}}
        @foreach($lieu->salles as $salle)
            <input type="hidden" name="salles[]" value="{{ $salle->id }}">
        @endforeach

        {{-- Ajoutez d'autres champs ou personnalisez le formulaire selon vos besoins --}}

        {{-- Bouton de soumission pour la mise à jour du lieu --}}
        <button type="submit" class="btn btn-primary">Mettre à jour le Lieu</button>
    </form>
@endsection
