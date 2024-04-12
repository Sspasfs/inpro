<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Exécute les migrations.
     */
    public function up(): void
    {
        Schema::create('produits', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->string('category');
            $table->string('imei')->nullable();
            $table->string('serialnumber');
            $table->string('lieu');
            $table->string('salle')->nullable();
            $table->unsignedBigInteger('salle_id')->nullable();
            $table->string('fournisseur');
            $table->string('etat');
            $table->date('achat');

            $table->foreign('salle_id')->references('id')->on('salles')->onDelete('set null');
        });
    }

    /**
     * Revertit les migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produits');
    }
};
