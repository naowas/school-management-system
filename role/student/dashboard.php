<!DOCTYPE html>
<?php include("function.php");?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Result</title>
        <link rel="stylesheet" href="../../assets/css/bootstrap.css">  
    <style>
body {
    background-image: url("bg.jpg");
}
        h1{
            padding-left: 40%;
            padding-top: 20%;
        }
</style>
    
</head>
<body>
    <h1>Student Result </h1>
    
  <div class="container">
  <div class="card">
  <div class="card-body" style="background-color:#3498DB;color:#ffffff;">
      <div class="row">
          <div class="col-md-1">
              <a href="../../index.php" class="btn btn-light">logout</a></div>
             <div class="col-md-3"><h3>Result Searching</h3></div>
             <div class="col-md-8">
        <form target="_blank" class="from-group" action="searching.php" method="post">
            <div class="row">
            <div class="col-md-10">
                <input type="text" name="search_res" class="form-control" placeholder="Enter Full Name">
            </div>
            <div class="col-md-2">
                <input type="submit"  value="Search" name="search_result" class="btn btn-light"></div>
            </div>
        </form>     
              
          </div>
          </div></div>
      </div>
 </div>
 
  
      <script src="../../assets/jquery/jquery.js"></script>    
<script src="../../assets/js/bootstrap.js"></script>    
</body>
</html>
