<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produits;
use App\Models\Lieux;
use App\Models\User;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreProduitsRequest;
use App\Models\Category;
use App\Models\Salle;

/**
 * Contrôleur gérant les opérations liées aux produits.
 */
class ProduitsController extends Controller
{
    /**
     * Afficher la liste des produits.
     *
     * @return \Illuminate\Contracts\View\View Vue contenant la liste des produits.
     */
    public function index()
    {
        // Récupérer tous les produits depuis la base de données avec pagination.
        $produits = Produits::paginate(10); // ou un autre nombre de produits par page

        // Retourner la vue 'index' avec les produits.
        return view('index', ['produits' => $produits]);
    }

    /**
     * Afficher le formulaire de création d'un nouveau produit.
     *
     * @return \Illuminate\Contracts\View\View Vue contenant le formulaire de création.
     */
    public function create()
    {
        //Récupérer toutes les catégories depuis la base de données.
        $category = Category::all();
        // Récupérer tous les lieux depuis la base de données.
        $lieux = Lieux::all();

        // Récupérer toutes les salles depuis la base de données.
        $salles = Salle::all();
        //$personnels = \App\Models\Personnel::all();

        // Retourner la vue 'create' avec les lieux et les salles.
        return view('create', ['lieux' => $lieux, 'salles' => $salles, 'category' => $category]);
    }

    /**
     * Enregistrer un nouveau produit dans la base de données.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        //dd($request);
        // Validation des données du formulaire.
        $request->validate(Produits::$createRules);

        // Création d'un tableau contenant les données du produit.
        $produitData = [
            'name' => $request->name,
            'category' => $request->category,
            'lieu' => $request->lieu,
            'achat' => $request->achat,
            'fournisseur' => $request->fournisseur,
            'etat' => $request->etat,
            'salle_id' => $request->salle,
            'serialnumber' =>$request->serialnumber,
        ];

        // Vérification de l'existence de 'imei' dans la requête.
        if ($request->has('imei')) {
            $produitData['imei'] = $request->imei;
        }

        
        $produit = Produits::create($produitData);
        
        // Redirection vers la page d'index avec un message de succès.
        return redirect()->route('index')->with('success', 'Produit créé avec succès.');
    }

    /**
     * Afficher les détails d'un produit.
     *
     * @param string $id Identifiant du produit.
     * @return \Illuminate\Contracts\View\View Vue contenant les détails du produit.
     */
    public function show(string $id)
    {
        // Récupérer un produit spécifique depuis la base de données.
        $produit = Produits::findOrFail($id);

        // Retourner la vue 'show' avec les détails du produit.
        return view('show', compact('produit'));
    }

    /**
     * Afficher le formulaire d'édition d'un produit.
     *
     * @param string $id Identifiant du produit.
     * @return \Illuminate\Contracts\View\View Vue contenant le formulaire d'édition.
     */
    public function edit(string $id)
    {
        // Récupérer un produit spécifique depuis la base de données pour l'édition.
        $produit = Produits::findOrFail($id);

        // Retourner la vue 'edit' avec le produit à éditer.
        return view('edit', compact('produit'));
    }

    /**
     * Mettre à jour un produit dans la base de données.
     *
     * @param \Illuminate\Http\Request $request
     * @param string $id Identifiant du produit.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        // Validation des données du formulaire.
        $request->validate(Produits::$createRules);

        // Récupérer un produit spécifique depuis la base de données pour la mise à jour.
        $produit = Produits::findOrFail($id);

        // Mise à jour des attributs du produit.
        $produit->update([
            'name' => $request->name,
            'serialnumber' => $request->serialnumber,
            'user' => $request->user,
            'fournisseur' => $request->fournisseur,
            'imei' => $request->imei,
            'lieu' => $request->lieu,
            'achat' => $request->achat,
            'etat' => $request->etat,
        ]);

        // Redirection vers la page de détails du produit mis à jour avec un message de succès.
        return redirect()->route('show', ['id' => $produit->id])->with('success', 'Produit mis à jour avec succès.');
    }

    /**
     * Supprimer un produit de la base de données.
     *
     * @param string $id Identifiant du produit.
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {
        // Récupérer un produit spécifique depuis la base de données pour la suppression.
        $produit = Produits::findOrFail($id);

        // Supprimer le produit de la base de données.
        $produit->delete();

        // Redirection vers la page d'index avec un message de succès.
        return redirect()->route('index')->with('success', 'Produit supprimé avec succès.');
    }
}
