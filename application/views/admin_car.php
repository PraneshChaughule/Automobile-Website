<!DOCTYPE html>
<html>
<head>
	<title>Admin Page</title>
	<link rel="stylesheet" type="text/css"  href="<?=public_path();?>css/admin_car.css">
	<link rel="stylesheet" type="text/css"  href="<?=public_path();?>css/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?=public_path();?>js/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body>
<?php include 'admin_home.php';?>
	<div class="row">
		<div class="col-12 heading" style="width:80%;margin:2% 0 2% 10%;">
			<h4><center> Add Car information </center></h4>
		</div>
	</div>
	<div class="container cform">
		<div class="row">
			<div class="col-sm-12">
				<form id="car_info" name="car_info" method="post" action="<?php echo base_url();?>index.php/Car/insert_car" enctype="multipart/form-data">
				<div class="row ad_car" style="padding-top:5%;">
					<label id="cname_label" class="adsscar"> Car Name: </label>   
					<input type="text" name="cname" id="cname"> 
				</div>
				<div class="row ad_car">
					<label id="cmodel_label" class="adsscar"> Car Model: </label>   
					<input type="text" name="cmodel" id="cmodel"> 
				</div>
				<div class="row ad_car">
					<label id="cmodel_label" class="adsscar"> Car Image: </label>   
					<input type="file" name="car_image" id="car_image"> 
				</div>
				<div class="row ad_car">
					<label id="ccol_label" class="adsscar"> Car Colour: </label>   
					<input type="text" name="ccolour" id="ccolour" multiple> 
				</div>
				<div class="row ad_car">
					<label id="edcc_label" class="adsscar"> Engine Displacement(cc): </label>   
					<input type="text" name="edcc" id="edcc"> 
				</div>
				<div class="row ad_car">
					<label id="cmilege_label" class="adsscar"> Milege: </label>   
					<input type="text" name="cmilege" id="cmilgee"> 
				</div>
				<div class="row ad_car">
					<label id="tcap_label" class="adsscar"> Tank Capacity: </label>   
					<input type="text" name="tcapacity" id="tcapacity"> 
				</div>
				<div class="row ad_car">
					<label id="ftype_label" class="adsscar"> Fuel Type: </label>   
					<input type="text" name="ftype" id="ftype"> 
				</div>
				<div class="row ad_car">
					<label id="exprize_label" class="adsscar"> Ex-showroom Prize: </label>   
					<input type="text" name="exprize" id="exprize"> 
				</div>
				<div class="row ad_car">
					<label id="crto_label" class="adsscar"> RTO Prize: </label>   
					<input type="text" name="crto" id="crto"> 
				</div>
				<div class="row ad_car" style="padding-bottom:3%;">
					<label id="cinsu_label" class="adsscar"> Insurance Prize: </label>   
					<input type="text" name="cinsu" id="cinsu"> 
				</div>
				<div class="row ad_car">		
					<input type="submit" id="save" value="Save">  
				</div>
				</form>
			</div>
		</div>
	</div>	
</body>
</html>	