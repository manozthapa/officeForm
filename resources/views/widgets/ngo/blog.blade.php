@extends('layouts.blog-index')
@section('content')
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


    @if(!$blog->isEmpty())

      @foreach($blog as $blogs)

      @if($blogs->published==1)
      <div class="box1">

           <h3><a href="blog/{{$blogs->id}}">{{$blogs->title}}</a></h3>
            <span>By {{$blogs->user}}- {{ \Carbon\Carbon::parse($blogs->created_at)->diffForHumans() }} </span> 

         <div>
          <a href="blog/{{$blogs->id}}"><img src="{{Voyager::image($blogs->image)}}"></a>
        </div>
        <div class="data">
            <p>{!!\Illuminate\Support\Str::words("$blogs->description", 80) !!}</p>
            <span><a href="blog/{{$blogs->id}}">Continue reading >>></a></span>
        </div>
      <div class="clear"></div>
      
    </div>
      @endif
    @endforeach

    @else
      <div>No Posts Yet</div>
      
    @endif

    {{$blog->links()}}
          {{--<div class="page_links">
                                
                                  <div class="page_numbers">
                                      <ul>
                                      <li><a href="#">1</a>
                                      <li class="active"><a href="#">2</a>
                                      <li><a href="#">3</a>
                                      <li><a href="#">4</a>
                                      <li><a href="#">5</a>
                                      <li><a href="#">6</a>
                                      <li><a href="#">... Next</a>
                                    </ul>
                                  </div>  
                                <div class="clear"></div>
                              <div class="page_bottom">
                                <p>Back To : <a href="#">Top</a> |  <a href="#">Home</a></p>
                              </div>
                          </div>--}}
</div>
<div class="sidebar">

      <div class="popular-post">
        <h3>All Posts</h3>
        @foreach($other as $others)
          <div class="post-grid">
            <img src="{{Voyager::image($others->image)}}" title="post1" alt=""/>
            <p>{{$others->title}}<a href="#">[Read More]</a></p>
              <div class="clear"> </div>
            </div>
        @endforeach
             
          <div class="view-all"><a href="#">
            </a><a href="#">ViewAll</a>
          </div>
          <div class="clear"></div>
      </div>
      
  
  
</div>
<div class="clear"></div>
</div>
</div>

@stop