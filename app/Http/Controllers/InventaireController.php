<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

/**
 * Contrôleur gérant les opérations liées à l'inventaire des produits.
 */
class InventaireController extends Controller
{
    /**
     * Afficher la page d'inventaire avec la liste des catégories de produits.
     *
     * @return \Illuminate\Contracts\View\View
     */
    public function index()
    {
        // Récupérer les catégories distinctes depuis la table 'produits'
        //$categories = DB::table('produits')->distinct()->pluck('category');
        $category = DB::table('categories')->distinct()->pluck('name');

        // Retourner la vue 'inventaire' avec les catégories
        return view('inventaire', compact('category'));
    }
}
