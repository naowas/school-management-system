<?php
$con =mysqli_connect("localhost","root","","sms_db") or die (mysql_error());
$id="";
$opr="";
if(isset($_GET['opr']))
	$opr=$_GET['opr'];

if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
	
						
if(isset($_POST['btn_sub'])){
	$stu_name=$_POST['sudenttxt'];
    $class=$_POST['class'];
	$fa_name=$_POST['factxt'];
	$sub_name=$_POST['subjecttxt'];
	$miderm=$_POST['midermtxt'];
	$final=$_POST['finaltxt'];
	$note=$_POST['notetxt'];	
	
$query="INSERT INTO stu_score_tbl VALUES( NULL, '$stu_name', '$class', '$fa_name' , '$sub_name', '$miderm', '$final', '$note' ) ";
$sql_ins=mysqli_query($con,$query);
if($sql_ins==true) {
    echo "<script>alert('Student ressult Inserted')</script>";
        echo"<script>window.open('result_entry.php','_self')</script>";
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
<link rel="stylesheet" href="../../assets/css/datepicker.css">





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
  
  <div class="col-md-10 col-md-offset-1 form-style" style="background:transparent">
    <div class="col-md-12 entry-head margin-20b">
        <h4 class="left">Score Entry</h4>
        <a class="btn btn-primary right" href="view_result.php">Score View</a>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <form role="form" data-toggle="validator" method="post" class="form-horizontal">
            <div class="row">
                <div class="form-group">
                    <label id="sudenttxt" class="control-label col-sm-3">Student's Name:</label>
                    <div class="col-sm-8">
                        <select name="sudenttxt" class="form-control">
                            <?php
                            $query="SELECT * FROM student_tbl";
                            $student_name=mysqli_query($con,$query);
                            while($row=mysqli_fetch_array($student_name)){
                                ?>
                                <option value="<?php echo $row['f_name']; echo" "; echo $row['l_name'];?>"> <?php echo $row['f_name']; echo" "; echo $row['l_name'];?> </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label id="class" class="control-label col-sm-3">Class:</label>
                    <div class="col-sm-8">
                        <select name="class" class="form-control">
                            <?php
                            $query="SELECT * FROM student_tbl";
                            $class=mysqli_query($con,$query);
                            while($row=mysqli_fetch_array($class)){
                                ?>
                                <option value="<?php echo $row['class'];?>"> <?php echo $row['class'];?> </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                
                <div class="form-group">
                    <label id="factxt" class="control-label col-sm-3">Teachers's Name:</label>
                    <div class="col-sm-8">
                        <select name="factxt" class="form-control">
                            <?php
                                $query="SELECT * FROM teacher_tbl";
                            $fac_name=mysqli_query($con,$query);
                            while($row=mysqli_fetch_array($fac_name)){
                                ?>
                            <option value="<?php echo $row['f_name']; echo" "; echo $row['l_name'];?>"> <?php echo $row['f_name']; echo" "; echo $row['l_name'];?> </option><?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label id="subjecttxt" class="control-label col-sm-3">Subject Name:</label>
                    <div class="col-sm-8">
                        <select name="subjecttxt" class="form-control">
                            <?php
                            $query="SELECT * FROM sub_tbl";
                            $subject=mysqli_query($con,$query);
                            while($row=mysqli_fetch_array($subject)){
                                ?>
                                <option value="<?php echo $row['sub_name'];?>"> <?php echo $row['sub_name'];?> </option>
                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="midermtxt" class="control-label col-sm-3">Midterm:</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control only-number" id="midermtxt" name="midermtxt"  placeholder="Midterm Marks..." required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="finaltxt" class="control-label col-sm-3">Final:</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control only-number" id="finaltxt" name="finaltxt"  placeholder="Finak Marks" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="notetxt" class="control-label col-sm-3">Remarks:</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="notetxt" cols="8" rows="6" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" name="btn_sub" value="Register" class="btn btn-success col-md-offset-4 col-sm-offset-4 col-xs-offset-2"/>
                    <input type="reset" value="Cancel" class="btn btn-primary col-md-offset-3 col-sm-offset-3 col-xs-offset-3"/>
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