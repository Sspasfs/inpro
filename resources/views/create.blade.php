@extends('layouts.master')

@section('content')
    <div class="mb-4">
        <h3>Créer un nouveau Produit</h3>
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

    {{-- Formulaire de création de produit --}}
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="name">Marque :</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="form-group">
            <label for="category">Catégorie :</label>
            <select name="category" id="category" class="form-control" required>
                <option value="" disabled selected>Choisissez une catégorie</option>
                @foreach ($category as $category)
                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="serialnumber">Numéro de série :</label>
            <input type="text" name="serialnumber" id="serialnumber" class="form-control" value="{{ old('serialnumber') }}" required>
        </div>

        <div class="form-group" id="imeiField" style="display: none;">
            <label for="imei">Numéro IMEI :</label>
            <input type="text" name="imei" id="imei" class="form-control" value="{{ old('imei') }}">
        </div>

        <div class="form-group">
            <label for="lieu">Lieu :</label>
            <select name="lieu" id="lieu" class="form-control">
                <option value="" disabled selected>Choisissez un lieu</option>
                @foreach ($lieux as $lieu)
                    <option value="{{ $lieu->id }}">{{ $lieu->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group" id="salleField" style="display: none;">
            <label for="salle">Salle :</label>
            <select name="salle" id="salle" class="form-control">
                <!-- Les options de salle seront ajoutées dynamiquement ici -->
                @foreach ($salles as $salle)
                    <option value="{{ $salle->id }}">{{ $salle->name }}</option>
                @endforeach
            </select>
        </div>

        <div class="form-group">
            <label for="fournisseur">Fournisseur:</label>
            <select name="fournisseur" id="fournisseur" class="form-control">
                <option value="" disabled selected>Choisissez un fournisseur</option>
                <optgroup label="Informatique">
                    <option value="InmacWstore">Inmac Wstore</option>
                    <option value="Boulanger">Boulanger</option>
                    <option value="Ingelan">Ingelan</option>
                </optgroup>
                <optgroup label="Téléphonie">
                    <option value="SFR">SFR</option>
                    <option value="Orange">Orange</option>
                </optgroup>
                <optgroup label="Autre">
                    <option value="Amazon">Amazon </option>
                </optgroup>
            </select>
        </div>

        <div class="form-group">
            <label for="etat">État :</label>
            <select name="etat" id="etat" class="form-control" required>
                <option value="" disabled selected>Choisissez l'état du matériel</option>
                <option value="Très bon">Très bon</option>
                <option value="Bon">Bon</option>
                <option value="Mauvais">Mauvais</option>
                <option value="Hors service">Hors Service</option>
                <option value="En réparation">En réparation </option>
                <option value="A donner">A donner</option>
            </select>
        </div>

        <div class="form-group">
            <label for="achat">Date d'achat :</label>
            <input type="date" name="achat" id="achat" class="form-control" value="{{ old('achat') }}" required>
        </div>

        <button type="submit" class="btn btn-primary">Enregistrer</button>
    </form>

    {{-- Inclure la bibliothèque jQuery --}}
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    {{-- JavaScript personnalisé pour le comportement dynamique du formulaire --}}
    <script>
        $(document).ready(function() {
            // Afficher/masquer le champ IMEI en fonction de la catégorie sélectionnée
            $('#category').change(function() {
                if ($(this).val() === 'Téléphone Portable') {
                    $('#imeiField').show();
                    $('#imei').prop('required', true);
                } else {
                    $('#imeiField').hide();
                    $('#imei').prop('required', false);
                }
            });
    
            // Afficher/masquer le champ de sélection de salle en fonction du lieu sélectionné
            $('#lieu').change(function() {
                var selectedLieu = $(this).val();
                var salleField = $('#salleField');
    
                salleField.hide();
    
                if (selectedLieu) {
                    // Effectuer une requête AJAX pour obtenir les salles en fonction du lieu sélectionné
                    $.ajax({
                        url: '/get-salles-by-lieu/' + selectedLieu,
                        type: 'GET',
                        dataType: 'json',
                        success: function(data) {
                            // Mettre à jour les options de la liste déroulante des salles
                            var salleDropdown = $('#salle');
                            salleDropdown.empty();
                            salleDropdown.append(
                                '<option value="" disabled selected>Choisissez une salle</option>'
                            );
                            $.each(data.salles, function(index, salle) {
                                salleDropdown.append('<option value="' + salle.id +
                                    '">' + salle.name + '</option>');
                            });
    
                            // Afficher la div du champ de sélection de salle
                            salleField.show();
                        },
                        error: function(xhr, status, error) {
                            console.error('Erreur lors de la récupération des salles: ' +
                                error);
                        }
                    });
                }
            });
        });
    </script>

@endsection
