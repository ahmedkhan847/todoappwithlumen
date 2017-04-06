<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Auth\Authenticatable as AuthenticableTrait;

class Users extends Model implements Authenticatable
{
    //
    use AuthenticableTrait;
    protected $fillable = ['username','email','password','userimage'];

    protected $hidden = [
    'password'
    ];

    /*
    * Get Todo of User
    *
    */
    public function todo()
    {
        return $this->hasMany('App\Todo','user_id');
    }
}
