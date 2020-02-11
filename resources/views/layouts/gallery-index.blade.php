
@include('partials.header-gallery')

@include('partials.nav')

@yield('content')

@include('partials.footer')



  <script>
      $('.aniimated-thumbnials').lightGallery({
    thumbnail:true
  });
    </script>
 
</body>
</html>  