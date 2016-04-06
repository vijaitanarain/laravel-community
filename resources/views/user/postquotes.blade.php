

@extends('layouts.restpages')

@section('title')
    Community a Corporate Multipurpose Flat Bootstrap responsive Website Template | Your Quotes :: w3layouts
@endsection

@section('bannerhead')
	Your Quotes
@stop

@section('bannertitle')
	 <span>Your Quotes</span>
@stop

@section('content')
<div class="about_top">
 <div class="container">
  
    <div class="col-md-12 column-15">
       <h6>Your Quotes</h6>
       @include('common.deleteerrors')
       
       @if(!empty(Request::segment(3)))
       <div class="alert alert-info text-center">
        <strong>Filter set for {{ rawurldecode(Request::segment(3)) }}</strong><br/>
         <a href="{{ route('postquotes')}}">Remove Filter</a>
    	</div>
       
       @endif
		  <div class="column_5">
		  @foreach($quotes as $quote)
		    <div class="col-md-4">

		    <div class="item-testimonial">

		        <div class="content_box">
		        <div class="text-right" alt="delete"><a id="delete-button" href="{{ route('delete', ['quote_id'=>$quote->id])}}" class="delete confirm" alt="delete" onclick="if (!confirm('Are you sure?')) return false;">×</a></div>
		            <blockquote>
		                <p>{{ $quote->quote}}  
		                            </p>    
		                <footer><a href="{{ route('postquotes', ['author' => $quote->author])}}">{{ $quote->author }}</a></footer>
		            </blockquote>
		          </div>
		           
		        </div>
		      </div>
		    @endforeach  
		    
		    </div>
   <div class="clearfix"> </div>
	</div>
 </div>
</div>
<div class="commentform">
    <div class="container">
    	<div class="col-md-3 column-6">
    	</div>
	    <div class="col-md-9 column-14">
	   
	    <form name="frm" method="post" action="{{ route('postQuote') }}">
	     <div class="comment_box">
		     <h4>Post a Quote</h4> 
			 <p>You can post the favorite quotes of authors with their names...</p>
			  @include('common.errors')
			  <div class="form-group">
	            <label class="field-label" for="quote">Quote:</label>
	            <textarea rows="8" id="quote" class="form-control form_control_2" name="quote" aria-required="true"></textarea>
	           </div>
	           <div class="form-group">
	               <label class="field-label" for="author">Author:</label>
	              <input type="text" name="author" class="form-control form_control_2" id="author" value="" aria-required="true">
	            </div>
	            <div class="submit-wrap submit-wrap_1">
	          	   <input type="submit" value="Post Quotes">
	            </div>
	            {!! csrf_field() !!}
	       </div>
	       </form>
	   </div>
	   <div class="clearfix mrg-20"></div>
   </div>
</div>
@stop

