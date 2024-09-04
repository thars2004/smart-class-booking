<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
//Code for Updation 
if(isset($_POST['update']))
{
    $Date=$_POST['date'];
    $Year=$_POST['year'];
    $Clas=$_POST['clas'];
    $Hour=$_POST['hour'];
    $Topic=$_POST['topic'];
    $ICTUsed=$_POST['ictused'];
    $StaffName=$_POST['staffname'];

$userid=$_GET['ID'];
    $msg=mysqli_query($con,"update tblbook set Date='{$_POST["date"]}',Year='{$_POST["year"]}',Clas='{$_POST["clas"]}',Hour='{$_POST["hour"]}',Topic='{$_POST["topic"]}',ICTUsed='{$_POST["ictused"]}',StaffName='{$_POST["staffname"]}' where ID='$userid'");

if($msg)
{
    echo "<script>alert('Booked history updated successfully');</script>";
       echo "<script type='text/javascript'> document.location = 'manage-users.php'; </script>";
}
}


    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Edit Profile | Registration and Login System</title>
        <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" />
        <link href="../css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js" crossorigin="anonymous"></script>
    </head>
    <body class="sb-nav-fixed">
      <?php include_once('includes/navbar.php');?>
        <div id="layoutSidenav">
          <?php include_once('includes/sidebar.php');?>
            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        
<?php 
$userid=$_GET['ID'];
$query=mysqli_query($con,"select * from tblbook where ID='$userid'");
while($result=mysqli_fetch_array($query))
{?>
                        
                        <div class="card mb-4">
                     <form method="post">
                            <div class="card-body">
                                <table class="table table-bordered">
                                    <tr>
                                    <th>Date</th>
                                       <td><input class="form-control" type="Date" name="date" value="<?php echo $result['Date'];?>"></td>
                                   </tr>
                                   <tr>
                                       <th>Year</th>
                                       <td><select class="form-control" name="year" id="year" value="<?php echo $result['Year']?>">
                                <option value="">Select Year</option>
                                <option value="I"
                                <?php 
                                if($result['Year']=='I')
                                {
                                    echo 'selected';
                                } ?>>I</option>
                                <option value="II"
                                <?php 
                                if($result['Year']=='II')
                                {
                                    echo 'selected';
                                } ?>>II</option>
                                <option value="III"
                                <?php 
                                if($result['Year']=='III')
                                {
                                    echo 'selected';
                                } ?>>III</option> </select></td>
                                   </tr>
                                   <tr>
                                       <th>Class</th>
                                       <td ><select class="form-control" name="clas" id="clas" value="<?php echo $result['Clas']?>">
                                <option value="">Select Course</option>
                                <option value="BA(Eng)"
                                <?php 
                                if($result['Clas']=='BA(Eng)')
                                {
                                    echo 'selected';
                                } ?>>BA(Eng)</option>
                                <option value="BBA"
                                <?php 
                                if($result['Clas']=='BBA')
                                {
                                    echo 'selected';
                                } ?>>BBA</option>
                                <option value="B.Com"
                                <?php 
                                if($result['Clas']=='B.Com')
                                {
                                    echo 'selected';
                                } ?>>B.Com</option>
                                <option value="B.Sc(Maths)"
                                <?php 
                                if($result['Clas']=='B.Sc(Math)')
                                {
                                    echo 'selected';
                                } ?>>B.Sc(Maths)</option>
                                <option value="B.Sc(IT)"
                                <?php 
                                if($result['Clas']=='B.Sc(IT)')
                                {
                                    echo 'selected';
                                } ?>>B.Sc(IT)</option>
                                <option value="BCA"
                                <?php 
                                if($result['Clas']=='BCA')
                                {
                                    echo 'selected';
                                } ?>>BCA</option>
                                <option value="M.Com"
                                <?php 
                                if($result['Clas']=='M.Com')
                                {
                                    echo 'selected';
                                } ?>>M.Com</option></select></td>
                                   </tr>
                                     <tr>
                                       <th>Hour</th>
                                       <td >
                                        <select class="form-control" name="hour" id="hour" value="<?php echo $result['Hour']?>">
                                <option value="">Select Hour</option>
                                <option value="I"
                                <?php 
                                if($result['Hour']=='I')
                                {
                                    echo 'selected';
                                } ?>>I</option>
                                <option value="II"
                                <?php 
                                if($result['Hour']=='II')
                                {
                                    echo 'selected';
                                } ?>>II</option>
                                <option value="III"
                                <?php 
                                if($result['Hour']=='III')
                                {
                                    echo 'selected';
                                } ?>>III</option>
                                <option value="IV"
                                <?php 
                                if($result['Hour']=='IV')
                                {
                                    echo 'selected';
                                } ?>>IV</option>
                                <option value="V"
                                <?php 
                                if($result['Hour']=='V')
                                {
                                    echo 'selected';
                                } ?>>V</option></select></td>
                                   </tr>
                                     
                                        <tr>
                                       <th>StaffName</th>
                                       <td ><input class="form-control" type="text" name="staffname" value="<?php echo $result['StaffName'];?>"></td>
                                   </tr>
                                   <tr>
                                       <th>Topic</th>
                                       <td ><input class="form-control" type="text" name="topic" value="<?php echo $result['Topic'];?>"></td>
                                   </tr>
                                   <tr>
                                       <th>ICTUsed</th>
                                       <td ><input class="form-control" type="text" name="ictused" value="<?php echo $result['ICTUsed'];?>"></td>
                                   </tr>                       
                                  
                                   <tr>
                                       <td colspan="4" style="text-align:center ;"><button type="submit" class="btn btn-primary btn-block" name="update">Update</button></td>

                                   </tr>
                                    </tbody>
                                </table>
                            </div>
                            </form>
                        </div>
<?php } ?>

                    </div>
                </main>
          <?php include('../includes/footer.php');?>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
<?php } ?>
