
<div class="footer_widget">
	<div class="container">
		<div class="col-md-4">
			<aside id="text-1" class="widget widget_text">
				<h3 class="widget-title"><span>COME VISIT US</span></h3>
				<div class="textwidget"><p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. </p>
				   <p><em style="color: #fff;">standard chunk.,<br> Finibus Bonorum,<br> Ipsum generators, treatise</em></p>
				</div> 
			</aside>
		</div>
		<div class="col-md-4">
			<aside id="text-2" class="widget widget_text">
				<h3 class="widget-title"><span>MORE ABOUT US</span></h3>
				<div class="textwidget">
					<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum,.</p></div>
		    </aside>
		</div>
		<div class="col-md-4">
			<aside>
				<h3 class="widget-title"><span>FLICKR FEED</span></h3>
				<ul class="gallery">
					<li><a href="{{ URL::to('/') }}/images/pic5.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="{{ URL::to('/') }}/images/pic5.jpg" class="img-responsive" alt="name">
					   </a>
					</li>
					<li><a href="{{ URL::to('/') }}/images/pic6.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="{{ URL::to('/') }}/images/pic6.jpg" class="img-responsive" alt="name">
					   </a>
					</li>
					<li><a href="{{ URL::to('/') }}/images/pic11.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="{{ URL::to('/') }}/images/pic11.jpg" class="img-responsive" alt="name">
					   </a>
					</li>
					<li class="last">
						<a href="{{ URL::to('/') }}/images/pic12.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="{{ URL::to('/') }}/images/pic12.jpg" class="img-responsive" alt="name">
					   </a>
					</li>
					<li>
						<a href="{{ URL::to('/') }}/images/pic6.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="{{ URL::to('/') }}/images/pic6.jpg" class="img-responsive" alt="name">
					   </a>
					</li>
					<li>
					   <a href="{{ URL::to('/') }}/images/pic5.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="{{ URL::to('/') }}/images/pic5.jpg" class="img-responsive" alt="name">
					   </a>
				    </li>
					<li>
						<a href="{{ URL::to('/') }}/images/pic11.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="{{ URL::to('/') }}/images/pic11.jpg" class="img-responsive" alt="name">
					   </a>
					</li>
					<li class="last">
						<a href="{{ URL::to('/') }}/images/pic12.jpg" class="img-responsive" title="Rose" rel="title1">
						<img src="{{ URL::to('/') }}/images/pic12.jpg" class="img-responsive" alt="name">
					   </a>
				    </li>
					<div class="clearfix"> </div>
				</ul>
			</aside>
		</div>
	</div>
</div>
<div class="footer_middle">

	<div class="container">

        <div class="col-sm-7">
          <div class="footer-icons"> 
          	<a href="#" class="social-icon"><i class="fa fa-twitter has-circle"></i></a> 
          	<a href="#" class="social-icon"><i class="fa fa-facebook has-circle"></i></a> 
          	<a href="#" class="social-icon"><i class="fa fa-google-plus has-circle"></i></a> 
          	<a href="#" class="social-icon"><i class="fa fa-linkedin has-circle"></i></a> 
          	<div class="clearfix"> </div>
          </div>
        </div>

        <div class="col-sm-5"><div id="result3">

            </div>	
		  <div class="newsletter_signup">
		  <!-- Display Validation Errors -->
       		 
		    <form method="POST" novalidate id="subscribefrm">
		      <input type="email" required placeholder="Subscribe to our newsletter" class="form-control" name="email" id="email" value="">
		      <input type="submit" id="subscribe" name="subscribe" value="SUBSCRIBE">
		      {!! csrf_field() !!}
		    </form>
			<script>
			var subscribeurl = '{{ route('createsubscription') }}';
			</script>
		  </div>

		</div>
        <div class="clearfix"> </div>
    </div>
</div>	

<div class="footer_bottom">
	<div class="container">
		<div class="copy">
            <p>Copyright © 2016 Community. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
	    </div>
	</div>

	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;">Top </span></a>
      <script type="text/javascript" src="{{ URL::to('js/move-top.js')}}"></script>
      <script type="text/javascript" src="{{ URL::to('js/easing.js')}}"></script>
      <script type="text/javascript" src="{{ URL::to('js/countries.js')}}"></script>
      <script language="javascript">
            populateCountries("country", "state");
      </script>
      <script type="text/javascript">
		$(document).ready(function() {
			/*
			var defaults = {
	  			containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
	 		};
			*/
			
			$().UItoTop({ easingType: 'easeOutQuart' });
			
		});
	  </script>
</div>	
<!----language selector----->
<script type="text/javascript" src="{{ URL::to('js/jquery.leanModal.min.js')}}"></script>
<link href="{{ URL::to('css/jquery.uls.css')}}" rel="stylesheet"/>
<link href="{{ URL::to('css/jquery.uls.grid.css')}}" rel="stylesheet"/>
<link href="{{ URL::to('css/jquery.uls.lcd.css')}}" rel="stylesheet"/>
<!-- Source -->
<script src="{{ URL::to('js/jquery.uls.data.js')}}"></script>
<script src="{{ URL::to('js/jquery.uls.data.utils.js')}}"></script>
<script src="{{ URL::to('js/jquery.uls.lcd.js')}}"></script>
<script src="{{ URL::to('js/jquery.uls.languagefilter.js')}}"></script>
<script src="{{ URL::to('js/jquery.uls.regionfilter.js')}}"></script>
<script src="{{ URL::to('js/jquery.uls.core.js')}}"></script>
<script src="{{ URL::to('js/register.js')}}"></script>
<script>
	$( document ).ready( function() {
		$( '.uls-trigger' ).uls( {
			onSelect : function( language ) {
				var languageName = $.uls.data.getAutonym( language );
				$( '.uls-trigger' ).text( languageName );
			},
			quickList: ['en', 'hi', 'he', 'ml', 'ta', 'fr'] //FIXME
		} );
	} );
</script>		
<!-- FlexSlider -->
<link href="{{ URL::to('css/flexslider.css')}}" rel='stylesheet' type='text/css' />
<script defer src="{{ URL::to('js/jquery.flexslider.js')}}"></script>
	  <script type="text/javascript">
		$(function(){
		  SyntaxHighlighter.all();
		});
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
<!-- FlexSlider -->	
	
</body>
</html>
