<?php

namespace App;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticableContract,CanResetPasswordContract
{

    use Authenticatable,CanResetPassword;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected  $table = 'users';
    protected $fillable = [
        'name', 'email', 'password','avatar','social_id','type',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function admin(){
        return $this->type === 'admin';
    }

}
