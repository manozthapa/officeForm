@extends('layouts.index')

@section('content')
<section class="about text-center">
	<div class="inner-header">
		<div class="inner-header-title">
			<h1 class="animated fadeInDown">Gallery</h1>
			
		</div>
	</div>
</section>

<section class="section-padding"></section>
 
<section class="gallery container text-center">	
	<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever since thes simply dummy text of the printing and typesetting industry.<br> Ipsum has been the industry's standard dummy text ever since theLorem Ipsum is simply dummy text of the printing and typesetting industry.<br> Lorem Ipsum has been the industry's standard dummy text ever since the</p>
	
	
	<div style="clear:both;"></div>   
	
  <div class="gallery_container container">
 
  	@if(!$gallery->isEmpty())

    @foreach($gallery as $galleries)

    @if($galleries->published==1)
    <div class="col-md-4">
      
      <a href="gallery/{{$galleries->id}}">
            <img src="{{Voyager::image($galleries->album_thumbnail)}}" class="img-responsive img-thumbnail" style="width:100%;">
        {{$galleries->album_title}}(8pics)
      </a>
    </div>
    @endif
    @endforeach

@else

	<div>No Galleries Yet</div>

@endif
  
  </div>
	<div style="clear:both;"></div>   

</section>

<section class="section-padding"></section>

@stop