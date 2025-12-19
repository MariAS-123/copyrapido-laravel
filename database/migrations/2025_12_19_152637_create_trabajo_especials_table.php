<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('trabajo_especials', function (Blueprint $table) {
            $table->id();
            $table->string('descripcion',200);
            $table->string('nombre_cliente',100);
            $table->string('telefono',15);
            $table->date('fecha_entrega');
            $table->string('estado',25)->default('pendiente');
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('trabajo_especials');
    }
};
