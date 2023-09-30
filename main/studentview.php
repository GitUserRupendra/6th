<?php
include 'connect.php' ;

include 'header.php';

?>


<<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>

<style>

  
    .button {
  padding: 15px 32px;
  align-content: left;
  color: white;
background-color:black;
    }

  </style>


  

<body>
  <h1><b><center>Notice</center></b></h1>

    <div class="container">  
             
                <br />  
                <div class="table-responsive">  
                     <table id="data" class="table table-striped table-bordered">  
                          <thead>  
                               <tr>

                                    <th> Time </th>
                                    <th> Notice </th>
                            
                                 
                                   
                               </tr>  
                               <?php 
   $result = mysqli_query($conn , "select * From notice");
  while ($row = mysqli_fetch_assoc($result)): 
    
  ?>
  <tr>
    
    <td><?php echo $row['Notice_time']; ?></td>
    <td><?php echo $row['Actual_notice']; ?></td>
  
      
   

    </tr>
  
  <?php endwhile; ?>








</form>
  <script src="tinymce/tinymce.min.js"></script>
  <script type="texy/javascript" src="js/tiny.js"></script>




</body>
</html>