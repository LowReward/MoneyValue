<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePairsTable extends Migration
{
    public function up()
    {
        Schema::create('pairs', function (Blueprint $table) {
            $table->id();
            // Les currencies seront sélectionnées à partir du selecteur vue.js, donc par de raccord directement ici
            $table->string('currency_from');
            $table->string('currency_to');
            // Nom de la colonne, 8 = Précision totale de la valeur décimale (Max 8 chiffres), 4 = Nb chiffres décimaux max après virgule
            $table->decimal('conversion_rate', 8, 4);
            // request_count sera un entier non signé avec 0 par défaut, l'incrémentation se fera à chaque requête
            $table->unsignedInteger('request_count')->default(0);
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('pairs');
    }
}
