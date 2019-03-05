<?php
$con =mysqli_connect("localhost","root","","sms_db") or die (mysql_error());
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
  
   
   <div class="col-lg-3 col-sm-6 col-xs-12 main-widget">
        <div class="main-box infographic-box">
            <i class="fa fa-users red-bg"></i>
            <span class="headline">Total Admin</span>
            <span class="value">
                <?php
				$query="SELECT * FROM user_tbl" ;
                    $sql_sel=mysqli_query($con,$query);
                    $count = mysqli_num_rows($sql_sel);
                    echo $count;
                ?>
            </span>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12 main-widget">
        <div class="main-box infographic-box">
            <i class="fa fa-users red-bg"></i>
            <span class="headline">Total Teacher</span>
            <span class="value">
                <?php
				$query="SELECT * FROM teacher_tbl" ;
                    $sql_sel=mysqli_query($con,$query);
                    $count = mysqli_num_rows($sql_sel);
                    echo $count;
                ?>
            </span>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12 main-widget">
        <div class="main-box infographic-box">
            <i class="fa fa-users red-bg"></i>
            <span class="headline">Total Student</span>
            <span class="value">
                <?php
				$query="SELECT * FROM student_tbl" ;
                    $sql_sel=mysqli_query($con,$query);
                    $count = mysqli_num_rows($sql_sel);
                    echo $count;
                ?>
            </span>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12 main-widget">
        <div class="main-box infographic-box">
            <i class="fa fa-users red-bg"></i>
            <span class="headline">User</span>
            <span class="value">
                <?php
				$query="SELECT * FROM user_tbl" ;
                    $sql_sel=mysqli_query($con,$query);
                    $count = mysqli_num_rows($sql_sel);
                    echo $count;
                ?>
            </span>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12 main-widget">
        <div class="main-box infographic-box">
            <i class="fa fa-users red-bg"></i>
            <span class="headline">User</span>
            <span class="value">
                <?php
				$query="SELECT * FROM user_tbl" ;
                    $sql_sel=mysqli_query($con,$query);
                    $count = mysqli_num_rows($sql_sel);
                    echo $count;
                ?>
            </span>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12 main-widget">
        <div class="main-box infographic-box">
            <i class="fa fa-users red-bg"></i>
            <span class="headline">User</span>
            <span class="value">
                <?php
				$query="SELECT * FROM user_tbl" ;
                    $sql_sel=mysqli_query($con,$query);
                    $count = mysqli_num_rows($sql_sel);
                    echo $count;
                ?>
            </span>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12 main-widget">
        <div class="main-box infographic-box">
            <i class="fa fa-users red-bg"></i>
            <span class="headline">User</span>
            <span class="value">
                <?php
				$query="SELECT * FROM user_tbl" ;
                    $sql_sel=mysqli_query($con,$query);
                    $count = mysqli_num_rows($sql_sel);
                    echo $count;
                ?>
            </span>
        </div>
    </div>
    <div class="col-lg-3 col-sm-6 col-xs-12 main-widget">
        <div class="main-box infographic-box">
            <i class="fa fa-users red-bg"></i>
            <span class="headline">User</span>
            <span class="value">
                <?php
				$query="SELECT * FROM user_tbl" ;
                    $sql_sel=mysqli_query($con,$query);
                    $count = mysqli_num_rows($sql_sel);
                    echo $count;
                ?>
            </span>
        </div>
    </div>
  
</div>



<script src="../../assets/js/bootstrap.js"></script>
<body>
    
</body>