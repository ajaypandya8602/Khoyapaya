$('document').ready(function() { 
	/* handling form validation */
	$("#login-form").validate({
		rules: {
			khoyapaya_password: {
				required: true,
			},
			khoyapaya_email: {
				required: true,
				email: true
			},
		},
		messages: {
			khoyapaya_password:{
			  required: "please enter your password"
			 },
			khoyapaya_email: "please enter your email address",
		},
		submitHandler: submitForm	
	});	   
	/* Handling login functionality */
	function submitForm() {		
		var data = $("#login-form").serialize();				
		$.ajax({				
			type : 'POST',
			url  : 'login.php',
			data : data,
			
			success : function(response){						
				if(response=="ok"){									
					setTimeout(' window.location.href = "index.php"; ',4000);
				} else {									
					$("#error").fadeIn(1000, function(){						
						$("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+response+' !</div>');
			
					});
				}
			}
		});
		return false;
	}   
});