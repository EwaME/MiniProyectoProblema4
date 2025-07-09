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
        Schema::create('articulos', function (Blueprint $table) {
            $table->string('titulo', 255)->primary();
            $table->integer('pagina_inicio');
            $table->integer('pagina_fin');
            $table->unsignedBigInteger('id_revista');
            $table->timestamps();
            $table->foreign('id_revista')->references('id_revista')->on('revistas')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('articulos');
    }
};
