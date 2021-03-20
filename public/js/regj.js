<script> 
    function Registration() { 
        var name = document.forms["RegForm"]["fname"]; 
        var email = document.forms["RegForm"]["mail"]; 
        var phone = document.forms["RegForm"]["mobile"]; 
        var password = document.forms["RegForm"]["password"]; 
        var repass = document.forms["RegForm"]["repassword"]; 
  
        if (name.value == "") { 
            window.alert("Please enter your name."); 
            name.focus(); 
            return false; 
        } 
		
        if (email.value == "") { 
            window.alert( 
              "Please enter a valid e-mail address."); 
            email.focus(); 
            return false; 
        } 
  
        if (phone.value == "") { 
            window.alert( 
              "Please enter your mobile number."); 
            phone.focus(); 
            return false; 
        } 
  
        if (password.value == "") { 
            window.alert("Please enter your password"); 
            password.focus(); 
            return false; 
        }
		
    } 
</script> 