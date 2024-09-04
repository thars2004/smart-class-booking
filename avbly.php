<?php session_start();
include_once('includes/config.php');

  
//Code for Updation 

if(isset($_POST['check']))
{
  $Date=$_POST['date'];
    $Year=$_POST['year'];
    $Clas=$_POST['clas'];
    $Hour=$_POST['hour'];
    $Topic=$_POST['topic'];
    $ICTUsed=$_POST['ictused'];
    $StaffName=$_POST['staffname'];

    $query = "SELECT * FROM tblbook WHERE date='{$_POST["date"]}' AND hour='{$_POST["hour"]}'";
$result = mysql_query($query);
if ($result) {
  if (mysql_num_rows($result) > 0) {
    echo 'found!';
  } else {
    echo 'not found';
  }
} else {
  echo 'Error: ' . mysql_error();
}
}
?>