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
        Schema::create('prixes', function (Blueprint $table) {
            $table->id();
            $table->string('nom');
            $table->string('fonction')->nullable();
            $table->string('email');
            $table->string('statut');
            $table->string('entreprise');
            $table->string('numero_whatsapp')->nullable();
             $table->string('country')->nullable();
              $table->string('city')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prixes');
    }
};
