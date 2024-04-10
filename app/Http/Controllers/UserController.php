<?php

namespace App\Http\Controllers;

use App\Models\User;

/**
 * Contrôleur gérant les opérations liées aux utilisateurs.
 *
 * \dot
 * digraph UserController {
 *     // Description de votre diagramme de classe
 *     // ...
 * }
 * \enddot
 */
class UserController extends Controller
{
    /**
     * Afficher la liste des utilisateurs.
     *
     * @return \Illuminate\Contracts\View\View Vue contenant la liste des utilisateurs.
     */
    public function index()
    {
        /**
         * Récupérer tous les utilisateurs depuis la base de données.
         *
         * @var \Illuminate\Database\Eloquent\Collection $users
         */
        $users = User::all();

        /**
         * Retourner la vue 'index' avec les utilisateurs.
         */
        return view('index', ['users' => $users]);
    }
}
