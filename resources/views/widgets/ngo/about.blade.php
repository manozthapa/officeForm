@extends('layouts.index')

@section('content')
<section class="about text-center">
  <div class="inner-header">
    <div class="inner-header-title">
     <h1 class="animated fadeInDown">About Us</h1>
     
      </div>
  </div>
</section>

<section class="section-padding"></section>
<section class="section-padding"></section>


<section class="about-content text-center">
  <div class="container">
    <div class="row">
      <div class="col-md-5">
        <img src="img/cp.jpg" class="img-responsive">
      </div>
      <div class="col-md-7 about-p">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita, quas ab adipisci consectetur tempora jet.adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expeditaLorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita, quas ab adipisci consectetur tempora jet.adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita<br>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita, quas ab adipisci consectetur tempora jet.adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expeditaLorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita, quas ab adipisci consectetur tempora jet.adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expeditaLorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita, quas ab adipisci consectetur tempora jet.adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expeditaLorem ipsum dolor sit amet, consectetur adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita, quas ab adipisci consectetur tempora jet.adipisicing elit. Sequi tempora veritatis nemo aut ea iusto eos est expedita
        </p>
      </div>

    </div>
  </div>
</section>

<section class="team">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-10 col-md-offset-1">
        <div class="col-lg-12">
          <h6 class="description">OUR TEAM</h6>
          <div class="row pt-md">
            @if(!$team->isEmpty())
            @foreach($team as $teams)
            @if($teams->published==1)
            <div class="col-lg-3 col-md-3 col-sm-4 col-xs-12 profile">
              <div class="img-box">
                <img src="{{Voyager::image($teams->image)}}" class="img-responsive">
                <ul class="text-center">
                  <a href="#"><li><i class="fa fa-facebook"></i></li></a>
                  <a href="#"><li><i class="fa fa-twitter"></i></li></a>
                  <a href="#"><li><i class="fa fa-linkedin"></i></li></a>
                </ul>
              </div>
            
              <h1>{{$teams->name}}</h1>
              <h2>{{$teams->rank}}</h2>
              <p>{{$teams->description}}</p>
            </div>
            @endif
            @endforeach
            @endif
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section-padding"></section>

@stop

 