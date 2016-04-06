<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>@yield('title')</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Community Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="{{ asset('css/bootstrap-3.1.1.min.css') }}" rel='stylesheet' type='text/css' />
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="{{ URL::to('js/jquery.min.js')}}"></script>
<script src="{{ URL::to('js/bootstrap.min.js')}}"></script>
<!-- Custom Theme files -->
<link href="{{ URL::to('css/style.css')}}" rel='stylesheet' type='text/css' />
<!--webfont-->
<link href='//fonts.googleapis.com/css?family=Oswald:300,400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=PT+Sans:400,700' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Fugaz+One' rel='stylesheet' type='text/css'>
<!-- Owl Stylesheets -->
<script type="text/javascript" src="{{ URL::to('js/move-top.js')}}"></script>
<script type="text/javascript" src="{{ URL::to('js/easing.js')}}"></script>


<!----drop down----->
<script>
$(document).ready(function(){
    $(".dropdown").hover(            
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideDown("fast");
            $(this).toggleClass('open');        
        },
        function() {
            $('.dropdown-menu', this).stop( true, true ).slideUp("fast");
            $(this).toggleClass('open');       
        }
    );
});
</script>
<!----font-Awesome----->
<link href="{{ URL::to('css/font-awesome.css')}}" rel="stylesheet"> 
<!----font-Awesome----->
<!--light-box-files -->
<script src="{{ URL::to('js/jquery.chocolat.js')}}"></script>
<link rel="stylesheet" href="{{ URL::to('css/chocolat.css')}}" type="text/css" media="screen" charset="utf-8" />
<!--light-box-files -->
<script type="text/javascript" charset="utf-8">
$(function() {
	$('.gallery a').Chocolat();
});
</script>
</head>
<body>
<div class="header">
		<div class="container">
			<div class="col-sm-3 logo">
			  <h1><a href="{{url('/')}}"><span class="highlight">C</span>ommunity</a></h1>
			</div>
		    <div class="col-sm-9 logo_right">
		       <div class="social">
				  <a href="" class="link facebook" target="_parent"><span class="fa fa-facebook"></span></a>
				  <a href="" class="link twitter" target="_parent"><span class="fa fa-twitter"></span></a>
				  <a href="" class="link google" target="_parent"><span class="fa fa-google-plus"></span></a>
				  <a href="" class="link google" target="_parent"><span class="fa fa-linkedin"></span></a>
				  <a href="" class="link google" target="_parent"><span class="fa fa-tumblr"></span></a>
               </div>
			<!-- script for menu -->
			<span class="menu"></span>
			<div class="top-menu">
				<ul>
					@if (Auth::check())
          <li>
          <a href="{{ route('user.account') }}" class="btn btn-default btn-default_2 pull-left" >Account</a>
          </li>
          <li>
          <a href="{{ route('logout') }}" class="btn btn-default btn-default_2 pull-left" >Logout</a>
          </li>
          @else
          <li>
          <a href="#" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal">Login</a>
          </li>
          <li><a href="#" class="btn btn-default btn-default_2 pull-left" data-toggle="modal" data-target="#applyModal_1">Register</a></li>
          @endif
					
          
				
				</ul>
			</div>
			<div class="clearfix"> </div>
			<!-- Modal -->
				@include('includes.login')
				 <!-- Modal -->
				@include('includes.register')
			 
				@include('includes.language')
			  <div class="clearfix"></div>
		 </div>
	   </div>
</div>
<nav class="navbar nav_bottom" role="navigation">
 <div class="container">
 <!-- Brand and toggle get grouped for better mobile display -->
   <div class="navbar-header nav_2">
      <button type="button" class="navbar-toggle collapsed navbar-toggle1" data-toggle="collapse" data-target="#bs-megadropdown-tabs">Menu
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#"></a>
   </div> 
   <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
        <ul class="nav navbar-nav nav_1">
           <li{!!(Request::is('/')) ? ' class="current_page"' : '' !!}><a href="{{ url('/')}}">Home</a></li>
            <li{!!(Request::is('about')) ? ' class="current_page"' : '' !!}><a href="{{ url('/about')}}">About</a></li>
    		<li{!!(Request::is('classified')) ? ' class="current_page"' : '' !!}><a href="{{ url('/classified')}}">Classified Ads</a></li>
			<li{!!(Request::is('classified-database')) ? ' class="current_page"' : '' !!}><a href="{{ url('/classified-database')}}">Database</a></li>
            <li class="dropdown {!!(Request::is('news')) ? 'current_page' : ((Request::is('faq')) ? 'current_page' : ((Request::is('career')) ? 'current_page' : ((Request::is('terms')) ? 'current_page' : ((Request::is('sitemap')) ? 'current_page' : ((Request::is('testimonials')) ? 'current_page' : ((Request::is('grids')) ? 'current_page' : ''))))) ) !!} ">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">News<span class="caret"></span></a>
              <ul class="dropdown-menu drop_menu" role="menu">
                <li><a href="{{ url('/news')}}">News</a></li>
                <li><a href="{{ url('/faq')}}">Faq</a></li>
                <li><a href="{{ url('/career')}}">Career</a></li>
                <li><a href="{{ url('/terms')}}">Terms of use</a></li>
                <li><a href="{{ url('/sitemap')}}">Sitemap</a></li>
                <li><a href="{{ url('/testimonials')}}">Testimonials</a></li>
                <li><a href="{{ url('/grids')}}">Grids</a></li>
              </ul>
            </li>
            <li{!!(Request::is('article')) ? ' class="current_page"' : '' !!}><a href="{{ url('/article')}}">Articles</a></li>
            <li{!!(Request::is('forum')) ? ' class="current_page"' : '' !!}><a href="{{ url('/forum')}}">Forum</a></li>
            <li{!!(Request::is('videos')) ? ' class="current_page"' : '' !!}><a href="{{ url('/videos')}}">Video</a></li>
            <li{!!(Request::is('advertise')) ? ' class="current_page"' : '' !!}><a href="{{ url('/advertise')}}">Advertising</a></li>
            <li{!!(Request::is('contact')) ? ' class="current_page"' : '' !!}><a href="{{ url('/contact')}}">Contacts</a></li>
        </ul>
        <div class="help_line"><div id="txtblnk"><p>HELP LINE : (+01)-6464921688</p></div></div>
     </div><!-- /.navbar-collapse -->
   </div>
</nav>
<script type="text/javascript">
		$(function() {
		blinkeffect('#txtblnk');
		})
		function blinkeffect(selector) {
		$(selector).fadeOut('slow', function() {
		$(this).fadeIn('slow', function() {
		blinkeffect(this);
		});
		});
		}
</script>
<div class="demo">
  <marquee behavior="scroll" style="background:#F3DB28; color:#000;" direction="left" onmouseover="this.stop();" onmouseout="this.start();">				
    Mauris volutpat sagittis dolor, ac cursus nibh ultricies ac. Mauris lacinia nunc non venenatis aliquam. Aliquam id interdum risus. Integer tempor nulla suscipit congue commodo. Nam congue enim purus, non scelerisque odio mollis sed. Ut quis felis non lectus dignissim tristique. 
  </marquee> 	 
</div>