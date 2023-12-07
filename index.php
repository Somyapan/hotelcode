	<!DOCTYPE html>
	<html>
	<head>
		<title>panchal hotel</title>
		<?php include('inc/links.php')?>
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link rel="stylesheet"href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"/>
		<style type="text/css">
			
			.availability-form{
				margin-top:-50px;
				z-index: 2;
				position: relative;
			}
		</style>
	</head>
	<body class="bg-light">
		<!-- all include in header page -->
	<?php include('inc/header.php')?>
	<!-- carosel -->
	<div class="container-fluid px-lg-4 mt-4">
		<div class="swiper swiper-container">
			<div class="swiper-wrapper">
				<div class="swiper-slide">
					<img src="images/img11.jpg" class="w-100  d-block">
				</div>
				<div class="swiper-slide">
					<img src="images/img10.jpg" class="w-100  d-block" />
				</div>
				<div class="swiper-slide">
					<img src="images/img12.jpg" class="w-100  d-block" />
				</div>
				<div class="swiper-slide">
					<img src="images/img13.jpg" class="w-100  d-block" />
				</div>
				<div class="swiper-slide">
					<img src="images/img8.jpg" class="w-100  d-block" />
				</div>
				<div class="swiper-slide">
					<img src="images/img14.jpg" class="w-100  d-block" />
				</div>
				<div class="swiper-slide">
					<img src="images/img9.jpg" class="w-100  d-block" />
				</div>
			</div>
		</div>	
	</div>
	<!-- check avaliblility form -->
	<div class="container availability-form">
		<div class="row">
			<div class="col-lg-12 bg-white shadow p-4 rounded">
				<h5 class="text-center mb-4">Check Booking Availability</h5>
				<form>
					<div class="row align-items-end">
						<div class="col-lg-3 mb-3">
							<label class="form-label" style="font-weight: 500">Check In</label>
							<input type="date" class="form-control shadow-none">
						</div>
						<div class="col-lg-3 mb-3">
							<label class="form-label" style="font-weight: 500">Check Out</label>
							<input type="date" class="form-control shadow-none">
						</div>

						<div class="col-lg-3 mb-3">
							<label class="form-label" style="font-weight: 500">Adult</label>
							<select class="form-select" aria-label="Default select example">
								<option selected>Open this select menu</option>
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select>

						</div>
						<div class="col-lg-2 mb-3">
							<label class="form-label" style="font-weight: 500">Children</label>
							<select class="form-select" aria-label="Default select example">
								<option selected>Open this select menu</option>
								<option value="1">One</option>
								<option value="2">Two</option>
								<option value="3">Three</option>
							</select>
						</div>
						<div class="col-lg-1 mb-3">
							<button type="submit" class="btn btn-dark shadow-none">Submit</button>
						</div>
					</div>																	
				</form>
			</div>
			
		</div>
	</div>
	<br><br>
	<!-- our rooms -->
	<h2 class="text-center fw-bold h-font">Our Rooms</h2>
	<div class="container">
		<div class="row">
			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
					<img src="images/img14.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Delux Room</h5>
						<h6>₹1000 per night</h6>
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
						<div class="rating mb-4">
							<h6 class="mb-1">Rating</h6>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
						</div>
						<div class="d-flex justify-content-between">
							<a href="#" class="btn btn-primary text-white custom-bg shadow-none">Book Now</a>
							<a href="#" class="btn btn-sm btn-outline-dark custom-bg shadow-none">More Details</a>
						</div>
						
					</div>
				</div>	
			</div>
			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
					<img src="images/img14.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title"> Double Delux Room</h5>
						<h6>₹2000 per night</h6>
						<div class="features mb-4">
							<h6 class="mb-1">Features</h6>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								2 Room	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								Bathroom	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								Balcony	
							</span>
							<span class="badge rounded-pill bg-light text-dark text-wrap lh-base">
								3 Sofa
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
						<div class="rating mb-4">
							<h6 class="mb-1">Rating</h6>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
						</div>
						<div class="d-flex justify-content-between">
							<a href="#" class="btn btn-primary text-white custom-bg shadow-none">Book Now</a>
							<a href="#" class="btn btn-sm btn-outline-dark custom-bg shadow-none">More Details</a>
						</div>
						
					</div>
				</div>	
			</div>
			<div class="col-lg-4 col-md-6 my-3">
				<div class="card border-0 shadow" style="max-width: 350px; margin: auto;">
					<img src="images/img14.jpg" class="card-img-top" alt="...">
					<div class="card-body">
						<h5 class="card-title">Delux Room</h5>
						<h6>₹1000 per night</h6>
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
								3 Sofa
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
						<div class="rating mb-4">
							<h6 class="mb-1">Rating</h6>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
							<i class="bi bi-star-fill text-warning"></i>
						</div>
						<div class="d-flex justify-content-between">
							<a href="#" class="btn btn-primary text-white custom-bg shadow-none">Book Now</a>
							<a href="#" class="btn btn-sm btn-outline-dark custom-bg shadow-none">More Details</a>
						</div>
						
					</div>
				</div>	
			</div>
			<div class="col-lg-12 text-center mt-5">
				<a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold  shadow-none">More Rooms >>></a>
			</div>
		</div>
	</div>
	<br><br>
	<!-- our facilities -->
	<h2 class="text-center fw-bold h-font">Our Facilities</h2>
	<div class="container">
		<div class="row justify-content-between px-lg-0 px-md-0 px-5">
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" >
				<img src="facilities/wifi1.png">
				<h5 class="mt-3">Wifi</h5>
				
			</div>
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" >
				<img src="facilities/wifi1.png">
				<h5 class="mt-3">Wifi</h5>
				
			</div>
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" >
				<img src="facilities/wifi1.png">
				<h5 class="mt-3">Wifi</h5>
				
			</div>
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" >
				<img src="facilities/wifi1.png">
				<h5 class="mt-3">Wifi</h5>
				
			</div>
			<div class="col-lg-2 col-md-2 text-center bg-white rounded shadow py-4 my-3" >
				<img src="facilities/wifi1.png">
				<h5 class="mt-3">Wifi</h5>	
			</div>
			<div class="col-lg-12 text-center mt-5">
				<a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">More Facilities</a>
			</div>
		</div>
	</div>
	<br><br>
	<!-- Testimonils -->
	<h2 class="text-center fw-bold h-font">Testimonils</h2>
	<div class="container mt-5">
		<div class="swiper swiper-testimonials">
			<div class="swiper-wrapper mb-5">
				<div class="swiper-slide bg-white p-3">
					<div class="profile d-flex align-items-center mb-0">
						<img src="facilities/star1.png" width="30px">
						<h6 class="m-0 ms-2">Random User</h6>
					</div>
					<p>
						nfgggggggggggghg fdvd bdfbfh fdgdgx fdfgfg fgrgr grth gtrh gfngh rthrh gergre htrh thrth gftrh
					</p>
					<div class="rating">
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
					</div>
				</div>
				<div class="swiper-slide bg-white p-4">
					<div class="profile d-flex align-items-center mb-0">
						<img src="facilities/star1.png" width="30px">
						<h6 class="m-0 ms-2">Random User</h6>
					</div>
					<p>
						nfgggggggggggghg fdvd bdfbfh fdgdgx fdfgfg fgrgr grth gtrh gfngh rthrh gergre htrh thrth gftrh
					</p>
					<div class="rating">
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
					</div>
				</div>
				<div class="swiper-slide bg-white p-4">
					<div class="profile d-flex align-items-center mb-0">
						<img src="facilities/star1.png" width="30px">
						<h6 class="m-0 ms-2">Random User</h6>
					</div>
					<p>
						nfgggggggggggghg fdvd bdfbfh fdgdgx fdfgfg fgrgr grth gtrh gfngh rthrh gergre htrh thrth gftrh
					</p>
					<div class="rating">
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
						<i class="bi bi-star-fill text-warning"></i>
					</div>
				</div>

			</div>

			<div class="swiper-pagination"></div>
		</div>
		<div class="col-lg-12 text-center mt-5">
				<a href="#" class="btn btn-sm btn-outline-dark rounded-0 fw-bold shadow-none">Know More</a>
			</div>
	</div>
	<br><br>
	<!-- reach us -->
	<h2 class="text-center fw-bold h-font">Reach us</h2>
    <div class="container">
      	<div class="row">
      		<div class="col-lg-8 col-md-8 p-4 mb-lg-0 mb-3 bg-white rounded">
      			<iframe class="w-100 rounded" height="320px" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d58039.146365786844!2d73.70705845!3d24.6082862!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3967e56550a14411%3A0xdbd8c28455b868b0!2sUdaipur%2C%20Rajasthan!5e0!3m2!1sen!2sin!4v1669434637521!5m2!1sen!2sin"  loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      		</div>
      		<div class="col-lg-4 col-lg-4">
      		<!-- call us -->
      			<div class="bg-white p-4 rounded mb-4">
      				<h5>Call Us</h5>
      				<a href="teh: +8890670516" class="d-inline--block mb-2 text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+8890670516</a>
      				<br>
      				<a href="teh: +7597169819" class="d-inline--block  text-decoration-none text-dark"><i class="bi bi-telephone-fill"></i>+7597169819</a>	
      			</div>
      			<!-- follow us -->
      		<div class="bg-white p-4 rounded mb-4">
      				<h5>Follow Us</h5>
      				<a href="#" class="d-inline-block mb-3">
      					<span class=" badge bg-light text-dark fs-6 p-2">
      					<i class="bi bi-twitter me-1"></i>Twitter
      				</span></a>
      				<br>
      				<a href="#" class="d-inline-block mb-3">
      					<span class=" badge bg-light text-dark fs-6 p-2">
      					<i class="bi bi-facebook me-1"></i>Facebook
      				</span></a>
      				<br>
      				<a href="#" class="d-inline-block mb-3">
      					<span class=" badge bg-light text-dark fs-6 p-2">
      					<i class="bi bi-instagram me-1"></i>Instagram
      				</span></a>
      				
      			</div>
      		</div>
      	</div>
      	
      </div>
     <!-- footer -->
   <?php include('inc/footer.php')?>

	<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
	<script>
		var swiper = new Swiper(".swiper-container", {
			spaceBetween: 30,
			effect: "fade",
			loop: true,
			autoplay:{
				delay:2000,
				disableOnInteraction: false,
			}
		});
		var swiper = new Swiper(".swiper-testimonials", {
			effect: "coverflow",
			grabCursor: true,
			centeredSlides: true,
			slidesPerView: "auto",
			slidesPerView:"3",
			loop:true,
			coverflowEffect: {
				rotate: 50,
				stretch: 0,
				depth: 100,
				modifier: 1,
				slideShadows: true,
			},
			pagination: {
				el: ".swiper-pagination",
			},
			breakpoints:{
				320:{
					slidesPerView: 1,
				},
				640:{
					slidesPerView: 1,
				},
				768:{
					slidesPerView: 2,
				},
				1024:{
					slidesPerView: 3,
				},
			}
		});
	</script>
</body>
</html>