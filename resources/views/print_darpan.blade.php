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
    <div class="row">
      <h2>General Details</h2>
      <div class="col-half">
        <h4>Client Type <span class="required">*</span></h4>
        <input type="text" name="boid1" value="{{old('boid1')}}"/>
      </div>
      <div class="col-half">
        <h4>Member Branch  <span class="required">*</span></h4>
        <input type="text" name="boid1" value="{{old('boid1')}}"/>
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
        <h4>Full Name  <span class="required">*</span></h4>
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
          <input type="text" name="boid1" value="{{old('boid1')}}"/>
        </div>
        <div class="col-third mm">
          <input type="text" name="boid1" value="{{old('boid1')}}"/>
        </div>
        <div class="col-third yy">
          <input type="text" name="boid1" value="{{old('boid1')}}"/>
        </div>
      </div>
      <div class="col-large">
        <div class="col-third">
          <h4>Gender <span class="required">*</span></h4>
          <input type="text" name="boid1" value="{{old('boid1')}}"/>
        </div>
        <div class="col-third">
          <h4>Marital Status <span class="required">*</span></h4>
          <input type="text" name="boid1" value="{{old('boid1')}}"/>
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
          <input type="text" name="boid1" value="{{old('boid1')}}"/>
        </div>
        <div class="col-third mm">
          <input type="text" name="boid1" value="{{old('boid1')}}"/>
        </div>
        <div class="col-third yy">
          <input type="text" name="boid1" value="{{old('boid1')}}"/>
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
        <input type="text" name="boid1" value="{{old('boid1')}}"/>
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
    </div>   
    
  
</div>

</body>

</html>
