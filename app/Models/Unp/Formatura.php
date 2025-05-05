<?php

namespace App\Models\Unp;

use Illuminate\Database\Eloquent\Model;

class Formatura extends Model
{
    protected $fillable = ['curso', 'unidade', 'data', 'hora', 'checklist'];
}
