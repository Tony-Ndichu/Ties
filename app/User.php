<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Notifications\ResetPassword;


class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password','level','telephone',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function doc()
{
    return $this->hasOne('App\Doc', 'theuserid');
}

    public function sale()
{
    return $this->hasOne('App\Sale', 'theuserid');
}

public function order()
{
    return $this->hasOne('App\Order','sellerid');
}

public function booking(){
    return $this->hasOne('App\Booking', 'bookedid');
}


}
