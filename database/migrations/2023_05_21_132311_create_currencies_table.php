<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCurrenciesTable extends Migration
{
    public function up()
    {
        // Création de la table 'currencies'
        Schema::create('currencies', function (Blueprint $table) {
            $table->id(); // Colonne 'id' de type auto-incrémenté
            $table->string('code')->unique(); // Colonne 'code' de type string unique
            $table->string('name'); // Colonne 'name' de type string
            $table->timestamps(); // Colonnes 'created_at' et 'updated_at' de type timestamp
        });
    }

    public function down()
    {
        // Suppression de la table 'currencies' si elle existe
        Schema::dropIfExists('currencies');
    }
}
