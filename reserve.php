<!DOCTYPE html>
<html>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link href="style.css" rel="stylesheet" >
<link href="bootstrap.css" rel="stylesheet" />
<link href="fontawesome/css/all.css" rel="stylesheet" />

<head>
	<title>Reservation</title>

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
<body background="des1.jpg">

	<form action="resfunc.php" method="post" class="card" enctype="multipart/form-data" style="margin-left: 20%; margin-right: 20%;">
		<input type="hidden" name="action" value="add">
		<div class="card-header ">
			<i class="fas fa-edit"></i>RESERVATION
		</div>
		<br>
		<div class="form-row">
			<div class="form-group col-md-4" style="margin-left: 15%;">
				<label>Full Name:</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="fName" class="form-control"
						 placeholder="Enter Name">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-user"></i>
						</div>
					</div>
				</div>
			</div>
			<div class="form-group col-md-4" >
				<label>No. of Tickets:</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="ticket" class="form-control"
						 placeholder="No. of Tickets">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-ticket-alt"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-4 " style="margin-left: 15%;">
				<label>Station Point:</label>
				<div class="input-group mb-2 mr-sm-2">
					<select class="custom-select custom-select-md" name="station">
						<option>Select Station</option>
						<option value="Shibuya">Shibuya</option>
						<option value="Osaka">Osaka</option>
						<option value="Shinjuku">Shinjuku</option>
						<option value="Sapporo">Sapporo</option>
						<option value="Kyoto">Kyoto</option>
						<option value="Shinagawa">Shinagawa</option>
						<option value="Kobe">Kobe</option>
						<option value="Asakusa">Asakusa</option>
						<option value="Hakata">Hakata</option>
						<option value="Nagoya">Nagoya</option>
						
						
					</select>
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-train"></i>
						</div>
					</div>
				</div>
			</div>

			<div class="form-group col-md-4">
				<label>Destination:</label>
				<div class="input-group mb-2 mr-sm-2">
					<select class="custom-select custom-select-md" name="destination">
						<option>Select Station</option>
						<option value="Shibuya">Shibuya</option>
						<option value="Osaka">Osaka</option>
						<option value="Shinjuku">Shinjuku</option>
						<option value="Sapporo">Sapporo</option>
						<option value="Kyoto">Kyoto</option>
						<option value="Shinagawa">Shinagawa</option>
						<option value="Kobe">Kobe</option>
						<option value="Asakusa">Asakusa</option>
						<option value="Hakata">Hakata</option>
						<option value="Nagoya">Nagoya</option>
						
					</select>
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-train"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<button type="res-submit" class="margin_left btn btn-outline-info ">
				<i class="fas fa-save"></i> Reserve
			</button>
		</div>
	</form>
<br>
<br>
<br>
<br>
<br>
<br>
</body>
</html>
