<!DOCTYPE html>
<html>
<head>
	<title>Service Page</title>
	<link rel="stylesheet" type="text/css"  href="<?=public_path();?>css/service.css">
	<link rel="stylesheet" type="text/css"  href="<?=public_path();?>css/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?=public_path();?>js/bootstrap/js/bootstrap.bundle.min.js"></script>
	<script src="<?=public_path();?>js/jquery-3.5.1.min.js"></script>
</head>
<body class="new">
<?php include 'header.php';?>
	<div class="container">
		<div class="row new_cars">
			<div class="col-md-12">
				<div class="row title" style="padding:1% 0 4% 0;">
					<div class="col-sm-4" style="background-color:#ccccff;width:26%;border:solid 0.5px;">
						<label><strong> All Brands </strong></label>
						<select name="brand" id="common">
							<option> Maruti Suzuki </option>
							<option> Honda </option>
							<option> Tata </option>
							<option> Mahindra </option>
							<option> Toyota </option>
							<option> BMW </option>
							<option> Mercedes </option>
						</select>
					</div>
					<div class="col-sm-4" style="background-color:#ccccff;width:26%;border:solid 0.5px;">
						<label><strong> Search place </strong></label>
						<select name="price" id="common">
							<option> Mumbai </option>
							<option> Pune </option>
							<option> Nashik </option>
							<option> Aurangabad </option>
							<option> Goa </option>
							<option> Ratnagiri </option>
						</select>
					</div>
					<div class="col-sm-4" style="background-color:#ccccff;width:15%;padding-top:6px;border:solid 0.5px;">
						<center><input type="submit" id="save" value="Submit"></center>
					</div>
				</div>	
			</div>
			<div class="col-md-12">
				<div class="row" style="padding-right:5%;">
					<div class="col-md-6 content_box">
					<label> service 1</label>
					</div>
					<div class="col-md-6 content_box">
					<label> service 2</label>
					</div>
				</div>	
			</div>
			<div class="col-md-12">
				<div class="row" style="padding-right:5%;">
					<div class="col-md-6 content_box">
					<label> service 3</label>
					</div>
					<div class="col-md-6 content_box">
					<label> service 4</label>
					</div>
				</div>	
			</div>
		</div>
	</div>
</body>
</html>			