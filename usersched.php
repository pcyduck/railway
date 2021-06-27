<?php
	 include('db.php');
	 $upload_dir = 'uploads/';
		 if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$sql = "select * from sched where id = ".$id;
		$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$image = $row['image'];
			unlink($upload_dir.$image);
			$sql = "delete from user where id=".$id;
		if(mysqli_query($conn, $sql)){
		header('location:regview.php');
		}
	}
}
?>

<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" >
<link href="bootstrap.css" rel="stylesheet" />
<link href="fontawesome/css/all.css" rel="stylesheet" />

<head>
	<title>Railway Schedule</title>

	<ul class="nav float-right">
			<li class="nav-item">
		    	<a class="nav-link btn-outline-dark" href="index.php"><i class="fal fa-home"></i> Home</a>
		  	</li>
		    <li class="nav-item">
		    	<a class="nav-link btn-outline-dark" href="reserve.php"><i class="fal fa-ticket-alt"></i> Reservation</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link btn-outline-dark" href="usersched.php"><i class="fal fa-address-card "></i> Schedule</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link btn-outline-dark" href="userres.php"><i class="fal fa-address-card "></i> View Reservation</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link btn-outline-dark" href="login.php"><i class="fal fa-arrow-alt-circle-left"></i> Log-out</a>
		    </li>
	</ul>

	<div class="jumbotron">
 		 <h1 class="display-3"><i class="fas fa-train"></i><b> RAILRAIL</b>GoAWAY</h1>
  				
	</div>


	


</head>
<br><br>
<body background="des1.jpg">

	<hr>
	<table class="table table-borderless table-hover" style="width:70%; margin-left:auto; margin-right:auto; background-color:#D3D3D3; text-align:center;" border="1">
	<thead class="thead-light">
		
			<tr>
				<th>Station Point</th>
				<th>Destination</th>
				<th>Arrival Time</th>
				<th>Departure Time</th>
			</tr>
		</thead>
		
			<tbody>
				<?php
							 $sql = "select * from sched";
							 $result = mysqli_query($conn, $sql);
							 if(mysqli_num_rows($result)){
							 while($row = mysqli_fetch_assoc($result)){
							 ?>
				<tr>
					<td><?php echo $row['station'] ?></td>
					<td><?php echo $row['destination'] ?></td>
					<td><?php echo $row['atime'] ?></td>
					<td><?php echo $row['dtime'] ?></td>
				</tr>
			<?php
							 }
							 }
							 ?>
			</tbody>
	</table>
	
</body>
</html>