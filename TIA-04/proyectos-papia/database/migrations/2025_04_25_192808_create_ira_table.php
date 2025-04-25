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
        Schema::create('ira', function (Blueprint $table) {
            $table->id('ira_id'); 
            $table->integer('proyecto_id'); // ID del proyecto asociado
            $table->string('indicador', 100); // Indicador de desempeño
            $table->timestamps(); 

            // Definición de la clave foránea con la tabla 'proyectos'
            $table->foreign('proyecto_id')->references('id')->on('proyectos')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ira');
    }
};
