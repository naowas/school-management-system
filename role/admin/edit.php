<?php
//Database Connection
$conn =mysqli_connect("localhost","root","","sms_db") or die (mysql_error());
//Get ID from Database
if(isset($_GET['edit_id'])){
	$sql = "SELECT * from teacher_tbl WHERE teacher_id =" .$_GET['edit_id'];
	$result = mysqli_query($conn, $sql);
	$row = mysqli_fetch_array($result);
}
//Update Information
if(isset($_POST['btn-update'])){
	$f_name=$_POST['f_name'];
	$l_name=$_POST['l_name'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
	$addr=$_POST['address'];
	$degree=$_POST['degree'];
	$salary=$_POST['salary'];
	$married=$_POST['married'];
	$phone=$_POST['phone'];
	$mail=$_POST['email'];
	
	$update = "UPDATE teacher_tbl SET f_name='$f_name', l_name='$l_name' , gender='$gender' , dob='$dob' , address='$addr' , degree='$degree' , salary='$salary' , married='$married' , phone='$phone' , email='$mail' WHERE teacher_id=". $_GET['edit_id'];
	$up = mysqli_query($conn, $update);
	if(!isset($sql)){
		die ("Error $sql" .mysqli_connect_error());
	}
	else
	{
		header("location: view-teacher.php");
	}
}
?>
<!--Create Edit form -->
<!doctype html>
<html>

<head>
<link rel="stylesheet" href="../../assets/css/w3.css">
<link rel="stylesheet" href="../../assets/css/style-main.css">
<link rel="stylesheet" href="../../assets/css/bootstrap-v3.3.css">
<link rel="stylesheet" href="../../assets/css/font-awesome/css/all.css">
<link rel="stylesheet" href="../../assets/css/style-info.css">

</head>
<<div class="w3-sidebar w3-light-grey w3-bar-block" style="width:16% ;top: 0">
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
   <div class="col-md-10 col-md-offset-1 form-style"  style="background:transparent">
<div class="col-md-12 entry-head margin-20b">
        <h4 class="left">Teacher Entry</h4>
        <a class="btn btn-primary right" href="view-teacher.php">View Teachers</a>
    </div>
<div class="col-md-10 col-md-offset-1 ">
<form id="edit_form" role="form" data-toggle="validator" method="post" class="form-horizontal">
<div class="row">
 <div class="form-group">


<label for="f_name" class="control-label col-sm-3">First Name:</label>
 <div class="col-sm-8">
<input type="text" class="form-control" name="f_name" placeholder="First Name" value="<?php echo $row['f_name']; ?>">

     </div>
    </div>
    
    <div class="form-group">
<label for="l_name" class="control-label col-sm-3">Last Name:</label>
 <div class="col-sm-8">
<input type="text" class="form-control" name="l_name" placeholder="Last Name" value="<?php echo $row['l_name']; ?>">

     </div>
    </div>






<div class="form-group">

<label for="gender" class="control-label col-sm-3">Gender:</label>

  <div class="col-sm-8">
  
  <select class="form-control" name="gender" value="<?php echo $row['gender']; ?>">

<option>Male</option>
<option>Female</option>
                            
</select>
</div>
</div>




 <div class="form-group">

<label for="dob" class="control-label col-sm-3">Date of Birth :</label>
 <div class="col-sm-8">


<input type="date"   class="form-control" name="dob" placeholder="dob" value="<?php echo $row['dob']; ?>">
     </div>
    </div>
    
    
<div class="form-group">

<label for="married" class="control-label col-sm-3">Married:</label>
<div class="col-sm-8">

<select class="form-control" name="married" value="<?php echo $row['married']; ?>">

<option>Yes</option>
<option>No</option>
</select>
</div>
</div>



  <div class="form-group">

<label for="degree" class="control-label col-sm-3">Degree:</label>
 <div class="col-sm-8">
 
<select class="form-control" name="degree" value="<?php echo $row['degree']; ?>">

<option>Bachelor</option>
<option>Master</option>
<option>P.H.D</option>
     </select>
      </div>
    </div>     



 <div class="form-group">
 
<label for="salary" class="control-label col-sm-3">Salary:</label>
<div class="col-sm-8">
<input type="text" class="form-control"  name="salary" placeholder="First Name" value="<?php echo $row['salary']; ?>">
     </div>
    </div>


<div class="form-group">
<label for="phone" class="control-label col-sm-3">Phone:</label>
<div class="col-sm-8">

<input type="text" class="form-control" name="phone" placeholder="Mobile" value="<?php echo $row['phone']; ?>">

    </div>
    </div>


<div class="form-group">

 <label for="email" class="control-label col-sm-3">Email:</label>
 <div class="col-sm-8">
 
<input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $row['email']; ?>">

    </div>
    </div>

<div class="form-group">
<label for="addr" class="control-label col-sm-3">Address:</label>

<div class="col-sm-8">


<textarea class="form-control" name="address" cols="8" rows="6" required><?php echo $row['address'];?></textarea>
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
