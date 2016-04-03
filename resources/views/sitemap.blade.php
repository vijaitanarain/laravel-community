@extends('layouts.restpages')

@section('title')
    Community a Corporate Multipurpose Flat Bootstrap responsive Website Template | Site map :: w3layouts
@endsection

@section('bannerhead')
	Site map
@stop

@section('bannertitle')
	<a href="{{url('news')}}" class="home_desc">News</a> / <span>Site map</span>
@stop

@section('content')

<div class="about_top">
 <div class="container">
    <div class="col-md-3 column-12">
    </div>
    <div class="col-md-9 column-15">
       <h6>Site map</h6>
         <div class="module_container">
           <h4 class="heading-style-2">
              Pages
           </h4>

           <ul class="menu">
              <li>
                <a class="fullwidth" href="index.html">Home</a>
                 <ul class="menu-child">
                    <li>
                      <a href="index_detail.html">Index Detail</a>
                    </li>
                 </ul>
              </li>
              <li>
                <a class="fullwidth" href="index.html">About</a>
                 <ul class="menu-child">
                    <li>
                      <a href="index_detail.html">How It Works</a>
                    </li>
                    <li>
                      <a href="index_detail.html">Privacy Policy</a>
                    </li>
                    <li>
                      <a href="index_detail.html">Terms Of Use</a>
                    </li>
                    <li>
                      <a href="index_detail.html">Tools</a>
                    </li>
                </ul>
              </li>
              <li>
                <a class="fullwidth" href="classified.html">Classified</a>
                 <ul class="menu-child">
                    <li>
                      <a href="classified_detail.html">Classified Detail</a>
                         <ul class="menu-child">
                            <li>
                               <a href="classified_detail-about.html">About</a>
                            </li>
                            <li>
                               <a href="classified_detail-network.html">Network</a>
                            </li>
                            <li>
                              <a href="classified_detail-photos.html">Photos</a>
                            </li>
                            <li>
                              <a href="classified_detail-videos.html">Videos</a>
                            </li>
                         </ul>
                    </li>
                    <li>
                      <a href="classified_single.html">Classified Single</a>
                    </li>
                    
                 </ul>
              </li>
              <li>
                <a class="fullwidth" href="classified_database.html">Database</a>
                 <ul class="menu-child">
                    <li>
                      <a href="state_detail.html">Database States</a>
                    </li>
                    <li>
                      <a href="city_detail.html">Database Cities</a>
                    </li>
                  </ul>
              </li>
              <li>
                <a class="fullwidth" href="news.html">News</a>
                 <ul class="menu-child">
                    <li>
                      <a href="news.html">News</a>
                          <ul class="menu-child">
                            <li>
                              <a href="news_single.html">News Single</a>
                            </li>
                          </ul>
                    </li>
                    <li>
                      <a href="shortcodes.html">Shortcodes</a>
                    </li>
                    <li>
                      <a href="faq.html">Faq</a>
                    </li>
                    <li>
                      <a href="career.html">Career</a>
                    </li>
                    <li>
                      <a href="terms.html">Terms of use</a>
                    </li>
                    <li>
                      <a href="sitemap.html">Sitemap</a>
                    </li>
                    <li>
                      <a href="testimonials.html">Testimonials</a>
                    </li>
                    <li>
                      <a href="grids.html">Grids</a>
                    </li>
                  </ul>
              </li>
              <li>
                <a class="fullwidth" href="article.html">Article</a>
                 <ul class="menu-child">
                    <li>
                      <a href="article_single.html">Article Single</a>
                    </li>
                 </ul>
              </li>
              <li>
                <a class="fullwidth" href="forum.htmll">Forum</a>
                 <ul class="menu-child">
                    <li>
                      <a href="forum_single.html">Forum Single</a>
                         <ul class="menu-child">
                            <li>
                               <a href="forum_single-post.html">Forum Single Post</a>
                            </li>
                         </ul>
                    </li>
                  </ul>
              </li>
              <li><a class="fullwidth" href="videos.html">Video</a></li>
              <li><a class="fullwidth" href="advertise.html">Advertising</a></li>
              <li><a class="fullwidth" href="contact.html">Contact</a></li>
          </ul>
         </div>
        </div>
       <div class="clearfix"> </div>
 </div>
</div>
@stop