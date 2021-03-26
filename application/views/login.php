<!DOCTYPE html>    
<html>    
<head>    
    <title>Login Form</title>    
    <link rel="stylesheet" type="text/css" href="<?=public_path();?>css/logg.css">
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
					<center> <img src="<?=public_path();?>image/sport-carss.png" class="iconn" width="140" height="80"> </center>
					<h5 style="font-family: 'roboto',sans-serif;color:black;text-align:center;"> Automobile Selling & Services </h5>
					<hr>
				</div>	
				<form class="border-split-form" id="user_login" name="user_login" method="post" action="<?php echo base_url();?>index.php/Signin/insert_userlogin" enctype="multipart/form-data">
				<div class="row clog-row">
					<label id="name_label" class="clog-label"><b>User Name</b></label>    
					<input type="text" name="uname" id="uname" placeholder="Email Address" value=""/>    
				</div>		
				<div class="row clog-row">
					<label id="pwd_label" class="clog-label"><b>Password </b></label>    
					<input type="Password" name="user_pass" id="user_pass" placeholder="Password"/>    
				</div>
				<div class="row clog-row">			
					<input type="submit" name="user_log" id="user_log" value="Log In">       
				</div>
				<div class="row clog-row">			
					<label id="label">  Don't have an account? <a href ="<?php echo base_url(); ?>index.php/Signup/sign"> Sign up </a>    
				</div>	
				</form>
			</div>
		</div>
	</div>	
</body>    
</html>     