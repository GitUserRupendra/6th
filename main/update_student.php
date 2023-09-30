
<?php
include 'connect.php' ;
 echo $id = $_GET['student_id'];
 echo $name = $_GET['name'];
echo $fname = $_GET['fname'];
echo $courses = $_GET['courses'];


$delete = " FROM student WHERE S_id ='$id'";
$run_data = mysqli_query($conn,$delete);
if($run_data){
	header('location:studentdb.php');
}else{
	echo "Donot Delete";
}

?>
<<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	<style >  
 	
 	form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

a {
  text-decoration:none;
}
td {
	text-align: center;
}
h1 {
  margin: 0 0 30px 0;
  text-align: center;
}
 	.table{  font-family: Montserrat, sans-serif;}

</style>	

<link rel="stylesheet" type="text/css" href="all.css">
<title> Update Record </title>
</head>
<div><center><img src="https://img.icons8.com/bubbles/250/000000/add-user-male.png"/></center></div>
<div>
	<h2><center><b>Update Record</center></b></h2>

<body style="background-color: F5F1F0;">
<form method='post' action ='register_insert.php' >
<table align="center" class="table">
<tr><td><h3>Name : </h3></td> <td colspan='2'><input type="text" name="Name" value="<?php echo "$name"?>" maxlength='50' required></td></tr>
<tr><td><h3>Father's Name: </h3></td> <td colspan='2'><input type="text" value="<?php echo "$fname"?>" name="fname" maxlength='50' required></td></tr>
<tr><td><h3>Enrolled Courses :</h3></td><td colspan='2'>

<select name="course" id="course"multiple value="<?php echo "$courses"?>">
  <option value="Tally">Tally</option>
  <option value="Basic Computer">Basic Computer</option>
  <option value="CG">CG</option>
  <option value="Graphic Designing">Graphic Designing</option>
  <option value="Loksewa">Loksewa</option>
</select></td></tr>
<tr><td><h3>Email: </h3></td><td colspan='2'><input type="email" name="email" maxlength='50' required></td></tr>
<tr><td><h3>Password : </h3></td> <td  colspan='2'><input type="password" name="password" maxlength='50' required></td></td></tr>
<tr><td><h3>Contact No.</h3></td> <td  colspan='2'><input type="tel"  name="Contact_no"  maxlength='10' required></td></td></tr>

<tr><td colspan='3'><center><button type='Submit'  style="background-color:black ; color:whitesmoke;  border-color:black" name='register_submit' required >Submit</Button></center></td></tr>
</div>
</table>
</form>
<div align="center" >
<h3><a href='sindex.php' style="color: black">Registered?  Sign In !</a></h3>
</div>

</body>
</html>


<?php
include 'connect.php' ;
 echo $id = $_GET['student_id'];
 echo $name = $_GET['name'];
echo $fname = $_GET['fname'];
echo $courses = $_GET['courses'];


$delete = " FROM student WHERE S_id ='$id'";
$run_data = mysqli_query($conn,$delete);
if($run_data){
	header('location:studentdb.php');
}else{
	echo "Donot Delete";
}

?>