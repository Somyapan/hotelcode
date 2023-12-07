	<!DOCTYPE html>
	<html>
	<head>
		<title>panchal hotel</title>
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
			.box:hover{
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
		<h2 class="h-font fw-bold text-center">About Us</h2>
		<div class="h-line bg-dark"></div>
		<p class="text-center mt-3">
			sur suvjr djfhr fiuhfjhr cjnfine fjnfjhbr fhfhjbf fhbfhbf hfhbfhbj fhbjvhbj hfhbjvhbj fyudyud dyuheyuhd yhudyhud  djiije djdjd jfjkr hehje
		</p>	
	</div>
	<div class="container">
		<div class="row justify-content-between align-items-center">
			<div class="col-lg-6 col-md-6 mb-4 order-lg-1 order-md-1 order-2">
			<h3 class="mb-3"> derf sffde dfe df</h3>
			<p>sur suvjr djfhr fiuhfjhr cjnfine fjnfjhbr fhfhjbf fhbfhbf hfhbfhbj fhbjvhbj hfhbjvhbj fyudyud dyuheyuhd yhudyhud  djiije djdjd jfjkr hehje</p>	
			</div>
		<div class="col-lg-5 col-md-5 mb-4 order-lg-2 order-md-1 order-1">
			<img src="images/w1.jpg">
		</div>	
		</div>
		<div class="container mt-5">
			<div class="row">
				<div class="col-lg-3 col-md-6 mb-4 px-4 ">
					<div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
					<img src="images/h1.png" width="50px">
					<h4 class="mt-3">100+ ROOMS</h4>	
				</div>
			</div>
			<div class="col-lg-3 col-md-6 mb-4 px-4 ">
					<div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
					<img src="images/c1.jpg" width="50px">
					<h4 class="mt-3">200+CUSTOMERS</h4>	
				</div>
			</div>
			<div class="col-lg-3 col-md-6 mb-4 px-4 ">
					<div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
					<img src="images/r1.png" width="70px">
					<h4 class="mt-3">150+ REVIEWS </h4>	
				</div>
			</div>
			<div class="col-lg-3 col-md-6 mb-4 px-4 ">
					<div class="bg-white rounded shadow p-4 border-top border-4 text-center box">
					<img src="images/s1.jpg" width="50px">
					<h4 class="mt-3">100+ STAFFS</h4>	
				</div>
			</div>
		</div>
	</div>
    
	<h3 class="text-center my-5 h-font fw-bold">Management Team</h3>
	<div class="container px-4">
		<div class="swiper mySwiper">
   <div class="swiper-wrapper mb-5">
      	<div class="swiper-slide bg-white text-center rounded overflow-hidden">
      		<img src="images/random.jpg" class="w-100">
      		<h5 class="mt-2">Random name</h5>
      	 </div>
        <div class="swiper-slide bg-white text-center rounded overflow-hidden">
        	<img src="images/random.jpg" class="w-100">
        	<h5 class="mt-2">Random name</h5>
         </div>
        <div class="swiper-slide bg-white text-center rounded overflow-hidden">
        	<img src="images/random.jpg" class="w-100">
        	<h5 class="mt-2">Random name</h5>
         </div>
        <div class="swiper-slide bg-white text-center rounded overflow-hidden">
        	<img src="images/random.jpg" class="w-100">
        	<h5 class="mt-2">Random name</h5>
         </div>
        <div class="swiper-slide bg-white text-center rounded overflow-hidden">
        	<img src="images/random.jpg" class="w-100">
        	<h5 class="mt-2">Random name</h5>
         </div>
        <div class="swiper-slide bg-white text-center rounded overflow-hidden">
        	<img src="images/random.jpg" class="w-100">
        	<h5 class="mt-2">Random name</h5>
    </div>
    </div>
      <div class="swiper-pagination"></div>
    </div>

	</div>
     <!-- footer -->
   <?php include('inc/footer.php')?>
   <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>
<script>
      var swiper = new Swiper(".mySwiper", {
      	slidesPerView: 4,
      	spaceBetween: 40,
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
					slidesPerView: 3,
				},
				1024:{
					slidesPerView: 3,
				},
			}
      });
    </script>
</body>
</html>