<?php     
include 'connect.php';                    
include 'head2.php'
?>



<html>
<head>
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
<title> Registration Page </title>
</head>
<div><center><img src="https://img.icons8.com/bubbles/250/000000/add-user-male.png"/></center></div>
<div>
	<h2><center><b>Student Registration</center></b></h2>

<body style="background-color: F5F1F0;">
<form method='post' action ='register_insert.php' >
<table align="center" class="table">
<tr><td><h3>Name : </h3></td> <td colspan='2'><input type="text" name="Name" maxlength='50' required></td></tr>
<tr><td><h3>Father's Name: </h3></td> <td colspan='2'><input type="text" name="fname" maxlength='50' required></td></tr>
<tr><td><h3>Enrolled Courses :</h3></td><td colspan='2'>

<select name="course" id="course"multiple>
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
</body style="background-color: F5F1F0;">





</html>