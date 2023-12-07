<?php
	include('config.php');
	if(isset($_POST['login'])){ 
		$adminName = $_POST['adminname'];
	  	$passWord = $_POST['password'];
		$query = $conn->prepare("select * from admins where adminname='$adminName' and password='$passWord'");
		
		$query->execute();
		$admin = $query->fetch(PDO::FETCH_OBJ);
    	if($admin){
			session_start();
			$_SESSION['id'] = $admin->id;
			$_SESSION['name'] = $admin->name;
			header("location:dashbord.php");
		}
		else{
			header("location:index.php?msg=Invalid creditials");
		}		
	}
	 else{
		header("location:index.php");
	}
	?>