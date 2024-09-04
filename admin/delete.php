<?php
header('location:manage-users.php');
include('manage-users.php');
if (isset($_GET['ID'])) {
	// code...
$id=$_GET['ID'];
$msg=mysqli_query($con,"delete from `tblbook` where ID='$id'");
if($msg){
echo "<script>alert('Data deleted');</script>";
}
}

?>