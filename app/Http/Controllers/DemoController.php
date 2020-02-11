<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Demo;

class DemoController extends Controller
{
    public function index(){
    	return view('demo_index');
    }

    public function store(){
    	$data = new Demo;
    	$data->name=$request->input('name');
    	$data->save();

    	return view('demo_show',['data'=>$data]);
    }
}
