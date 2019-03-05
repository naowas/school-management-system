<?php
//Database Connection
$con =mysqli_connect("localhost","root","","sms_db") or die (mysql_error());
//Get ID from Database
if(isset($_GET['edit_id'])){
	$sql = "SELECT * from stu_score_tbl WHERE ss_id =" .$_GET['edit_id'];
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
}
//Update Information
if(isset($_POST['btn-update'])){
    
    $mid=$_POST['mid'];
	$final=$_POST['final'];
	$note=$_POST['note'];
    
	
	$update = "UPDATE stu_score_tbl SET miderm='$mid' , final='$final' , note='$note'
    
    WHERE ss_id=". $_GET['edit_id'];
	$up = mysqli_query($con, $update);
	if(!isset($sql)){
		die ("Error $sql" .mysqli_connect_error());
	}
	else
	{
		header("location: view_result.php");
	}
}
?>
<!doctype html>
<html>

<head>
<link rel="stylesheet" href="../../assets/css/w3.css">
<link rel="stylesheet" href="../../assets/css/style-main.css">
<link rel="stylesheet" href="../../assets/css/bootstrap-v3.3.css">
<link rel="stylesheet" href="../../assets/css/font-awesome/css/all.css">
<link rel="stylesheet" href="../../assets/css/style-info.css">

</head>
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

<body>
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
                    
                <label for="name" class="control-label col-sm-3">Name:</label>
                 <div class="col-sm-8">
                <input type="text" disabled="disabled" class="form-control" name="name" placeholder="Name" value="<?php echo $row['stu_id']; ?>">

                 </div>
                </div>
                
                <div class="form-group">  
                <label for="class" class="control-label col-sm-3">Class:</label>
                 <div class="col-sm-8">
                <input type="text" disabled="disabled" class="form-control" name="class" placeholder="class" value="<?php echo $row['class']; ?>">
                 </div>
                </div>
                
                <div class="form-group">  
                <label for="tname" class="control-label col-sm-3">Teacher's Name:</label>
                 <div class="col-sm-8">
                <input type="text" disabled="disabled" class="form-control" name="tname" placeholder="Teachers Name" value="<?php echo $row['teacher']; ?>">
                 </div>
                </div>
                
                
                <div class="form-group">  
                <label for="subname" class="control-label col-sm-3">Subject's Name:</label>
                 <div class="col-sm-8">
                <input type="text" disabled="disabled" class="form-control" name="subname" placeholder="Subjects Name" value="<?php echo $row['sub_id']; ?>">
                 </div>
                </div>
                
                
                <div class="form-group">  
                <label for="mid" class="control-label col-sm-3">Mid terms:</label>
                 <div class="col-sm-8">
                <input type="text"  class="form-control" name="mid" placeholder="Mid terms" value="<?php echo $row['miderm']; ?>">
                 </div>
                </div>
                
                
                
                <div class="form-group">  
                <label for="final" class="control-label col-sm-3">Final:</label>
                 <div class="col-sm-8">
                <input type="text"  class="form-control" name="final" placeholder="Final" value="<?php echo $row['final']; ?>">
                 </div>
                </div>
                
                
                <div class="form-group">
                    <label for="note" class="control-label col-sm-3">Remarks:</label>
                    <div class="col-sm-8">
                        <textarea class="form-control" name="note" cols="8" rows="6"><?php echo $row['note']; ?></textarea>
                    </div>
                </div>
                
                
                <div class="form-group">
                   
                    <input type="submit" name="btn-update" value="Update" class="btn btn-success col-md-offset-4 col-sm-offset-4 col-xs-offset-2" onClick="update()"/>
                    
                    
                    <input type="button" value="Clear" class="btn btn-primary col-md-offset-3 col-sm-offset-3 col-xs-offset-3" onclick="reset_btn()"/>
                    
                </div>
                
                
            </div>
        </form>
    </div>
</div> 
    
    
    
    
    
    
    
    
    
    
   
</div>


<!-- Alert for Updating -->
<script>
function update(){
	var x;
	if(confirm("Updated data Sucessfully") == true){
		x= "update";
	}
}
</script>

<script>
    
function reset_btn() {
    document.getElementById("edit_form").reset();
}
</script>
</body>

</html>

