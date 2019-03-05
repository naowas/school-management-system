<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result Searching</title>
        <link rel="stylesheet" href="../../assets/css/bootstrap.css">  
   <style >
    body {
    background-image: url("bg.jpg");
        text-color:white;
        
}
       tbody{
           color: white;
       }
</style>
    
   

</head>
<body>
    
    
    <?php include("function.php");
    
    

if(isset($_POST['search_result']))
{
    $stu_id=$_POST['search_res'];
    $query="select * from stu_score_tbl where stu_id='$stu_id'";
    $result=mysqli_query($conn,$query);
    
    echo " <div class 'card'>
    <div class = 'card-body' >
    <table class='table table-bordered'>
    <thead class='thead-dark'>
    <tr>
    <th scope='col'>Name</th>
      <th scope='col'>Class</th>
      <th scope='col'>Teacher</th>
      <th scope='col'>Subject</th>
      <th scope='col'>Mid Term</th>
      <th scope='col'>Final</th>
      <th scope='col'>Total</th>
      <th scope='col'>Remarks</th>
      
    </tr>
    </thead>
    <tbody>
   
    ";
    
  
    while($row=mysqli_fetch_array($result)){
    $name=$row['stu_id'];
    $class=$row['class'];
    $teacher=$row['teacher'];
    $sub=$row['sub_id'];
    $mid=$row['miderm'];
    $final=$row['final'];
    $note=$row['note']; 
    $total=$mid+$final;
        
        echo " <tr>
        <td>$name</td>
        <td>$class</td>
        <td>$teacher</td>
        <td>$sub</td>
        <td>$mid</td>
        <td>$final</td>
        <td>$total</td>
        <td>$note</td>
        </tr> ";
    }
    echo "</tbody></table></div></div>";
}

?>
<script src="../../assets/jquery/jquery.js"></script>    
<script src="../../assets/js/bootstrap.js"></script>    
</body>
</html>


