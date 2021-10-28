<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class QuanTri extends Authenticatable
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    use Notifiable;
    protected $table ='quan_tri';
    protected $guard ='quan_tri';
    protected $primaryKey ='qt_id';

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
