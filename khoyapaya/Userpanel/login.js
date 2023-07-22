$('document').ready(function() { 
	/* handling form validation */
	$("#login-form").validate({
		rules: {
			khoyapaya_pword: {
				required: true,
			},
			khoyapaya_email: {
				required: true,
				email: true
			},
		},
		messages: {
			khoyapaya_pword:{
			  required: "please enter your password"
			 },
			 khoyapaya_email: {
				khoyapaya_email: "please enter your email address"
			},
			
		},
		submitHandler: submitForm	
	});	   
	/* Handling login functionality */
	function submitForm() {		
		var data = $("#login-form").serialize();				
		$.ajax({				
			type : 'POST',
			url  : 'login_process.php',
			data : data,
			success:function(response)
			{
				
			if(response.msg=='ok')
			{
				if(response.user==1||response.user==2)
				{
					location.href = "index.php";
				}
				else
				{
					window.location.replace("http://localhost/khoyapaya2/Adminpanel/");
				}
			}
			else
			{									
					$("#error").fadeIn(1000, function(){						
						$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response.msg+' !</div>');					});
					}
			
			}
		});
		
	}   
});