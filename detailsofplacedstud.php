<!DOCTYPE html>
<html lang="en">
<head>
    <title>detailsofplacedstudents</title>
    <link rel="stylesheet" href="detailsofplacedstud.css" type="text/css">
</head>
<body>
<div id="headm">
    <div class="head">
    <h2>Placement Management System @CUSAT</h1>
    </div>
    <div id="but">
    <a href="index.php" id="home"><button type="submit" name="save" class="btn">Log out</button></a>
    </div>
    </div>
    

        <!-- form -->
        
         <form id="placedstudent" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
            <!-- form upper part -->
            <div style="background-color: green; padding:12px; text-align: center; border-radius: 5px;color: white;">
            <label style=" font-weight: 600;">Enter the Details of<br> Placed Student</label>
            </div>
            <div id="midform">
            <br>
            <label  style=" font-weight: 400;">Student Id</label>
            <br>
            <input type="number"  name = "studentid" id="studentid" placeholder="Student ID"><br><br>
            <label  style=" font-weight: 400;"for="student">Company Name</label>
            <br>
            <select  name="company" id="studentid" >
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
            </select>
            <input type="submit" value="Submit" name="save" id="submit">
            <div class="size" style="font-size: 20px">
          <p style="font-style: italic; margin-bottom: 0;">Changed the Status ?</p>
           <a style="font-size:20px;" href="ad_portal.php"> Go back</a>    
        </div>
    </div>
         </form>
            
        </div>
</body>
</html>

<?php
include 'connection.php';
if(isset($_POST['save'])){
  $id=$_POST['studentid'];
  $comp=$_POST['company'];
  $placed="Approved";
  $searchcomp="select * from registration where ID=$id";
  $query=mysqli_query($conn,$searchcomp);
  $arrdata=mysqli_fetch_array($query);
  if($arrdata['Company']===$comp){
  $uquery="update registration set Status='$placed' where ID=$id";
  $updquery=mysqli_query($conn,$uquery);
  if($updquery){
    ?>
     <script>
      alert("Verified successfully");
  </script>
    <?php
  }
  else{
    ?>
    <script>
      alert("Not Verified successfully");
    </script> 
    <?php
  }
  }
  else{
    ?>
    <script>
      alert("Not Registered");
    </script> 
    <?php
}
}

?>