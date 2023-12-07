 <?php
session_start();
if(empty($_SESSION['id'])) {
	header("location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>admin dashbord</title>
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
     			spoeeu fkjvfv jkdfvd fijvud roijgjer oijru oifjgdfv doifjg foijbbodijoifbioj jibiuoboodduhfbfb iguffbbiudiugegbunkjfdnfdkhfdbhierjhgnjkdnidfughiuhdfihfdvn kdjhifuhi nk ndfkhuihkjnvi hfiubbvkj nfiubuifbiibuhidfndfinfduibhidvn ifduvfdhidfvdfnidfn idfuhbuirhdf dfiuvfdlkjj fdkure reeiu reoiejgeieh reijeoj oirgerj dfoijhjhej dijhorjgore rijg9rejg jer9gjueoijrej m nre89g9rej oiju9reuh 98huer9j rh9jrej jre98j j98ergu9rug9e ojrjg9je9u ojgoregju9r8u0 oerjg9er8uje980gu fdh9uj9 erogjj niujhi nrgiue rieughuirgvknifb fdiuv nrgoirgj eoifjvfeui eriuv8re rfiurg rihvrhu nrgurigh rhg8rg rh8orhg rg8rhg8 trg8thg trnu8bt trjuu80rt rjb8rt8 fijvpav ojfivpd fdjvpiv opijvvj djvip9v d[vjiv fvj[v f[vj[vi fvj[0v fdvvvu vuh8vh viuiv vjv rjv9 jv9vj9jv9jv9 df9vj9fdj d9fj898eru9j dj9ver899jv 9djv9jvvu- 9jfd9vj988je-9j 9dfjv98j9fdj  jd9fbje9jea9u dfj9eb9eue9 9dj9j9uj9uv 9fj98earbujera98ugea zdfjb-8b8erub dfbjerbue8rbu 9f8jb9erjbu8eub 98fj8b9rub8er j9ufjb98rubj89ub8 j9f8jub98rebue8ru 98fub8re9u9re8u 9fu8jbre98u8reu 9ju9eru9eurg9]]]]]
     		</div>
     	</div>
     </div>

	<?php include ('script.php')?>
</body>
</html>