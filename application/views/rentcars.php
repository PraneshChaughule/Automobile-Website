<!DOCTYPE html>
<html>
<head>
	<title>Rent section	</title>
	<link rel="stylesheet" type="text/css"  href="<?=public_path();?>css/rental_car.css">
	<link rel="stylesheet" type="text/css"  href="<?=public_path();?>css/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?=public_path();?>js/bootstrap/js/bootstrap.bundle.min.js"></script>
	
</head>
<body class="new">
	<?php include 'header.php';?>
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<div class="row">
					<h3 style="padding-top:10%;"> <center>Select the car </center></h3>
				</div>
					<hr style="color:DarkBlue;text-align:left;width:98%;">
				<div class="row">
					<h4><u> Mid-Sized Car(4 Seater) </u></h4>
				</div>
				<div class="row" style="grid-column-gap:5%;margin:1% 2% 2% 2%;">				
					<div class="col-sm-4" style="box-shadow:1px 2px 2px 1px rgba(0,0,0,0.2);width:29%;">
						<img src="<?=public_path();?>image/Rental/city_m.jpg" height="80%" width="100%">
						<p> <b> Honda City </b><p>
					</div>
					<div class="col-sm-4" style="box-shadow:1px 2px 2px 1px rgba(0,0,0,0.2);width:29%;">
						<img src="<?=public_path();?>image/Rental/nexon_m.jpg" height="80%" width="100%">
						<p> <b> Tata Nexon </b><p>
					</div>
					<div class="col-sm-4" style="box-shadow:1px 2px 2px 1px rgba(0,0,0,0.2);width:29%;">
						<img src="<?=public_path();?>image/Rental/swift_m.jpg" height="80%" width="100%">
						<p> <b> Swift Dezire </b><p>
					</div>
				</div>	
				<hr style="color:DarkBlue;text-align:left;width:98%;">
				
				<div class="row">
					<h4><u> SUV Car(6 Seater) </u></h4>
				</div>
				<div class="row" style="grid-column-gap:5%;margin:1% 2% 2% 2%;">
					<div class="col-sm-4" style="box-shadow:1px 2px 2px 1px rgba(0,0,0,0.2);width:29%;">
						<img src="<?=public_path();?>image/Rental/innova_s.jpg" height="80%" width="100%">
						<p> <b> Toyota Innova Crysta </b><p>
					</div>
					<div class="col-sm-4" style="box-shadow:1px 2px 2px 1px rgba(0,0,0,0.2);width:29%;">
						<img src="<?=public_path();?>image/Rental/honda_s.jpg" height="80%" width="100%">
						<p> <b> Honda CRV </b><p>
					</div>
					<div class="col-sm-4" style="box-shadow:1px 2px 2px 1px rgba(0,0,0,0.2);width:29%;">
						<img src="<?=public_path();?>image/Rental/tfortuner_s.jpg" height="80%" width="100%">
						<p> <b> Toyota Fortuner </b><p>
					</div>
				</div>
				<hr style="color:DarkBlue;text-align:left;width:98%;">	
				
				<div class="row">
					<h4><u> Luxury Car </u></h4>
				</div>
				<div class="row" style="grid-column-gap:5%;margin:1% 2% 2% 2%;"> 
					<div class="col-sm-4" style="box-shadow:1px 2px 2px 1px rgba(0,0,0,0.2);width:29%;">
						<img src="<?=public_path();?>image/Rental/bmw.jpg" height="80%" width="100%">
						<p> <b> BMW 5 Series </b><p>
					</div>
					<div class="col-sm-4" style="box-shadow:1px 2px 2px 1px rgba(0,0,0,0.2);width:29%;">
						<img src="<?=public_path();?>image/Rental/mercedes.jpg" height="80%" width="100%">
						<p> <b> Mercedes </b><p>
					</div>
					<div class="col-sm-4" style="box-shadow:1px 2px 2px 1px rgba(0,0,0,0.2);width:29%;">
						<img src="<?=public_path();?>image/Rental/honda_accord.jpg" height="80%" width="100%">
						<p> <b> Honda Accord </b><p>
					</div>
				</div>	
				
				<hr style="color:DarkBlue;text-align:left;width:98%;">
			</div>
		</div>
		<div class="row" style="padding:2% 0 5% 0;">
			<h4><u> Fares </u></h4>
			<table class="table table-bordered table-sm">
				<thead>
					<tr class="table-danger"><th> Car Name </th>
						<th> Per Kms </th>
						<th> Driver Charges per day </th>
						<th> Car Name </th>
					</tr>
				</thead>
				<tbody>
					<tr class="table-info"><td> Honda City </td>
						<td> 15/- </td>
						<td> 300 </td>
						<td> Car Name </td>
					</tr>
					<tr class="table-info"><td> Tata Nexon </td>
						<td> 13/- </td>
						<td> 300 </td>
						<td> Car Name </td>
					</tr>
					<tr class="table-info"><td> Swift Dezire </td>
						<td> 11/- </td>
						<td> 300 </td>
						<td> Car Name </td>
					</tr>
					<tr class="table-info"><td> Toyota Innova Crysta </td>
						<td> 18/- </td>
						<td> 300 </td>
						<td> Car Name </td>
					</tr>
					<tr class="table-info"><td> Honda CRV </td>
						<td> 18/- </td>
						<td> 300 </td>
						<td> Car Name </td>
					</tr>
					<tr class="table-info"><td> Toyota Fortuner </td>
						<td> 20/- </td>
						<td> 300 </td>
						<td> Car Name </td>
					</tr>
					<tr class="table-info"><td> BMW 5 Series </td>
						<td> 25/- </td>
						<td> 300 </td>
						<td> Car Name </td>
					</tr>
					<tr class="table-info"><td> Mercedes </td>
						<td> 26/- </td>
						<td> 300 </td>
						<td> Car Name </td>
					</tr>
					<tr class="table-info"><td> Honda Accord </td>
						<td> 23/- </td>
						<td> 300 </td>
						<td> Car Name </td>
					</tr>
				</tbody>	
			</table>
		</div>
	</div>
<?php include 'footer.php';?>
</body>
</html>	