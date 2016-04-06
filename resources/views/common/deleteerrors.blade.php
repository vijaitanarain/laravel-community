@if(Session::has('deletesuccess'))
    <div class="alert alert-success  text-center">
        <strong>Congrats!!</strong>
         {!! session('message') !!}
    </div>
@endif
@if(Session::has('deleteerror'))
    <div class="alert alert-danger  text-center">
        <strong>Whoops! Something went wrong!</strong>
         {!! session('message') !!}
    </div>
@endif