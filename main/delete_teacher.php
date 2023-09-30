<?php
include 'connect.php' ;
$id = $_GET['teacher_id'];
$delete = "DELETE FROM teachers WHERE T_id ='$id'";
$run_data = mysqli_query($conn,$delete);
if($run_data){
	header('location:teachersdb.php');
}else{
	echo "Donot Delete";
}

?>