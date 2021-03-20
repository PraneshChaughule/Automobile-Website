$(document).ready(function(){
	console.log('Login Page JS');
	
	$("#user_login").validate({
		rules:{
			Uname:{
				required:true,
				email:true,
			},
			user_pass:{
				required:true,
				checklowercase: true,
				checkuppercase: true,
				checknumber: true,
				checkspecialchar: true,
				minlength:8,
			},
		},
		messages:{
			Uname:{
				required:"User Name is required",
				email:"Please Enter valid Username"
			},
			user_pass: {
				required:"Password is required",
				checklowercase:"At least 1 Lower case",
				checkuppercase:"At least 1 Upper case",
				checknumber:"At least 1 Number",
				checkspecialchar:"At least 1 Special Character",
				minlength:"Password must contain at least 8 characters.",
			},
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