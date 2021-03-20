<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="<?=public_path();?>css/admin_log.css">
	<link rel="stylesheet" type="text/css"  href="<?=public_path();?>css/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?=public_path();?>js/bootstrap/js/bootstrap.bundle.min.js"></script>   
	<script src="<?=public_path();?>js/jquery-3.5.1.min.js"></script>
	<script type="text/javascript" src="<?=public_path();?>js/login.js"></script>   
	<script src="<?=public_path();?>js/jquery.validate.min.js"></script>
</head>    
<body class="log-body">      
    <div class="container">
		<div class="row login">
			<div class="col-sm-12">
				<div class="row">
					<label id="admin" class="admin"> Admin Login </label>
					<hr>
				</div>	
				<form class="border-split-form" id="user_login" name="user_login" method="post" action="<?php echo base_url();?>index.php/Car/insert_userlogin" enctype="multipart/form-data">
				<div class="row clog-row">
					<label id="name_label" class="clog-label"><b>User Name</b></label>    
					<input type="text" name="Uname" id="Uname" placeholder="Email Address" value=""/>    
				</div>		
				<div class="row clog-row">
					<label id="pwd_label" class="clog-label"><b>Password </b></label>    
					<input type="Password" name="user_pass" id="user_pass" placeholder="Password"/>    
				</div>
				<div class="row clog-row">			
					<input type="submit" name="log" id="log" value="Log In">       
				</div>
				</form>
			</div>
		</div>
	</div>	
</body>    
</html>     