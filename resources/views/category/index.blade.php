@extends('layouts.master')

@section('content')
    <h1>Liste des catégories</h1>

    <a href="{{ route('category.create') }}" class="btn btn-primary">Créer une nouvelle catégorie</a>

    @if ($categories->count() > 0)
    <table class="table">
        <thead>
            <tr>
                <th>Nom</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($categories as $category)
                <tr>
                    <td>{{ $category->name }}</td>
                    <td>
                        <a href="{{ route('category.show', $category) }}" class="btn btn-sm btn-primary">Afficher</a>
                        <a href="{{ route('category.edit', $category) }}" class="btn btn-sm btn-warning">Modifier</a>
                        <form action="{{ route('category.delete', $category) }}" method="POST" style="display:inline">
                            @csrf
                            @method('POST')
                            <button type="submit" class="btn btn-sm btn-danger">Supprimer</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @else
        <p>Aucune catégorie disponible.</p>
    @endif
@endsection