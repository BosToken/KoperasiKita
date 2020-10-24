<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $table = 'users';
    protected $fillable = [
        'username',
        'contact',
        'email',
        'img_url',
    ];
    public function roles () {
        return $this->hasMany('App\Role');
    }
}
