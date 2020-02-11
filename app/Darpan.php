<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Darpan extends Model
{
    protected $fillable=[
    	'image',
    	'gender',
    	'dob_year',
    	'dob_month',
    ];
}
