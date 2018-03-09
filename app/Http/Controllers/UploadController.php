<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\User;
use App\Project;
use App\Doc;
use App\Sale;

class UploadController extends Controller
{
    //

  
public function theview(){
    if (Auth::user()->typeone == 'jober'){
        return view('docuploader');
    }else{
        return view('salesuploader');
    }
}


     public function update(Request $request)
    {

    	$thedog = request('id');
         
    	$dog = Dog::find($thedog);
       	$dog->name = request('name');
		$dog->breed = request('breed');
		$dog->age = request('age');
		$dog->owner = request('owner');

	
		$dog->save();

		return redirect('edit');   
    }


    	public function upload(Request $request)
	{
		
         request()->validate([

            'uploadFile' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);

		$new = new Project;


$name = ''; $type = ''; $size = ''; $error = '';
	function compress_image($source_url, $destination_url, $quality) {

		$info = getimagesize($source_url);

    		if ($info['mime'] == 'image/jpeg')
        			$image = imagecreatefromjpeg($source_url);
				
				elseif ($info['mime'] == 'image/jpg')
        			$image = imagecreatefromjpeg($source_url);

    		elseif ($info['mime'] == 'image/gif')
        			$image = imagecreatefromgif($source_url);

   		elseif ($info['mime'] == 'image/png')
        			$image = imagecreatefrompng($source_url);

    		imagejpeg($image, $destination_url, $quality);
		return $destination_url;
	}
	$imageName = time().'.'.request()->uploadFile->getClientOriginalExtension();

	$url="images/".$imageName;

	$compressit = compress_image(request()->uploadFile, $url, 50);
     
 

 	   $new->image = $imageName;
       $new->details = request('details');
       $new->estimate= request('estimate');
       $new->location= request('location');
    
			
		$new->save();

		    return redirect('/projects');

    }


    public function docupload(Request $request)
    {
        

        $new = new Doc;


$name = ''; $type = ''; $size = ''; $error = '';
    function compress_image($source_url, $destination_url, $quality) {

        $info = getimagesize($source_url);

            if ($info['mime'] == 'image/jpeg')
                    $image = imagecreatefromjpeg($source_url);
                
                elseif ($info['mime'] == 'image/jpg')
                    $image = imagecreatefromjpeg($source_url);

            elseif ($info['mime'] == 'image/gif')
                    $image = imagecreatefromgif($source_url);

        elseif ($info['mime'] == 'image/png')
                    $image = imagecreatefrompng($source_url);

            imagejpeg($image, $destination_url, $quality);
        return $destination_url;
    }
    $imageName = time().'.'.request()->uploadFile->getClientOriginalExtension();

    $url="docs/".$imageName;

    $compressit = compress_image(request()->uploadFile, $url, 50);
     
 

       $new->image = $imageName;
       $new->description = request('description');
       $new->theuserid= Auth::user()->id;
    
            
        $new->save();

            return redirect('/works');

    }

        public function salesupload(Request $request)
    {
        

        $new = new Sale;


$name = ''; $type = ''; $size = ''; $error = '';
    function compress_image($source_url, $destination_url, $quality) {

        $info = getimagesize($source_url);

            if ($info['mime'] == 'image/jpeg')
                    $image = imagecreatefromjpeg($source_url);
                
                elseif ($info['mime'] == 'image/jpg')
                    $image = imagecreatefromjpeg($source_url);

            elseif ($info['mime'] == 'image/gif')
                    $image = imagecreatefromgif($source_url);

        elseif ($info['mime'] == 'image/png')
                    $image = imagecreatefrompng($source_url);

            imagejpeg($image, $destination_url, $quality);
        return $destination_url;
    }
    $imageName = time().'.'.request()->uploadFile->getClientOriginalExtension();

    $url="sales/".$imageName;

    $compressit = compress_image(request()->uploadFile, $url, 50);
     
 

       $new->image = $imageName;
       $new->price = request('price');
       $new->description = request('description');
       $new->category = request('category');
       $new->theuserid= Auth::user()->id;
    
            
        $new->save();

            return redirect('/shop');

    }


    public function works(){

        $id = Auth::user()->id;

        $works = Doc::with('user')
                ->where('theuserid', $id)
                ->get();

                return view('works', compact('works'));
    }
}
