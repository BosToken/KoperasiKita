<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Coa extends Model
{
    protected $table = 'coas';
    protected $fillable = [
        'parent_id',
        'title',
        'code',
    ];
}
