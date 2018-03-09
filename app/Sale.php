<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Sale extends Model
{
    //

    use Notifiable;


     protected $fillable = [
        'image', 'price','description'
    ];

     public function user(){
      return $this->belongsTo('App\User', 'theuserid');
    }

    public function order(){
    	return $this->hasOne('App\Order', 'productid');
    }
}
