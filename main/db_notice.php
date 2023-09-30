<?php
include 'connect.php';
$container = $_POST['container'];
$sql="Insert into notice(Actual_notice)values('$container')";
if(mysqli_query($conn, $sql) == false)
{
	echo "<center><h1><b>Registration Unsucessful , try again with different credentials<b> </h1></center><br><br>";
echo '<center><table><tr><td><A href="register.php"><button style="background-color:black; border-color:black"><span style="color:white">Register&nbsp&nbspAgain</span></button></a></td></tr></table></center>';
}
else{
	echo "Succesfully posted your notice!";
}

?>
