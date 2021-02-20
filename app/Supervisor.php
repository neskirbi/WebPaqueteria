<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supervisor extends Authenticatable
{
    //
    protected $primaryKey = 'idsupervisor';
    public $incrementing = false;

    protected $fillable = [
        'idsupervisor',
        'name',
        'email',
        'password',
    ];

}
