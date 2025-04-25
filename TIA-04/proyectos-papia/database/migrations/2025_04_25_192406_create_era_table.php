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
        Schema::create('era', function (Blueprint $table) {
            $table->id('era_id')->primary();  // ID de evaluación (clave primaria, autoincremental)
            $table->unsignedBigInteger('proyecto_id'); // ID del proyecto evaluado (clave foránea)
            $table->decimal('calificacion', 5, 2); // Nota obtenida (tipo numeric con 2 decimales)
            $table->timestamps(); // Marca de tiempo para creación y actualización

            // Relación con la tabla 'proyecto'
            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('era');
    }
};
