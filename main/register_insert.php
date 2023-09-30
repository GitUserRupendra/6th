<style >  .table{  font-family: Montserrat, sans-serif;
align-items: center}

</style>
<link rel="stylesheet" type="text/css" href="all.css">


<?php
include 'connect.php';
include 'homehead.php';

$Name = $_POST['Name'];
$Fname = $_POST['fname'];
$courses = $_POST['course']
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['Contact_no'];


$sql_student="Insert into student(Name ,father_name, courses, email, password,Contact) values ('$Name' , '$Fname', '$courses','$email','$password','$contact')";

if(mysqli_query($conn, $sql_student) == true)
{
	echo "<center><h1><b>You have been sucessfully registered<b> </h1></center><br><br>";
	echo '<center><table><tr><td><A href="student_sign_in.php"><button style="background-color:black; border-color:black"><span style="color:white">Sign in ! </span></button></a></td></tr></table></center>';
}
else
{
	echo "<center><h1><b>Registration Unsucessful , try again with different credentials<b> </h1></center><br><br>";
echo '<center><table><tr><td><A href="register.php"><button style="background-color:black; border-color:black"><span style="color:white">Register&nbsp&nbspAgain</span></button></a></td></tr></table></center>';}

?>
