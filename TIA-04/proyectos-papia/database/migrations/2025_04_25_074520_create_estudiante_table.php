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
        Schema::create('estudiante', function (Blueprint $table) {
            $table->id('estudiante_id'); 
            $table->string('nombre', 150);      
            $table->string('correo', 150)->unique();    
            $table->unsignedInteger('programa_id'); // Clave foránea a la tabla programa
            $table->timestamps(); 
        });
        Schema::table('estudiante', function (Blueprint $table) {
            $table->foreign('programa_id')->references('programa_id')->on('programa');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('estudiante');
    }
};
