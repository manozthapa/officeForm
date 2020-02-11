<?php

namespace App\Http\Controllers;

use App\About;
use DB;
use Team;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about(){

    	$team=DB::table('teams')->get();
    	return view('ngo.about',['team'=>$team]);

    }
}
