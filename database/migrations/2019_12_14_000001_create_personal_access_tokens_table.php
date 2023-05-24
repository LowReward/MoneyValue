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
        // Création de la table 'personal_access_tokens'
        Schema::create('personal_access_tokens', function (Blueprint $table) {
            $table->id(); // Colonne 'id' de type auto-incrémenté
            $table->morphs('tokenable'); // Polymorphic columns 'tokenable_id' and 'tokenable_type'
            $table->string('name'); // Colonne 'name' de type string
            $table->string('token', 64)->unique(); // Colonne 'token' de type string unique
            $table->text('abilities')->nullable(); // Colonne 'abilities' de type texte nullable
            $table->timestamp('last_used_at')->nullable(); // Colonne 'last_used_at' de type timestamp nullable
            $table->timestamp('expires_at')->nullable(); // Colonne 'expires_at' de type timestamp nullable
            $table->timestamps(); // Colonnes 'created_at' et 'updated_at' de type timestamp
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        // Suppression de la table 'personal_access_tokens' si elle existe
        Schema::dropIfExists('personal_access_tokens');
    }
};
