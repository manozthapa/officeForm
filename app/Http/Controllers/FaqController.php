<?php

namespace App\Http\Controllers;

use App\Faq;
use DB;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    public function faq()
    {
    	$faq=DB::table('faqs')->get();
    	return view('ngo.faq',['faq'=>$faq]);
    }
}
