 <footer>
  <section class="section-padding"></section>
   <div class="container">
     <div class="row">
       <div class="col-md-4">
         <h1>About Us</h1>
         <p>Lorem ipsum dolor sit amet, consectetur adipisicingLorem<br> ipsum dolor sit amet, consectetur adipisicing</p>
         <h2>Follow Us</h2>
         <ul class="social">
           <li><i class="fa fa-facebook"></i></li>
           <li><i class="fa fa-twitter"></i></li>
           <li><i class="fa fa-youtube"></i></li>
           <li><i class="fa fa-linkedin"></i></li>
           <li><i class="fa fa-instagram"></i></li>

         </ul>
        </div>
         <div class="col-md-4">
          <h1>Quick Links</h1>          
          <ul class="links quick-link">
            <a href="{{('/')}}"><li>Home</li></a>
            <a href="{{('about')}}"><li>About Us</li></a>
            <a href="{{('gallery')}}"><li>Gallery</li></a>
            <a href="{{('event')}}"><li>Latest Events</li></a>
            <a href="{{('blog')}}"><li>Blog</li></a>
            <a href="{{('contact')}}"><li>Contact Us</li></a>
          </ul>

         
        </div>
         <div class="col-md-4">
          <h1>Contact Info</h1>

          <ul class="contact-detail">
            <li><i class="fa fa-phone"></i> +977 9841979700, 9808839555</li>
            <li><i class="fa fa-home"></i> Balkot-5 , Bhaktapur</li>
            <li><i class="fa fa-skype"></i> deepk.0348</li>
            <li><i class="fa fa-envelope"></i> deepk0348@gmail.com</li>
          </ul>
          
        </div>
       </div>
     </div>
   </div>
 </footer> 

 <section class="copy-right text-center">
   <p>© 2018 | All rights reserved by deepk0348@gmail.com.</p>
 </section>
 
  <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script type="text/javascript">
      (function ($) {
    
       
    //jQuery to collapse the navbar on scroll
    $(window).scroll(function() {
        if ($(".navbar-default").offset().top > 50 ) {
            $(".navbar-fixed-top").addClass("top-nav");
        } else {
            $(".navbar-fixed-top").removeClass("top-nav");
        }
    });
    
})(jQuery);
    </script>

    <script type="text/javascript">


   new WOW().init();

  $(function(){
  $('.bxslider').bxSlider({
    mode: 'fade',
    captions: true,
    slideWidth: 1920
  });
});


$(function() {
    var selectedClass = "";
    $(".fil-cat").click(function(){ 
    selectedClass = $(this).attr("data-rel"); 
     $("#portfolio").fadeTo(100, 0.1);
    $("#portfolio div").not("."+selectedClass).fadeOut().removeClass('scale-anm');
    setTimeout(function() {
      $("."+selectedClass).fadeIn().addClass('scale-anm');
      $("#portfolio").fadeTo(300, 1);
    }, 300); 
    
  });
});

   $(window).load(function() {
  $('.flexslider').flexslider({
    animation: "slide"
  });
});

   
   
    </script>

