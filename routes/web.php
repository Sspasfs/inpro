<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\LieuxController;
use App\Http\Controllers\CategoryController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Routes pour la gestion des produits
Route::get('/', [\App\Http\Controllers\ProduitsController::class, 'index'])->name('index');
Route::get('/produits/create', [\App\Http\Controllers\ProduitsController::class, 'create'])->name('create');
Route::post('/produits/store', [\App\Http\Controllers\ProduitsController::class, 'store'])->name('store');
Route::get('/produits/show/{id}', [\App\Http\Controllers\ProduitsController::class, 'show'])->name('show');
Route::get('/produits/edit/{id}', [\App\Http\Controllers\ProduitsController::class, 'edit'])->name('edit');
Route::post('/produits/update/{id}', [\App\Http\Controllers\ProduitsController::class, 'update'])->name('update');
Route::post('/produits/delete/{id}', [\App\Http\Controllers\ProduitsController::class, 'destroy'])->name('delete');

// Routes pour la gestion des utilisateurs
// Route::get('/users', [UserController::class, 'index'])->name('index');
// Route::get('/users/{user}', [UserController::class, 'show'])->name('show');
// Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('edit');
// Route::put('/users/{user}', [UserController::class, 'update'])->name('update');
// Route::delete('/users/{user}', [UserController::class, 'destroy'])->name('destroy');

// Routes pour la gestion du personnel
Route::get('/personnels', [\App\Http\Controllers\PersonnelController::class, 'index'])->name('personnels.index');
Route::get('/personnels/create', [\App\Http\Controllers\PersonnelController::class, 'create'])->name('personnels.create');
Route::post('/personnels/store', [\App\Http\Controllers\PersonnelController::class, 'store'])->name('personnels.store');
Route::get('/personnels/show/{id}', [\App\Http\Controllers\PersonnelController::class, 'show'])->name('personnels.show');
Route::get('/personnels/edit/{id}', [\App\Http\Controllers\PersonnelController::class, 'edit'])->name('personnels.edit');
Route::post('/personnels/update/{id}', [\App\Http\Controllers\PersonnelController::class, 'update'])->name('personnels.update');
Route::post('/personnels/delete/{id}', [\App\Http\Controllers\PersonnelController::class, 'destroy'])->name('personnels.delete');

Route::get('/inventaire', [\App\Http\Controllers\InventaireController::class, 'index'])->name('inventaire.index');

Route::get('/lieux', [LieuxController::class, 'getLieux'])->name('lieux.index');
Route::get('/lieux/{lieuId}/salles', [LieuxController::class, 'getSallesByLieu'])->name('salles');
Route::get('/lieux/create', [LieuxController::class, 'create'])->name('lieux.create');
Route::post('/lieux/store', [LieuxController::class, 'store'])->name('lieux.store');
Route::get('/get-salles-by-lieu/{lieuId}', [LieuxController::class, 'getSallesByLieu'])->name('get-salles-by-lieu');
// Route pour afficher le formulaire de modification
Route::get('/lieux/{lieu}/edit', [LieuxController::class, 'edit'])->name('lieux.edit');

// Route pour traiter la mise à jour du lieu
Route::put('/lieux/{lieu}', [LieuxController::class, 'update'])->name('lieux.update');
Route::delete('/lieux/{lieu}', [LieuxController::class, 'destroy'])->name('lieux.destroy');

//Route pour la création de catégorie
Route::get('/categories', [CategoryController::class, 'index'])->name('category.index');
Route::get('/categories/create', [CategoryController::class, 'create'])->name('category.create');
Route::post('/categories/store', [CategoryController::class, 'store'])->name('category.store');
Route::get('/categories/show/{category}', [CategoryController::class, 'show'])->name('category.show');
Route::get('/categories/edit/{category}', [CategoryController::class, 'edit'])->name('category.edit');
Route::post('/categories/update/{category}', [CategoryController::class, 'update'])->name('category.update');
Route::post('/categories/delete/{category}', [CategoryController::class, 'destroy'])->name('category.delete');

Route::get('/glpi', function () {
    return redirect('/glpi/index.php'); // Assurez-vous d'ajuster l'URL en fonction de votre configuration
});