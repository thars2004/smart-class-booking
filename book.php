<?php 
include('includes/config.php');
session_start();
error_reporting(0);
include('includes/config.php');                      
if(isset($_POST['submit']))
  {

    $Date=$_POST['date'];
    $Year=$_POST['year'];
    $Clas=$_POST['clas'];
    $Hour=$_POST['hour'];
    $Topic=$_POST['topic'];
    $ICTUsed=$_POST['ictused'];
    $StaffName=$_POST['staffname'];


$sql="INSERT INTO tblbook(Date,Year,Clas,Hour,Topic,ICTUsed,StaffName) VALUES('{$_POST["date"]}','{$_POST["year"]}','{$_POST["clas"]}','{$_POST["hour"]}','{$_POST["topic"]}','{$_POST["ictused"]}','{$_POST["staffname"]}')";

$sql2="SELECT * FROM tblbook WHERE date='{$_POST["date"]}' AND hour='{$_POST["hour"]}'";

 $res= $con->query($sql2);
  if(mysqli_num_rows($res)<1){
if($con->query($sql)){
 ?>
<script type="text/javascript">
alert('Register success.');
</script>
<?php
}
}
else{
    ?>
<script type="text/javascript">
alert("Already booked at this time.");
</script>
<?php
}
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
   
    <title>Smart Class Booking</title>
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i%7cMontserrat:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <!-- Style -->
    <link href="css/style.css" rel="stylesheet">
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    <?php include_once('includes/header.php');?>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <center>
                        <br><h2 class="page-title" >Smart Class Booking System</h2>
                        <div class="page-breadcrumb">
                            <ol class="breadcrumb">
                                <li><a href="index.php">Home</a></li>
                                <li class="active">Smart Class Booking System</li>
                            </ol>
                        </div>
                    </center>
                </div>
            </div>
        </div>
    
    <div class="content">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <h1 >Smart Class Booking</h1>
                            <p > Book your smart class.</p>
                            <form method="post" action="book.php">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label" for="textarea">Date</label>
                                            <input type="date" class="form-control appointment_date" placeholder="Date" name="date" onChange="getDay(this.value);" min="<?php echo date('Y-m-d');?>" max="<?php echo date('Y-m-d',strtotime('+2 day'));?>" required="true">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="year">Select Year</label>
                                        <select name="year" id="year" required="true" class="form-control">
                                <option value="">Select Year</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                               
                              </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="clas">Select Course</label>
                                        <select name="clas" id="clas" required="true" class="form-control">
                                <option value="">Select Course</option>
                                <option value="BA(Eng)">BA(Eng)</option>
                                <option value="BBA">BBA</option>
                                <option value="B.Com">B.Com</option>
                                <option value="B.Sc(Maths)">B.Sc(Maths)</option>
                                <option value="B.Sc(IT)">B.Sc(IT)</option>
                                <option value="BCA">BCA</option>
                                <option value="M.Com">M.Com</option>
                               
                              </select>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="Hour">Select Hour</label>
                                        <select name="hour" id="hour" required="true" class="form-control">
                                <option value="">Select Hour</option>
                                <option value="I">I</option>
                                <option value="II">II</option>
                                <option value="III">III</option>
                                <option value="IV">IV</option>
                                <option value="V">V</option>
                               
                              </select>
                                    </div>
                                    <div class="col-md-6" align="center">
                                        <div class="form-group">
                                            <br>
                                            <a id="check" name="check" class="btn btn-default" href="avbly.php?date=<?php echo $_POST['date'];?>,hour=<?php echo $_POST['hour'];?>">Check Availablity</a>
                                            
                                            <br><br>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="name">Staff Name</label>
                                        <input type="text" class="form-control" id="staffname" placeholder="Staff Name" name="staffname" required="true">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="Topic">Topic</label>
                                        <input type="text" class="form-control" id="topic" placeholder="Topic" name="topic" required="true">
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <label class="control-label" for="ICTUsed">ICT Used</label>
                                        <textarea class="form-control" id="ictused" placeholder="ICT Used" name="ictused" required="true"></textarea>
                                    </div>

                                    
                                    <div class="col-md-12" align="center">
                                        <div class="form-group">
                                            <button type="submit" id="submit" name="submit" class="btn btn-default" >Book</button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/menumaker.js"></script>
    <script src="js/jquery.sticky.js"></script>
    <script src="js/sticky-header.js"></script>
    <script type="text/javascript">
        function fun() {
            alert("Thars");

        }
    </script>
</body>

</html>
