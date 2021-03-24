<!DOCTYPE html>
<html>
<head>
	<title>Car Page</title>
	<link rel="stylesheet" type="text/css"  href="<?=public_path();?>css/carsec.css">
	<link rel="stylesheet" type="text/css"  href="<?=public_path();?>css/bootstrap/css/bootstrap.min.css">
	<script type="text/javascript" src="<?=public_path();?>js/bootstrap/js/bootstrap.bundle.min.js"></script>
</head>
<body class="new">
<?php include 'header.php';?>
	<div class="container">
		<div class="row new_cars">
			<div class="col-sm-12">
				<div class="row title" style="padding:1% 0 4% 0;">
					<div class="col-sm-4" style="background-color:white;width:26%;border-radius:5px;box-shadow:1px 2px 2px 1px rgba(0,0,0,0.2);">
						<label><strong> All Brands </strong></label>
						<select name="brand" id="common">
							<option value="b1"> Maruti Suzuki </option>
							<option value="b2"> Honda </option>
							<option value="b3"> Tata </option>
							<option value="b4"> Hyundai </option>
							<option value="b5"> Mahindra </option>
							<option value="b6"> Ford </option>
							<option value="b7"> Toyota </option>
							<option value="b8"> BMW </option>
							<option value="b9"> Mercedes </option>
						</select>
					</div>
					<div class="col-sm-4" style="background-color:white;width:26%;border-radius:5px;box-shadow:1px 2px 2px 1px rgba(0,0,0,0.2);">
						<label><strong> By Budget </strong></label>
						<select name="price" id="common">
							<option value="p1"> Under 5Lakhs </option>
							<option value="p2"> Under 7Lakhs </option>
							<option value="p3"> Under 10Lakhs </option>
							<option value="p4"> Under 13Lakhs </option>
							<option value="p5"> Under 16Lakhs </option>
							<option value="p6"> Between 16-30Lakh </option>
						</select>
					</div>
					<div class="col-sm-4" style="background-color:white;width:26%;border-radius:5px;box-shadow:1px 2px 2px 1px rgba(0,0,0,0.2);">
						<label><strong>Car Body Type </strong></label>
						<select name="body" id="common">
							<option value="bd1" > SUV </option>
							<option value="bd2"> Sedan </option>
							<option value="bd3"> Hatchback </option>
							<option value="bd4"> MUV </option>
							<option value="bd5"> Minivan </option>
						</select>
					</div>
				</div>	
			</div>
			<div class="col-sm-12 car_display">
				<div class="row" style="padding:2% 0 0 4%;">
					<div class="col-sm-4 cardetails" carname="<?php echo $cars[0]->cname; ?>">
						<img src="<?=public_path();?>image/Used/AudiA8L.jpg" width="350" height="250">
						<p> 2016Audi A8 L 50 TDI Quattro  </p>
						<p><b> Rs. 62.5 Lakh* </b></p>
					</div>
					<div class="col-sm-4 cardetails" carname="<?php echo $cars[0]->cname; ?>" >
						<img src="<?=public_path();?>image/Used/BMW6S.jpg" width="350" height="250">
						<p> 2019 BMW 6 Series GT 630d   </p>
						<p><b> Rs. 62.5 Lakh* </b></p>
					</div>
					<div class="col-sm-4 cardetails" carname="<?php echo $cars[0]->cname; ?>">
						<img src="<?=public_path();?>image/Used/ToyotaFortuner8.jpg" width="350" height="250">
						<p> 2018 Toyota Fortuner 2.8 2WD   </p>
						<p><b> Rs. 31.95 Lakh* </b></p>
					</div>
				</div>	
				<div class="row"style="padding:2% 0 0 4%;">
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
				<div class="row"style="padding:2% 0 0 4%;">
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
		<!-- Button trigger modal -->
	</div>
	<!-- Modal -->
	<div class="modal fade modal_design" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
	  <div class="modal-dialog modal-lg">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
		  </div>
		  <div class="modal-body">
			  <div class="container">
				<div class="row" style="background-color:white;">
					<div class="col-sm-6" style="padding-top:10px;">
						<img src="<?=public_path();?>image/Used/AudiA8L.jpg" width="350" height="250">
						<p><center><b> 2016Audi A8 L 50 TDI Quattro  </b></center></p>
					</div>
					<div class="col-sm-6">
						<h4> Specification </h4>
						<ul><li> Model: <span class="model"></span></li>
							<li> Colour: <span class="colour"></span></li>
							<li> Engine Displacement(cc): <span class="cc"></span></li>
							<li> Milege:  <span class="milege"></span></li>
							<li> Tank Cpacity: <span class="capacity"></span></li>
							<li> Fuel Type: <span class="fuel"></span></li>
							<li> Ex-showroom Prize: <span class="ex"></span></li>
							<li> RTO: <span class="rto"></span></li>
							<li> Insurance: <span class="insurance"></span></li>
							<li> On-Road Prize:</li>
							<button type="button" class="btn btn-primary" style="width:80%;margin-top:15px;"> Buy Now </button>	
					</div>
				</div>
			  </div>
		  </div>
		  <!--div class="modal-footer">
			<button type="button" class="btn btn-primary" style="width:80%;margin-top:15px;"> Buy Now </button>
			<!--button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
			<button type="button" class="btn btn-primary">Save changes</button-->
		  </div>
		</div>
	  </div>
	</div>
<?php include 'footer.php';?>	
</body>
<script>
	$(document).ready( function(e){
	$(".cardetails").on("click",function(){
        var carname = $(this).attr('carname');
            if(carname!=''){
                $.ajax({
                  url:base_url+'index.php/Car/get_cardetails',
                  type:"POST",
                  data:{'carname':carname},
                  success:function(res){
					var data = JSON.parse(res);
					//alert(data['cname']);
					$('#exampleModal').modal('show');  
					$('.model').text(data['cmodel']); 
					$('.colour').text(data['ccolour']); 
					$('.cc').text(data['edcc']); 
					$('.milege').text(data['cmilege']); 
					$('.capacity').text(data['tcapacity']); 
					$('.fuel').text(data['ftype']); 
					$('.ex').text(data['exprize']); 
					$('.rto').text(data['crto']);
					$('.insurance').text(data['cinsu']);
                },
            });
           }
       });
	 }); 
</script>
</html>	