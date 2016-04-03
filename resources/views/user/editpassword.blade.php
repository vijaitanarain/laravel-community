@extends('layouts.restpages')

@section('title')
    Community a Corporate Multipurpose Flat Bootstrap responsive Website Template | User Change Password :: w3layouts
@endsection

@section('bannerhead')
  User Change Password
@stop

@section('bannertitle')
  <a href="{{ route('user.account')}}">User Profile</a>  / User Change Password
@stop

@section('content')

<div class="about_top">
 <div class="container">
     <div class="col-md-3 column-1 column-13">
        @if (Storage::disk('local')->has($user->name . '-' . $user->id . '.jpg'))
            <img src="{{ route('account.image', ['filename' => $user->name . '-' . $user->id . '.jpg']) }}" alt="" class="img-rounded img-responsive" />
       @else
          <img src="http://placehold.it/380x500" alt="" class="img-rounded img-responsive" />
       @endif
    </div>
    <div class="col-md-9 column-9">
   
      <h3>User Edit Profile</h3>
       
            <div class="well well-sm">
                @include('common.errors')
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-md-offset-3 text-center">
                        <form name="editpass" method="post" action="{{ route('user.savepassword')}}"  >
                              <div class="form-group">
                                <label for="now_password">Old Password</label>
                                <input type="password" class="form-control" name="now_password" id="now_password" value="{{ old('now_password')}}">
                              </div>
                              <div class="form-group">
                                <label for="password">New Password</label>
                                <input type="password" class="form-control" name="password" id="password" value="{{ old('password')}}">
                              </div>
                              <div class="form-group">
                                <label for="password_confirmation">Confirm Password</label>
                                <input type="password" class="form-control" name="password_confirmation" id="password_confirmation" value="{{ old('password_confirmation')}}">
                              </div>
                              <div class="section">
                                <div class="submit"><input type="submit" name="submit" value="Edit"></div>
                             </div>
                             {!! csrf_field() !!}
                        </form>
                    </div>
                </div>
            
    </div>

         
    </div>    
    <div class="clearfix"> </div>
 </div>
</div>

@stop