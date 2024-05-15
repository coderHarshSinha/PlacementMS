<!DOCTYPE html>
<html lang="en">
<head>
    <title>Apply for placement</title>
    <link rel="stylesheet" href="applyforplacement.css" type="text/css">
</head>

<body>
   
<div id="headm">
    <div class="head">
    <h2>Placement Management System @CUSAT</h1>
    </div>
    <div id="but">
    <a href="studentdata.php" id="home"><button type="submit"  name="save" class="btn">G0 Back</button></a>
    </div>
    </div>
    <!-- form -->
    <div id="form">
     <form id="placement" method="post">
        <!-- form upper part -->
        <div style="background-color: green; padding:12px;border-radius:5px;">
        <label style="font-weight:600;">Apply for Placement</label>
        </div>
        <br>
        <label style="font-weight:400" for="Company Name">Company for placement</label>
        <br><br>
      
        <select name ="company" id="Company">
        <?php
        include 'connection.php';
       $selectquery ="select * from company";
      $query =mysqli_query($conn, $selectquery);
       $num=mysqli_num_rows($query);
         
      while($res=mysqli_fetch_array($query)){
        if($res['Bool']==="True"){
      ?>
       <option><?php echo $res['CompName'] ?></option>
      <?php 
        }       
      }
      ?>
        </select><br>
        <br>
        <input type="submit" value="Apply" name="save" id="submit">
        <div class="size" style="font-size: 20px">
        <br>
      
    </div>
     </form>   
    </div>
    
</body>
</html>
<?php
include 'connection.php';
if(isset($_POST['save'])){
    $ids = $_GET['Id'];
    $compname=$_POST['company'];
    $comp="select * from registration where ID=$ids";
    $check=mysqli_query($conn,$comp);
   $arr=mysqli_fetch_assoc($check);
    $company=$arr['Company'];
    if($company==="Not Registered"){
        $updquery="update registration set Company='$compname' where ID=$ids";
        $query=mysqli_query($conn,$updquery);
   if($query){
    ?>
    <script>
        alert("Company registered successfully");
    </script>
    <script>
        location.replace("studentdata.php");
    </script>
    <?php
   }
}
else{
    ?>
    <script>
        alert("Already  registered");
    </script>

    <?php
}
}
?>
