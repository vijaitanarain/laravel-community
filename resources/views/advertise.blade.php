@extends('layouts.restpages')

@section('title')
    Community a Corporate Multipurpose Flat Bootstrap responsive Website Template | Advertise :: w3layouts
@endsection

@section('bannerhead')
	Advertising
@stop

@section('bannertitle')
	Advertising
@stop

@section('content')

<div class="about_top">
 <div class="container">
  <div class="col-md-3 column-1">
    <a href="#" class="btn btn_3 btn-primary" data-toggle="modal" data-target="#applyModal_1">Sign Up
          <span style="font-size: 20px;">Join Now</span>
          <h3>Click Here</h3>
        </a>
        <div class="list-group">
         <a href="classified_detail-about.html" class="list-group-item ">About</a>
         <a href="classified_detail-network.html" class="list-group-item ">Network <span class="badge badge_1">2</span></a>
         <a href="classified_detail-photos.html" class="list-group-item ">Photos <span class="badge badge_1">3</span></a>
         <a href="classified_detail-videos.html" class="list-group-item ">Videos <span class="badge badge_1">4</span></a>
        </div>
  </div>
  <div class="col-md-9 column-15">
     <h6>Advertising</h6>
     <p class="m_5">The standard chunk of Lorem Ipsum used since the 1500s is reproduced below for those interested. Sections 1.10.32 and 1.10.33 from "de Finibus Bonorum et Malorum" by Cicero are also reproduced in their exact original form, accompanied by English versions from the 1914 translation by H. Rackham.</p>
     <img src="images/5.png" class="img-responsive" alt=""/>
         <div class="social_advertise">
          <div class="fb-like-button social-item">
          <a href="#" title="" target="_blank"> <div class="social-item-inner"> 
            <span class="fa fa-facebook sc-icon"></span> 
            <span class="like-count">50696</span> 
            <span class="like-text"> Likes </span> 
          </div></a> 
        </div>
        <div class="twitter-like-button  social-item ">
           <a href="#" title="" target="_blank"> <div class="social-item-inner">
            <span class="fa fa-twitter sc-icon"></span> <span class="like-count">2</span> 
            <span class="like-text"> Follower </span> 
          </div> </a> 
          </div>
          <div class="youtube-subscribers-button  social-item ">
         <a href="#" title="" target="_blank"><div class="social-item-inner">
           <span class="fa fa-youtube sc-icon"></span> <span class="like-count">0</span> 
           <span class="like-text"> Subscriber </span>
         </div> </a> 
        </div>
        <div class="linkedin-button social-item ">
         <a href="#" title="" target="_blank"> <div class="social-item-inner">
          <span class="fa fa-linkedin sc-icon"></span> 
          <span class="like-count">1</span> <span class="like-text"> Follower </span>
        </div> </a> 
        </div>
        <div class="dribble-button social-item ">
         <a href="#" title="" target="_blank"> <div class="social-item-inner">
          <span class="fa fa fa-dribbble sc-icon"></span> <span class="like-count">90</span> 
          <span class="like-text"> Followers </span>
        </div> </a> 
        </div>
        <div class="gplus-like-button  social-item">
         <a href="#" title="" target="_blank"> <div class="social-item-inner">
          <span class="fa fa-google-plus sc-icon"></span> <span class="like-count">120</span> 
          <span class="like-text"> Followers </span> 
        </div> </a>
          </div>
       </div>
         <div class="gallery-cursual">
     <!-- requried-jsfiles-for owl -->
    <link href="css/owl.carousel.css" rel="stylesheet">
    <script src="js/owl.carousel.js"></script>
      <script>
        $(document).ready(function() {
          $("#owl-demo").owlCarousel({
            items : 3,
            lazyLoad : true,
            autoPlay : true,
            pagination : false,
          });
        });
      </script>
    <!-- //requried-jsfiles-for owl -->
    <!-- start content_slider -->
      <div id="example1">
        <h5>Newest Members</h5>
        <div id="owl-demo" class="owl-carousel text-center">
        <div class="item">
          <a href="images/pic19.jpg" class="img-responsive" title="Rose" rel="title1">
            <img class="lazyOwl" data-src="images/pic19.jpg" class="img-responsive" alt="name">
          </a>
        </div>
        <div class="item">
          <a href="images/pic20.jpg" class="img-responsive" title="Rose" rel="title1">
            <img class="lazyOwl" data-src="images/pic20.jpg" class="img-responsive" alt="name">
          </a>
        </div>
        <div class="item">
          <a href="images/pic21.jpg" class="img-responsive" title="Rose" rel="title1">
            <img class="lazyOwl" data-src="images/pic21.jpg" class="img-responsive" alt="name">
          </a>
        </div>
        <div class="item">
          <a href="images/pic22.jpg" class="img-responsive" title="Rose" rel="title1">
            <img class="lazyOwl" data-src="images/pic22.jpg" class="img-responsive" alt="name">
          </a>
        </div>
        <div class="item">
          <a href="images/pic23.jpg" class="img-responsive" title="Rose" rel="title1">
            <img class="lazyOwl" data-src="images/pic23.jpg" class="img-responsive" alt="name">
          </a>
        </div>
        </div>
      <!--//sreen-gallery-cursual---->
      </div>
         </div> 
         <p class="m_10">"Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."</p>  
       </div>
       <div class="clearfix"> </div>
  </div>
</div>
@stop