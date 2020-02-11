@extends('layouts.index')

@section('content')
<section class="about text-center">
	<div class="inner-header">
		<div class="inner-header-title">
			<h1 class="animated fadeInDown">Frequently Asked Questions</h1>
			
		</div>
	</div>
</section>

<section class="section-padding"></section>

<div class="container">	

<div class="col-md-12 banner_bottom_left">

	@if(!$faq->isEmpty())	
		@foreach($faq as $faqs)
			
				<h1 class="que">{{$faqs->question}}</h1>
				<p class="ans">{{$faqs->answer}}</p>
				
		@endforeach
	@endif		
				
</div>
</div>
@stop