<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coa extends Model
{
    protected $table = 'coas';
    protected $fillable = [
        'num_approximate',
        'parent_id',
        'title',
        'code',
        'headdet',
        'dk',
    ];
}
