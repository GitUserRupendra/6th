<style >  .table{  font-family: Montserrat, sans-serif;
align-items: center}

</style>
<link rel="stylesheet" type="text/css" href="all.css">
<?php

include 'connect.php' ;
include 'homehead.php';
$Email = $_POST['email'];
$Password = $_POST['password'];
$sql_student = " Select * from student where email = '$Email' and password='$Password'";
$result_student = mysqli_query($conn,$sql_student);
if(mysqli_num_rows($result_student) <= 0)
{
		echo "<center><h1><b>Something went wrong please login again<b> </h1></center><br><br>";
echo '<center><table><tr><td><A href="sindex.php"><button style="background-color:black; border-color:black"><span style="color:white">Sign in ! &nbsp&nbspAgain</span></button></a></td></tr></table></center>';
}
else
{
	
	header("location:studentview.php");
	
}
?>
