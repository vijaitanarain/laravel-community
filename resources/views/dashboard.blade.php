@extends('layouts.restpages')

@section('title')
    Community a Corporate Multipurpose Flat Bootstrap responsive Website Template | Dashboard :: w3layouts
@endsection

@section('bannerhead')
  Dashboard
@stop

@section('bannertitle')
  Dashboard
@stop

@section('content')

<div class="about_top">
 <div class="container">
    <div class="col-md-3 column-1 column-13">
       <i class="fa fa-envelope-o envelop"></i>
          <address class="address">
                <p>715 W 170th Street, <br>NY 10032</p>
                <dl>
                   <dt></dt>
                   <dd>Telephone :&nbsp;<span> (646) 492-1688</span></dd>
                   <dd>E-mail :&nbsp;<a href="mailto:admin@roxarth.com">admin@roxarth.com</a></dd>
                   
                </dl>
             </address>
      
    </div>
    <div class="col-md-9 column-15">
    @if(Session::has('success'))
        <p class="alert alert-info">{{ Session::get('success') }}</p>
    @endif
      <h6>Dashboard</h6>
       <p class="m_4"></p>
                <div class="panel-body_3">
                  
                  <div class="panel-body_1">
                    <h3>
                      <a href="{{ route('postquotes')}}" style="text-transform: capitalize;">Your Quotes</a>
                    </h3>
                      These are the quotes that you can post.
                  </div>
                  <div class="clearfix"></div><hr>
                    
                  <div class="panel-body_1">
                    <h3>
                      <a href="index_detail.html" style="text-transform: capitalize;">Post Classifieds</a>
                    </h3>
                      You can post free classifieds based on categories.
                  </div>
                 
                   <div class="clearfix"></div>
               </div>
         
    </div>    
    <div class="clearfix"> </div>
 </div>
</div>

@stop