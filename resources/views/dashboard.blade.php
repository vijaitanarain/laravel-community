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
    <div class="col-md-9 column-9">
    @if(Session::has('success'))
<p class="alert alert-info">{{ Session::get('success') }}</p>
@endif
      <h3>Dashboard</h3>
       <p class="m_4"></p>
         
    </div>    
    <div class="clearfix"> </div>
 </div>
</div>

@stop