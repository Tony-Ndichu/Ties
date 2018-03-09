<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Order extends Model
{
    //

    use Notifiable;


     protected $fillable = [
        'productid', 'buyer','sellerid','contact','quantity', 
    ];

     public function user(){
      return $this->belongsTo('App\User', 'sellerid');
    }

    public function sale(){
    	return $this->belongsTo('App\Sale', 'productid');
    }
}
