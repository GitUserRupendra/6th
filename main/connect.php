<?php 
$servername = 'localhost';
$username = 'root';
$password = '1234567';
$dbname = 'consultancy';

$conn = mysqli_connect($servername,$username,$password,$dbname,);
if(!$conn){
	die("Not succesful!");
}
?>