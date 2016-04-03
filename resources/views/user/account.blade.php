@extends('layouts.restpages')

@section('title')
    Community a Corporate Multipurpose Flat Bootstrap responsive Website Template | User Profile :: w3layouts
@endsection

@section('bannerhead')
  User Profile
@stop

@section('bannertitle')
  User Profile
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
   
      <h3>User Profile</h3>
       
            <div class="well well-sm">
                <div class="row">
                
                    <div class="col-sm-12 col-md-12 " >
                        <br/>
                        <h4><strong>{{ $user->name }}</strong></h4>
                       
                        <p>
                            <i class="glyphicon glyphicon-envelope"></i>{{ $user->email}}
                            <br />
                            
                            <i class="glyphicon glyphicon-asterisk"></i>{{ $user->created_at->format('Y-m-d')}}
                            <br/>
                            <br/>
                            <br/>
                            <br/>
                        </p>
                        <!-- Split button -->
                        <div class="btn-group">
                            <button type="button" class="btn btn-primary">
                                Action</button>
                            <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
                                <span class="caret"></span><span class="sr-only">Edit User</span>
                            </button>
                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ route('user.editaccount')}}">Edit User</a></li>
                                <li><a href="{{ route('user.editpassword')}}">Edit Password</a></li>
                                <li><a href="{{ route('user.uploadpic')}}">Upload Picture</a></li>
                                <li class="divider"></li>
                                <li><a href="{{ route('logout')}}">Logout</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            
    </div>

         
    </div>    
    <div class="clearfix"> </div>
 </div>
</div>

@stop