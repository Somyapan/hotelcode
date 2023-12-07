<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<?php include('links.php')?>
	<style>
		.login-form{
			position: absolute;
			top: 50%;
			left:50%;
			transform: translate(-50%, -50%);
			width: 500px;
		}
	</style>
</head>
<body class="bg-light">
<div class="login-form text-center rounded bg-white shadow overflow-hidden">
	<form class="admin" method="post" action="login.execute.php">
		<h4 class="bg-dark text-white py-3">Admin Login</h4>
		<div class="p-4">
			<div class="mb-3">

				<input name="adminname" type="adminname" class="form-control shadow-none text-center" placeholder="Admin name">
			</div>
			<div class="mb-4">

				<input name="password" type="password" class="form-control shadow-none text-center" placeholder="password">
			</div>
			<?php
            if (!empty($_GET['msg'])) {
               echo $_GET['msg'];
                }?>
			<button name="login" value="login" type="submit" class="btn btn-dark shadow-none">Login</button>
		</div>
		
	</form>
</div>

	




<?php include('script.php')?>
</body>
</html>