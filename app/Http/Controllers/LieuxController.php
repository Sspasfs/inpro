<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Lieux;
use App\Models\Salle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Contrôleur gérant les opérations liées aux lieux et aux salles.
 */
class LieuxController extends Controller
{
    /**
     * Afficher la liste des lieux.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function getLieux()
    {
        // Récupérer tous les lieux depuis la base de données
        $lieux = Lieux::all();

        // Retourner la vue 'lieux' avec les données
        return view('lieux', ['lieux' => $lieux]);
    }

    /**
     * Récupérer les salles associées à un lieu spécifique.
     *
     * @param int $lieuId Identifiant du lieu.
     * @return \Illuminate\Http\JsonResponse
     */
    public function getSallesByLieu($lieuId)
    {
        // Récupérer les salles associées à un lieu spécifique
        $lieu = Lieux::find($lieuId);

        if (!$lieu) {
            return response()->json(['error' => 'Lieu non trouvé'], 404);
        }

        $salles = $lieu->salles;

        // Retourner les salles au format JSON
        return response()->json(['salles' => $salles]);
    }

    /**
     * Afficher le formulaire de création d'un nouveau lieu avec des salles.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        // Récupérer tous les lieux depuis la base de données
        $lieux = Lieux::all();

        // Récupérer toutes les salles depuis la base de données (vous pouvez ajouter cela si nécessaire)
        $salles = Salle::all();

        // Retourner la vue 'createlieux' avec les lieux et les salles
        return view('createlieux', ['lieux' => $lieux, 'salles' => $salles]);
    }

    /**
     * Enregistrer un nouveau lieu avec des salles dans la base de données.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
            'quantity' => 'required|integer|min:1',
            'salles' => 'array', // Assurez-vous que le champ "salles" est un tableau
            'salle_names.*' => 'required|string|max:255',
            'salle_quantities.*' => 'required|integer|min:1',
        ]);

        try {
            // Commencer une transaction
            DB::beginTransaction();

            // Créer le lieu
            $lieu = Lieux::create([
                'name' => $request->input('name'),
            ]);

            // Associer les salles au lieu
            $salleNames = $request->input('salle_names');

            // Vérifier si $salleNames est un tableau avant d'utiliser array_map
            if (is_array($salleNames)) {
                $lieu->salles()->createMany(array_map(function ($salleName) {
                    return ['name' => $salleName];
                }, $salleNames));
            }

            // Valider et valider la transaction
            DB::commit();

            // Rediriger vers la liste des lieux ou une autre page
            return redirect()->route('lieux.index')->with('success', 'Lieu et salles créés avec succès.');
        } catch (\Exception $e) {
            // En cas d'erreur, annuler la transaction
            DB::rollback();

            // Rediriger avec un message d'erreur
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la création du lieu et des salles.');
        }
    }

    /**
     * Afficher le formulaire d'édition d'un lieu avec des salles.
     *
     * @param \App\Models\Lieux $lieu
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(Lieux $lieu)
    {
        // Récupérer toutes les salles depuis la base de données (vous pouvez ajouter cela si nécessaire)
        $salles = Salle::all();

        // Retourner la vue 'editlieu' avec le lieu et les salles
        return view('editlieu', compact('lieu', 'salles'));
    }

    /**
     * Mettre à jour un lieu avec des salles dans la base de données.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $lieu Identifiant du lieu.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $lieu)
    {
        $lieu = Lieux::findOrFail($lieu);

        // Valider les données du formulaire
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        try {
            // Commencer une transaction
            DB::beginTransaction();

            // Mettre à jour le lieu
            $lieu->update([
                'name' => $request->input('name'),
            ]);

            // Ajouter les nouvelles salles au lieu
            $salleNames = $request->input('salle_names');

            // Vérifier si $salleNames est un tableau avant d'utiliser array_map
            if (is_array($salleNames)) {
                // Ajouter les nouvelles salles sans supprimer les existantes
                $lieu->salles()->createMany(array_map(function ($salleName) {
                    return ['name' => $salleName];
                }, $salleNames));
            }

            // Valider et valider la transaction
            DB::commit();

            // Rediriger vers la liste des lieux ou une autre page
            return redirect()->route('lieux.index')->with('success', 'Lieu et salles mis à jour avec succès.');
        } catch (\Exception $e) {
            // En cas d'erreur, annuler la transaction
            DB::rollback();

            // Rediriger avec un message d'erreur
            return redirect()->back()->with('error', 'Une erreur est survenue lors de la mise à jour du lieu et des salles.');
        }
    }

    /**
     * Supprimer un lieu et ses salles associées de la base de données.
     *
     * @param \App\Models\Lieux $lieu
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy(Lieux $lieu)
    {
        // Assurez-vous que le lieu existe avant de tenter de le supprimer
        if ($lieu) {
            // Supprime le lieu et ses salles associées
            $lieu->salles()->delete();
            $lieu->delete();

            return redirect()->route('lieux.index')->with('success', 'Lieu supprimé avec succès');
        }

        // Redirige avec un message d'erreur si le lieu n'existe pas
        return redirect()->route('lieux.index')->with('error', 'Lieu non trouvé');
    }
}
