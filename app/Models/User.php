<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $table = 'app_users';

    protected $fillable = [
        'name', 'email', 'password','level','country','avator'
    ];

    /*protected $hidden = [
        'password',
    ];*/

    public function articles()
    {
        return $this->hasMany(Article::class);
    }


}
