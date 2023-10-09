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
        Schema::create('empresas', function (Blueprint $table) {
            $table->id();
			$table->string('slug',100)->unique();
			$table->string('title',67);
			$table->string('description',155);
			$table->string('razonsocial')->unique();
			$table->text('descripcion');
			$table->string('urlfoto',100);
			$table->string('urllogo',100);
			$table->integer('visitas')->default(0);
			$table->integer('orden')->default(0);
			$table->boolean('estado')->default(0);
			$table->boolean('publicacion')->default(0);
			$table->foreignId('ruta_id')->constrained();
			$table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empresas');
    }
};
