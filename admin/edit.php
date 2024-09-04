<?php
	include('../includes/config.php');
	$id=$_GET['id'];
	$query=mysqli_query($conn,"select * from `tblbook` where ID='$id'");
	$row=mysqli_fetch_array($query);
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?id=<?php echo $id; ?>">
		<div class="row">
                                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                        <div class="form-group">
                                            <label class="control-label" for="textarea">Date</label>
                                            <input type="date" class="form-control appointment_date" placeholder="Date" name="date" onChange="getDay(this.value);" min="<?php echo date('Y-m-d');?>" max="<?php echo date('Y-m-d',strtotime('+7 day'));?>" required="true">
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
                                    <div class="col-md-6">
                                        <label class="control-label" for="name">Staff Name</label>
                                        <input type="text" class="form-control" id="staffname" placeholder="Staff Name" name="staffname" required="true">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="Topic">Topic</label>
                                        <input type="text" class="form-control" id="topic" placeholder="Topic" name="topic" required="true">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="ICTUsed">ICT Used</label>
                                        <input type="text" class="form-control" id="ictused" placeholder="ICT Used" name="ictused" required="true">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="keyout">Key Out</label>
                                        <input type="time" class="form-control" id="keyout" placeholder="Key Out" name="keyout" required="true">
                                    </div>
                                    <div class="col-md-6">
                                        <label class="control-label" for="keyin">Key In</label>
                                        <input type="time" class="form-control" id="keyin" placeholder="Key In" name="keyin" required="true">
                                    </div>
                                    
                                    <div class="col-md-12" align="center">
                                        <div class="form-group">
                                            <button type="submit" id="submit" name="submit" class="btn btn-default">Book</button>

                                        </div>
                                    </div>
                                </div>
		<a href="manage-user.php">Back</a>
	</form>
</body>
</html>