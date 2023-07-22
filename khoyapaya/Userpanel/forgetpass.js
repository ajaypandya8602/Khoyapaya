$(document).ready(function(){
$("#forget-form").validate({
        rules:
        {
            reset:
            {
                required: true,
            },
            messages:
            {
                reset:
                {
                    required: "This field is required"
                },
            },
        },
        submitHandler: submitForm   
    }); 
   function submitForm() {      
       var data = $("#forget-form").serialize();             
        
            $.ajax({
                url:'forgetpassword_process.php',
                type:'post',
                data:data,
                success:function(response){
                    if(response == '0')
                     {                                   
                        $("#error").fadeIn(1000, function(){                        
                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+"User Not found "+' !</div>');                   });
                    
                    }  
                    else
                    {
                        $("#error").fadeIn(1000, function(){                        
                        $("#error").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+"We sent you OTP on "+response+ ' !</div>');                   });
                        setTimeout(function() {
                          window.location.href = "otp.php";
                        }, 4000);
                    }
                  
                            
                }

            });
        return false; 
    };
});