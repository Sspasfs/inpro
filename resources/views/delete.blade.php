@extends('layouts.master')

@section('content')
    {{-- Barre supérieure avec titre et bouton d'annulation --}}
    <div class="d-flex justify-content-between mb-4">
        <h3>Confirmation de suppression</h3>
        <a class="btn btn-secondary btn-sm" href="{{ route('index') }}">Annuler</a>
    </div>

    {{-- Message de confirmation de suppression --}}
    <p>Êtes-vous sûr de vouloir supprimer ce produit ?</p>

    {{-- Formulaire de confirmation de suppression --}}
    <form action="{{ route('delete', ['id' => $produit->id]) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Confirmer la suppression</button>
    </form>
@endsection
