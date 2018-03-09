<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;
use App\Mail\DemoMail;
use App\Doc;
use App\Sale;
use App\Order;
use Mail;
use App\Booking;
use Illuminate\Mail\Mailable;




class BookingController extends Controller
{

	public function personview($id){
		$person = User::find($id);

		return view('personview',compact('person'));
	}

	public function booker($id){

		$booked = User::find($id);

		return view ('booker',compact('booked'));
	}

	public function booked(Request $request){
	$bookedid = request('bookedid');
	$contact = request('contact');
	$name = request('name');
	$bookedprof = request('bookedprof');
	$bookedname = request('bookedname');
	$bookedimage = request('bookedimage');
	$date = request('date');
	$period = request('period');
	$specials = request('specials');

	$user = 'ndichutony@gmail.com';

	$booking = new Booking;
	$booking->bookedid = $bookedid;
	$booking->bookedname = $bookedname;
	$booking->name = $name;
	$booking->contact = $contact;
	$booking->date = $date;
	$booking->period = $period;
	$booking->specials = $specials;


	$booking->save();


	

	return redirect()->route('personview', ['id' => $bookedid ])->with ('message', 'Your booking has been made successfully, kindly wait for us to reach you');

	}


}