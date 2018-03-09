<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Project;

class ProjectController extends Controller
{
    //

    public function projects(){
    	
  		$projects = Project::all();

  		return view('projects', compact('projects'));


    }

    public function project_view($id){

    	$projects = Project::find($id);

    	return view('project_view', compact('projects'));
    }

}
