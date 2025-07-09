<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
    protected $primaryKey = 'id_autor';
    public $incrementing = true;
    protected $keyType = 'int';
}
