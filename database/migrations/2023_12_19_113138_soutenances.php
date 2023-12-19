<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('soutenances', function (Blueprint $table) {
            $table->id();
            $table->integer('numjury')->nullable();
            $table->date('datesoutenance')->nullable();
            $table->double('note')->nullable();
            $table->increments('student_id');
            $table->increments('enseg_id');
            $table->timestamps();

            $table->foreign('student_id')->references('id')->on('etudiants')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('enseg_id')->references('id')->on('enseignants')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
      

        Schema::dropIfExists('soutenance');
    }
};
