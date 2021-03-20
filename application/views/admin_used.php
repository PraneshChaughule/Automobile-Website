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
			<h4><center> Add Used Car information </center></h4>
		</div>
	</div>
	<div class="container cform">
		<div class="row">
			<div class="col-sm-12">
				<form id="car_info" name="car_info" method="post" action="<?php echo base_url();?>index.php/Car/insert_used">
				<div class="row ad_car" style="padding-top:5%;">
					<label id="cname_label" class="adsscar"> Car Name: </label>   
					<input type="text" name="cname" id="cname"> 
				</div>
				<div class="row ad_car">
					<label id="cmodel_label" class="adsscar"> Car Model: </label>   
					<input type="text" name="cmodel" id="cmodel"> 
				</div>
				<div class="row ad_car">
					<label id="ccol_label" class="adsscar"> Car Prize: </label>   
					<input type="text" name="cprize" id="cprize"> 
				</div>
				<div class="row ad_car">
					<label id="edcc_label" class="adsscar"> Km Driven: </label>   
					<input type="text" name="kmdriven" id="kmdriven"> 
				</div>
				<div class="row ad_car">
					<label id="cmilege_label" class="adsscar"> Model Year: </label>   
					<input type="text" name="year" id="year"> 
				</div>
				<div class="row ad_car">
					<label id="ftype_label" class="adsscar"> Fuel Type: </label>   
					<input type="text" name="ftype" id="ftype"> 
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