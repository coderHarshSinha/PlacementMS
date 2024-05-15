<?php
session_start();
if(!isset($_SESSION['Id'])){
    header('location:index.php');
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="studentdata.css">
</head>
<body>
     <?php
     include 'connection.php';
     $id=$_SESSION['Id'];
      $showquery="select * from registration where ID={$id}";
      $query=mysqli_query($conn,$showquery);
      $arrdata=mysqli_fetch_array($query);
     ?>
      <div id="headm">
    <div class="head">
    <h2>Placement Management System @CUSAT</h1>
    <h1 class="second_heading"><centre>Student Profile</centre></h2>
    </div>
    <div id="but">
    <a href="logout.php"><button type="submit"  name="save" class="btn">Log out</button></a>
    </div>
        </div>
       <div id="big">  
       <div class="image">
       <img src="<?php echo $arrdata['Img'] ?>" height="250px" width="250px" id="photo"  alt="Image">
       </div>
        <div class="details" >
        <div class="data">
        StudentID: <?php echo $arrdata['ID'] ?>
           </div>
        <div class="data" id="first"><?php echo $arrdata['FirstName']." ". $arrdata['LastName'] ?>
        </div>
        <div class="data">
        Email: <?php echo $arrdata['Email'] ?>
        </div>
        <div class="data">
        DOB:  <?php echo $arrdata['DOB'] ?>
        </div>
          <div class="data">
        Skills: <?php echo $arrdata['Skills'] ?>
           </div>
           <div class="data">
        Semester:  <?php echo $arrdata['Semester'] ?>
           </div>
           <div class="data">
        Branch: <?php echo $arrdata['Branch'] ?>
           </div>
           <div class="data">
        10thPercent: <?php echo $arrdata['percent10'] ?>
           </div>
           <div class="data">
        12thpercent: <?php echo $arrdata['percent12'] ?>
           </div>
           <div class="data">
        Passing Year: <?php echo $arrdata['PassYear'] ?>
           </div>
           <div class="data">
        GPA: <?php echo $arrdata['GPA'] ?>
           </div>
           <div class="data">
        BackLogs: <?php echo $arrdata['Back'] ?>
           </div>
           <div class="data">
        Company: <?php echo $arrdata['Company'] ?>
           </div>
           <div class="data">
           Status: <?php echo $arrdata['Status'] ?>
           </div>
        </div>

    </div>
       <div id="disp">
       <div id="update">
       <a href="updates.php?Id=<?php echo $_SESSION['Id'] ?>"><button type="submit"  name="save" class="btn">Update</button></a>
       </div>
    
       <div id="apply">
       <a href="applyforplacement.php?Id=<?php echo $_SESSION['Id'] ?>"><button type="submit"  name="save" class="btn">Apply for Placement</button></a>
       </div>


       <div id="viewcompany">
       <a href="CompanyPlacement.php"><button type="submit"  name="save" class="btn">View Company</button></a>
       </div>
       </div>
</body>
</html>