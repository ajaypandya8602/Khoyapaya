$('document').ready(function() { 
	/* handling form validation */
	$("#register-form").validate({
		rules: {
			fullname: {
				required: true,
			},
			khoyapaya_email: {
				required: true,
				email:true,
			},
			khoyapaya_pword: {
				required: true,
			},
			/*gender: {
				required: true,
			},*/
			no: {
				required: true,
			},
			income: {
				required: true,
			},
			address: {
				required: true,
			},
			state: {
				required: true,
			},
			city: {
				required: true,
			},
		},
		messages: {
			khoyapaya_pword:{
			  required: "please enter your password"
			 },
			 khoyapaya_email: {
				khoyapaya_email: "please enter your email address"
			},
			fullname: {
					required: "This field is required."
			},
			khoyapaya_email: {
				required: "This field is required."
				
			},
			khoyapaya_pword: {
				required: "This field is required."
			},
			no: {
			required: "This field is required."	
			},
			/*gender: {
				required: "This field is required."
			},*/
			income: {
				required: "This field is required."
			},
			address: {
				required: "This field is required."
			},
			state: {
				required: "This field is required."
			},
			city: {
				required: "This field is required."
			},
			
		},
			
	});	   


});

