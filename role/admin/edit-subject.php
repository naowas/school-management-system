<?php
//Database Connection
$con =mysqli_connect("localhost","root","","sms_db") or die (mysql_error());
//Get ID from Database
if(isset($_GET['edit_id'])){
	$sql = "SELECT * from sub_tbl WHERE sub_id =" .$_GET['edit_id'];
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
}
//Update Information
if(isset($_POST['btn-update'])){
    
    $class=$_POST['class'];
    
    $subname=$_POST['subname'];
	
	$note=$_POST['note'];
    
	
	$update = "UPDATE sub_tbl SET class='$class' , sub_name='$subname' , note='$note'
    
    WHERE sub_id=". $_GET['edit_id'];
    
	$up = mysqli_query($con, $update);
	if(!isset($sql)){
		die ("Error $sql" .mysqli_connect_error());
	}
	else
	{
		header("location: view-subject.php");
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
        <h4 class="left">Subject Edit</h4>
        <a class="btn btn-primary right" href="view-subject.php">View Subjects</a>
    </div>
    <div class="col-md-10 col-md-offset-1">
        <form role="form" data-toggle="validator" method="post" class="form-horizontal">
            <div class="row">
            

                <div class="form-group">  
                <label for="teacher"  class="control-label col-sm-3">Teacher Name:</label>
                 <div class="col-sm-8">
                <input type="text" disabled="disabled" class="form-control" name="teacher" placeholder="Teacher" value="<?php echo $row['teacher_id']; ?>">
                 </div>
                </div>
                
                <div class="form-group">  
                <label for="subname" class="control-label col-sm-3">Subject Name:</label>
                 <div class="col-sm-8">
                <input type="text" class="form-control" name="subname" placeholder="Subject name" value="<?php echo $row['sub_name']; ?>">
                 </div>
                </div>
                    
                
                
                <div class="form-group">  
                <label for="class" class="control-label col-sm-3">Class:</label>
                 <div class="col-sm-8">
                <input type="text" class="form-control" name="class" placeholder="class" value="<?php echo $row['class']; ?>">
                 </div>
                </div>
                
                <div class="form-group">  
                <label for="note" class="control-label col-sm-3">Note:</label>
                 <div class="col-sm-8">
                <input type="text" class="form-control" name="note" placeholder="Note" value="<?php echo $row['note']; ?>">
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

