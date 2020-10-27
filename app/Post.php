<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table = 'posts';
    protected $fillable = [
        'period',
        'beginning_balance',
        'debit_mutation',
        'credit_mutation',
        'ending_balance',
    ];
}
