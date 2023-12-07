 <?php
 session_start();
 if(empty($_SESSION['id'])) {
 	header("location:index.php");
 }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<title>admin setting</title>
 	<?php include('links.php')?>
 </head>

 <body class="bg-white">
 	<div class="container-fluid bg-dark text-light p-3 d-flex align-items-center justify-content-between sticky-top">
 		<h3 class="mb-0 h-font">TAJ HOTEL</h3>
 		<a href="logout.php" class="btn btn-light btn-sm">LOG OUT</a>
 	</div>
 	<div class="col-lg-2 bg-dark border-top border-seccondary" id="dashbord-menu">
 		<nav class="navbar navbar-expand-lg  navbar-dark ">
 			<div class="container-fluid flex-lg-column align-items-stretch">
 				<h4 class="mt-2 text-light">ADMIN-PANEL</h4>
 				<button class="navbar-toggler shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#adminDropdown" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
 					<span class="navbar-toggler-icon"></span>
 				</button>
 				<div class="collapse navbar-collapse flex-column mt-2 align-items-stretch" id="adminDropdown">
 					<ul class="nav nav-pills flex-column">

 						<li class="nav-item">
 							<a class="nav-link text-white" href="dashbord.php">Dashbord</a>
 						</li>
 						<li class="nav-item">
 							<a class="nav-link text-white" href="#">Link</a>
 						</li>
 						<li class="nav-item">
 							<a class="nav-link text-white" href="">Rooms</a>
 						</li>
 						<li class="nav-item">
 							<a class="nav-link text-white" href="">Users</a>
 						</li>
 						<li class="nav-item">
 							<a class="nav-link text-white" href="settings.php">Settings</a>
 						</li>
 					</ul>	
 				</div>
 			</div>
 		</nav>
 	</div>
 	<div class="container-fluid" id="main-content">
 		<div class="row">
 			<div class="col-lg-10 ms-auto p-4 overflow-hidden">
 				<h3 class="mb-4">SETTINGS</h3>
 				<div class="card">
 					<div class="card-body">
 						<div class="d-flex align-items-center justify-content-between mb-3">
 							<h5 class="card-title m-0">General Setting</h5>
 							<button type="button" class="btn btn-dark shadow-none btn-sm" data-bs-toggle="modal" data-bs-target="#general-s">
 								<i class="bi bi-pencil-square"></i>Edit
 							</button>
 						</div>
 						
 						<h6 class="card-subtitle mb-1 fw-bold">Site Title</h6>
 						<p class="card-text"> content.</p>
 						<h6 class="card-subtitle mb-1 fw-bold">About Us</h6>
 						<p  class="card-text"> content.</p>
 						
 					</div>
 				</div>
 				<div class="modal fade" id="general-s" data-bs-backdrop="static" data-bs-keyboard="true" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
 					<div class="modal-dialog">
 						<form action="">
 							<div class="modal-content">
 							<div class="modal-header">
 								<h1 class="modal-title fs-5">Genral settings</h1>
 								
 							</div>
 							<div class="modal-body">
 								<div class=" mb-3">
 									<label class="form-label">Site Title</label>
 									<input type="text" name="site_title" class="form-control shadow-none">
 								</div>
 								<div class="mb-3">
										<label class="form-label">Address</label>
										<textarea name="site_about" class="form-control shadow-none" rows="6"></textarea>
									</div>
 							</div>
 							<div class="modal-footer">
 								<button type="button" class="btn btn-secondary" data-bs-dismiss="modal">CANCEL</button>
 								<button type="button" class="btn btn-success text-white shadow-none">SUBMIT</button>
 							</div>
 						</div>
 						</form>
 					</div>
 				</div>
 			</div>
 						
 						
 		</div>
 	</div>

 	<?php include ('script.php')?>
 </body>
 </html>