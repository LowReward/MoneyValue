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
        // Création de la table 'admin'
        Schema::create('admin', function (Blueprint $table) {
            $table->id(); // Colonne 'id' de type auto-incrémenté
            $table->string('name'); // Colonne 'name' de type string
            $table->string('email'); // Colonne 'email' de type string
            $table->string('password'); // Colonne 'password' de type string
            $table->rememberToken(); // Colonne 'remember_token' pour la fonction de rappel
            $table->timestamps(); // Colonnes 'created_at' et 'updated_at' de type timestamp
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Suppression de la table 'admin' si elle existe
        Schema::dropIfExists('admin');
    }
};
