<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'phone','email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function orders()
    {
        return $this->hasMany('App\Order', 'user_id', 'id');
    }
    public function softwares()
    {
        return $this->hasMany('App\Delivered', 'user_id', 'id');
    }

    // public function softwares()
    // {
    //     return this->belongsToMany('App\Delivered',, 'role_user_table', 'user_id', 'role_id');
    // }

    public function payments()
    {
        return $this->hasMany('App\Payment', 'user_id', 'id');
    }
}
