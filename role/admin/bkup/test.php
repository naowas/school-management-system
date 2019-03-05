<?php
//Connection for database
$conn =mysqli_connect("localhost","root","","sms_db") or die (mysql_error());
//Select Database
$sql = "SELECT * FROM data";
$result =mysqli_query($conn,$sql);
?>
<!doctype html>
<html>
<body>
<h1 align="center">Employee Details</h1>
<table border="1" align="center" style="line-height:25px;">
<tr>
<th>Employee ID</th>
<th>Name</th>
<th>Gender</th>
<th>Department</th>
<th>Address</th>
<th>Mobile Number</th>
<th>Email</th>
</tr>
<?php
//Fetch Data form database
$result=mysqli_query($conn,$query){
 while($row=mysqli_fetch_array($result)){
	 <tr>
 <td><?php echo $row['id']; ?></td>
 <td><?php echo $row['name']; ?></td>
 <td><?php echo $row['email']; ?></td>
 <td><?php echo $row['password']; ?></td>
 <td><?php echo $row['address']; ?></td>
 <td><?php echo $row['mobile']; ?></td>
 <td><?php echo $row['email']; ?></td>
 <!--Edit option -->
 <td><a href="edit.php?edit_id=<?php echo $row['id']; ?>" alt="edit" >Edit</a></td>
 </tr>
 ?>
 

</table>
</body>
</html>