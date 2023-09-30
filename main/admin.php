<?php
include 'connect.php' ;
session_start();
if ($_SESSION['log'] == '')
{
    header("location:adminindex.php");
}

include 'adminheader.php';

?>

<br>
<br>

<style >
	.container{
        border-spacing: 10px;

      font-family: Montserrat, sans-serif;
     font-size: 18px !important;
      border: 2px solid grey;
        margin-top: 50px;
        margin-bottom: 200px;
       padding-top: 50px;
      padding-right: 120px;
      padding-bottom: 50px;
      padding-left: 150px;
      align-content: center;
    }
</style>

<html>
<head>
<link rel='stylesheet' href='all.css'>
<br><br>
  <h1><center><b> Admins Data Base <img src="https://img.icons8.com/clouds/100/000000/lock-database-.png"/> </center></b></h1>

<div class="container">

  <td><a href='teachersdb.php'><button style="background-color: black ; border-color:black "  >View Teachers </button></a></td>
  <td><a href='studentdb.php'><button style="background-color: black ; border-color:black "  >View Students </button></a></td>
  <td><a href='coursedb.php'><button style="background-color: black ; border-color:black "  >View Courses </button></a></td>
  <td><a href='post_notice.php'><button style="background-color: black ; border-color:black "  >Post Notice </button></a></td>
 </tr> 
<br> <br> 

<tr>


</tr>
</table>
</tr>
</div>
</html>