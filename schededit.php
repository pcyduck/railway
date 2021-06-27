<?php include 'schedup.php'; ?>

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
	</ul>

	<div class="jumbotron">
 		 <h1 class="display-3"><i class="fas fa-train"></i><b> RAILRAIL</b>GoAWAY</h1>
  				
	</div>


	


</head>
<br><br>
<body background="des1.jpg">
	
	
	<form action="" method="post" class="card" enctype="multipart/form-data" style="margin-left: 20%; margin-right: 20%;">
		<div class="card-header ">
			<i class="fas fa-edit"></i>SCHEDULE UPDATE
		</div>
		<br>	
	
		<div class="form-row">
			<div class="form-group col-md-4 " style="margin-left: 15%;">
				<label>Station Point</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="station" class="form-control"
						 placeholder="" value="<?php echo $row['station']; ?>" >
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-train"></i>
						</div>
					</div>
				</div>
			</div>

			<div class="form-group col-md-4">
				<label>Destination</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="destination" class="form-control"
						 placeholder="" value="<?php echo $row['destination']; ?>">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-train"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-4 " style="margin-left: 15%;">
				<label>Arrival Time</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="atime" class="form-control"
						 placeholder="" value="<?php echo $row['atime']; ?>" >
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-clock"></i>
						</div>
					</div>	
				</div>
			</div>

			<div class="form-group col-md-4">
				<label>Departure Time</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="dtime" class="form-control"
						 placeholder="" value="<?php echo $row['dtime']; ?>">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-clock"></i>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="card-footer">
			<button type="submit" name="submit" class="margin_left btn btn-outline-info ">
				<i class="fas fa-save"></i> Save
			</button>
		</div>
	</form>
	
</body>
</html>