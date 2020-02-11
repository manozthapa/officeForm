 @include('partials.header-blog')
 @include('partials.nav')

 
<section class="about text-center">
  <div class="inner-header">
    <div class="inner-header-title">
     <h1 class="animated fadeInDown">Blog</h1>
     
      </div>
  </div>
</section>


<section class="section-padding"></section>

<div class="wrap">
  <div class="main">
    <div class="content">
      <div class="box1 blogdetail">
        
           <h3>{{$blog->title}}</h3>
            <span>By {{$blog->user}} - {{ \Carbon\Carbon::parse($blog->created_at)->diffForHumans() }}</span> 
         
         <div>
          
          <img src="{{Voyager::image($blog->image)}}"  class="blog-detail img-responsive">
        </div>
        
        <div class="blog-data">
            <p>{!!$blog->description!!}</p>
        </div>
      <div class="clear"></div>
    </div>      
    <!----------------  Comment Area -------------------->
    <div class="comments-area">
            <h3><img src="/img/r-blog.png" title="comment">Leave a comment</h3>
              <form method="POST" action="{{url('comment')}}">
                {{csrf_field()}}
                <p>
                  <label>Name</label>
                  <span>*</span>
                  <input type="text" value="" name="name" required="required">
                </p>
                <p>
                  <label>Email</label>
                  <span>*</span>
                  <input type="Email" value="" name="email" required="required">
                </p>
                <p>
                  <label>Subject</label>
                  <span>*</span>
                  <textarea name="comment" required="required"></textarea>
                </p>
                <p>
                  <input type="submit" value="Post"  >
                </p>
              </form>   
            </div>
            
            <div class="box comment">
      <h2><span>(0)</span> Comment's</h2>
      <ul class="list">
          <li>
            @foreach($comments as $comment)
              <div class="preview"><a href="#"><img src="/img/1.jpg" alt=""></a></div>
              <div class="data">
                  <div class="title">{{$comment->name}} <a href="#"> June 20, 2013</a></div>
                  <p>{{$comment->comment}}</p>
              </div>
              <div class="clear"></div>
              @endforeach
          </li>
          
      </ul>
    <div class="clear"></div>
  </div>
  
         
 </div>
<div class="sidebar">
      <div class="popular-post">
        <h3>Recent-posts</h3>
          <div class="post-grid">
            <img src="/img/latest-post-img1.jpg" title="post1" alt=""/>
            <p>Lorem ipsum dolor sit amet consectetur dolor more normal of letters,<a href="#">[...]</a></p>
              <div class="clear"> </div>
            </div>
              <div class="post-grid">
              <img src="/img/latest-post-img2.jpg" title="post1" alt=""/>
                <p>Lorem ipsum dolor sit dolor more normal consectetur of letters,<a href="#">[...]</a></p>
                <div class="clear"> </div>
            </div>
            <div class="post-grid">
              <img src="/img/latest-post-img3.jpg" title="post1" alt=""/>
                <p>Lorem ipsum dolor sit dolor more normal consectetur of letters sit amet,<a href="#">[...]</a></p>
                <div class="clear"> </div>
            </div>
          <div class="view-all"><a href="#">
            </a><a href="#">ViewAll</a>
          </div>
          <div class="clear"></div>
      </div>
      
  
 
</div>
<div class="clear"></div>
</div>
</div>



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
          <ul class="links">
            <li>Home</li>
            <li>About Us</li>
            <li>Members</li>
            <li>Gallery</li>
            <li>Donate</li>
            <li>Members</li>
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
</body>
</html>