<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AdminSetting extends Model
{
    protected $table = 'adminsettings';
    protected $fillable = [
        'app_title',
        'email',
        'lang',
        'img_url',
    ];
}
