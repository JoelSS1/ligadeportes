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
        Schema::create('ligas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre', 50);
            $table->string('abreviatura', 10)->nullable();
            $table->string('descripcion', 300)->nullable();
            $table->string('logo', 150);
            $table->boolean('estado')->default(true);
            $table->timestamps();

        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ligas');
    }
};
