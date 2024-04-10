<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personnels', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('prenom');
            $table->string('ecole');
            $table->unsignedBigInteger('produit_id')->nullable();
            $table->timestamps();

            // Ajout de la clé étrangère vers la table produits
            $table->foreign('produit_id')->references('id')->on('produits')->onDelete('set null');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('personnels', function (Blueprint $table) {
            // Suppression de la clé étrangère avant de supprimer la table
            $table->dropForeign(['produit_id']);
        });

        Schema::dropIfExists('personnels');
    }
};
