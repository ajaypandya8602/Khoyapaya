$('document').ready(function() { 
	/* handling form validation */
	$("#contact-page").validate({
		rules: {
			Subject: {
				required: true,
			},
			Message: {
				required: true,
			},
		},
	
	submitHandler: submitForm   
	});	   
	
	function submitForm() {		
		var data = $("#contact-page").serialize();				
		$.ajax({				
			type : 'POST',
			url  : 'Contact_Process.php',
			data : data,
			success:function(response)
			{
				
				if(response == '0')
                     {                                   
                        $("#error").fadeIn(1000, function(){                        
                        $("#error").html('<div class="alert alert-danger"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+"Something went to wrong ..."+'</div>'); 
                         });
                    
                    }  
                    else
                    {
                        $("#error").fadeIn(1000, function(){                        
                        $("#error").html('<div class="alert alert-success"> <span class="glyphicon glyphicon-info-sign"></span> &nbsp; '+"Your Contact Request has been sent !!"+'</div>'); 
                   		 });
                    }           
                     $('#divid').load(document.URL +' #divid');
                     $(window).scrollTop($('#error').offset().top);
                }
		});
		
	}   
});