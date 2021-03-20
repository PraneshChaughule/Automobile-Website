<!DOCTYPE html>
<html>
<head>
	<title>Rent Car Module</title>
	<link rel="stylesheet" type="text/css"  href="<?=public_path();?>css/rental_car.css">
	<link rel="stylesheet" type="text/css"  href="<?=public_path();?>css/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?=public_path();?>js/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body class="new">
<?php include 'header.php';?>
	<div class="container">
		<div class="row rnt_block">
			<div class="col-md" style="padding-left:00;">
				<img src="<?=public_path();?>image/Rental/auto_europe.jpg" height="100%" width="100%"> 
			</div>
			<div class="col-md" style="padding-top:20px;align:right;">
				<form style="padding-left:30px;">
					<div class="row">
						<div class="col-sm-12">
							<div class="row">
								<h3><center> Car Booking Form <center></h3>
							</div>
							<div class="row rnt_form">
								<label id="rn_name" class="rnt_label"><b> Name: </b></label>
								<input type="text" name="name" id="name" placeholder="Name" required>
							</div>
							<div class="row rnt_form">
								<label id="rn_email" class="rnt_label"><b> Email ID: </b></label><br>
								<input type="text" name="mail" id="mail" placeholder="Email">
							</div>
							<div class="row rnt_form">
								<label id="rn_contact" class="rnt_label"><b> Contact No.: </b></label><br>
								<input type="text" name="mobile" id="mobile"  placeholder="Mobile no.">
							</div>
							<div class="row rnt_form">
								<label id="rn_date" class="rnt_label"><b> Journey Date: </b></label><br>
								<input type="date" name="journey" id="mobile">
							</div>
							<div class="row rnt_form">
								<label id="rn_model" class="rnt_label"><b> From: </b></label>
								<select name="cars" id="cars" style="width:95%;">
									<option> Select Source </option>
									<option> Mumbai </option>
									<option> Pune </option>
									<option> Nashik </option>
									<option> Aurangabad </option>
									<option> Goa </option>
									<option> Ratnagiri </option>
								</select>
							</div>
							<div class="row rnt_form">
								<label id="rn_vehicle" class="rnt_label"> To: </label>
								<select name="car" id="cars" style="width:95%;">
									<option> Select Destination </option>
									<option> Mumbai </option>
									<option> Pune </option>
									<option> Nashik </option>
									<option> Aurangabad </option>
									<option> Goa </option>
									<option> Ratnagiri </option>
								</select>
							</div>
							<div class="row rnt_form">   
								<input type="button" name="Submit" value="Submit" > 
							</div>	
						</div>	
					</div>			
				</form>
			</div>		
		</div>
	</div>
<?php include 'footer.php';?>
</body>
</html>