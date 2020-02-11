<!DOCTYPE html> 
<html lang="en" > 

<head>
  <meta charset="UTF-8">
  <title>Sign Up Form</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

    <link rel='stylesheet' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="/css/darpan.css">

  
</head>

<body>
    <div class="container">
      <div>
        @if(session()->has('success_message'))
          <div class="alert alert-success">
            <i>{{session()->get('success_message')}}</i>&nbsp;
            <button class="btn btn-print" onclick="JavaScript:window.print()" ><h4>Click to Print </h4></button>

          </div>

        @endif  

        @if(count($errors)>0)
          <div class="alert alert-danger">
            <ul>
              @foreach($errors->all() as $error)
                <li>{{$error}}</li>
              @endforeach
            </ul>
          </div>
        @endif
      </div>
  <form action="{{route('form.store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
      <h2>General Details</h2>
      <div class="col-half">
        <h4>Client Type <span class="required">*</span></h4>
        <select name="client_type" class="form-control"> 
          <option value="">Please Select</option>
          <option value="Client Type 1" @if(old('client_type')=='Client Type 1') selected @endif>Client Type 1</option>
          <option value="Client Type 2" @if(old('client_type')=='Client Type 2') selected @endif>Client Type 2</option>
          <option value="Client Type 3" @if(old('client_type')=='Client Type 3') selected @endif>Client Type 3</option>
        </select>
      </div>
      <div class="col-half">
        <h4>Member Branch  <span class="required">*</span></h4>
        <select name="mem_branch" class="form-control"> 
          <option value="">Please Select</option>
          <option value="Member Branch 1" @if(old('mem_branch')=='Member Branch 1') selected @endif>Member Branch 1</option>
          <option value="Member Branch 2" @if(old('mem_branch')=='Member Branch 2') selected @endif>Member Branch 2</option>
          <option value="Member Branch 3" @if(old('mem_branch')=='Member Branch 3') selected @endif>Member Branch 3</option>
        </select>
      </div>
      <div class="col-half">
        <h4>Mobile Number  <span class="required">*</span></h4>
        <input type="text" name="mob_num" value="{{old('mob_num')}}" />
      </div>
      <div class="col-half">
        <h4>Email <span class="required">*</span></h4>
        <input type="text" name="email" value="{{old('email')}}" />
      </div>   
    </div>
    <hr>
    <div class="row">
      <h2>Individual Details</h2>
      <div class="col-third">
        <h4>First Name  <span class="required">*</span></h4>
        <input type="text" name="first_name" value="{{old('first_name')}}" />
      </div>
      <div class="col-third">
        <h4>Middle Name</h4>
        <input type="text" name="middle_name" value="{{old('middle_name')}}"/>
      </div>
      <div class="col-third">
        <h4>Last Name  <span class="required" value="{{old('last_name')}}">*</span></h4>
        <input type="text" name="last_name" value="{{old('last_name')}}" />
      </div>
      <div class="col-third date">
        <h4>Date Of Birth (A.D.) <span class="required">*</span></h4>
        <div class="col-third dd">
          <select name="dob_day" class="form-control" >
                <option value="">Day</option>
                <?php 
                for($i=1;$i<=31;$i++){
                ?>

                <option value="<?php echo sprintf("%'.02d",$i);?>" @if(old('dob_day')==$i) selected @endif><?php echo sprintf("%'.02d",$i);?></option>
               <?php } ?>
          </select>
        </div>
        <div class="col-third mm">
          <select name="dob_month" class="form-control">
                <option value="">Month</option>
                <?php 
                for($i=1;$i<=12;$i++){
                ?>
                <option value="<?php echo sprintf("%'.02d",$i);?>"@if(old('dob_month')==$i) selected @endif> <?php echo sprintf("%'.02d",$i);?></option>
               <?php } ?>
          </select>
        </div>
        <div class="col-third yy">
          <select name="dob_year" class="form-control">
                <option value="">Year</option>
                <?php 
                  $latest_year = date('Y')-18;
                  $start_year=1940;
                  for($i=$latest_year;$i>=$start_year;$i--){
                ?>
                <option value="<?php echo $i;?>" @if(old('dob_year')==$i) selected @endif><?php echo sprintf("%'.02d",$i);?></option>
               <?php 
                  } 
                ?>

            </select>
        </div>
      </div>
      <div class="col-large">
        <div class="col-third">
          <h4>Gender <span class="required">*</span></h4>
          <select name="gender" class="form-control"> 
            <option value="">Please Select</option>
            <option value="Gender 1" @if(old('gender')=='Gender 1') selected @endif>Gender 1</option>
            <option value="Gender 2" @if(old('gender')=='Gender 2') selected @endif>Gender 2</option>
            <option value="Gender 3" @if(old('gender')=='Gender 3') selected @endif>Gender 3</option>
          </select>
        </div>
        <div class="col-third">
          <h4>Marital Status <span class="required">*</span></h4>
          <select name="marital_stat" class="form-control"> 
            <option value="">Please Select</option>
            <option value="Marital Status 1" @if(old('marital_stat')=='Marital Status 1') selected @endif>Marital Status 1</option>
            <option value="Marital Status 2" @if(old('marital_stat')=='Marital Status 2') selected @endif>Marital Status 2</option>
            <option value="Marital Status 3" @if(old('marital_stat')=='Marital Status 3') selected @endif>Marital Status 3</option>
          </select>
        </div>
        <div class="col-third">
          <h4>Nationality <span class="required">*</span></h4>
          <input type="text" name="nationality" value="{{old('nationality')}}"/>
        </div>
      </div>  
      <div class="col-third">
        <h4>Citizenship Number <span class="required">*</span></h4>
        <input type="text" name="cit_num" value="{{old('cit_num')}}" />
      </div>

      <div class="col-third date">
        <h4>Citizenship Issued Date (A.D)<span class="required">*</span></h4>
        <div class="col-third dd">
          <select name="cit_iss_day" class="form-control" >
                <option value="">Day</option>
                <?php 
                for($i=1;$i<=31;$i++){
                ?>
                <option value="<?php echo sprintf("%'.02d",$i);?>" @if(old('cit_iss_day')==$i) selected @endif><?php echo sprintf("%'.02d",$i);?></option>
               <?php } ?>
          </select>
        </div>
        <div class="col-third mm">
          <select name="cit_iss_month" class="form-control" >
                <option value="">Month</option>
                <?php 
                for($i=1;$i<=12;$i++){
                ?>
                <option value="<?php echo sprintf("%'.02d",$i);?>" @if(old('cit_iss_month')==$i) selected @endif><?php echo sprintf("%'.02d",$i);?></option>
               <?php } ?>
          </select>
        </div>
        <div class="col-third yy">
          <select name="cit_iss_year" class="form-control" >
                <option value="">Year</option>
                <?php 
                  $latest_year = date('Y')-16;
                  $start_year=1940;
                  for($i=$latest_year;$i>=$start_year;$i--){
                ?>
                <option value="<?php echo $i;?>" @if(old('cit_iss_year')==$i) selected @endif><?php echo $i;?></option>
               <?php 
                  } 
                ?>

            </select>
        </div>
      </div>
      <div class="col-third">
        <h4>Citizenship Issued Place <span class="required">*</span></h4>
        <input type="text" name="cit_iss_place" value="{{old('cit_iss_place')}}" />
      </div>

      <div class="col-third">
        <h4>Annual Income(NPR) <span class="required">*</span></h4>
        <input type="text" name="income" value="{{old('income')}}" />
      </div>
      <div class="col-third">
        <h4>Father's Name <span class="required">*</span></h4>
        <input type="text" name="father_name" value="{{old('father_name')}}"/>
      </div>

      <div class="col-third">
        <h4>GrandFather's Name <span class="required">*</span></h4>
        <input type="text" name="grandfather_name" value="{{old('grandfather_name')}}"/>
      </div>
    </div>
    <hr>
    
    <div class="row address">
      <h2>Address Details</h2>
      <div class="row per_address">
        <h4>Permanent Address <span class="required">*</span></h4> 
        <input type="text" name="per_province" placeholder="Provine Number" value="{{old('per_province')}}" />
        <input type="text" name="per_district" placeholder="District" value="{{old('per_district')}}" />
        <input type="text" name="per_municipal" placeholder="Municipality/VDC" value="{{old('per_municipal')}}"/>
        <input type="text" name="per_ward_num" placeholder="Ward Number" value="{{old('per_ward_num')}}"/>
        <input type="text" name="per_tole" placeholder="Tole" value="{{old('per_tole')}}"/>
      </div>
      <div class="row temp_address">
        <h4>Temporary Address <span class="required">*</span></h4>
        <input type="text" name="temp_province" placeholder="Provine Number" value="{{old('temp_province')}}"/>
        <input type="text" name="temp_district" placeholder="District" value="{{old('temp_district')}}"/>
        <input type="text" name="temp_municipal" placeholder="Municipality/VDC" value="{{old('temp_municipal')}}"/>
        <input type="text" name="temp_ward_num" placeholder="Ward Number" value="{{old('temp_ward_num')}}"/>
        <input type="text" name="temp_tole" placeholder="Tole" value="{{old('temp_tole')}}"/>
      </div>   
    </div>
    <hr>
    <div class="row">
      <h2>Bank Details</h2>
      <div class="col-half">
        <h4>Bank Name <span class="required">*</span></h4>
        <input type="text" name="bank_name" value="{{old('bank_name')}}"/>
      </div>
      <div class="col-half">
        <h4>Branch <span class="required">*</span></h4>
        <input type="text" name="bank_branch" value="{{old('bank_branch')}}"/>
      </div>
      <div class="col-half">
        <h4>Account Type <span class="required">*</span></h4>
        <select name="bank_acc_type" class="form-control"> 
          <option value="" style="color: green;">Please Select</option>
          <option value="Account Type 1" @if(old('bank_acc_type')=='Account Type 1') selected @endif>Account Type 1</option>
          <option value="Account type 2" @if(old('bank_acc_type')=='Account Type 2') selected @endif>Account Type 2</option>
          <option value="Account Type 3" @if(old('bank_acc_type')=='Account Type 3') selected @endif>Account Type 3</option>
        </select>
      </div>
      <div class="col-half">
        <h4>Account Number <span class="required">*</span></h4>
        <input type="text" name="bank_acc_num" value="{{old('bank_acc_num')}}" />
      </div>   
    </div>
    <hr>
    <div class="row">
      <h2>Depository Details</h2>
      <div class="col-large">
        <h4>BOID 1<span class="required">*</span></h4>
        <input type="text" name="boid1" value="{{old('boid1')}}"/>
      </div>   
    </div>
    <hr>
    <div class="row">
      <h2>Document Upload<span class="required"> *</span></h2>
          
            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>&nbsp;Click to Add Image</button>
          
        <h4>Citizenship Copy</h4>
        <div class="increment col-third" >
          <input type="file" name="image[]" value="{{old('image[]')}}" class="form-control btn-upload">
          
        </div>
        <div class="clone hide">
          <div class="col-third control-group">
            <input type="file" name="image[]" class="form-control btn-upload">
            <div> 
              <button class="btn btn-danger" type="button"><i class="glyphicon glyphicon-remove"></i> &nbsp;Remove</button>
            </div>
          </div>
        </div>
       
    </div>   
        <hr>
    <div class="row">
      <button class="btn btn-submit" type="submit" ><h4>SUBMIT</h4></button>
    </div>
  </form>
    
  
</div>

  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script  src="js/index.js"></script>
  <script type="text/javascript">
    $(document).ready(function(){
      $('option[value=""]').attr("disabled", "disabled").css({"background-color":"#898686","color":"white"});

      $(".btn-success").click(function(){ 
          var html = $(".clone").html();
          $(".increment").after(html);
      });

      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".control-group").remove();
      });
    });

  </script>




</body>

</html>
