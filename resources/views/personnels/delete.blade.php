<!-- resources/views/personnels/delete.blade.php -->
@extends('layouts.master')

@section('content')
    <div class="d-flex justify-content-between mb-4">
        <h3>Confirmation de suppression</h3>
        <a class="btn btn-secondary btn-sm" href="{{ route('personnels.show', ['id' => $personnel->id]) }}">Annuler</a>
    </div>

    <p>Êtes-vous sûr de vouloir supprimer le membre du personnel {{ $personnel->nom }} {{ $personnel->prenom }}?</p>

    <!-- Formulaire de suppression -->
    <form action="{{ route('personnels.delete', ['id' => $personnel->id]) }}" method="POST">
        @csrf
        <button type="submit" class="btn btn-danger">Confirmer la suppression</button>
    </form>
@endsection
