 function validatePassword() {
        var validator = $("#newpass-form").validate({

            rules: {
                password: "required",
                conf_pass: {
                    equalTo: "#password"
                }
            },
            messages: {
                password: " Enter Password",
                conf_pass: " Enter Confirm Password Same as Password"
            }
        });
        if (validator.form()) {
            submitForm();
        }
    }
     function submitForm() {      
       var data = $("#newpass-form").serialize();             
        
            $.ajax({
                url:'newpass_process.php',
                type:'post',
                data:data,
                success:function(response){
                     $("#error").fadeIn(1000, function(){                        
                        $("#error").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+"We sent you OTP on "+response+ ' !</div>');                   });
                            window.location.href = "login.php";
                       
                             
                }

            });
        
    };
 