<div class="col-sm-5">
  <div class="newsletter_signup">
		  <!-- Display Validation Errors -->
       			 @include('common.errors')
		    <form action="{{ route('createsubscription') }}" method="POST" novalidate>
		      <input type="email" required placeholder="Subscribe to our newsletter" class="form-control" name="email" id="email" value="">
		      <input type="submit" id="subscribe" name="subscribe" value="SUBSCRIBE">
		      {!! csrf_field() !!}
		    </form>
		  </div>
</div>