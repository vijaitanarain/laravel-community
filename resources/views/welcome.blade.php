@extends('layouts.main')

@section('title')
    Community a Corporate Multipurpose Flat Bootstrap responsive Website Template | Home :: w3layouts
@endsection

@section('content')
<section class="slider">
  <div class="flexslider">
    <ul class="slides">
        <li clearfix>
            <div class="col-sm-6 slider_right">
              <div class="col-sm-12 slider_caption">
                <h3>Socialnetwork</h3>
                <h4>Lorem Ipsum</h4>
              </div>
            </div>
            <div class="col-sm-6"><img src="images/4.png" alt=""/></div>
        </li>
        <li clearfix>
            <div class="col-sm-6"><img src="images/9.png" alt=""/></div>
            <div class="col-sm-6 slider_left">
              <div class="col-sm-12 slider_caption1">
                <h3>Entrepreneurs</h3>
                <h4>Lorem Ipsum</h4>
              </div>
            </div>
        </li>
    </ul>
  </div>
  <div class="clearfix"> </div>
</section>
<div class="box_1">
  <div class="container">
    <div class="box-info clearfix ">
      <div class="heading_1 col-lg-3 col-md-3 col-sm-12 col-xs-12">
       <div class="heading column heading-v1 separator_align_right">
         <div class="heading-inner">
             <small class="subheading"> introducing</small>
             <h2>Shortly About Us</h2>
         </div>   
      </div>   
    </div>  
    <div class="col-lg-9 col-md-9 right_grid">
      <h3>The standard chunk of Lorem Ipsum used since the 1500s. </h3>
      <h4>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</h4>
      <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters</p>
    </div>  
    <div class="clearfix"> </div> 
   </div>
  </div> 
</div>
<div class="box_2">
  <div class="container">
      <div class="course_demo">
        <ul id="flexiselDemo3"> 
          <li><img src="images/l1.png" class="img-responsive" alt=""/></li>
          <li><img src="images/l2.png" class="img-responsive" alt=""/></li> 
          <li><img src="images/l3.png" class="img-responsive" alt=""/></li> 
          <li><img src="images/l4.png" class="img-responsive" alt=""/></li> 
         </ul>
        <script type="text/javascript">
            $(window).load(function() {
                $("#flexiselDemo3").flexisel({
                    visibleItems: 4,
                    animationSpeed: 1000,
                    autoPlay: true,
                    autoPlaySpeed: 3000,            
                    pauseOnHover: true,
                    enableResponsiveBreakpoints: true,
                    responsiveBreakpoints: { 
                        portrait: { 
                            changePoint:480,
                            visibleItems: 1
                        }, 
                        landscape: { 
                            changePoint:640,
                            visibleItems: 2
                        },
                        tablet: { 
                            changePoint:768,
                            visibleItems: 2
                        }
                    }
                });
                
            });
        </script>
        <script type="text/javascript" src="js/jquery.flexisel.js"></script>
   </div>
  </div>
</div>
<div class="box_3 clearfix">
  <div class="container">
    <div class="heading_1 col-lg-3 col-md-3 col-sm-12 col-xs-12">
       <div class="heading column heading-v1 separator_align_right">
         <div class="heading-inner">
             <small class="subheading"> introducing</small>
             <h2>New Classifieds</h2>
         </div>   
      </div>   
    </div>  
<div class="col-md-9 row-inner">
<div class="col-md-12 row-inner_1">
    <div class="col-md-6 col-inner">
        <ul class="classi_1">
            <li class="classi_1-left"><img src="images/pic1.jpg" class="img-responsive" alt=""/></li>
            <li class="classi_1-right">
                <h3><a href="index_detail.html">vulputate</a></h3>
                <p>Curabitur quisque morbi aspernatu</p>
            </li>
            <div class="clearfix"> </div>
        </ul>
        <ul class="classi_1">
            <li class="classi_1-left"><img src="images/pic2.jpg" class="img-responsive" alt=""/></li>
            <li class="classi_1-right">
                <h3><a href="index_detail.html">Ligula</a></h3>
                <p>Et ante eget, cras risus et hymena</p>
            </li>
            <div class="clearfix"> </div>
        </ul>
        <ul class="classi_1">
            <li class="classi_1-left"><img src="images/pic3.jpg" class="img-responsive" alt=""/></li>
            <li class="classi_1-right">
                <h3><a href="index_detail.html">Condimentum</a></h3>
                <p>cupidatat condimentum.</p>
            </li>
            <div class="clearfix"> </div>
        </ul>
        <ul class="classi_1 classi_2">
            <li class="classi_1-left"><img src="images/pic4.jpg" class="img-responsive" alt=""/></li>
            <li class="classi_1-right">
                <h3><a href="index_detail.html">interdum</a></h3>
                <p>nulla volutpat vestibulum arcu,</p>
            </li>
            <div class="clearfix"> </div>
        </ul>
    </div>
    <div class="col-md-6 col-inner_1">
        <ul class="classi_1">
            <li class="classi_1-left"><img src="images/pic7.jpg" class="img-responsive" alt=""/></li>
            <li class="classi_1-right middle">
                <h3><a href="index_detail.html">commodo </a></h3>
                <p>ac interdum nulla volutpat vestibu</p>
            </li>
            <div class="clearfix"> </div>
        </ul>
        <ul class="classi_1">
            <li class="classi_1-left"><img src="images/pic8.jpg" class="img-responsive" alt=""/></li>
            <li class="classi_1-right middle">
                <h3><a href="index_detail.html">vestibulum</a></h3>
                <p>ac justo et justo pede sapien nam</p>
            </li>
            <div class="clearfix"> </div>
        </ul>
        <ul class="classi_1">
            <li class="classi_1-left"><img src="images/pic9.jpg" class="img-responsive" alt=""/></li>
            <li class="classi_1-right middle">
                <h3><a href="index_detail.html">phasellus</a></h3>
                <p>sem molestie tortor, nascetur</p>
            </li>
            <div class="clearfix"> </div>
        </ul>
        <ul class="classi_1 classi_2">
            <li class="classi_1-left"><img src="images/pic10.jpg" class="img-responsive" alt=""/></li>
            <li class="classi_1-right middle">
                <h3><a href="index_detail.html"> faucibus</a></h3>
                <p>Erat metus nec sunt sit ipsum</p>
            </li>
            <div class="clearfix"> </div>
        </ul>
       </div>
     </div>
   </div>
 </div>
</div>
<marquee direction="left" style="background:#000; color:#F3DB28;">
    Mauris volutpat sagittis dolor, ac cursus nibh ultricies ac. Mauris lacinia nunc non venenatis aliquam. Aliquam id interdum risus. Integer tempor nulla suscipit congue commodo. Nam congue enim purus, non scelerisque odio mollis sed. Ut quis felis non lectus dignissim tristique. 
</marquee>
<div class="tabs_list">
  <div class="container">  
     <div class="heading_1 col-lg-3 col-md-3 col-sm-12 col-xs-12">
       <div class="heading column heading-v1 separator_align_right">
         <div class="heading-inner">
             <small class="subheading"> introducing</small>
             <h3>Posted Classifieds</h3>
         </div>   
      </div>   
    </div>
           <div class="bs-example bs-example-tabs col-md-9" role="tabpanel" data-example-id="togglable-tabs">
             <ul id="myTab" class="nav nav-tabs" role="tablist">
              <li role="presentation" class="active presentation_2"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Recently Feeds</a></li>
              <li role="presentation"><a href="#profile" role="tab" id="profile-tab" data-toggle="tab" aria-controls="profile">
                <div class="btn-group">
                    <a class="btn btn_1 btn-default dropdown-toggle dropdown-toggle_1" data-toggle="dropdown" aria-expanded="true">User Type<span class="caret"></span></a>
                    <ul class="dropdown-menu dropdown-menu-right" role="menu">
                        <li><a href="#">Company</a></li>
                        <li><a href="#">Software Developer</a></li>
                        <li><a href="#">Leader</a></li>
                        <li><a href="#">Employee</a></li>
                        <li><a href="#">Consultant</a></li>
                        <li><a href="#">Trainer</a></li>
                    </ul>
                 </div></a></li>
              <li role="presentation"><a href="#profile1" role="tab" id="profile-tab1" data-toggle="tab" aria-controls="profile1">
                <input class="form-control" type="text" id="flocation" name="flocation" placeholder="Enter City Name" onkeypress="displayCity(this.value);" onblur="gotoFeed('location', this.value);" tabindex="99">
              </li>
            </ul>
          <div id="myTabContent" class="tab-content">
             <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
              <div class="panel-body">
                    <div class="pull-left" style="margin:0 5px;">
                        <a class="thumbnail" href="index_detail.html">
                            <img src="images/pic13.jpg" width="50" height="50">
                        </a>
                    </div>
                    <div class="panel-body_1">
                      <h3>
                          <a href="index_detail.html" style="text-transform: capitalize;"> Donec urna</a>
                        dolor suspendisse quis non<div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>
                      </h3>
                      <h4>
                        <a href="index_detail.html">Est sit integer eu magna, ullamcorper mus vel nunc</a>
                      </h4>
                    </div>
                   <div class="clearfix"></div><hr>
                    <div class="pull-left" style="margin:0 5px;">
                        <a class="thumbnail" href="index_detail.html">
                            <img src="images/pic14.jpg" width="50" height="50">
                        </a>
                    </div>
                    <div class="panel-body_1">
                    <h3>
                        <a href="index_detail.html" style="text-transform: capitalize;">Quisque ante dolor</a>
                        Lorem ipsum<div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>
                    </h3>
                    <h4>
                      <a href="index_detail.html">Mauris volutpat sagittis dolor. Mauris lacinia nunc aliquam</a>
                    </h4>
                    </div>
                    <div class="clearfix"></div><hr>
                    <div class="pull-left" style="margin:0 5px;">
                        <a class="thumbnail" href="index_detail.html">
                            <img src="images/pic13.jpg" width="50" height="50">
                        </a>
                    </div>
                    <div class="panel-body_1">
                    <h3>
                        <a href="index_detail.html" style="text-transform: capitalize;">Phasellus viverra</a>
                        vitae magna, mollis<div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>
                    </h3>
                    <h4>
                      <a href="index_detail.html">Et ante eget, cras risus et hymenaeos nulla sit, class tempus hac nunc</a>
                    </h4>
                    </div>
                    <div class="clearfix"></div><hr>
                    <div class="pull-left" style="margin:0 5px;">
                        <a class="thumbnail" href="index_detail.html">
                            <img src="images/pic14.jpg" width="50" height="50">
                        </a>
                    </div>
                    <div class="panel-body_1">
                    <h3>
                        <a href="index_detail.html" style="text-transform: capitalize;">Elit potenti justo</a>
                        donec commodo ipsum<div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>
                    </h3>
                    <h4>
                      <a href="index_detail.html">Rhoncus orci accumsan ipsum lectus et, ultricies in morbi pede</a>
                    </h4>
                    </div>
                    <div class="clearfix"></div><hr>
                    <div class="pull-left" style="margin:0 5px;">
                        <a class="thumbnail" href="index_detail.html">
                            <img src="images/pic13.jpg" width="50" height="50">
                        </a>
                    </div>
                    <div class="panel-body_1">
                    <h3>
                        <a href="index_detail.html" style="text-transform: capitalize;">Wisi eros vitae</a>
                        sodales integer<div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>
                    </h3>
                    <h4>
                      <a href="index_detail.html">Et ante eget, cras risus et hymenaeos nulla sit, class tempus hac nunc</a>
                    </h4>
                    </div>
                    <div class="clearfix"></div><hr>
                    <div class="pull-left" style="margin:0 5px;">
                        <a class="thumbnail" href="index_detail.html">
                            <img src="images/pic14.jpg" width="50" height="50">
                        </a>
                    </div>
                    <div class="panel-body_1">
                    <h3>
                        <a href="index_detail.html" style="text-transform: capitalize;">Bibendum nibh</a>
                        nonummy, nulla <div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>
                    </h3>
                    <h4>
                      <a href="index_detail.html">Condimentum cupidatat condimentum fermentum at imperdiet, pede nunc.</a>
                    </h4>
                    </div>
                    <div class="clearfix"></div><hr>
                    <div class="pull-left" style="margin:0 5px;">
                        <a class="thumbnail" href="index_detail.html">
                            <img src="images/pic13.jpg" width="50" height="50">
                        </a>
                    </div>
                    <div class="panel-body_1">
                    <h3>
                        <a href="index_detail.html" style="text-transform: capitalize;">Libero odio congue</a>
                        a luctus donec<div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>
                    </h3>
                    <h4>
                      <a href="index_detail.html">Justo enim suspendisse magna sit orci diam, turpis montes tempus </a>
                    </h4>
                    </div>
                    <div class="clearfix"></div><hr>
                    <div class="pull-left" style="margin:0 5px;">
                        <a class="thumbnail" href="index_detail.html">
                            <img src="images/pic14.jpg" width="50" height="50">
                        </a>
                    </div>
                    <div class="panel-body_1">
                    <h3>
                        <a href="index_detail.html" style="text-transform: capitalize;">Condimentum</a>
                        cupidatat cond<div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>
                    </h3>
                    <h4>
                      <a href="index_detail.html">Maecenas pharetra ad nibh, vel purus, blandit officia pede..</a>
                    </h4>
                    </div>
                    <div class="clearfix"></div>
               </div>
          </div>
          <div role="tabpanel" class="tab-pane fade" id="profile" aria-labelledby="profile-tab">
          </div>
          <div role="tabpanel" class="tab-pane fade" id="profile1" aria-labelledby="profile-tab1">
              <div class="panel-body">
                    <div class="pull-left" style="margin:0 5px;">
                        <a class="thumbnail" href="index_detail.html">
                            <img src="images/pic13.jpg" width="50" height="50">
                        </a>
                    </div>
                    <div class="panel-body_1">
                      <h3>
                          <a href="index_detail.html" style="text-transform: capitalize;">mollis vestibulum</a>
                        metus<div class="pull-right">1 hour ago <i class="fa fa-user refresh_1"></i></div>
                      </h3>
                      <h4>
                        <a href="index_detail.html">Maecenas pharetra ad nibh, vel purus, blandit officia pede..</a>
                      </h4>
                    </div>
                    <div class="clearfix"></div><hr>
                    <div class="pull-left" style="margin:0 5px;">
                        <a class="thumbnail" href="index_detail.html">
                            <img src="images/pic14.jpg" width="50" height="50">
                        </a>
                    </div>
                    <div class="panel-body_1">
                    <h3>
                        <a href="index_detail.html" style="text-transform: capitalize;">Est sit, luctus leo</a>
                        augue<div class="pull-right">1 hour ago <i class="fa fa-picture-o refresh_1"></i></div>
                    </h3>
                    <h4>
                      <a href="index_detail.html">Justo enim suspendisse magna sit orci diam, turpis montes tempus</a>
                    </h4>
                    </div>
                    <div class="clearfix"></div><hr>
                    <div class="pull-left" style="margin:0 5px;">
                        <a class="thumbnail" href="index_detail.html">
                            <img src="images/pic13.jpg" width="50" height="50">
                        </a>
                    </div>
                    <div class="panel-body_1">
                    <h3>
                        <a href="index_detail.html" style="text-transform: capitalize;">Ac metus metus</a>
                        arcu vestibulum<div class="pull-right">1 hour ago <i class="fa fa-users refresh_1"></i></div>
                    </h3>
                    <h4>
                      <a href="index_detail.html">Condimentum cupidatat condimentum fermentum at imperdiet, pede nunc</a>
                    </h4>
                    </div>
                    <div class="clearfix"></div><hr>
                    <div class="pull-left" style="margin:0 5px;">
                        <a class="thumbnail" href="index_detail.html">
                            <img src="images/pic14.jpg" width="50" height="50">
                        </a>
                    </div>
                    <div class="panel-body_1">
                    <h3>
                        <a href="index_detail.html" style="text-transform: capitalize;">pellentesque sit</a>
                         phasellus<div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>
                    </h3>
                    <h4>
                      <a href="index_detail.html">Condimentum cupidatat condimentum fermentum at imperdiet, pede nunc</a>
                    </h4>
                    </div>
                    <div class="clearfix"></div><hr>
                    <div class="pull-left" style="margin:0 5px;">
                        <a class="thumbnail" href="index_detail.html">
                            <img src="images/pic13.jpg" width="50" height="50">
                        </a>
                    </div>
                    <div class="panel-body_1">
                    <h3>
                        <a href="index_detail.html" style="text-transform: capitalize;">Bibendum nibh</a>
                        nonummy, nulla<div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>
                    </h3>
                    <h4>
                      <a href="index_detail.html">Justo enim suspendisse magna sit orci diam, turpis montes tempus</a>
                    </h4>
                    </div>
                    <div class="clearfix"></div><hr>
                    <div class="pull-left" style="margin:0 5px;">
                        <a class="thumbnail" href="index_detail.html">
                            <img src="images/pic14.jpg" width="50" height="50">
                        </a>
                    </div>
                    <div class="panel-body_1">
                    <h3>
                        <a href="index_detail.html" style="text-transform: capitalize;">Bibendum nibh</a>
                        nonummy, nulla <div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>
                    </h3>
                    <h4>
                      <a href="index_detail.html">Justo enim suspendisse magna sit orci diam, turpis montes tempus</a>
                    </h4>
                    </div>
                    <div class="clearfix"></div><hr>
                    <div class="pull-left" style="margin:0 5px;">
                        <a class="thumbnail" href="index_detail.html">
                            <img src="images/pic13.jpg" width="50" height="50">
                        </a>
                    </div>
                    <div class="panel-body_1">
                    <h3>
                        <a href="index_detail.html" style="text-transform: capitalize;">Condimentum</a>
                        cupidatat <div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>
                    </h3>
                    <h4>
                      <a href="index_detail.html">Justo enim suspendisse magna sit orci diam, turpis montes tempus</a>
                    </h4>
                    </div>
                    <div class="clearfix"></div><hr>
                    <div class="pull-left" style="margin:0 5px;">
                        <a class="thumbnail" href="index_detail.html">
                            <img src="images/pic14.jpg" width="50" height="50">
                        </a>
                    </div>
                    <div class="panel-body_1">
                    <h3>
                        <a href="index_detail.html" style="text-transform: capitalize;">Condimentum</a>
                        cupidatat con<div class="pull-right">1 hour ago <i class="fa fa-refresh refresh_1"></i></div>
                    </h3>
                    <h4>
                      <a href="index_detail.html">Justo enim suspendisse magna sit orci diam, turpis montes tempus</a>
                    </h4>
                    </div>
                    <div class="clearfix"></div>
               </div>
           </div>
        </div>
      </div>
    </div>
</div>
@stop