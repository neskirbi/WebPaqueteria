<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Almacenista extends Model
{
    protected $primaryKey = 'idalmacenista';
    public $incrementing = false;

    protected $table = 'almacenistas';
}
