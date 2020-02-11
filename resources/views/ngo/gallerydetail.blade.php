@extends('layouts.gallery-index') 

@section('content')
<section class="about text-center">
	<div class="inner-header">
		<div class="inner-header-title">
			<h1 class="animated fadeInDown">Images Of Album1</h1>
			
		</div>
	</div>
</section>

<section class="section-padding"></section>

<section class="gallery container text-center">	
  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever since thes simply dummy text of the printing and typesetting industry.<br> Ipsum has been the industry's standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever since the</p>



  <div class="gallery_detail container">
  <div class="aniimated-thumbnials">
    @foreach($galleryNew1 as $key)
    <a href="{{Voyager::image($key)}}" class="col-md-3">
      <img src="{{Voyager::image($key)}}" class="img-responsive img-thumbnail" />
    </a>
    
  @endforeach
    
    
</div>
</div>

	<div style="clear:both;"></div>   

</section>

<section class="section-padding"></section>
@stop
 