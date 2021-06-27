<?php 
	include_once 'db.php';

		$station = $_POST['station'];
		$destination= $_POST['destination'];
		$atime = $_POST['atime'];
		$dtime = $_POST['dtime'];

		$sql = "INSERT INTO sched(station, destination, atime, dtime) VALUES ('$station', '$destination', '$atime', '$dtime');";
		mysqli_query($conn, $sql);

		header("Location: adminsched.php?addsched=success");