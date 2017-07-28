<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class csv extends Model
{
    public $fillable = ['categoria','marca','nombre','descripcion','precio','estado','cantidad'];
}
