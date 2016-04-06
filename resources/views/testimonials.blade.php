@extends('layouts.restpages')

@section('title')
    Community a Corporate Multipurpose Flat Bootstrap responsive Website Template | Testimonials :: w3layouts
@endsection

@section('bannerhead')
	Testimonials
@stop

@section('bannertitle')
	<a href="{{url('news')}}" class="home_desc">News</a> / <span>Testimonials</span>
@stop

@section('content')

<div class="about_top">
 <div class="container">
  
    <div class="col-md-12 column-15">
       <h6>Testimonials</h6>
       
  <div class="column_5">
    <div class="col-md-4">
    <div class="item-testimonial">
        <div class="content_box">
            <blockquote>
                <p>It is a long established fact that a reader will be distracted by the readable content of a page.  
                            </p>    
                <footer>reader - <a href="#">distracted</a></footer>
            </blockquote>
          </div>
           <div class="avatar"><img src="images/pic5.jpg" class="img-responsive" alt=""/></div>
        </div>
      </div>
      <div class="col-md-4">
    <div class="item-testimonial">
        <div class="avatar"><img src="images/pic12.jpg" class="img-responsive" alt=""/></div>
          <div class="content_box">
            <blockquote>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have in some form.  
                            </p>    
                <footer>suffered - <a href="#">alteration</a></footer>
            </blockquote>
          </div>
        </div>
      </div>
      <div class="col-md-4">
    <div class="item-testimonial item-testimonial_last">
        <div class="avatar"><img src="images/pic6.jpg" class="img-responsive" alt=""/></div>
          <div class="content_box">
            <blockquote>
                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of  Latin.  
                            </p>    
                <footer>literature - <a href="#">classical</a></footer>
            </blockquote>
          </div>
        </div>
      </div>  
    </div>
   <div class="clearfix"> </div>
 </div>
</div>
@stop