<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDarpansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('darpans', function (Blueprint $table) {
            $table->increments('id');

            $table->string('full_name')->nullable();

            $table->string('dob_day_ad')->nullable();
            $table->string('dob_month_ad')->nullable();
            $table->string('dob_year_ad')->nullable();
            $table->string('dob_ad')->nullable();

            $table->string('dob_day_bs')->nullable();
            $table->string('dob_month_bs')->nullable();
            $table->string('dob_year_bs')->nullable();
            $table->string('dob_bs')->nullable();

            $table->string('gender')->nullable();
           
            $table->string('nationality')->nullable();

            $table->string('cit_num')->nullable();

            $table->string('cit_iss_day')->nullable();
            $table->string('cit_iss_month')->nullable();
            $table->string('cit_iss_year')->nullable();
            $table->string('cit_iss_date')->nullable();

            $table->string('cit_iss_district')->nullable();

            $table->string('ben_comp_name')->nullable();

            $table->string('pan')->nullable();

            $table->string('nrn')->nullable();


            $table->string('cur_country')->nullable();
            $table->string('cur_district')->nullable();
            $table->string('cur_municipal')->nullable();
            $table->string('cur_ward_num')->nullable();
            $table->string('cur_tole')->nullable();
            $table->string('cur_address')->nullable();

            $table->string('cur_tele')->nullable();

            $table->string('cur_email')->nullable();

            $table->string('cur_mob')->nullable();


            $table->string('cur_province')->nullable();
            $table->string('cur_district')->nullable();
            $table->string('cur_municipal')->nullable();
            $table->string('cur_ward_num')->nullable();
            $table->string('cur_tole')->nullable();
            $table->string('cur_address')->nullable();

            $table->string('cur_tele')->nullable();

            $table->string('cur_email')->nullable();

            $table->string('cur_mob')->nullable();




            $table->string('per_province')->nullable();
            $table->string('per_district')->nullable();
            $table->string('per_municipal')->nullable();
            $table->string('per_ward_num')->nullable();
            $table->string('per_tole')->nullable();
            $table->string('per_address')->nullable();

            $table->string('per_tele')->nullable();

            

            $table->string('father_name')->nullable();
            $table->string('grandfather_name')->nullable();
            $table->string('mother_name')->nullable();
            $table->string('spouse_name')->nullable();
            $table->string('son_name')->nullable();
            $table->string('daughter_name')->nullable();
            $table->string('daughter_law_name')->nullable();
            $table->string('father_law_name')->nullable();
            $table->string('mother_law_name')->nullable();
    

            
            $table->string('bank_acc_type')->nullable();
            $table->string('bank_acc_num')->nullable();
            $table->string('bank_detail')->nullable();



            $table->string('occupation')->nullable();
            $table->string('bus_type')->nullable();
            $table->string('org_name')->nullable();
            $table->string('designation')->nullable();
            $table->string('emp_id_num')->nullable();
            $table->string('finan_detail')->nullable();
            $table->string('inv_company')->nullable();
            $table->string('desig_inv_company')->nullable();


            $table->string('minor_full_name')->nullable();
            $table->string('minor_relation')->nullable();
            $table->string('minor_mail_address')->nullable();
            $table->string('minor_country')->nullable();

            $table->string('minor_province')->nullable();
            $table->string('minor_district')->nullable();
            $table->string('minor_municipal')->nullable();
            $table->string('minor_ward_num')->nullable();
            $table->string('minor_address')->nullable();

            $table->string('minor_tele')->nullable();
            $table->string('minor_fax')->nullable();
            $table->string('minor_mob')->nullable();
            $table->string('minor_pan')->nullable();
            $table->string('minor_email')->nullable();

            $table->string('image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('darpans');
    }
}
