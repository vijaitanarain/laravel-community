//Register
$("form#registerFormModal").submit(function(e)
    { 
        
        e.preventDefault(); //Prevent the normal submission action
        var form=$("#registerFormModal");
     //$("input[name='somename']",form)
         $name=$("input[name='name']",form).val();
         $email=$("input[name='email']",form).val();
         $password=$("input[name='password']",form).val();

        $.ajax({

            method: 'POST',
            url:url,
            data : { 
               
                name:$name,
                
                email:$email,
               
                password:$password,
                _token:token},
            success:  function (response) {
                        $errors = response; //this will get the errors response data.
                        //show them somewhere in the markup
                        //e.g
                        errorsHtml = '<div class="alert alert-success"><ul>';

                        $.each( $errors, function( key, value ) {
                            errorsHtml += '<li>' + value + '</li>'; //showing only the first error.
                        });
                        errorsHtml += '</ul></div>';
                        msg = errorsHtml;
                       $('#result').html(msg); 
                 document.registerFormModal.reset();
                    //window.location = successurl;
                      },
            error: function (x,e) {
                if (x.status==0) {
                    alert('You are offline!!\n Please Check Your Network.');
                } else if(x.status==404) {
                    alert('Requested URL not found.');
                } else if(x.status==500) {
                   alert('Internel Server Error.');
                } else if(e=='parsererror') {
                   alert('Error.\nParsing JSON Request failed.');
                } else if(e=='timeout'){
                   alert('Request Time out.');
                } else {
                   //alert('Unknow Error.\n'+x.responseText);
                    /*var myArr = JSON.parse(x.responseText);
                    var out = "";
                    var i;
                    for(i = 0; i < myArr.length; i++) {
                        out += '<a href="' + myArr[i].name + '"><br>' + myArr[i].email + '</a><br>';
                    }

                    console.log(out);*/
                    $errors = x.responseJSON; //this will get the errors response data.
                  //show them somewhere in the markup
                  //e.g
                  errorsHtml = '<div class="alert alert-danger"><ul>';

                  $.each( $errors, function( key, value ) {
                      errorsHtml += '<li>' + value[0] + '</li>'; //showing only the first error.
                  });
                  errorsHtml += '</ul></div>';
                   $('#result').html(errorsHtml);
                   
                }
            }
                
         })
        .done( function(msg){
             $("form#applyModal_1").modal("hide");
        });
        //alert("thank god111");
});

//login
$("#loginFormModal").submit(function(e)
    { 
        //alert($(e.target).attr('name'));
        
        e.preventDefault(); //Prevent the normal submission action
        var form=$("#loginFormModal");

     //$("input[name='somename']",form)
        // $name=$("input[name='name']",form).val();
        // $email=$("input[name='email']",form).val();
         //$password=$("input[name='password']",form).val();
        var successurl = $("input[name='successurl']",form).val();
         $.ajax({

                method: 'GET',
                url:url1,
                datatype : 'JSON',
                 data : form.serialize(),
                success:  function (response) {
                        $errors = response; //this will get the errors response data.
                        //show them somewhere in the markup
                        //e.g
                        errorsHtml = '<div class="alert alert-success"><ul>';

                        $.each( $errors, function( key, value ) {
                            errorsHtml += '<li>' + value + '</li>'; //showing only the first error.
                        });
                        errorsHtml += '</ul></div>';
                        msg = errorsHtml;
                       $('#result1').html(msg); 
                        window.location=successurl;
                },
                error: function (x,e) {
                        var msg = '';
                    if (x.status==0) {
                        msg = 'You are offline!!\n Please Check Your Network.';
                    } else if(x.status==404) {
                        msg = 'Requested URL not found.';
                    } else if(x.status==500) {
                       msg = 'Internel Server Error.';
                    } else if(e=='parsererror') {
                      msg = 'Error.\nParsing JSON Request failed.';
                    } else if(e=='timeout'){
                       msg ='Request Time out.';
                    } else if(x.status == 406) {
                    msg='wrong input, can\'t login';
                    } else {
                       $errors = x.responseJSON; //this will get the errors response data.
        //show them somewhere in the markup
        //e.g
        errorsHtml = '<div class="alert alert-danger"><ul>';

        $.each( $errors, function( key, value ) {
            errorsHtml += '<li>' + value + '</li>'; //showing only the first error.
        });
        errorsHtml += '</ul></div>';
                   msg = errorsHtml;
                       
                       
                    }
                    $('#result1').html(msg);
                }
                    
             })

            .done( function(response){
                if (response.error == false){
        //No errors, check user
        $('#result1').html(response.error);
                }else{
                    console.log(response);
                  // There is an error
                }
                /*$('#result1').html(response);
                $('#applyModal').modal('hide');*/
                 
            });
        //alert("thank god111");
});

//subscribe
$("#subscribefrm").submit(function(e)
    { 
        e.preventDefault(); //Prevent the normal submission action
        var form=$("#subscribefrm");
           $.ajax({

                method: 'POST',
                url:subscribeurl,
                datatype : 'JSON',
                 data : form.serialize(),
                success:  function (response) {
                  
                         $errors = response; //this will get the errors response data.
                        //show them somewhere in the markup
                        //e.g
                        errorsHtml = '<div class="alert alert-success"><ul>';

                        $.each( $errors, function( key, value ) {
                            errorsHtml += '<li>' + value + '</li>'; //showing only the first error.
                        });
                        errorsHtml += '</ul></div>';
                        msg = errorsHtml;
                       $('#result3').html(msg); 
                },
                error: function (x,e) {
                        var msg = '';
                    if (x.status==0) {
                        msg = 'You are offline!!\n Please Check Your Network.';
                    } else if(x.status==404) {
                        msg = 'Requested URL not found.';
                    } else if(x.status==500) {
                       msg = 'Internel Server Error.';
                    } else if(e=='parsererror') {
                      msg = 'Error.\nParsing JSON Request failed.';
                    } else if(e=='timeout'){
                       msg ='Request Time out.';
                    } else if(x.status == 406) {
                    msg='wrong input, can\'t login';
                    } else {
                       $errors = x.responseJSON; //this will get the errors response data.
        //show them somewhere in the markup
        //e.g
        errorsHtml = '<div class="alert alert-danger"><ul>';

        $.each( $errors, function( key, value ) {
            errorsHtml += '<li>' + value + '</li>'; //showing only the first error.
        });
        errorsHtml += '</ul></div>';
                   msg = errorsHtml;
                       
                       
                    }
                    $('#result3').html(msg);
                }
                    
             })

            .done( function(response){
                if (response.error == false){
        //No errors, check user
        $('#result3').html(response.error);
                }else{
                    console.log(response);
                  // There is an error
                }
                /*$('#result1').html(response);
                $('#applyModal').modal('hide');*/
                 
            });
        //alert("thank god111");
});


