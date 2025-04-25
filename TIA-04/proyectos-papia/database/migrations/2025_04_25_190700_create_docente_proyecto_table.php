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
        Schema::create('docente_proyecto', function (Blueprint $table) {
            $table->id(); // Columna id automática como clave primaria
            $table->integer('docente_id');
            $table->integer('proyecto_id');
            $table->timestamps(); 
        
            // Relación con la tabla 'docente'
            $table->foreign('docente_id')->references('docente_id')->on('docente')->onDelete('cascade');
            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('docente_proyecto');
    }
};
