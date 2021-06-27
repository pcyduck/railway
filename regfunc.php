<?php
	if(isset($_POST['register-submit'])) {

		require 'db.php';


		$email = $_POST['mail'];
		$given= $_POST['gName'];
		$last = $_POST['lName'];
		$username = $_POST['userName'];
		$password = $_POST['passWord'];


		if(empty($email) || empty($username) || empty($password) || empty($last) || empty($given)){
			header("Location: register.php?error=emptyfields&userName=".$username,"&em=".$email);
			exit();

		}
		else if (!filter_var($email, FILTER_VALIDATE_EMAIL) && !preg_match("/^[a-zA-Z0-9]*$/", $username)){
			header("Location: register.php?error=invalidmailuserName");
			exit();
		}

		else if (!filter_var($email, FILTER_VALIDATE_EMAIL)){
			header("Location: register.php?error=invalidmail&userName=".$username);
			exit();
		}
		else if (!preg_match("/^[a-zA-Z0-9]*$/", $username)){
			header("Location: register.php?error=invaliduserName$mail=".$email);
		}
		else {

			$sql = "SELECT uidUsers FROM user WHERE uidUsers=?";
			$stmt = mysqli_stmt_init($conn);
			if(!mysqli_stmt_prepare($stmt, $sql)){
				header("Location: register.php?error=sqlerror");
				exit();
			}
			else{
				mysqli_stmt_bind_param($stmt, "s", $username);
				mysqli_stmt_execute($stmt);
				mysqli_stmt_store_result($stmt);
				$resultCheck = mysqli_stmt_num_rows($stmt);
				if ($resultCheck > 0){
					header("Location: register.php?error=usertaken&mail=".$email);
					exit();
				}
				else{

					$sql = "INSERT INTO user (emailUsers, uidUsers, pwdUsers, gnUsers, lnUsers) VALUES (?, ?, ?, ?, ?)";
					$stmt = mysqli_stmt_init($conn);
					if(!mysqli_stmt_prepare($stmt, $sql)){
						header("Location: register.php?error=sqlerror");
						exit();
				}
				else{
					$hashedPwd = password_hash($password, PASSWORD_DEFAULT);

					mysqli_stmt_bind_param($stmt, "sssss", $email, $username, $hashedPwd, $given, $last);
					mysqli_stmt_execute($stmt);
					header("Location: login.php?register=success");
					exit();
				}
			}
		}

	}
	mysqli_stmt_close($stmt);
	mysqli_close($conn);

}
else{
		header("Location: register.php");
		exit();
	}
 