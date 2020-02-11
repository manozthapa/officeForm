
@include('partials.header-event')

@include('partials.nav')

@yield('content')

@include('partials.footer')

<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
  <script type="text/javascript" src="slick/slick.min.js"></script>

  <script type="text/javascript">
    $(document).ready(function(){
      $('.autoplay').slick({
          slidesToShow: 3,
      slidesToScroll: 1,
      autoplay: true,
      autoplaySpeed:6000,
      nav:true,
      });
    });
  </script>
 
</body>
</html>  