<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLieuxTable extends Migration
{
    public function up()
    {
        Schema::create('lieux', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('quantity')->default(0); // Ajout du champ "quantity"
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('lieux');
    }
}
