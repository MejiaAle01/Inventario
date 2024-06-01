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
        Schema::create('proveedores', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('empresa');
            $table->string('direccion');
            $table->unsignedInteger('proveedor_id');
            $table->unsignedInteger('transaccion_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('proveedores');
        Schema::dropIfExists('proveedores');
    }
};
