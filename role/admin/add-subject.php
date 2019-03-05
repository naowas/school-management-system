<?php
$con =mysqli_connect("localhost","root","","sms_db") or die (mysql_error());

$id="";
$opr="";
if(isset($_GET['opr']))
	$opr=$_GET['opr'];

if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
	
if(isset($_POST['btn_sub'])){
    $class=$_POST['class'];
	$teach_name=$_POST['techtxt'];
	$sub_name=$_POST['subtxt'];
	$note=$_POST['notetxt'];

	
	
$query= "INSERT INTO sub_tbl VALUES( NULL, '$class', '$teach_name' , '$sub_name' , '$note' ) ";
$sql_ins=mysqli_query($con,$query);
	
if($sql_ins==true)
    {
       echo "<script>alert('New Subject Inserted')</script>";
        echo"<script>window.open('view-subject.php','_self')</script>";
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
        <h4 class="left">Subjects Entry</h4>
        <a class="btn btn-primary right" href="view-subject.php">View Subjects</a>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <form role="form" data-toggle="validator" method="post" class="form-horizontal">
            <div class="row">
                
                <div class="form-group">
                    <label class="control-label col-sm-3">Teacher's Name:</label>
                    <div class="col-sm-8">
                        <select name="techtxt" class="form-control">
                            <?php
                $query="SELECT * FROM teacher_tbl";
                            $te_name=mysqli_query($con,$query);
                            while($row=mysqli_fetch_array($te_name)){
                                ?>
                                <option value="<?php echo $row['f_name'] ; echo " "; echo $row['l_name'];?>"> <?php echo $row['f_name'] ; echo " "; echo $row['l_name'];?> </option>

                            <?php
                            }
                            ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label for="class" class="control-label col-sm-3">Class:</label>
                    <div class="col-sm-8">
                        <input type="number" class="form-control only-number" id="class" name="class"  placeholder="Enter Class e.g(1-10)" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="subjectInput" class="control-label col-sm-3">Subjects's name:</label>
                    <div class="col-sm-8">
                        <input type="text" class="form-control" id="subjectInput" name="subtxt"  placeholder="Subject Name" required>
                    </div>
                </div>
                <div class="form-group">
                    <label for="inputNote" class="control-label col-sm-3">Description:</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" id="inputNote" name="notetxt" cols="8" rows="6" required></textarea>
                    </div>
                </div>
                <div class="form-group">
                    <input type="submit" name="btn_sub" value="Add Subject" class="btn btn-success col-md-offset-4 col-sm-offset-4 col-xs-offset-2"/>
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