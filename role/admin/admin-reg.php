<?php
$msg = "";

if (isset($_POST['submit'])) {
    $con = new mysqli('localhost', 'root', '', 'sms_db');

    $name = $con->real_escape_string($_POST['name']);
    $email = $con->real_escape_string($_POST['email']);
    $password = $con->real_escape_string($_POST['password']);
    $cPassword = $con->real_escape_string($_POST['cPassword']);

    if ($password != $cPassword)
        $msg = "Please Check Your Passwords!";
    else {
        $hash = password_hash($password, PASSWORD_BCRYPT);
        $con->query("INSERT INTO user_tbl (name,email,password) VALUES ('$name', '$email', '$hash')");
       echo "<script>alert('New admin added')</script>";
        echo"<script>window.open('admin.php','_self')</script>";
    }
}
?>

<!doctype html>
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
  
  <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3" align="center">
            <img style="height: 80px;width:80px"  src="../../assets/images/admin-user.png"><br><br>
            <?php
            if ($msg != "") echo $msg. "<br> <br>";
            ?>
            <form method="post" action="admin-reg.php">
                <input class="form-control" name="name" placeholder="Name"><br>
                <input class="form-control" name="email" type="email" placeholder="Email"><br>
                <input class="form-control" minlength="5" name="password" type="password" placeholder="Password..."><br>
                <input class="form-control" minlength="5" name="cPassword" type="password" placeholder="Confirm Password..."><br>

                <input class="btn btn-primary" name="submit" type="submit" value="Register"><br>

            </form>
        </div>
    </div>
   
</div>



<script src="../../assets/js/bootstrap.js"></script>
<script src="../../assets/js/bootstrap-datepicker.js"></script>
<body>
    
</body>