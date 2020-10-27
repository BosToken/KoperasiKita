<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    protected $table = 'transactions';
    protected $fillable = [
        'num_evidence',
        'type_transaction',
        'dictionary_id',
        'body',
        'amount',
        'operator',
        'status',
    ];
}
