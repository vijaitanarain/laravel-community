<div class="modal fade" id="applyModal" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
				  	<div class="modal-dialog modal-dialog_2">
				    	<div class="modal-content">
					      	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					        	
                                <h4 class="modal-title" id="myModalLabel">
                                    <div class="head_4">
                                      <p>Login</p>
                                    </div>
                                </h4>
                               
					      	</div>
	                        <div class="modal-body">
                             <form id="loginFormModal"  class="register" method="GET" name="loginFormModal">
                             <input type="hidden" name="_method" value="GET">
                             <input type="hidden" name="successurl" value="{{ route('dashboard')}}"
                             {!! csrf_field() !!}

                             <div id="result1">

                              </div>
                               <div class="section">
                                <label for="email" class="field prepend-icon">
                                    <input type="text" name="email" id="email" placeholder="Username" autocomplete="off">
                                    <label for="email" class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </label>
                                </label>
                               </div>
                               <div class="section">
                                <label for="password" class="field prepend-icon">
                                    <input type="password" name="password" id="password" placeholder="Password" autocomplete="off">
                                    <label for="password" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                </label>
                             </div>
                             <div class="section">
                                <div class="submit"><input type="submit" value="Login"  id="modal-login"></div>
                             </div>
                             <ul class="new">
                								<li class="new_left"><p><a href="#">Forgot Password ?</a></p></li>
                								<li class="new_right"><p class="sign">New here ?&nbsp;&nbsp;<a href="#" data-toggle="modal" data-target="#applyModal_1">Sign Up</a></p></li>
                								<div class="clearfix"></div>
            						      </ul>
                           </form>
                        </div>
				    </div>
				 </div>
				</div>
                <script>
           var token= '{{ csrf_token() }}';
           var url1 = "{{route('loginUser')}}";
           var successurl = "{{route('dashboard')}}";

         </script>
          <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>