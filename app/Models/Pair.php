<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pair extends Model
{
    protected $fillable = [
        'currency_from',
        'currency_to',
        'conversion_rate',
    ];

    // Définir les relations avec d'autres modèles si nécessaire
}
