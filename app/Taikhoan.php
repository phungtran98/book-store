<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Taikhoan extends Authenticatable
{
    

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use Notifiable;
    protected $table ='taikhoan';
    protected $guard ='taikhoan';
    protected $primaryKey ='tk_id';

    protected $keyType ='int';
    protected $fillable = [
        'username',
        'password',
        'remember_token'
    ];

    public $timestamps = true;
    protected $hidden = [
        'password','remember_token',
    ];
}
