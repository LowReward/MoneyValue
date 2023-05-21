<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDevisesTable extends Migration
{
    public function up()
    {
        Schema::create('devises', function (Blueprint $table) {
            $table->id();
            // Une seule devise sous ce code possible
            $table->string('code')->unique();
            $table->string('libelle');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('devises');
    }
}
