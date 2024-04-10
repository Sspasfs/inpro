<!-- resources/views/personnels/index.blade.php -->
@extends('layouts.master')

@section('content')
    <div class="d-flex justify-content-between mb-4">
        <h3>Liste des Membres du Personnel</h3>
        <a class="btn btn-success btn-sm" href="{{ route('personnels.create') }}">Ajouter un Nouveau Membre du Personnel</a>
    </div>

    @if (session()->has('success'))
        <label class="alert alert-success w-100">{{ session('success') }}</label>
    @elseif(session()->has('error'))
        <label class="alert alert-danger w-100">{{ session('error') }}</label>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>École</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($personnels as $personnel)
                <tr>
                    <td>{{ $personnel->id }}</td>
                    <td>{{ $personnel->nom }}</td>
                    <td>{{ $personnel->prenom }}</td>
                    <td>{{ $personnel->ecole }}</td>
                    <td>
                        <a href="{{ route('personnels.edit', ['id' => $personnel]) }}" class="btn btn-success btn-sm">Mettre à Jour</a>
                        <a href="{{ route('personnels.show', ['id' => $personnel]) }}" class="btn btn-info btn-sm">Afficher</a>
                        <form action="{{ route('personnels.delete', ['id' => $personnel]) }}" method="POST" class="d-inline-block">
                            @csrf
                            <button type="submit" class="btn btn-danger btn-sm">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    <div class="d-flex justify-content-between">
        {{ $personnels->links() }}
    </div>
@endsection
