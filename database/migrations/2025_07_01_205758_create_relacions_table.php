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
        Schema::create('relacions', function (Blueprint $table) {
            $table->string('titulo_articulo', 255);
            $table->unsignedBigInteger('id_autor');
            $table->integer('orden');
            $table->timestamps();
            $table->primary(['titulo_articulo', 'id_autor']);

            $table->foreign('titulo_articulo')->references('titulo')->on('articulos')->onDelete('cascade');
            $table->foreign('id_autor')->references('id_autor')->on('autors')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('relacions');
    }
};
