<?php 
	include_once 'db.php';

		$fName = $_POST['fName'];
		$ticket= $_POST['ticket'];
		$station = $_POST['station'];
		$destination = $_POST['destination'];

		$sql = "INSERT INTO reserve(fname, spoint, desti, nticket) VALUES ('$fName', '$station', '$destination', '$ticket');";
		mysqli_query($conn, $sql);

		header("Location: userres.php?reservation=success");