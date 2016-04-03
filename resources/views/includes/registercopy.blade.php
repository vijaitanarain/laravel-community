<div class="modal fade" id="applyModal_1" tabindex="-1" role="dialog" aria-labelledby="applyModalLabel" aria-hidden="true">
				  	<div class="modal-dialog dialog_3">
				    	<div class="modal-content">
					      	<div class="modal-header">
					        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">×</span></button>
					        	<h4 class="modal-title" id="myModalLabel"><div class="head_4">
			                         <p>Register</p>
			                        </div></h4>
					      	</div>
                  <form id="registerFormModal"  class="register" method="POST">
					      	          <input type="hidden" name="_method" value="POST">
          					      		<div class="radio radio_1">
          									<input id="leader" type="radio" value="Leader">
          									<label for="leader">Leader</label>
          									<input id="leader" type="radio" value="Company">
          									<label for="company">Company</label>
          									<input id="leader" type="radio" value="Trainer">
          									<label for="trainer">Trainer</label>
          									<input id="leader" type="radio" value="Software Developer">
          									<label for="software_developer">Software Developer</label>
          									<input id="leader" type="radio" value="Product Supplier">
          									<label for="product_supplier">Product Supplier</label>
          									<input id="leader" type="radio" value="Consultant">
          									<label for="consultant">Consultant</label>
          									<input id="leader" type="radio" value="Employee">
          									<label for="employee">Employee</label>
	                            </div>
                              
	                            <div class="section">
                                  <label for="email" class="field prepend-icon">
                                    <input type="text" name="email" id="email" placeholder="Email">
                                    <label for="email" class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </label>
                                  </label>
                               </div>
                               <div class="section">
                                 <label for="password" class="field prepend-icon">
                                    <input type="password" name="password" id="password" placeholder="Password">
                                    <label for="password" class="field-icon">
                                        <i class="fa fa-lock"></i>
                                    </label>
                                 </label>
                               </div>
                               <div class="section">
                                  <label for="mobilenumber" class="field prepend-icon">
                                    <input type="text" name="mobilenumber" id="mobilenumber" placeholder="Mobile Number">
                                    <label for="mobilenumber" class="field-icon">
                                        <i class="fa fa-phone"></i>
                                    </label>
                                  </label>
                               </div>
                               <div class="section">
                                  <label for="name" class="field prepend-icon">
                                    <select path="country" id="country" name="country" class="form-control input-sm">
				                       <option value="">Select Country</option> 
				                    </select>
                                    <label for="name" class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </label>
                                  </label>
                               </div>
                               <div class="section">
                                  <label for="name" class="field prepend-icon">
                                     <select path="country" id="state" name="state" class="form-control input-sm" style="height:40px;">
                                        <option value="">Select State</option>
                                     </select>
                                     <label for="name" class="field-icon">
                                        <i class="fa fa-user"></i>
                                     </label>
                                  </label>
                               </div>
                               <div class="section">
                                  <label for="city" class="field prepend-icon">
                                      <input type="text" name="city" id="city" placeholder="City">
                                    <label for="city" class="field-icon">
                                        <i class="fa fa-user"></i>
                                    </label>
                                     
                                  </label>
                               </div>
                               <div class="section">
                                  <div class="submit"><input type="submit" value="Register" id="modal-save" ></div>
                               </div>
                               <div class="checkbox check_1">
									<input id="check1" type="checkbox" name="check" value="check1">
									<label for="check1">I agree to the Terms of Service and Privacy Policy</label>
							   </div>
						  </form>
                     </div>
		         </div>
		     </div>
         <script>
           var token= '{{ csrf_token() }}';
           var url = "{{route('createUser')}}";

         </script>
         <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
         