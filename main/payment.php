<?php
include 'connect.php' ;
session_start();

?>

<style>

    .container{
        border-spacing: 10px;

      font-family: Montserrat, sans-serif;
     font-size: 18px !important;
      border: 2px solid grey;
        margin-top: 30px;
        margin-bottom: 50px;
       padding-top: 50px;
      padding-right: 50px;
      padding-bottom: 50px;
      padding-left: 150px;
      align-content: center;
    }
    .button {
  padding: 15px 32px;
  align-content: left;
  color: white;
background-color:black;
    }
#number {
  overflow: hidden;
  width: 600px;
}
input[type=number]{
    width: 250px;
} 
  </style>


  </script>
</head>
<body>
  <h1><center><b><img src=""/>Payment<img src=""/></center></b></h1>
 <form method='post' action ='book_action.php' align='center'>






<div class="container">
<section id="form" class="formborder">
<div class="container2">
       <form>
        


       <div class="form-row row justify-content-around" name="source">
  &nbsp

       <div class="form-group col-md-5" name="source">
       <label for="inputEmail4">Course :</label>    
       <select id="inputState" class="form-control" name="source">
   <option>Graphic Designing</option>
   <option>Tally</option>
   <option>Advance Computer Training</option>
  
   </select>

     <!-- <input type="email" class="form-control" id="inputEmail4" placeholder="FROM">-->
    </div>             


   



    
  
   
    
    
    <div class="form-row row justify-content-aroundd">
       <div class="form-group col-md-16" >
       <label for="inputState"  ><h8>NO. OF DAYS :</h8></label>
      <input type="number" name="number" required  min="1"   >
       </div>

    

    <div>   
     <button type="submit"    class="button" name="login_submit" >Proceed</button>
    
 </div>
</form>
</div>

</section>
</div>
  



</body>
</html>