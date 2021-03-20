<!DOCTYPE html>
<html>
<head>
	<title>Header</title>
	<link rel="stylesheet" type="text/css"  href="<?=public_path();?>css/home.css">
	<link rel="stylesheet" type="text/css"  href="<?=public_path();?>css/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?=public_path();?>js/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?=public_path();?>js/jquery-3.5.1.min.js"></script>
	<script>var base_url = '<?php echo base_url(); ?>';</script>
</head>
<body>
	<div class="row" style="position: fixed; width: 102%;">
		<div class="col-sm-12 d-flex justify-content-bold top-bar-car">
			<div class="col-sm-2" style="padding-left:2%;">
				<center> <img src="<?=public_path();?>image/sport-carss.png" class="iconn" width="140" height="80"> </center>
			</div>
			<div class="col-sm-8" style="padding: 1.8% 0 0px 0%;">
				<h4 style="font-family: 'roboto',sans-serif;color:white;"> Automobile Selling & Services </h4>
			</div>
			<?php if(isset($status)){ ?>
				<?php if($status == 'Active') { ?>
					<div class="col-sm-2" style="padding: 1.5% 0 0 6%;">
						<a class="home_link" href="<?php echo base_url(); ?>index.php/Car/logout"> Logout <?php //echo $username; ?> </a>
					</div>
				<?php } else { ?>
					<div class="col-sm-2" style="padding: 1.5% 0 0 6%;">
						<a class="home_link" href="<?php echo base_url(); ?>index.php/Car/login"> Login </a>
					</div>
				<?php } ?>
			<?php } else { ?>
				<div class="col-sm-2" style="padding: 1.5% 0 0 6%;">
					<a class="home_link" href="<?php echo base_url(); ?>index.php/Car/login"> Login </a>
				</div>
			<?php } ?>	
		</div>	
		<div class="col-sm-12 d-flex justify-content-bold" style="background-color:#cce6ff">
			<div class="col-sm-1">
			</div>
			<div class="col-sm-2">
				<center><a class="home_link1" href="<?php echo base_url(); ?>index.php/Car/home"><strong> HOME </strong><a></center>
			</div>
			<div class="col-sm-2">
				<center><a class="home_link1" href="<?php echo base_url(); ?>index.php/Car/carsec"><strong> CAR </strong><a></center>				
			</div>
			<div class="col-sm-2">
				<!--img src="<?=public_path();?>image/used-car.png" class="icon" width="35" height="35"-->
				<center><a class="home_link1" href="<?php echo base_url(); ?>index.php/Car/used"><strong> USED CAR </strong><a></center>
			</div>
			<div class="col-sm-2">
					<!--img src="<?=public_path();?>image/car-rental.png" class="icon" width="35" height="35"--> 
				<center><a class="home_link1" href="<?php echo base_url(); ?>index.php/Car/rent"><strong> RENTAL CAR </strong><a></center>
			</div>
			<div class="col-sm-2">
				<center><a class="home_link1" href="<?php echo base_url(); ?>index.php/Car/service"><strong> SERVICES </strong><a></center>
				<!--li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle home_link1" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
					<strong> SERVICES </strong>
					</a>
					<ul class="dropdown-menu" aria-labelledby="navbarDropdown">
						<li><a class="dropdown-item" href="#">Ahmedabad</a></li>
						<li><a class="dropdown-item" href="#">Bangalore</a></li>
						<li><a class="dropdown-item" href="#">Chennai</a></li>
						<li><a class="dropdown-item" href="#">Delhi</a></li>
						<li><a class="dropdown-item" href="#">Mumbai</a></li>
						<li><a class="dropdown-item" href="#">Pune</a></li>
					</ul>
				</li-->
			</div>
			<div class="col-sm-1">
			</div>
		</div>
	</div>
</body>
</html>			