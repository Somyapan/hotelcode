	<!DOCTYPE html>
	<html>
	<head>
		<title>panchal hotel-rooms</title>
		<?php include('inc/links.php')?>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
		<style>
			
			.availability-form{
				margin-top:-50px;
				z-index: 2;
				position: relative;
			}
			.pop:hover{
				border-top-color: pink !important;
				transform: scale(1.03);
				transition: all;
			}
		</style>
	</head>
	<body class="bg-light">
		<!-- all include in header page -->
		<?php include('inc/header.php')?>
		<div class="my-5 px-4">
			<h2 class="h-font fw-bold text-center">Our Rooms</h2>
			<div class="h-line bg-dark"></div>
			
		</div>
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-12 mb-lg-0 mb-4 px-0">
					<nav class="navbar navbar-expand-lg  navbar-light bg-white rounded shadow">
						<div class="container-fluid flex-lg-column align-items-stretch">
							<h4 class="mt-2">Filters</h4>
							<button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#filterDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
							<div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="filterDropdown">
								<div class="border bg-light rounded p-3 mb-3">
									<h5 class="mb-3" style="font-size: 18px;">Check Availability</h5>
									<label class="form-label">Check In</label>
									<input type="date" class="form-control shadow-none mb-3">
									<label class="form-label">Check Out</label>
									<input type="date" class="form-control shadow-none">
								</div>
								<div class="border bg-light rounded p-3 mb-3">
									<h5 class="mb-3" style="font-size: 18px;">Facilities</h5> 
									<div class="mb-2">
										<input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
										<label class="form-check-label" for="f1">Facility one</label>
									</div>
									<div class="mb-2">
										<input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
										<label class="form-check-label" for="f1">Facility one</label>
									</div>
									<div class="mb-2">
										<input type="checkbox" id="f1" class="form-check-input shadow-none me-1">
										<label class="form-check-label" for="f1">Facility one</label>
									</div>
								</div>
								<div class="border bg-light rounded p-3 mb-3">
									<h5 class="mb-3" style="font-size: 18px;">Guest</h5>
									<div class="d-flex">
										<div class="me-3">
											<label class="form-label">Adults</label>
											<input type="number" class="form-control shadow-none">
										</div>
										<div>
											<label class="form-label">Children</label>
											<input type="number" class="form-control shadow-none">
										</div>
									</div>

								</div>
							</div>
						</div>
					</nav>
				</div>
				<div class="col-lg-9 col-md-12 px-4">
					<div class="card mb-4 border-0 shadow">
						<div class="row g-0 p-3 align-items-center">
						<div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
								<img src="images/room1.jpg" class="img-fluid rounded">
							</div>
							<div class="col-md-5 px-lg-3 px-md-3 px-0">
								<h5 class="mb-2">Simple Room</h5>
								<div class="features mb-4">
							<h6 class="mb-1">Features</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								1 Room	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								Bathroom	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								Balcony	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								1 Sofa
							</span>
						</div>
						<div class="Facilities mb-4">
							<h6 class="mb-1">Facilities</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								Wifi	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								TV	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								Ac
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								Room Heater
							</span>
						</div>
						<div class="Guest mb-4">
							<h6 class="mb-1">Guest</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								5 Adult	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								3 Children	
							</span>
						</div>
							</div>
						<div class="col-md-2 text-align-center">
								<h6 class="mb-2">₹1000 per night</h6>
								<a href="#" class="btn btn-primary text-white custom-bg shadow-none w-100 mb-2">Book Now</a>
							<a href="#" class="btn btn-sm btn-outline-dark custom-bg w-100 shadow-none">More Details</a>
							</div>
						</div>
					</div>
					<div class="card mb-4 border-0 shadow">
						<div class="row g-0 p-3 align-items-center">
						<div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
								<img src="images/room1.jpg" class="img-fluid rounded">
							</div>
							<div class="col-md-5 px-lg-3 px-md-3 px-0">
								<h5 class="mb-2">Simple Room</h5>
								<div class="features mb-4">
							<h6 class="mb-1">Features</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								1 Room	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								Bathroom	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								Balcony	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								1 Sofa
							</span>
						</div>
						<div class="Facilities mb-4">
							<h6 class="mb-1">Facilities</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								Wifi	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								TV	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								Ac
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								Room Heater
							</span>
						</div>
						<div class="Guest mb-4">
							<h6 class="mb-1">Guest</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								5 Adult	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								3 Children	
							</span>
						</div>
							</div>
						<div class="col-md-2 text-align-center">
								<h6 class="mb-2">₹1000 per night</h6>
								<a href="#" class="btn btn-primary text-white custom-bg shadow-none w-100 mb-2">Book Now</a>
							<a href="#" class="btn btn-sm btn-outline-dark custom-bg w-100 shadow-none">More Details</a>
							</div>
						</div>
					</div>
					<div class="card mb-4 border-0 shadow">
						<div class="row g-0 p-3 align-items-center">
						<div class="col-md-5 mb-lg-0 mb-md-0 mb-3">
								<img src="images/room1.jpg" class="img-fluid rounded">
							</div>
							<div class="col-md-5 px-lg-3 px-md-3 px-0">
								<h5 class="mb-2">Simple Room</h5>
								<div class="features mb-4">
							<h6 class="mb-1">Features</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								1 Room	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								Bathroom	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								Balcony	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								1 Sofa
							</span>
						</div>
						<div class="Facilities mb-4">
							<h6 class="mb-1">Facilities</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								Wifi	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								TV	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								Ac
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								Room Heater
							</span>
						</div>
						<div class="Guest mb-4">
							<h6 class="mb-1">Guest</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								5 Adult	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								3 Children	
							</span>
						</div>
							</div>
						<div class="col-md-2 text-align-center">
								<h6 class="mb-2">₹1000 per night</h6>
								<a href="#" class="btn btn-primary text-white custom-bg shadow-none w-100 mb-2">Book Now</a>
							<a href="#" class="btn btn-sm btn-outline-dark custom-bg w-100 shadow-none">More Details</a>
							</div>
						</div>
					</div>
				</div>
			</div>

		</div>
		<!-- footer -->
		<?php include('inc/footer.php')?>


	</body>
	</html>