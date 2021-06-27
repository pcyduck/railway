<?php
	require "loginheader.php";
?>

<main>
<div class="container">    
	<div class="row">      
		<div class="col-sm-4 ">
			<div class="card">
				  <img class="card-img-top" src="des2.png" alt="Train" style="width:100;height:100;">
				  <div class="card-body">
				    <h4 class="card-title">Tired of waiting for a long period of time?</h4>
				    <p class="card-text">
				      Do you want to know if the train will be Delayed?
				    </p>
				    <a href="register.php" class="btn btn-outline-info">Click Here!</a>
				  </div>
				</div>
		</div>      
		<div class="col-sm-4 shadow p-3 mb-5 bg-light rounded">
			<form action="log.php" method="post" enctype="multipart/form-data">  
				<div class="form-group">
					<br><br>
			    		<label>Username</label>    
					<input type="text" class="form-control" name="user" placeholder="Enter username">    
				</div>  
				<div class="form-group">   
				 <label>Password</label>    
				 <input type="password" class="form-control" name="pwd" placeholder="Password">  
				</div>  
				<div>    <label>       
				</label>  </div>  
				<button type="submit" name="login" class="btn btn-outline-dark"><i class="fal fa-user"></i> Log-in</button>
			</form>
		</div>      
		<div class="col-sm-4">
			
				<div class="card">
					  <img class="card-img-top" src="des2.png" alt="Train" style="width:100;height:100;">
					  <div class="card-body">
					    <h4 class="card-title">Are you always left by the train?</h4>
					    <p class="card-text">
					      Do you want to be Updated in train Schedules?
					    </p>
					    <a href="register.php" class="btn btn-outline-info">Click Here!</a>
					  </div>
					</div>
		</div>   
	 </div></div>
<br>
<br>
<br>
<br>
<br>
<br>
</main>
<?php
	require "regfooter.php"
?>