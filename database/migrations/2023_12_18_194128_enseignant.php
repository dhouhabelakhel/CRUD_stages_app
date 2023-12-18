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
        schema::create('enseignants',function (Blueprint $table){
            $table->increments('id');
            $table->string('matricule')->nullable();
            $table->string('nom_ensg')->nullable();
            $table->string('prenom_ensg')->nullable();
            $table->timestamps();
            $table->primary('id');
           });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
       schema::dropIfExists('enseignants');
    }
};
