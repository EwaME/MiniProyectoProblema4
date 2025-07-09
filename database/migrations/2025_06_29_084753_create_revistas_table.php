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
        Schema::create('revistas', function (Blueprint $table) {
            $table->id('id_revista');
            $table->string('titulo', 255);
            $table->string('issn', 20);
            $table->integer('numero');
            $table->string('anio_publicacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('revistas');
    }
};
