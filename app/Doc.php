<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Doc extends Model
{
    //

    use Notifiable;


     protected $fillable = [
        'image', 'description', 
    ];

     public function user(){
      return $this->belongsTo('App\User', 'theuserid');
    }
}
