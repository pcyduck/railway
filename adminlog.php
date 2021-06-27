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
				  </div>
				</div>
		</div>      
		<div class="col-sm-4 shadow p-3 mb-5 bg-light rounded">
			<form class="form-group" action="alog.php" method="post">  <div class="form-group" ">
						<h4>ADMIN LOG-IN</h4><br>
			    <label for="exampleInputEmail1">Username</label>    
				<input type="text" class="form-control" name="admin" placeholder="Enter username">    
				 
				</div>  
				<div class="form-group">   
				 <label for="exampleInputPassword1">Password</label>    
				 <input type="password" class="form-control" name="password" placeholder="Password">  
				</div>  
				<div>    <label>         
				</label>  </div>  <button type="submit" name="ad-submit" class="btn btn-outline-dark">Submit</button>
				</form>
		</div>      
		<div class="col-sm-4">
			
				<div class="card">
					  <img class="card-img-top" src="des2.png" alt="Train" style="width:100;height:100;">
					  <div class="card-body">
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
	require "regfooter.php";
?>