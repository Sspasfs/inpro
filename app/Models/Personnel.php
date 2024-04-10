<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Modèle représentant le personnel dans l'application.
 *
 * @package App\Models
 */
class Personnel extends Model
{
    use HasFactory;

    /**
     * Les colonnes pouvant être remplies massivement.
     *
     * @var array
     */
    protected $fillable = ['nom', 'prenom', 'ecole'];

    /**
     * Définit la relation entre le personnel et les produits.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produits()
    {
        return $this->hasMany(\App\Models\Produits::class, 'user', 'id');
    }
}
