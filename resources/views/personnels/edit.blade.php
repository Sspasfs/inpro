<!-- resources/views/personnels/edit.blade.php -->
@extends('layouts.master')

@section('content')
    <div class="d-flex justify-content-between mb-4">
        <h3>Mettre à jour le Membre du Personnel</h3>
        <a class="btn btn-success btn-sm" href="{{ route('personnels.index') }}">Liste des Membres du Personnel</a>
    </div>

    @if(session()->has('success'))
        <label class="alert alert-success w-100">{{ session('success') }}</label>
    @elseif(session()->has('error'))
        <label class="alert alert-danger w-100">{{ session('error') }}</label>
    @endif

    <form action="{{ route('personnels.update', ['id' => $personnel]) }}" method="POST">
        @csrf

        <div class="form-group">
            <label>Nom</label>
            <input type="text" name="nom" class="form-control" placeholder="Nom du Membre du Personnel" value="{{ $personnel->nom }}">
        </div>

        <div class="form-group">
            <label>Prénom</label>
            <input type="text" name="prenom" class="form-control" placeholder="Prénom du Membre du Personnel" value="{{ $personnel->prenom }}">
        </div>

        <div class="form-group">
            <label>École</label>
            <input type="text" name="ecole" class="form-control" placeholder="École" value="{{ $personnel->ecole }}">
        </div>

        <button type="submit" class="btn btn-primary">Mettre à jour le Membre du Personnel</button>
    </form>
@endsection
