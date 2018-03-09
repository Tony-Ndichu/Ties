<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Project;

class RegController extends Controller
{
    //

  public function step_two_view(){
        return view ('steptwo');
  }

  

  public function answertwo(Request $request){

    $user = Auth::user()->id;
    $type = request('type');

    $update = User::find($user);
    $update->typeone = request('type');
    $update->save();

    if ($type == 'seller'){
       

        return view('sellone');


    }else{
        

           return redirect ('stepthree');
  }
}


  public function answerthree(Request $request){

    $user = Auth::user()->id;
    $type = request('type');

    $update = User::find($user);
    $update->typetwo = request('type');
    $update->save();

  
           return redirect ('location');
  
}



  public function step_three_view(){
        return view ('stepthree');
  }



         public function update(Request $request)
    {
        
        $id=Auth::user()->id;
         $user = User::find($id);
       $user->name = request('name');
        $user->email = request('email');
        $user->typetwo = request('job');

    
        $user->save();
       
        return redirect('/location');
    }

     public function located(Request $request){
         $id = Auth::user()->id;
         $loc = User::find($id);
         $loc->county = request('county');
         $loc->subcounty = request('subcounty');
         $loc->ward = request('ward');

         $loc->save();

         return redirect ('/payment');
     }

     public function paid(Request $request){
            $id = Auth::user()->id;
         $pay = User::find($id);
         $pay->mpesa = request('mpesa');

         $pay->save();

            return redirect()->route('account')->with ('message', 'Kindly await as we confirm your payment for your account to be activated');

     }

}