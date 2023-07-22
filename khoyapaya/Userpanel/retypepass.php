<html>
 
<head>
    <title> Password and Confirm Password Validation Using Jquery </title>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.11.1/jquery.validate.min.js"></script>  
    <script>
    function validatePassword() {
        var validator = $("#loginForm").validate({
            rules: {
                password: "required",
                confirmpassword: {
                    equalTo: "#password"
                }
            },
            messages: {
                password: " Enter Password",
                confirmpassword: " Enter Confirm Password Same as Password"
            }
        });
        if (validator.form()) {
            submitForm();
        }
    }
     function submitForm() {      
       var data = $("#loginForm").serialize();             
        
            $.ajax({
                url:'test.php',
                type:'post',
                data:data,
                success:function(response){
                    if(response == '0')
                     {                                   
                       alert('hi');                    
                    }  
                    else
                    {
                         alert('hwwwwww');     
                    }
                  
                            
                }

            });
        return false; 
    };
 
    </script>
</head>
 
<body>
    <form method="post" id="loginForm" name="loginForm">
        <table cellpadding="0" border="1">
            <tr>
                <td>Password</td>
                <td><input tabindex="1" size="40" type="password" name="password" id="password" /></td>
            </tr>
            <tr>
                <td>Confirm Password</td>
                <td><input tabindex="1" size="40" type="password" name="confirmpassword" id="confirmpassword" /></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input tabindex="3" type="button" value="Submit" onClick="validatePassword();" /></td>
            </tr>
        </table>
    </form>
</body>
 
</html>