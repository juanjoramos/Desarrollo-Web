<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('mascotas', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->string('tipo_animal'); // perro, gato, pájaro, etc.
            $table->string('raza')->nullable();
            $table->integer('edad');
            $table->decimal('precio', 10, 2);
            $table->date('fecha_ingreso');
            $table->boolean('vendido')->default(false);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mascotas');
    }
};