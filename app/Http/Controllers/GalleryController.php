<?php 

namespace App\Http\Controllers;

use \App\Gallery;
use Illuminate\Http\Request;
use DB;

class GalleryController extends Controller
{

	public function gallery(){
		$gallery=DB::table('galleries')->get();      
    	return view('ngo.gallery',['gallery'=>$gallery]);
    }
    

    public function gallerydetail($id)
    {
    	$gallery=DB::table('galleries')->where('id',$id)->get();
    	$galleryNew = $gallery[0]->gallery_images;
  		$galleryNew1 = json_decode($galleryNew);
    	return view('ngo.gallerydetail',['galleryNew1'=>$galleryNew1]);
    }

   
}
