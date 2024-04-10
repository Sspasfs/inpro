<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modèle représentant les salles dans l'application.
 *
 * @package App\Models
 */
class Salle extends Model
{
    /**
     * Les colonnes pouvant être remplies massivement.
     *
     * @var array
     */
    protected $fillable = ['name', 'lieux_id']; // Assurez-vous d'inclure toutes les colonnes que vous avez ajoutées à la table

    /**
     * Définit la relation entre les salles et les lieux.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function lieu()
    {
        return $this->belongsTo(Lieux::class, 'lieux_id');
    }

    /**
     * Définit la relation entre les salles et les produits.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function produits()
    {
        return $this->hasMany(Produits::class, 'salle_id');
    }
}
