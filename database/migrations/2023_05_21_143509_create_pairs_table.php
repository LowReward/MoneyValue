<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePairsTable extends Migration
{
    public function up()
    {
        // Création de la table 'pairs'
        Schema::create('pairs', function (Blueprint $table) {
            $table->id(); // Colonne 'id' de type auto-incrémenté
            $table->string('currency_from'); // Colonne 'currency_from' de type string
            $table->string('currency_to'); // Colonne 'currency_to' de type string
            $table->decimal('conversion_rate', 16, 6); // Colonne 'conversion_rate' avec 16 chiffres max dont 6 après la virgule
            $table->unsignedInteger('request_count')->default(0); // Colonne 'request_count' de type unsigned integer avec valeur par défaut 0
            $table->timestamps(); // Colonnes 'created_at' et 'updated_at' de type timestamp


            // Ajout des contraintes de clé étrangère pour 'currency_from' et 'currency_to' qui font référence à la colonne 'code' de la table 'currencies'
            $table->foreign('currency_from')->references('code')->on('currencies')->onDelete('cascade')->onUpdate('cascade');
            $table->foreign('currency_to')->references('code')->on('currencies')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        // Suppression de la table 'pairs' si elle existe
        Schema::dropIfExists('pairs');
    }
}
