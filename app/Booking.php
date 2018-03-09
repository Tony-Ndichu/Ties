<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Booking extends Model
{
    //

    use Notifiable;


     protected $fillable = [
        'bookedid', 'bookedname','name','contact','date','period','specials', 
    ];

     public function user(){
      return $this->belongsTo('App\User', 'bookedid');
    }

}