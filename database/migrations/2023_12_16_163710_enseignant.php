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
        $table->string('matricule')->primary()->nullable();
        $table->string('nom_ensg')->nullable();
        $table->string('prenom_ensg')->nullable();
        $table->timestamps();
       });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      schema::dropIfExists('enseignants') ; 
    }
};
