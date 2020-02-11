<?php

namespace App\Http\Controllers; 

use App\BlogComment;
use Illuminate\Support\Str;
use App\Blog;
use DB;

use Illuminate\Http\Request;

class BlogController extends Controller
{
     public function blog(){

     	$other=DB::table('blogs')->orderBy('id', 'desc')->take(4)->get();
     	$blog=DB::table('blogs')->Paginate(3);
     	
    	return view('ngo.blog',['blog'=>$blog,'other'=>$other]);
    }

    public function blogdetail($id){
        $comment=DB::table('blog_comments')->orderBy('created_at', 'desc')->get();
    	$blog=DB::table('blogs')->where('id',$id)->first();
        
    	return view('ngo.blogdetail',['blog'=>$blog,'comments'=>$comment]);
    }

    public function comment(Request $request){

        $this->validate($request,[
            'name' => 'required',
            'email'=>'required',
            'comment'=>'required',
         ]);
        $comment = new BlogComment;
        $comment->name=$request->input('name');
        $comment->email=$request->input('email');
        $comment->comment=$request->input('comment');
        $comment->save();
        return back();
       
    }
}
