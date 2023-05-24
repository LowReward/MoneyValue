<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pair extends Model
{
    // Les attributs remplissables de la paire
    protected $fillable = [
        'currency_from',
        'currency_to',
        'conversion_rate',
        'request_count'
    ];
}
