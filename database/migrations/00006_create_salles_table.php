<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('salles', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Vous pouvez ajouter d'autres colonnes au besoin
            $table->foreignId('lieux_id')->constrained('lieux');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('salles');
    }
};
