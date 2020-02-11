<?php

namespace App\Http\Controllers;

use App\Event;
use DB;
use Illuminate\Http\Request;

class EventController extends Controller
{
    public function event(){
    	$event=DB::table('events')->get();
    	return view('ngo.event',['event'=>$event]);
    }

    public function eventdetail($id){
    	$event=DB::table('events')->where('id',$id)->get();
    	$event_detail=$event[0]->event_images;
    	$event_images=json_decode($event_detail);
    	return view('ngo.eventdetail',['event'=>$event,'event_images'=>$event_images]);
    }
}
