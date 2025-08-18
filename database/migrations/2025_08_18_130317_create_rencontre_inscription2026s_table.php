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
        Schema::create('rencontre_inscription2026s', function (Blueprint $table) {
            $table->id();
            $table->string('nom_prenom');
            $table->string('fonction')->nullable();
            $table->string('entreprise')->nullable();
            $table->string('email');
            $table->string('telephone');
            $table->string('pack_choisi');
            $table->json('destinations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rencontre_inscription2026s');
    }
};