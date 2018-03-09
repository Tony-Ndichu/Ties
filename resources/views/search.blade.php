<?php



namespace App\Http\Controllers;



use Illuminate\Http\Request;

use DB;
use App\User;




class SearchController extends Controller

{

   public function index()

{

return view('search.search');

}




}
