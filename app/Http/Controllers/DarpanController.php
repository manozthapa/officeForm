<?php 
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Darpan;

use  Illuminate\Foundation\Validation\ValidatesRequests;

use Illuminate\Support\Facades\Session;



class DarpanController extends Controller
{
    public function index(){
    	return view('index_darpan');
    }

    public function store(Request $request){

       
    	$client = new Darpan;
    



        $client->first_name=$request->input('first_name');
        $client->middle_name=$request->input('middle_name');
        $client->last_name=$request->input('last_name');

        $client->dob_year=$request->input('dob_year');
        $client->dob_month=$request->input('dob_month');
        $client->dob_day=$request->input('dob_day');
        $client->dob = $client->dob_day.'/'.$client->dob_month.'/'.$client->dob_year;

        $client->gender=$request->input('gender');
        $client->marital_stat=$request->input('marital_stat');
        $client->nationality=$request->input('nationality');
        $client->income=$request->input('income');
        $client->father_name=$request->input('father_name');
        $client->grandfather_name=$request->input('grandfather_name');

        $client->cit_num=$request->input('cit_num');
        $client->cit_iss_year=$request->input('cit_iss_year');
        $client->cit_iss_month=$request->input('cit_iss_month');
        $client->cit_iss_day=$request->input('cit_iss_day');
        $client->cit_iss_date = $client->cit_iss_day.'/'.$client->cit_iss_month.'/'.$client->cit_iss_year;
        $client->cit_iss_place=$request->input('cit_iss_place');

        $client->per_province=$request->input('per_province');
        $client->per_district=$request->input('per_district');
        $client->per_municipal=$request->input('per_municipal');
        $client->per_ward_num=$request->input('per_ward_num');
        $client->per_tole=$request->input('per_tole');
        $client->per_address=$client->per_province.','.$client->per_district.','.$client->per_municipal.'-'.$client->per_ward_num.','.$client->per_tole;       

        $client->temp_province=$request->input('temp_province');
        $client->temp_district=$request->input('temp_district');
        $client->temp_municipal=$request->input('temp_municipal');
        $client->temp_ward_num=$request->input('temp_ward_num');
        $client->temp_tole=$request->input('temp_tole');
        $client->temp_address=$client->temp_province.','.$client->temp_district.','.$client->temp_municipal.'-'.$client->temp_ward_num.','.$client->temp_tole;
               

        $client->bank_name=$request->input('bank_name');
        $client->bank_branch=$request->input('bank_branch');
        $client->bank_acc_type=$request->input('bank_acc_type');
        $client->bank_acc_num=$request->input('bank_acc_num');

        $client->boid1=$request->input('boid1');

        if($request->hasfile('image'))
         {

            foreach($request->file('image') as $image)
            {
                $name=$image->getClientOriginalName();
                $destinationPath=public_path('/storage/');
                $image->move($destinationPath, $name);  
                $data[] = $name;  
            }
         }

         $client->image=json_encode($data);

    	$client->save();

       $request->session()->put([
        'first_name'=>$request->input('first_name'),
        'last_name'=>$request->input('last_name'),
    ]);

    	return redirect()->route('form.printForm')->withInput($request->input());
      }

    public function printForm(){
        return view('print_darpan')
            ->with('first_name',session()->get('first_name'))
            ->with('last_name',session()->get('last_name'));
    }

   }