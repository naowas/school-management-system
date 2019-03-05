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
        $query="DELETE FROM stu_score_tbl WHERE ss_id=$id";
        $del_sql=mysqli_query($con,$query);
	if($del_sql) {
        {
            echo "<script>alert('Deleted')</script>";
        echo"<script>window.open('view_result.php','_self')</script>";
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

<div id="main-page" style=margin-left:18% >
  <div class="col-md-12  view-form-style" style="background:transparent">
    <div class="col-md-12 entry-head margin-20b">
        <h4 class="left">Score View</h4>
        <a class="btn btn-primary right" href="result_entry.php">Add New Score</a>
    </div>
    <form role="form" data-toggle="validator" method="post" class="form-horizontal">
        <div class="form-group">
            <div class="col-md-9 col-md-offset-1     col-xs-9 col-sm-10">
                <input type="text" class="form-control" name="searchtxt" Placeholder="Enter name or class for search" autocomplete="off"/></div>
            <input type="submit" name="btnsearch" value="Search" class="btn btn-info"/>
        </div>
    </form>


<div class="table-responsive">
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Students Name </th>
            <th>Class </th>
            <th>Teacher's Name</th>
            <th>Subjecst Name</th>
            <th>Mid</th>
            <th>Final</th>
            <th>Note</th>
            <th colspan="2">Operation</th>
        </tr>
        
        <?php
		
		$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
    {
        $query="SElECT * FROM stu_score_tbl WHERE stu_id  like '%$key%' or class like '%$key%' ";
        $sql_sel=mysqli_query($con,$query);
    }
		
	else
    {
        $query="SELECT * FROM stu_score_tbl";
        $sql_sel=mysqli_query($con,$query);

    }
		
    $i=0;
    while($row=mysqli_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    ?>
      <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
            <td><?php echo $row['stu_id'];?></td>
            <td><?php echo $row['class'];?></td>

            <td><?php echo $row['teacher'];?></td>
            <td><?php echo $row['sub_id'];?></td>
            <td><?php echo $row['miderm'];?></td>
            <td><?php echo $row['final'];?></td>
            <td><?php echo $row['note'];?></td>
            <td><a href="edit-result.php?edit_id=<?php echo $row['ss_id'];?>" title="Update"><img src="../../assets/images/update.png" /></a></td>
            <td align="center"><a href="?tag=view_scores&opr=del&rs_id=<?php echo $row['ss_id'];?>"><img src="../../assets/images/delete.png" /></a></td>
        </tr>
        
    <?php
		
    }
    ?>
    </table>
</div>
   
</div>



<script src="../../assets/js/bootstrap.js"></script>
<script src="../../assets/js/bootstrap-datepicker.js"></script>
<body>
    
</body>