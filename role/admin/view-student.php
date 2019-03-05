<?php
$con =mysqli_connect("localhost","root","","sms_db") or die (mysqli_error());

$msg="";
	$opr="";
	if(isset($_GET['opr']))
	$opr=$_GET['opr'];
	
if(isset($_GET['rs_id']))
	$id=$_GET['rs_id'];
	
	if($opr=="del")
{
	$query="DELETE FROM student_tbl WHERE student_id=$id";
	$del_sql=mysqli_query($con,$query);
	if($del_sql) {
        {
            echo "<script>alert('Deleted')</script>";
        echo"<script>window.open('view-student.php','_self')</script>";
        }
    }
	else
		$msg="Could not Delete :".mysqli_error();	
			 
}
	echo $msg;

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
<body>

    
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
 
 
 <div class="col-md-12 entry-head margin-20b">
        <a href=""></a><h4 class="left">Students View</h4>
        <a class="btn btn-primary right" href="add-student.php">Add New Student</a>
    </div>
    <form role="form" data-toggle="validator" method="post" class="form-horizontal">
        <div class="form-group">
            <div class="col-md-9 col-md-offset-1     col-xs-9 col-sm-10">
            <input type="text" class="form-control" name="searchtxt" Placeholder="Enter name for search" autocomplete="off"/></div>
            <input type="submit" name="btnsearch" value="Search" class="btn btn-info"/>
        </div>
    </form>
<form method="post">
    <div class="table-responsive">
        <table class="table table-bordered">
        <tr>
            <th>Roll NO</th>
            <th>Student Name</th>
            <th>Class</th>
            <th>Date of Birth</th>
            <th>Father's Name</th>
            <th>Mothers's Name</th>
            <th>Address</th>
            <th>Phone</th>
            
            <th colspan="2">Operation</th>
        </tr>

        <?php
	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];

	if($key !=""){
		$query="SElECT * FROM student_tbl WHERE f_name  like '%$key%' or l_name like '%$key%'";
		$sql_sel=mysqli_query($con,$query);
	}
	else{
		 $query="SELECT * FROM student_tbl";
		 $sql_sel=mysqli_query($con,$query);

	}

    $i=0;
    while($row=mysqli_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    ?>
      <tr bgcolor="<?php echo $color?>">
            <td><?php echo $row['roll_no'];?></td>
            <td><?php echo $row['f_name']."    ".$row['l_name'];?></td>
            <td><?php echo $row['class'];?></td>
            <td><?php echo $row['dob'];?></td>
            <td><?php echo $row['fatname'];?></td>
            <td><?php echo $row['motname'];?></td>
            <td><?php echo $row['address'];?></td>
            <td><?php echo $row['contact'];?></td>
            <td><a href="edit-student.php?edit_id=<?php echo $row['student_id'];?>" title="Update"><img src="../../assets/images/update.png" /></a></td>
            <td><a href="?view-students&opr=del&rs_id=<?php echo $row['student_id'];?>" title="Delete"><img src="../../assets/images/delete.png" /></a></td>

        </tr>
    <?php
    }


    ?>
    </table>
    </div>
</form>
    </div>
</body>
</html>