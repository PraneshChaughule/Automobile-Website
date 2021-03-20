<!DOCTYPE html>
<html>
<head>
	<title>Used Car Module</title>
	<link rel="stylesheet" type="text/css"  href="<?=public_path();?>css/used_car.css">
	<link rel="stylesheet" type="text/css"  href	="<?=public_path();?>css/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?=public_path();?>js/bootstrap/js/bootstrap.bundle.min.js"></script>
	
</head>
<body>
	<?php include 'header.php';?>
	<div class="main">
		<div class="sidebar">
			<div class="content">
			<h5> Category </h5>
				<hr style="width:90%;height:2px;color:DarkBlue;text-align:left;border:;margin-left:0">
					<label for="cars"><b> Car Model </b></label><br>
						<select name="cars" id="cars">
							<option> Select Car Model</option>
							<option value="Maruti Suzuki">Maruti Suzuki</option>
							<option value="Hyundai">Hyundai</option>
							<option value="Toyota">Toyota</option>
							<option value="Tata">Tata</option>
							<option value="Audi">Audi</option>
							<option value="Mercedes">Mercedes</option>
							<option value="Honda">Honda</option>
							<option value="Others">Others</option>
						</select>
						
				<input type="button" value="Submit" ><br><br>				
					<label><b><u> By price </u></b></label> <br>	
						<input type="radio" id="range1" name="price">
						<label> Under 2 Lakhs </label><br>
						<input type="radio" id="range2" name="price"
						<label> Under 4 Lakhs</label><br>
						<input type="radio" id="range3" name="price">
						<label> Under 6 Lakhs</label><br>
						<input type="radio" id="range4" name="price">
						<label> Under 10 Lakhs</label><br>
						<input type="radio" id="range5" name="price">
						<label> Under 30 Lakhs</label><br>
						<input type="radio" id="range6" name="price">
						<label> Above 30 Lakhs</label><br><br>
						
										
					<label><b><u> Km Driven </u></b></label> <br>	
						<input type="radio" id="km1" name="km">
						<label> Less tahn 5k</label><br>
						<input type="radio" id="km2" name="km">
						<label> Less than 10k</label><br>
						<input type="radio" id="km3" name="km">
						<label> Less than 25k</label><br>
						<input type="radio" id="km4" name="km">
						<label> Less than 40k</label><br>
						<input type="radio" id="km5" name="km">
						<label> Less than 75k</label><br>
						<input type="radio" id="km6" name="km">
						<label> More than 75k</label><br><br>
						
					
					<label for="Model_year"><b> Model Year</b></label><br>
						<select name="year" id="model">
							<option> Select Model year</option>
							<option value="Upto 2004">Upto 2004</option>
							<option value="Upto 2008">Upto 2008</option>
							<option value="Upto 2010">Upto 2010</option>
							<option value="Upto 2012">Upto 2012</option>
							<option value="Upto 2014">Upto 2014</option>
							<option value="Upto 2016">Upto 2016</option>
							<option value="Upto 2019">Upto 2019</option>
							<option value="Upto 2021">Upto 2021</option>
						</select>									
			</div>		
		</div>
		<div class="container" style="padding: 11% 2% 0 12%; margin-left:5%">
			<div class="row">
				<div class="col-sm-4 cardetails">
					<img src="<?=public_path();?>image/Used/AudiA8L.jpg" width="350" height="250">
					<p> 2016Audi A8 L 50 TDI Quattro  </p>
					<p><b> Rs. 62.5 Lakh* </b></p>
				</div>
				<div class="col-sm-4 cardetails">
					<img src="<?=public_path();?>image/Used/BMW6S.jpg" width="350" height="250">
					<p> 2019 BMW 6 Series GT 630d   </p>
					<p><b> Rs. 62.5 Lakh* </b></p>
				</div>
				<div class="col-sm-4 cardetails">
					<img src="<?=public_path();?>image/Used/ToyotaFortuner8.jpg" width="350" height="250">
					<p> 2018 Toyota Fortuner 2.8 2WD   </p>
					<p><b> Rs. 31.95 Lakh* </b></p>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-4 cardetails">
					<img src="<?=public_path();?>image/Used/MarutiVitara.jpg" width="350" height="250">
					<p> 2016 Maruti Vitara Brezza ZDi  </p>
					<p><b> Rs. 8.25 Lakh* </b></p>
				</div>
				<div class="col-sm-4 cardetails">
					<img src="<?=public_path();?>image/Used/MercedesBenz.jpg" width="350" height="250">
					<p> 2018 Mercedes-Benz GLC 220  </p>
					<p><b> Rs. 42 Lakh* </b></p>
				</div>
				<div class="col-sm-4 cardetails">
					<img src="<?=public_path();?>image/Used/Volkswagen.jpg" width="350" height="250">
					<p> 2018 Volkswagen Polo 1.2 MPI  </p>
					<p><b> Rs. 6.25 Lakh* </b></p>
				</div>
			</div>	
			<div class="row">
				<div class="col-sm-4 cardetails">
					<img src="<?=public_path();?>image/Used/FordEcosport.jpg" width="350" height="250">
					<p> 2018 Ford Ecosport 1.5 Ti VCT  </p>
					<p><b> Rs. 7.75 Lakh* </b></p>
				</div>
				<div class="col-sm-4 cardetails">
					<img src="<?=public_path();?>image/Used/FordFigo.jpg" width="350" height="250">
					<p> 2012 Ford Figo Diesel Titanium  </p>
					<p><b> Rs. 3.75 Lakh* </b></p>
				</div>
				<div class="col-sm-4 cardetails">
					<img src="<?=public_path();?>image/Used/HondaJazz.jpg" width="350" height="250">
					<p> 2017 Honda Jazz 1.2 VX i VTEC  </p>
					<p><b> Rs. 6.95 Lakh* </b></p>
				</div>
			</div>
		</div>
	</div>		
		</div>
	</div>	
	<?php include 'footer.php';?>
</body>
</html>