<!DOCTYPE html>
<html lang="en">
<head>
    <title>Company Approval</title>
    <link rel="stylesheet" href="companyapproval.css" type="text/css">
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
        
         <form action="<?php $_SERVER['PHP_SELF']?>" id="placedstudent" method="post">
            <!-- form upper part -->
            <div style="background-color: green; padding:12px; text-align: center; border-radius: 5px;color: white;">
            <label style=" font-weight: 600;">Company Approval</label>
            </div>
            <div id="midform">
            <br>
            <label  style=" font-weight: 400;"for="student">Company Name</label>
            <br>
            <select name ="Companyname" id="studentid" >
                <?php
                include 'connection.php';
               $selectquery ="select * from company";
              $query =mysqli_query($conn, $selectquery);
               $num=mysqli_num_rows($query); 
              while($res=mysqli_fetch_array($query)){
                if($res['Bool']==="False"){
              ?>
               <option><?php echo $res['CompName'] ?></option>
              <?php 
                }      
              }
              ?>
            </select>
            <input type="submit" value="Accept" name="verify" id="submit">
            <input type="submit" value="Reject" name="reject"  id="submit">
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
//include 'connection.php';
if(isset($_POST['verify'])){
  $bool="True";
  $name=$_POST['Companyname'];
  $uquery="update company set Bool='$bool' where CompName='$name'";
  $updquery=mysqli_query($conn,$uquery);
  if($updquery){
    ?>
     <script>
      alert("Verified successfully");
  </script>
   <script>
             location.replace("companyapproval.php");
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

if(isset($_POST['reject'])){
  $name=$_POST['Companyname'];
  $deletequery="delete from company where CompName='$name'";
  $query=mysqli_query($conn,$deletequery);
  header('location:companyapproval.php');
  }
?>