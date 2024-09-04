<?php session_start();
include_once('includes/config.php');
// for deleting user
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
    <body class="sb-nav-fixed">
<?php include_once('includes/header.php');?>
        <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-10 heading-section text-center ftco-animate" style="padding-bottom: 20px;">
           
            <h2 class="mb-4">Resent Booked List</h2>
          </div>
                                <table id="datatablesSimple" cellpadding="8" cellspacing="5" class="table table-bordered"> 
                                    <thead>
                                        <tr align="center">
                                             <th>Sno.</th>
                                  <th> Date</th>
                                  <th> Class</th>
                                  <th> Hour</th>
                                  <th> StaffName</th>
                                  <th> Topic</th>
                                  <th> ICTUsed</th>                                  
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr align="center">
                                             <th>Sno.</th>
                                  <th> Date</th>
                                  <th> Class</th>
                                  <th> Hour</th>
                                  <th> StaffName</th>
                                  <th> Topic</th>
                                  <th> ICTUsed</th>                                  
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                       
                                              <?php $ret=mysqli_query($con,"select * from tblbook order by date DESC LIMIT 20");
                              $cnt=1;
                              while($row=mysqli_fetch_array($ret))
                              {?>
                              <tr>
                              <td><?php echo $cnt;?></td>
                                  <td><?php echo $row['Date'];?></td>
                                  <td><?php echo $row['Year'];?> <?php echo $row['Clas'];?></td>
                                  <td><?php echo $row['Hour'];?></td> 
                                  <td><?php echo $row['StaffName'];?></td>
                                  <td><?php echo $row['Topic'];?></td>
                                  <td><?php echo $row['ICTUsed'];?></td>                                  
                                  
                              </tr>
                              <?php $cnt=$cnt+1; }?>
                                      
                                    </tbody>
                                </table>
                          </div>
                    </div>
                </div>
            </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="../js/scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" crossorigin="anonymous"></script>
        <script src="../js/datatables-simple-demo.js"></script>
    </body>
</html>
