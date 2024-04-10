@extends('layouts.master')

@section('content')
    <div class="mb-4">
        <h3>Créer un nouveau Lieu avec des Salles</h3>
    </div>

    {{-- Afficher les messages d'erreur s'il y en a --}}
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    {{-- Formulaire de création de lieu avec salles --}}
    <form action="{{ route('lieux.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Nom du Lieu :</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="quantity">Quantité de Salles :</label>
            <input type="number" name="quantity" id="quantity" class="form-control" value="{{ old('quantity') }}" required>
        </div>

        <div id="salleNamesContainer" class="form-group">
            <label>Salles :</label>
            <!-- Les champs de noms de salle seront ajoutés dynamiquement ici par JavaScript -->
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>

    {{-- Inclure la bibliothèque jQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- JavaScript personnalisé pour le comportement dynamique du formulaire --}}
    <script>
        $(document).ready(function () {
            // Ajouter dynamiquement des champs de noms et quantités de salle en fonction de la quantité totale de salles
            $('#quantity').change(function () {
                var quantity = $(this).val();
                var salleNamesContainer = $('#salleNamesContainer');

                salleNamesContainer.empty();

                if (quantity > 0) {
                    for (var i = 1; i <= quantity; i++) {
                        var inputField = '<div class="form-group">' +
                            '<label for="salle_names[]">Nom de la Salle ' + i + ' :</label>' +
                            '<input type="text" name="salle_names[]" class="form-control" required>' +
                            '<label for="salle_quantities[]">Quantité de la Salle ' + i + ' :</label>' +
                            '<input type="number" name="salle_quantities[]" class="form-control" required>' +
                            '</div>';

                        salleNamesContainer.append(inputField);
                    }
                }
            });
        });
    </script>

@endsection
