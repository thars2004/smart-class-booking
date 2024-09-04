<?php session_start();
include_once('../includes/config.php');
if (strlen($_SESSION['adminid']==0)) {
  header('location:logout.php');
  } else{
    
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>SSB College</title>
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
                     
                            <div class="card-body">
                                
                                <table class="table table-bordered">
                                   <tr>
                                    <th>Date</th>
                                       <td><?php echo $result['Date'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Year</th>
                                       <td><?php echo $result['Year'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Clas</th>
                                       <td ><?php echo $result['Clas'];?></td>
                                   </tr>
                                     <tr>
                                       <th>Hour</th>
                                       <td ><?php echo $result['Hour'];?></td>
                                   </tr>
                                     
                                        <tr>
                                       <th>StaffName</th>
                                       <td ><?php echo $result['StaffName'];?></td>
                                   </tr>
                                   <tr>
                                       <th>Topic</th>
                                       <td ><?php echo $result['Topic'];?></td>
                                   </tr>
                                   <tr>
                                       <th>ICTUsed</th>
                                       <td ><?php echo $result['ICTUsed'];?></td>
                                   </tr>                                   
                                   <td colspan="2" align="center"> <a href="edit-profile.php?ID=<?php echo $result['ID'];?>" class="btn btn-primary btn-block">Edit</a></td>
                                    </tbody>
                                </table>
                               
                            </div>
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
