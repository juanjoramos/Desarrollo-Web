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
        Schema::create('estudiante_proyecto', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estudiante_id');  // Asegúrate de usar el tipo adecuado
            $table->unsignedBigInteger('proyecto_id');    // Asegúrate de usar el tipo adecuado
            $table->timestamps();
        
            $table->foreign('estudiante_id')->references('estudiante_id')->on('estudiante')->onDelete('cascade');
            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');  // Referencia al id de la tabla proyectos
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiante_proyecto');
    }
};
