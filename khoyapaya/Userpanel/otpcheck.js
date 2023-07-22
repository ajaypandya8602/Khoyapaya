$(document).ready(function(){

$("#otp-form").validate({
        rules:
        {
            otp:
            {
                required: true,
            },
            messages:
            {
                otp:
                {
                    required: "This field is required."
                },
            },
        },
        submitHandler: submitForm   
    }); 
   function submitForm() {      
       var data = $("#otp-form").serialize();             
        
            $.ajax({
                url:'otpcheck.php',
                type:'post',
                data:data,
                success:function(response){
                    if(response == 'ok')
                     {                                   
                        $("#error").fadeIn(1000, function(){                        
                        $("#error").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');                   });
                        location.href="Newpass.php"
                    }  
                    else
                    {
                        $("#error").fadeIn(1000, function(){                        
                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+ ' !</div>');                   });
                            
                    }
                  
                            
                }

            });
        
    };
});