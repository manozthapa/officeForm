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

  <form action="{{route('demo.store')}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <div class="row">
      <div class="col-half">
        <h4>Name<span class="required">*</span></h4>
        <input type="text" name="name" value="{{old('name')}}" />
        <button class="btn btn-submit" type="submit" ><h4>SUBMIT</h4></button>
      </div>
    </div>
  </form>
    
  
</div>


</body>
</html>
