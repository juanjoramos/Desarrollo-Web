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
        Schema::create('tipo_proyecto', function (Blueprint $table) {
            $table->id('tipo_proyecto_id'); // Clave primaria serial, autoincrementable
            $table->string('nombre', 100)->unique(); // Nombre del tipo de proyecto, único
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tipo_proyecto');
    }
};
