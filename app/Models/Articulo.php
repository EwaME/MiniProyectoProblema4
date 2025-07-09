<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Articulo extends Model
{
    protected $primaryKey = 'titulo';
    public $incrementing = false;
    protected $keyType = 'string';
}
