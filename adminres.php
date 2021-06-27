<?php
	 include('db.php');
	 $upload_dir = 'uploads/';
		 if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$sql = "select * from reserve where idres = ".$id;
		$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$image = $row['image'];
			unlink($upload_dir.$image);
			$sql = "delete from reserve where idres=".$id;
		if(mysqli_query($conn, $sql)){
		header('location:adminres.php');
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
	<title>Railway ADMIN</title>
	<ul class="nav float-right">
			<li class="nav-item">
		    	<a class="nav-link btn-outline-dark" href="regview.php"><i class="fal fa-user"></i> Admin</a>
		  	</li>
		    <li class="nav-item">
		    	<a class="nav-link btn-outline-dark" href="adminres.php"><i class="fal fa-ticket-alt"></i> Reserved</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link btn-outline-dark" href="adminsched.php"><i class="fal fa-address-card "></i> Schedule</a>
		  	</li>
		  	<li class="nav-item">
		    	<a class="nav-link btn-outline-dark" href="adminlog.php"><i class="fal fa-arrow-alt-circle-left"></i> Log-out</a>
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
				<th>Full Name</th>
				<th>No. of Tickets</th>
				<th>Station Point</th>
				<th>Destination</th>
				<th><i class="fas fa-trash-alt"></i></th>
			</tr>
		</thead>
			<tbody>
				<?php
							 $sql = "select * from reserve";
							 $result = mysqli_query($conn, $sql);
							 if(mysqli_num_rows($result)){
							 while($row = mysqli_fetch_assoc($result)){
							 ?>
				<tr>
					<td><?php echo $row['fname'] ?></td>
					<td><?php echo $row['nticket'] ?></td>
					<td><?php echo $row['spoint'] ?></td>
					<td><?php echo $row['desti'] ?></td>
					<td><a href="adminres.php?delete=<?php echo $row['idres'] ?>" class="btn btn-outline-info"
								onclick="return confirm('Are you sure to delete this record?')">Delete</a></td>
				</tr>
			<?php
							 }
							 }
							 ?>
			</tbody>
	</table>
	
</body>
</html>