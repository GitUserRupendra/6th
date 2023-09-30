
<?php

include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:sindex.php");
}
include 'header.php';

$Course = $_POST['Course'];
$No = $_POST['No. of Days'];

$sql_price="SELECT * FROM `price` WHERE `Course` LIKE '$Course' AND `No. of Days` LIKE '$No'";
$result = $connect->query($sql_price);
while($row = $result->fetch_assoc()){
$final = $row["Price"];


 }
$_SESSION['final']= $final ;
$_SESSION['course']=$course;
$_SESSION['No. of Days']=$no;





?>
<br>
<br>
<br>
<br