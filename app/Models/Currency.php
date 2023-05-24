<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currency extends Model
{
    // Les attributs remplissables de la devise
    protected $fillable = ['code', 'name'];
}
