

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="../studentdata.css">
</head>
<body>
     <?php
     include 'connection.php';
     $ids=$_GET['Id'];
      $showquery="select * from registration where ID={$ids}";
      $query=mysqli_query($conn,$showquery);
      $arrdata=mysqli_fetch_array($query);
     ?>
      <div class="head">
        <!-- <img src="https://tse1.mm.bing.net/th?id=OIP.pRV2yC9p5fcLZSqX8kRh_wHaJG&pid=Api&P=0&h=180" height="200px" width="200px" alt="Cusat"> -->
        <h1>Cochin University of Science and Technology</h1>
       <h2>Student Details</h2>
        </div>
       <div>  
       <div class="image">
       <img src="<?php echo $arrdata['Img'] ?>" height="250px" width="250px" id="photo"  alt="Image">
       </div>
        <div class="details" >
        <div class="data">Name: <?php echo $arrdata['FirstName']." ". $arrdata['LastName'] ?>
        </div>
        <div class="data">
        Email: <?php echo $arrdata['Email'] ?>
        </div>
        <div class="data">
        Age:  <?php echo $arrdata['Age'] ?>
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

        
        </div>

    </div>

</body>
</html>