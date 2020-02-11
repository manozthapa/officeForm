@include('partials.header-eventdetail')

 @include('partials.nav')

<section class="about text-center">
  <div class="inner-header">
    <div class="inner-header-title">
     <h1 class="animated fadeInDown">Event Detail</h1>
     
      </div>
  </div>
</section>





<section class="about-content text-center">
  <h1 class="text-center">
    @foreach($event as $events)
      {{$events->title}}
    @endforeach
  </h1>
  <div class="eventdetailpadding"></div>
  <div class="container eventdetail_gallery">
    
    <div id="aniimated-thumbnials">
     

      @foreach($event_images as $event_image)
      
    <a href="{{Voyager::image($event_image)}}" class="col-md-3">
      <img src="{{Voyager::image($event_image)}}" class="img-responsive img-thumbnail" />
    </a>
    
    @endforeach

    
  </div>
    
  </div>

  <section class="eventdetailpadding"></section>
  <div class="container">
    
    <div class="row">
      
      

      <div class="col-md-12 about-p">
        <p>
          @foreach($event as $events)
            {{$events->description}}
            <p class="dayz" style="color: #ec0101;text-align: right;">{{ \Carbon\Carbon::parse($events->created_at)->diffForHumans()}}</p>
          @endforeach
        </p>
      </div>

    </div>
  </div>
</section>

<section class="section-padding"></section>


@include('partials.footer')

    <script>
      $('#aniimated-thumbnials').lightGallery({
    thumbnail:true
  });
    </script>
</body>
</html>
