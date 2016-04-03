@extends('layouts.restpages')

@section('title')
    Community a Corporate Multipurpose Flat Bootstrap responsive Website Template | Contact :: w3layouts
@endsection

@section('bannerhead')
	Contact
@stop

@section('bannertitle')
	Contact
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
    <h3>Feedback</h3>
     <p class="m_4">"We are waiting for your feedback. Please contact us via this form or email us or call us"</p>
       <form class="contact" method="POST" action="{{ route('submitfeedback') }}">
        <input type="text" class="text" value="Name" id="name" name="name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}">
        <input type="text" class="text" value="Email" id="email" name="email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}">
        <input type="text" class="text" value="Subject" id="subject" name="subject" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Subject';}">
        <textarea value="Message" id="message" name="message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">Message</textarea>
            <div class="submit-wrap">
              <input type="submit" value="Send">
              <input type="reset" value="Clear">
            </div>
            {!! csrf_field() !!}
       </form>
      </div>    
    <div class="clearfix"> </div>
 </div>
</div>
<div class="map">
   <!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d3150859.767904157!2d-96.62081048651531!3d39.536794757966845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2sin!4v1408111832978"> </iframe> -->
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3018.270532197716!2d-73.94458728464186!3d40.84398383746761!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c2f6994edcf7ff%3A0xd15e8fcf09c7478f!2s715+W+170th+St%2C+New+York%2C+NY+10032!5e0!3m2!1sen!2sus!4v1459128014561"></iframe>
</div>
@stop