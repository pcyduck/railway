<?php
 	require_once('db.php');

 if (isset($_GET['id'])) {
 $id = $_GET['id'];
 $sql = "select * from sched where id=".$id;
 $result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
 $row = mysqli_fetch_assoc($result);
 }else {
 $errorMsg = 'Could not Find Any Record';

}

}
 if (isset($_POST['submit'])) {
 $station = $_POST['station'];
 $destination = $_POST['destination'];
 $atime = $_POST['atime'];
 $dtime = $_POST['dtime'];



if(!isset($errorMsg)){
$sql = "update sched set station = '".$station."',
                        destination = '".$destination."',
                        atime = '".$atime."', 
                        dtime = '".$dtime."' 
                        where id=".$id;
$result = mysqli_query($conn, $sql);
if($result){
$successMsg = 'New record updated successfully';
header("Location:adminsched.php");
}else{
$errorMsg = 'Error '.mysqli_error($conn);
}
}
}
?>
