<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css"  href="<?=public_path();?>css/admin_home.css">
	<link rel="stylesheet" type="text/css"  href="<?=public_path();?>css/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?=public_path();?>js/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
	<div class="row" style="background:#8080ff;padding:7px;">
		<div class="col-sm-2">
			<center><a class="adlink" href="<?php echo base_url(); ?>index.php/Car/admin_car"> Car </a></center>
		</div>
		<div class="col-sm-2">
			<center><a class="adlink" href="<?php echo base_url(); ?>index.php/Car/home"> Used Car </a></center>
		</div>
		<div class="col-sm-2">
			<center><a class="adlink" href="<?php echo base_url(); ?>index.php/Car/home"> Rental Car </a></center>
		</div>
		<div class="col-sm-2">
			<center><a class="adlink" href="<?php echo base_url(); ?>index.php/Car/home"> Services </a></center>
		</div>
		<div class="col-sm-2">
		</div>
		<div class="col-sm-2">
			<center><a class="adlink" href="<?php echo base_url(); ?>index.php/Car/home"> Log Out </a></center>
		</div>
	</div>
</body>
</html>	