<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Repartidor extends Model
{
    protected $primaryKey = 'idrepartidor';
    public $incrementing = false;

    protected $table = 'repartidores';
}
