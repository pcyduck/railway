<?php 
	$session = "";
	$emptyField = "";
	if(isset($_POST['ad-submit'])){

		include ('db.php');

		$admin = $_POST['admin'];
		$password = $_POST['password'];

		if(empty($admin) || empty($password)){
			header('Location: adminlog.php?error=emptyfields');
		}

		else{
			$sql = "SELECT * FROM admin WHERE admin ='" . $admin . "' AND password ='" . $password . "'";
			$result = mysqli_query($conn, $sql);
			if (mysqli_num_rows($result) > 0) {
				session_start();
				$_SESSION['admin'] = $admin;
				$_SESSION['user'] = 'loggedin';
				header('Location: regview.php?login=success');
				exit();
			} 
			else {
				header("Location: adminlog.php?failedlogin");
			}
		}
	}
	else {
		header('Location: adminlog.php');
		exit();
	}

 ?>