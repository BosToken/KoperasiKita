<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Journal extends Model
{
    protected $table = 'journals';
    protected $fillable = [
        'title',
        'discharge',
        'credit',
        'body',
    ];
}
