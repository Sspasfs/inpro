<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;

class CategoryController extends Controller
{
    // Affiche la liste des catégories
    public function index()
    {
        $categories = Category::all();
        return view('category.index', compact('categories'));
    }

    // Affiche le formulaire de création de catégorie
    public function create()
    {
        return view('category.create');
    }

    // Enregistre une nouvelle catégorie
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);

        Category::create([
            'name' => $request->name,
        ]);

        return redirect()->route('category.index')->with('success', 'Catégorie créée avec succès.');
    }

    // Affiche les détails d'une catégorie
    public function show(Category $category)
    {
        return view('category.show', compact('category'));
    }

    // Affiche le formulaire de modification d'une catégorie
    public function edit(Category $category)
    {
        return view('category.edit', compact('category'));
    }

    // Met à jour une catégorie
    public function update(Request $request, Category $category)
    {
        $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);

        $category->update([
            'name' => $request->name,
        ]);

        return redirect()->route('category.index')->with('success', 'Catégorie mise à jour avec succès.');
    }

    // Supprime une catégorie
    public function destroy(Category $category)
    {
        $category->delete();

        return redirect()->route('category.index')->with('success', 'Catégorie supprimée avec succès.');
    }
}

