<?php
include 'connect.php' ;
$id = $_GET['student_id'];
$delete = "DELETE FROM student WHERE S_id ='$id'";
$run_data = mysqli_query($conn,$delete);
if($run_data){
	header('location:studentdb.php');
}else{
	echo "Donot Delete";
}

?>