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
        Schema::table('transacciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('entradas');
            $table->string('salidas');
            $table->string('ajustes');
            $table->bigInteger('ucc')->unique();
            $table->dateTime('creado', 0);
            $table->unsignedInteger('proveedor_id');
            $table->unsignedBigInteger('user_id');

            $table->foreign('proveedor_id')->references('id')->on('proveedores');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transacciones');
    }
};
