
@extends('layouts.event-index')

@section('content')
<section class="about text-center">
	<div class="inner-header">
		<div class="inner-header-title">
		 <h1 class="animated fadeInDown">News and Events</h1>
		 
	    </div>
	</div>
</section>


<section class="events text-center">
  <div class="container">
    <h1 class=""><span style="color: #ec0101">Our Recent</span> Events</h1>
    <div class="border-line text-center"></div>
    <section class="section-padding"></section>
    <div class="row events-box">
      <div class="container-fluid">
     <div class="autoplay" >


@if(!$event->isEmpty())
  @foreach($event as $events)
    @if($events->published==1)
      <div class="col-md-4">
        <a href="event/{{$events->id}}">
        <div class="post-item">
         <img src="{{Voyager::image($events->event_thumbnail)}}" class="img-responsive event-image">
         <div class="post-content">
           <h1 class="text-left">{{$events->title}}</h1>
           <div class="blog-date text-left"><span><i class="fa fa-twitter"></i> {{$events->location}}</span>
            <span style="margin-left: 25px;"><i class="fa fa-address-book"></i> January 2, 2018</span>
            <p>{!!\Illuminate\Support\Str::words("$events->description", 80) !!}</p>
            <p class="dayz" style="color: #ec0101;text-align: right;">{{ \Carbon\Carbon::parse($events->created_at)->diffForHumans()}}</p>
          </div>
        </div>
      </div>
      </a>
    </div>
    @endif
     @endforeach
    @endif     
  </div>
  <section class="section-padding"></section>
</div>
     
    </div> 
  </div>
  
</section>

@stop


