<?php 
 $servername="localhost";
 $username="root";
 $password="";
 $database="cusat";
 //create a connection
 $conn=mysqli_connect($servername,$username,$password,$database);

 if($conn){
  ?>
  <script>
 alert("Connection Successfull");
 </script>
 <?php
}
else{
  die(mysqli_connect_error());
}

?>
