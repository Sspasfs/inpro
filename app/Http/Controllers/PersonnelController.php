<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Personnel;

/**
 * Contrôleur gérant les opérations liées au personnel.
 */
class PersonnelController extends Controller
{
    /**
     * Afficher la liste des membres du personnel.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        $personnels = Personnel::paginate(10); // ou un autre nombre de membres du personnel par page
        return view('personnels.index', ['personnels' => $personnels]);
    }

    /**
     * Afficher le formulaire de création d'un nouveau membre du personnel.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function create()
    {
        $personnels = Personnel::all();
        return view('personnels.create', compact('personnels'));
    }

    /**
     * Enregistrer un nouveau membre du personnel dans la base de données.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'ecole' => 'required|string',
        ]);

        $personnel = Personnel::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'ecole' => $request->ecole,
        ]);

        return redirect()->route('personnels.index')->with('success', 'Membre du personnel créé avec succès.');
    }

    /**
     * Afficher les détails d'un membre du personnel.
     *
     * @param int $id Identifiant du membre du personnel.
     * @return \Illuminate\Contracts\View\View
     */
    public function show($id)
    {
        $personnel = Personnel::findOrFail($id);
        $produits = $personnel->produits;

        return view('personnels.show', compact('personnel', 'produits'));
    }

    /**
     * Afficher le formulaire d'édition d'un membre du personnel.
     *
     * @param string $id Identifiant du membre du personnel.
     * @return \Illuminate\Contracts\View\View
     */
    public function edit(string $id)
    {
        $personnel = Personnel::find($id);
        return view('personnels.edit', compact('personnel'));
    }

    /**
     * Mettre à jour un membre du personnel dans la base de données.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id Identifiant du membre du personnel.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'ecole' => 'required|string',
        ]);

        $personnel = Personnel::findOrFail($id);
        $personnel->update([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'ecole' => $request->ecole,
        ]);

        return redirect()->route('personnels.show', ['id' => $personnel->id])->with('success', 'Membre du personnel mis à jour avec succès.');
    }

    /**
     * Supprimer un membre du personnel de la base de données.
     *
     * @param int $id Identifiant du membre du personnel.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        $personnel = Personnel::findOrFail($id);
        $personnel->delete();

        return redirect()->route('personnels.index')->with('success', 'Membre du personnel supprimé avec succès.');
    }
}
