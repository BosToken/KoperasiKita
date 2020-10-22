<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dictionary extends Model
{
    protected $table = 'dictionarys';
    protected $fillable = [
        'title',
        'body',
        'formula',
        'type',
    ];
}
