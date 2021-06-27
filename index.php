<?php 
	require 'header.php';
?>
<main>
<div class="container">    
	<div class="row">      
		<div class="col-sm-4 ">
			<div class="card">
				  <div class="card-body">
				    <h4 class="card-title">Reserve a Ticket NOW!</h4>
				    <p class="card-text">
				      Hurry! Reserve your ticket for fast transaction.
				    </p>
				    <a href="reserve.php" class="btn btn-outline-info">RESERVE!</a>
				  </div>
				</div>
		</div>      
		<div class="col-sm-4 shadow p-3 mb-5 bg-light rounded text-center">
			<form>  
			<h2 class="text-center" style="font-family:Helvetica;"><b>See Reservation!</b></h2>
			<a href="userres.php" class="btn btn-outline-info">Reservation</a>
			   </form>
		</div>      
		<div class="col-sm-4">
			
				<div class="card">
					  
					  <div class="card-body">
					    <h4 class="card-title">See the Train Schedule!</h4>
					    <p class="card-text">
					      You don't want to be left behind aren't you?
					    </p>
					    <a href="usersched.php" class="btn btn-outline-info">SCHEDULE!</a>
					  </div>
					</div>
		</div>   
	 </div></div>
</main>
<?php 
	require 'regfooter.php';
?>