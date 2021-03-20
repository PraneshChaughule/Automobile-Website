$(document).ready(function(){
	console.log('Registration Page JS');
	
	$("#RegForm").validate({
		rules:{
			username:{
				required:true,
				fullname:true,
			},
			email_id:{
				required:true,
				email:true,
			},
			contact:{
				required:true,
				phone:true,
				minlength:10,
				maxlength:10,
			},
			user_pass:{
				required:true,
				checklowercase: true,
				checkuppercase: true,
				checknumber: true,
				checkspecialchar: true,
				minlength:8,
			},
			repwd:{
				required:true,
				equalTo:"#user_pass",
			}
		},
		messages:{
			username:{
				required:"Full Name is required",
				fullname:"Please Enter Full Name..",
			},
			email_id:{
				required:"Email ID is required",
				email:"Please Enter Valid Email ID",
			},
			contact:{
				required:"Mobile No. is required",
				phone:"Please enter mobile no.",
			},
			user_pass: {
				required:"Password is required",
				checklowercase:"At least 1 Lower case",
				checkuppercase:"At least 1 Upper case",
				checknumber:"At least 1 Number",
				checkspecialchar:"At least 1 Special Character",
				minlength:"Password must contain at least 8 characters.",
			},
			repwd:{
				required:"Please confirm the password",
				equalTo:"Password did not match",
			}
		},
		errorPlacement: function(error, element) {
			if(element.prop('tagName')  == 'SELECT') {
				error.insertAfter(element.closest('.input-field').find('.js-example-basic-single'));
			}else{
				error.insertAfter(element);
			}
		},
		submitHandler: function(form) {
			form.submit();
		}   
	});
	
	$.validator.addMethod("fullname",
		function(value, element) {
		return /^([a-zA-Z]{2,}\s[a-zA-z]{1,}'?-?[a-zA-Z]{2,}\s?([a-zA-Z]{1,})?)/.test(value);
	});
	
	$.validator.addMethod("phone",
		function(value, element) {
		return /[0-9]+/.test(value);
	});
	
	$.validator.addMethod("checklowercase",
	function(value, element) {
		return /^(?=(.*[a-z]){1,}).{1,}$/.test(value);
	});
	$.validator.addMethod("checkuppercase",
		function(value, element) {
		return /^(?=.*?[A-Z]).{1,}$/.test(value);
	});
	$.validator.addMethod("checknumber",
		function(value, element) {
		return /^(?=(.*[\d]){1,}).{1,}$/.test(value);
	});
	$.validator.addMethod("checkspecialchar",
		function(value, element) {
		return /^(?=(.*[\W]){1,})(?!.*\s).{1,}$/.test(value);
	});
});