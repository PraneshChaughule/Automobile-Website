<!DOCTYPE html>    
<html>    
<head>    
    <title>Registration</title>
	<link rel="stylesheet" type="text/css"  href="<?=public_path();?>css/regs.css">
	<link rel="stylesheet" type="text/css"  href="<?=public_path();?>css/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?=public_path();?>js/bootstrap/js/bootstrap.bundle.min.js"></script>   
	<script src="<?=public_path();?>js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="<?=public_path();?>js/reg.js"></script>   
	<script src="<?=public_path();?>js/jquery.validate.min.js"></script>
</head>    
<body class="reg-body"> 	
	<div class="container">
		<div class="row register">
			<div class="col-sm-12">
				<div class="row">
					<center><h3>Registration Page</h3></center>   
					<hr>
				</div>	
				<form id="RegForm" name="RegForm" method="post" action="<?php echo base_url();?>index.php/Car/insert_userdata" enctype="multipart/form-data">    
				<div class="row creg-row">	
					<label id="full_label" class="creg_label"><b>Full Name</b></label>   
					<input type="text" name="username" id="username" placeholder="Enter name">    
				</div> 
				<div class="row creg-row">	
					<label id="email_label" class="creg_label"><b>Email</b></label>  
					<input type="text" name="email_id" id="email_id" placeholder="Enter email">    
				</div>
				<div class="row creg-row">	
					<label id="contact_label" class="creg_label"><b>Mobile no.</b></label>  
					<input type="text" name="contact" id="contact" placeholder="Enter mobile no."> 
				</div>
				<div class="row creg-row">	
					<label id="pass_label" class="creg_label"><b>Password</b></label> 
					<input type="Password" name="user_pass" id="user_pass" placeholder="Password">    
				</div>
				<div class="row creg-row">	
					<label id="con_label" class="creg_label"><b>Confirm Password</b></label>    
					<input type="Password" name="repwd" id="repwd" placeholder="Re-Type Password">    
				</div>
				<div class="row creg-row">				
					<input type="submit" id="sign" value="Sign Up">       
				</div>
				</form>
			</div>			
		</div>	
	</div>   
</body>    
</html>     