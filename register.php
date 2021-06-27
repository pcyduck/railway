<?php
	require "regheader.php";
?>

	<form action="regfunc.php" method="post" class="card" enctype="multipart/form-data" style="margin-left: 20%; margin-right: 20%;">
		<input type="hidden" name="action" value="add">
		<div class="card-header ">
			<i class="fas fa-edit"></i>REGISTER
		</div>
		<br>
		<div class="form-row">
			<div class="form-group col-md-4" style="margin-left: 15%;">
				<label>E-Mail</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="mail" class="form-control" placeholder="E-mail@gmail.com">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-mailbox"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-4 " style="margin-left: 15%;">
				<label>Username</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="userName" class="form-control" placeholder="Username">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-address-card"></i>
						</div>
					</div>
				</div>
			</div>

			<div class="form-group col-md-4">
				<label>Password</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="password" name="passWord" class="form-control" placeholder="Password">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-key"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="form-row">
			<div class="form-group col-md-4 " style="margin-left: 15%;">
				<label>Last Name</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="lName" class="form-control" placeholder="Last Name">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-user"></i>
						</div>
					</div>
				</div>	
			</div>

			<div class="form-group col-md-4">
				<label>Given Name</label>
				<div class="input-group mb-2 mr-sm-2">
					<input type="text" name="gName" class="form-control" placeholder="Given Name">
					<div class="input-group-prepend">
						<div class="input-group-text">
							<i class="fas fa-user"></i>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<button type="submit" name="register-submit" class="margin_left btn btn-outline-info ">
				<i class="fas fa-save"></i> Save
			</button>
		</div>
	</form>
<br>
<br>
<br>
<br>
<br>
<br>

<?php
	require "regfooter.php"
?>
