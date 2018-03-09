<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Project;
use App\Doc;
use App\Sale;

class SearchController extends Controller
{




   public function index()

{

return view('search.search');

}



public function search(Request $request)

{



if($request->ajax())

{





$output='';		

$results = User::where('county',$request->county)
				->where('typetwo',$request->prof)
				->get();

				if($results->count() > 0)

{

 return view('search.results',compact('results'));
}

else {

return view('search.noresults'); 

}




   }



}

public function noresults(){

return view('search.noresults');
}

}