<style >  .table{  font-family: Montserrat, sans-serif;
align-items: center}

</style>
<link rel="stylesheet" type="text/css" href="all.css">


<?php
include 'connect.php';
include 'homehead.php';


$Name = $_POST['Name'];
$email = $_POST['email'];
$Contact_no = $_POST['Contact_no'];


$sql_teacher="Insert into teachers(Name,Contact Number,Email) values ('$Name','$Contact_no','$email')";

if(mysqli_query($conn, $sql_teacher) == true)
{
	echo "<center><h1><b>You have been sucessfully added the Teacher!<b> </h1></center><br><br>";
	echo '<center><table><tr><td><A href="student_sign_in.php"><button style="background-color:black; border-color:black"><span style="color:white">Sign in ! </span></button></a></td></tr></table></center>';
}
else
{
	echo "<center><h1><b>Registration Unsucessful , try again with different credentials<b> </h1></center><br><br>";
echo '<center><table><tr><td><A href="add_teacher.php"><button style="background-color:black; border-color:black"><span style="color:white">Register&nbsp&nbspAgain</span></button></a></td></tr></table></center>';}

?>
