@extends('layouts.index')
@section('content')

<section class="banner">
 <div class="banner-inner">
  <div class="bxslider container">


@if(!$homeslides->isEmpty())
@foreach($homeslides as $homeslide)
  @if($homeslide->published==1)
  <div><img src="{{Voyager::image($homeslide->cover_image)}}" title="">
    <div class="inner-content">
     <p class="animated fadeInDown">{{$homeslide->title_white}}</p>
     <h1 class="animated fadeInLeft">{{$homeslide->title_red}}</h1>
     <span>{{$homeslide->description}}</span>
     <div class="donate-box"><span>DONATE NOW</span></div>
    </div>
  </div>
  @endif
@endforeach
@endif
  </div>

 </div>
</section>

<!-- <section class="section-padding"></section> -->

<section class="about text-center">
  <div class="container">
 <h1><span style="color: #ec0101">WHO</span> WE ARE</h1>
 
 <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita, quas ab adipisci consectetur tempora jet.adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita, quas ab adipisci consectetur tempora jetadipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita, quas ab adipisci consectetur tempora jet

 </p>
 <a href="about.php">(Read More)</a>
</div>
</section>

<section class="section-padding"></section>

<section class="post">
  <div class="container">
    <h1><span style="color: #ec0101">Recent Works</span> and Programs</h1>
    <div class="row">
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
</div>
</section>
<section class="section-padding"></section>

@stop


 