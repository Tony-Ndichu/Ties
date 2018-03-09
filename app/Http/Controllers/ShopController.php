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
use Illuminate\Mail\Mailable;




class ShopController extends Controller
{

	public function display(){

	$items = Sale::with('user')
			->get();

			return view('shop', compact('items'));
		}

public function item_view($id){

	$items = Sale::with('user')->find($id);

	return view('item_view', compact('items'));

}

public function order($id){
	$order = Sale::with('user')->find($id);

	return view('order', compact('order'));
}

public function ordered(Request $request){

	$quantity = request('quantity');
	$contact = request('contact');
	$name = request('name');
	$id = request('id');
	$price = request('price');
	$description = request('description');
	$sellername = request('sellername');
	$sellerid = request('sellerid');
	$image = request('image');

	$user = 'ndichutony@gmail.com';

	$order = new Order;
	$order->productid = $id;
	$order->buyer = $name;
	$order->sellerid = $sellerid;
	$order->contact = $contact;
	$order->quantity = $quantity;

	$order->save();

		Mail::send('emails.demo', [ 'thequantity' => $quantity, 'thecontact' => $contact, 'thename' => $name, 'theid' => $id, 'theprice' => $price, 'thedescription' => $description, 'thesellername' => $sellername, 'thesellerid' => $sellerid , 'theimage' => $image ], function($m){
		$user = 'ndichutony@gmail.com';
                        $m->to($user);
                    });


	return redirect()->route('item_view', ['id' => $id ])->with ('message', 'Your order has been made');

}

public function hire(){

	$items = Sale::where('category', 'Hire Equipment')
			->get();

			return view ('shop', compact('items'));
}

public function building(){

$items = Sale::where('category', 'Building Materials')
			->get();

			return view ('shop', compact('items'));

}

public function steel(){

$items = Sale::where('category', 'steel Bars')
			->get();

			return view ('shop', compact('items'));

}

public function plumbing(){
	$items = Sale::where('category', 'Plumbing Materials')
			->get();

			return view ('shop', compact('items'));

}

public function electrical(){
	$items = Sale::where('category', 'Electrical Materials')
			->get();

			return view ('shop', compact('items'));

}

public function hardware(){

$items = Sale::where('category', 'Hardware Equipment')
			->get();

			return view ('shop', compact('items'));

}


}