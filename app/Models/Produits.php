<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Modèle représentant les produits dans l'application.
 *
 * @package App\Models
 */
class Produits extends Model
{
    use HasFactory;

    /**
     * Les colonnes pouvant être remplies massivement.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'category',
        'serialnumber',
        'lieu',
        'achat',
        'fournisseur',
        'imei',
        'etat',
        'salle',
        'salle_id',
    ];

    /**
     * Les règles de validation pour la création d'un produit.
     *
     * @var array
     */
    public static $createRules = [
        'name' => 'required|string|max:255',
        'category' => 'required|string|max:255',
        'serialnumber' => 'required|unique:produits|max:255',
        'imei' => 'nullable|required_if:category,Téléphone Portable|string|max:255',
        'lieu' => 'required|string|max:255',
        'fournisseur' => 'required|string|max:255',
        'etat' => 'required|string|max:255',
        'achat' => 'required|date',
    ];

    /**
     * Définit la relation entre les produits et les salles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function salle()
    {
        return $this->belongsTo(Salle::class, 'salle_id');
    }
}
