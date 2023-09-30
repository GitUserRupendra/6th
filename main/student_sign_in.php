<?php
include 'connect.php';

?>
<html>
<head>
 <link rel='stylesheet' href='all.css'>
 <style >  .table{  font-family: Montserrat, sans-serif;}
</style>
<title>Aurora</title>
</head>
<div><center><img src="https://img.icons8.com/bubbles/300/000000/user.png"/></center></div>

<h2><center><b>Student Sign In</center></b></h2>
<body style="background-color: F5F1F0;">
<form method='post' action ='student.php'  >
<div>
<table align="center" class="table">
<tr><td><h2><b>Email id: </b></h2></td> <td><input type="email" name="Email" maxlength='50'></td></tr>
<tr><td><h2><b> Password: </b></h2></td> <td><input type="password" name="Password" maxlength='50'></td></td></tr>
<tr><td colspan='2'><center><button type='Submit' style="background-color:black; border-color:black" name='login_submit' ><b>Sign In </b> </button></center></td></tr></table>
</div>
<div align="center" >
<h3><a href='register.php' style="color: black"><b>Register</b></a></h3>
<br>

</div>

</table>
</form>
<center><h3><a href='admin_sign_in.php' style="color: black"><b>Admin Sign In ?</b></a></h3></center>

</body style="background-color: F5F1F0;">

</html>