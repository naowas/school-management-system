<?php
$con =mysqli_connect("localhost","root","","sms_db") or die (mysql_error());
if(isset($_POST['btn_sub'])){
	$f_name=$_POST['fnametxt'];
	$l_name=$_POST['lnametxt'];
	$gender=$_POST['genderrdo'];
	$dob=$_POST['dob'];
	$addr=$_POST['addrtxt'];
	$degree=$_POST['degree'];
	$salary=$_POST['slarytxt'];
	$married=$_POST['marriedrdo'];
	$phone=$_POST['phonetxt'];
	$mail=$_POST['emailtxt'];
	$query="INSERT INTO teacher_tbl VALUES( NULL,'$f_name','$l_name' ,'$gender','$dob','$addr','$degree','$salary' ,'$married','$phone','$mail')";
$sql_ins=mysqli_query($con,$query);
if($sql_ins==true) {
    
   echo "<script>alert('New Techer Inserted')</script>";
        echo"<script>window.open('add-teacher.php','_self')</script>";
}
else
	$msg="Insert Error:".mysqli_error();
	
}

?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../../assets/css/w3.css">
<link rel="stylesheet" href="../../assets/css/style-main.css">
<link rel="stylesheet" href="../../assets/css/bootstrap-v3.3.css">
<link rel="stylesheet" href="../../assets/css/font-awesome/css/all.css">
<link rel="stylesheet" href="../../assets/css/style-info.css">






</head>
<!-- Sidebar -->
<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:16% ;top: 0">
  <a style="color:white" href="admin.php"><h4 class="w3-bar-item"><strong>Admin-R.C.B.H.S</strong></h4></a>
  <a href="add-teacher.php" class="w3-bar-item w3-button"> Add Teacher</a>
  <a href="view-teacher.php" class="w3-bar-item w3-button">View Teacher</a>
  <a href="../admin/admin-reg.php" class="w3-bar-item w3-button"> Add Admin</a>
  
  </br>
  <hr>
  <a href="add-student.php" class="w3-bar-item w3-button">Add Student</a>
  <a href="view-student.php" class="w3-bar-item w3-button">View Student</a>
  <a href="result_entry.php" class="w3-bar-item w3-button">Result</a>
  </br>
  <hr>
  <a href="add-subject.php" class="w3-bar-item w3-button">Add Subject</a>
  <a href="view-subject.php" class="w3-bar-item w3-button">View Subject</a>
  
</div>

<div class="header">
  
   <h4>Admin Summery <a href="../../role.php" class="button">Logout</a></h4>
   
</div>>

<div id="main-page" style=margin-left:18%>
  
   <div class="col-md-10 col-md-offset-1 form-style"  style="background:transparent">
    <div class="col-md-12 entry-head margin-20b">
        <h4 class="left">Teacher Entry</h4>
        <a class="btn btn-primary right" href="view-teacher.php">View Teachers</a>
    </div>
    <div class="col-md-10 col-md-offset-1 ">
        <form role="form" data-toggle="validator" method="post" class="form-horizontal">
            <div class="row">
                <div class="form-group">
                    <label for="fnametxt" class="control-label col-sm-3">First Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="fnametxt" name="fnametxt"  placeholder="First Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="lnametxt" class="control-label col-sm-3">Last Name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="lnametxt" name="lnametxt"  placeholder="Last Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="genderrdo" class="control-label col-sm-3">Gender:</label>
            
                        <div class="col-sm-8">
                        <select class="form-control" name="genderrdo">
                            <option>Male</option>
                            <option>Female</option>
                            
                        </select>
                    </div>
                    
                    
                </div>
                <div class="form-group">
                    <label for="marriedrdo" class="control-label col-sm-3">Married:</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="marriedrdo">
                            <option>Yes</option>
                            <option>No</option>
                            
                        </select>
                    </div>
                    
                </div>
                <div class="form-group">
                    <label for="phonetxt" class="control-label col-sm-3">Phone:</label>
                    <div class="col-sm-8">
                        <input type="text"data-minlength="11" data-error="Enter Valid 11 Digit Phone Number" class="form-control" id="phonetxt" name="phonetxt"  placeholder="Contact No..." required>
                        
                    </div>
                </div>
                <div class="form-group">
                    <label for="slarytxt" class="control-label col-sm-3">Salary:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="slarytxt" name="slarytxt"  placeholder="Teacher Salary..." required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="degree" class="control-label col-sm-3">Degree:</label>
                    <div class="col-sm-8">
                        <select class="form-control" name="degree">
                            <option>Bachelor</option>
                            <option>Master</option>
                            <option>P.H.D</option>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="emailtxt" class="control-label col-sm-3">Email:</label>
                    <div class="col-sm-8">
                        <input type="email" class="form-control" id="emailtxt" name="emailtxt"  placeholder="Email Address..." required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="dob" class="control-label col-sm-3">Date of Birth :</label>
                    <div class="col-sm-8">
                        <input type="date" class="form-control" name="dob"  placeholder="YYYY-MM-DD" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="addrtxt" class="control-label col-sm-3">Address:</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="addrtxt" cols="8" rows="6" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" name="btn_sub" value="Insert" class="btn btn-success col-md-offset-4 col-sm-offset-4 col-xs-offset-2"/>
                    
                    <input type="reset" value="Clear" class="btn btn-primary col-md-offset-3 col-sm-offset-3 col-xs-offset-3"/>
                </div>
            </div>
        </form>
    </div>
</div>

   
</div>



<script src="../../assets/js/bootstrap.js"></script>
<script src="../../assets/js/bootstrap-datepicker.js"></script>
<body>
    
</body>