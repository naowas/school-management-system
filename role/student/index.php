<?php   
$conn=mysqli_connect("localhost","root","","sms_db");
if(isset($_POST['Login'])){
    $username=$_POST['username'];
    $password=$_POST['password'];
    $query="select * from student_tbl where email='$username' and contact='$password';";
    $result=mysqli_query($conn,$query);
    if(mysqli_num_rows($result)==1)
    {
    header("location:dashboard.php");
    }
    
    else{
        
    echo "<script>alert('User not found')</script>";
        echo"<script>window.open('index.php','_self')</script>";
    }
    
}
?>


<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School Managent system</title>

    <link rel="stylesheet" href="../../assets/css/bootstrap.css">
    <link rel="stylesheet" href="../../assets/css/style.css">
	    <link rel="stylesheet" href="../../assets/css/style-admin.css">
  </head>

  <body>

    <!-- Navigation -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-008B8B fixed-top">
      <div class="container">
        <a class="navbar-brand" href="../../index.php"> <img id="logo" src="../../assets/images/logo_scl.png"><strong>R.C.B.H.S</strong></a>
        
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
           
            <li class="nav-item">
              <a class="nav-link" href="../../notice/index.php"> <strong>Notices</strong> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../contact.php"> <strong>Contact</strong> </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="../../role.php"> <strong>Login</strong> </a>
            </li>
            </ul>
        </div>
      </div>
    </nav>
      

    
<br><br>



    <!-- Page Content -->
    <div class="container">
        <h1 class="mt-4 mb-3">Student
        <small>Login</small>
      </h1>

      <ol class="breadcrumb">
        <li class="breadcrumb-item">
          <a href="../../index.php">Home</a>
        </li>
        <li class="breadcrumb-item active">Login</li>
      </ol>
        
        <marquee behavior="scroll" direction="left"><h4 style= "color:red;">Please use your Email as username and Phone no as password</h4></marquee>

        
 <div id="role-row" class="row">
 <div class="container" style="margin-right: 28%;">
    <div class="row justify-content-center">
        <div class="col-md-6 col-md-offset-3" align="center">
            <img style="height: 80px;width:80px" src="../../assets/images/student-user.png"><br><br>


            <form method="post" action="index.php">
                <input class="form-control" name="username" type="email" placeholder="Username"><br>
                <input class="form-control" minlength="5" name="password" type="password" placeholder="Password"><br>
                <input class="btn btn-primary" name="Login" type="submit" value="Log In"><br>
            </form>

        </div>
    </div>
</div>
        </div>
        
      </div>
    <!-- Footer -->
    <footer class="py-5-not">
      <div class="container">
        <p class="m-6 text-center text-white">Copyright &copy; R.C.B.H.S 2018</p>
      </div>
    </footer>
    

    <!-- Bootstrap core JavaScript -->
    <script src="assets/jquery/jquery.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
