@extends('layouts.index') 

@section('content')
<section class="about text-center">
	<div class="inner-header">
		<div class="inner-header-title">
		 <h1 class="animated fadeInDown">Contact</h1>
		 
	    </div>
	</div>
</section>

<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d14124.147333124341!2d85.33945485!3d27.7470099!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2snp!4v1519545372105" width="100%" height="600" frameborder="0" style="border:0" allowfullscreen></iframe> -->

<section class="section-padding"></section>

      <style type="text/css">
  


.form-group{
  padding: 2.5px;
}
      </style>


<div class="container address">
        <div class="col-sm-6" style="padding:10px 30px 30px 30px;;background: #ec0101">
        <div class=" text-center">
      <h3 class="" style="color:white;font-size:28px">Address</h3>
      <ul class="" style="list-style:none;padding:20px;">
        <li style="color:#fff;" href="#" class="">Location: Kupondole,Lalitpur</li>
        <li style="color:#fff;" href="#" class="w3_instagram">Phone: 981234567</li>
        <li><a style="color:#fff;" href="#" class="w3_facebook">www.facebook.com/ngo</a></li>
        <li><a style="color:#fff;" href="#" class="w3_google">Email: info@ngo.com</a></li>
      </ul>
    </div>

    <div class="map">

      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7065.958624070369!2d85.30930227535804!3d27.687034281201154!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb19b4ad7096dd%3A0x29fa3d73b99dcc97!2sKupondole%2C+Patan+44600!5e0!3m2!1sen!2snp!4v1518161299586" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>



    </div>


      </div>
      <div class=" col-sm-5 col-sm-offset-1 " style="padding:10px 30px 30px 30px;background: #ec0101; ">
      <div >
                <form class="form-horizontal" method="POST" action="{{url('message')}}">
                  {{csrf_field()}}
                    <fieldset>
                         <h3 class=" text-center" style="color:white;font-size:28px">Contact Us</h3>
                        <div style="margin-top: 40px;">
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="fname" name="first_name" type="text" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="lname" name="last_name" type="text" placeholder="Last Name" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="email" name="email" type="text" placeholder="Email Address" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <input id="phone" name="phone" type="text" placeholder="Phone" class="form-control">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12">
                                <textarea class="form-control" id="message" name="description" placeholder="Enter your massage for us here. We will get back to you within 2 business days." rows="7"></textarea>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-12 text-center">
                                <button type="submit" class="btn btn-primary btn-lg">Submit</button>
                            </div>
                        </div>
                        </div>
                    </fieldset>
                </form>
            </div>
    </div>
  </div>
<section class="section-padding"></section>
@stop

 