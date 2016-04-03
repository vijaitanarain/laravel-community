@extends('layouts.restpages')

@section('title')
    Community a Corporate Multipurpose Flat Bootstrap responsive Website Template | User Edit Profile :: w3layouts
@endsection

@section('bannerhead')
  User Edit Profile
@stop

@section('bannertitle')
  <a href="{{ route('user.account')}}">User Profile</a>  / User Edit Profile
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
                        <form name="edituser" method="post" action="{{ route('user.saveaccount')}}"  enctype="multipart/form-data">
                              
                              
                              <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" name="name" id="name" value="{{ $user->name }}" placeholder="Name">
                              </div>
                              <div class="form-group">
                                <label for="image">Upload Image</label>
                                <input type="file" name="image" class="form-control" id="image">
                                <p class="help-block">Please upload your picture</p>
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