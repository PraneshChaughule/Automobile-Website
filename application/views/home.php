<!DOCTYPE html>
<html>
<head>
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css"  href="<?=public_path();?>css/home.css">
	<link rel="stylesheet" type="text/css"  href="<?=public_path();?>css/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?=public_path();?>js/bootstrap/js/bootstrap.bundle.min.js"></script>
	
</head>
<body>
<?php include 'header.php';?>
<div class="main" style="padding: 10% 0 0 0;">

	<div id="carouselExampleIndicators" class="home-slide carousel slide" data-bs-ride="carousel">
		  <div class="carousel-indicators">
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
				<button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		  </div>
		  <div class="carousel-inner">
				<div class="carousel-item active">
					<img src="<?=public_path();?>image/Audi.jpg" alt="Audi" class="slideshow" width="1550" height="600">
				</div>
				<div class="carousel-item">
					<img src="<?=public_path();?>image/bmw.jpg" alt="BMW" class="slideshow" width="1550" height="600">
				</div>
				<div class="carousel-item">
				  <img src="<?=public_path();?>image/Toyota.jpg" alt="Toyota" class="slideshow" width="1550" height="600">
				</div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"  data-bs-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="visually-hidden">Next</span>
		  </button>
	</div>
<div class="container" style="padding-top:1%;">
	<div class="row">
			<h3> Latest Cars in India</h3> 
			<hr><br>
			<div class="col-sm-3" id="let1">
				<img src="<?=public_path();?>image/MahindraXUV300.jpg" width="300" height="250">
				<hr> <h5> Mahindra XUV300 W8</h5>
				<p> Rs. 11.76 Lakh* </p>
			</div>
			<div class="col-sm-3">
				<img src="<?=public_path();?>image/ToyotaFortuner.jpg" width="300" height="250">
				<hr> <h5> Toyota Fortuner </h5>
				<p> Rs. 29.98 - 37.58 Lakh* </p>
			</div>
			<div class="col-sm-3">
				<img src="<?=public_path();?>image/jeepcompass.jpg" width="300" height="250">
				<hr> <h5> Jeep Compass </h5>
				<p> Rs.s. 16.99 - 28.29 Lakh* </p>		
			</div>
			<div class="col-sm-3">
				<img src="<?=public_path();?>image/BMW3Gran.jpg" width="300" height="250">
				<hr> <h5> BMW 3 Series Gran Limousine </h5>
				<p> Rs. 51.50 - 53.90 Lakh* </p>
			</div>
	</div>
	<div class="row" style="padding:1% 0 1% 0;">
		<div class="col-sm-3" id="let1">
			<img src="<?=public_path();?>image/BMW2.jpg" alt="BMW 2 Series 220i M Sport" width="300" height="250">
			<hr> <h5> BMW 2 Series 220i M Sport </h5>
			<p> Rs. 40.90 Lakh* </p>
		</div>
		<div class="col-sm-3">
				<img src="<?=public_path();?>image/MGHector.jpg" alt="MG Hector" width="300" height="250">
				<hr> <h5> MG Hector </h5>
				<p> Rs. 12.89 - 18.42 Lakh* </p>
		</div>
		<div class="col-sm-3">
			<img src="<?=public_path();?>image/AudiA4.jpg" alt="" width="300" height="250">
			<hr> <h5> Audi A4 </h5>
			<p> Rs. 42.34 - 46.67 Lakh* </p>
		</div>
		<div class="col-sm-3">
			<img src="<?=public_path();?>image/FordEco.jpg" alt="Ford EcoSport" width="300" height="250">
			<hr> <h5> Ford EcoSport </h5>
			<p> Rs.s. 7.99 - 11.49 Lakh* </p>		
		</div>
	</div>
</div>
<br><br>
</div>
<?php include 'footer.php';?>
</body>
</html>