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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
			$table->string('slug',100)->unique();
			$table->string('title',67);
			$table->string('description',155);
			$table->string('nombre',100)->unique();
			$table->string('descripcion');
			$table->string('urlfoto',100)->default("foto.jpg");
			$table->string('urlvideo',15)->nullable();
			$table->string('visitas')->default(0);
			$table->string('orden')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
