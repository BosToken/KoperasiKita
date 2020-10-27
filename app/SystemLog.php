<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SystemLog extends Model
{
    protected $table = 'system_logs';
    protected $fillable = [
        'event',
        'beginning_balance',
        'num_evidence',
        'num_transaction',
        'body',
        'operator',
    ];
}
