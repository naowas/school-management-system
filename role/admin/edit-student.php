<?php
//Database Connection
$con =mysqli_connect("localhost","root","","sms_db") or die (mysql_error());
//Get ID from Database
if(isset($_GET['edit_id'])){
	$sql = "SELECT * from student_tbl WHERE student_id =" .$_GET['edit_id'];
	$result = mysqli_query($con, $sql);
	$row = mysqli_fetch_array($result);
}
//Update Information
if(isset($_POST['btn-update'])){
    $roll_no=$_POST['roll_no'];
	$f_name=$_POST['f_name'];
	$l_name=$_POST['l_name'];
    $fatname=$_POST['fatname'];
    $motname=$_POST['motname'];
	$gender=$_POST['gender'];
	$dob=$_POST['dob'];
    $class=$_POST['class'];
	$contact=$_POST['contact'];
	$email=$_POST['email'];
    $address=$_POST['address'];
	
	$update = "UPDATE student_tbl SET roll_no='$roll_no' , f_name='$f_name' , l_name='$l_name' , fatname='$fatname' , motname='$motname' , gender='$gender' , dob='$dob' , class='$class' , contact='$contact' , email='$email' , address='$address'
    
    WHERE student_id=". $_GET['edit_id'];
	$up = mysqli_query($con, $update);
	if(!isset($sql)){
		die ("Error $sql" .mysqli_connect_error());
	}
	else
	{
		header("location: view-student.php");
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
   <div class="col-md-10 col-md-offset-1 form-style"  style="background:transparent">
<div class="col-md-12 entry-head margin-20b">
        <h4 class="left">Teacher Entry</h4>
        <a class="btn btn-primary right" href="view-teacher.php">View Teachers</a>
    </div>
<div class="col-md-10 col-md-offset-1 ">
<form id="edit_form" role="form" data-toggle="validator" method="post" class="form-horizontal">
<div class="row">
    
    <div class="form-group">
<label for="roll_no" class="control-label col-sm-3">Roll NO:</label>
 <div class="col-sm-8">
<input type="text" class="form-control" name="roll_no" placeholder="Student Roll" value="<?php echo $row['roll_no']; ?>">

     </div>
    </div>
 
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
<label for="fatname" class="control-label col-sm-3">Father's Name:</label>
 <div class="col-sm-8">
<input type="text" class="form-control" name="fatname" placeholder="Fathers Name" value="<?php echo $row['fatname']; ?>">

     </div>
    </div>
    
    <div class="form-group">
<label for="motname" class="control-label col-sm-3">Mother's Name:</label>
 <div class="col-sm-8">
<input type="text" class="form-control" name="motname" placeholder="Mother Name" value="<?php echo $row['motname']; ?>">

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

<label for="class" class="control-label col-sm-3">Class:</label>
<div class="col-sm-8">

<select class="form-control" name="class" value="<?php echo $row['class']; ?>">

    <option>1</option>
<option>2</option>
    <option>3</option>
<option>4</option>
    <option>5</option>
<option>6</option>
    <option>7</option>
<option>8</option>
    <option>9</option>
<option>10</option>
    
</select>
</div>
</div>


<div class="form-group">
<label for="contact" class="control-label col-sm-3">Phone:</label>
<div class="col-sm-8">

<input type="text" class="form-control" name="contact" placeholder="Mobile" value="<?php echo $row['contact']; ?>">

    </div>
    </div>


<div class="form-group">

 <label for="email" class="control-label col-sm-3">Email:</label>
 <div class="col-sm-8">
 
<input type="text" class="form-control" name="email" placeholder="email" value="<?php echo $row['email']; ?>">

    </div>
    </div>

<div class="form-group">
<label for="address" class="control-label col-sm-3">Address:</label>

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

