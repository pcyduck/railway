<?php
	 include('db.php');
	 $upload_dir = 'uploads/';
		 if(isset($_GET['delete'])){
		$id = $_GET['delete'];
		$sql = "select * from user where idusers = ".$id;
		$result = mysqli_query($conn, $sql);
			if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			$image = $row['image'];
			unlink($upload_dir.$image);
			$sql = "delete from user where idusers=".$id;
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
 		 <h3>ADMIN</h3>
  				
	</div>
</head>
<br><br>
	<body background="des1.jpg">

<hr>
	<table class="table table-borderless table-hover" style="width:80%; margin-left:auto; margin-right:auto; background-color:#D3D3D3; text-align:center;" border="1">
	<thead class="thead-light">
		
			<tr>
				<th>ID</th>
				<th>Given Name</th>
				<th>Last Name</th>
				<th>E-mail</th>
				<th>Username</th>
				<th><i class="fas fa-trash-alt"></i></th>
			</tr>
		</thead>
			<tbody>
				 <?php
							 $sql = "select * from user";
							 $result = mysqli_query($conn, $sql);
							 if(mysqli_num_rows($result)){
							 while($row = mysqli_fetch_assoc($result)){
							 ?>
				<tr>
					<td><?php echo $row['idusers'] ?></td>
					<td><?php echo $row['gnUsers'] ?></td>
					<td><?php echo $row['lnUsers'] ?></td>
					<td><?php echo $row['emailUsers'] ?></td>
					<td><?php echo $row['uidUsers'] ?></td>
					<td><a href="regview.php?delete=<?php echo $row['idusers'] ?>" class="btn btn-outline-info"
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