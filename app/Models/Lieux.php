<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Modèle représentant les lieux dans l'application.
 *
 * @package App\Models
 */
class Lieux extends Model
{
    /**
     * Le nom de la table associée au modèle.
     *
     * @var string
     */
    protected $table = 'lieux';

    /**
     * Les colonnes pouvant être remplies massivement.
     *
     * @var array
     */
    protected $fillable = ['name', 'quantity'];

    /**
     * Définit la relation entre les lieux et les salles.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function salles()
    {
        return $this->hasMany(Salle::class, 'lieux_id');
    }
}

