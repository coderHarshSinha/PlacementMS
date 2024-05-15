<!DOCTYPE html>
<html lang="en">
<head>
    <title>Notification</title>
    <link rel="stylesheet" href="CompanyPlacement.css" type="text/css">
</head>
<body>
    <div id="newhead1">
    <div id="newhead2">
    <h3 style="font-style:italic; padding-left: 45%; color: orange;">Placement Management System</h3>
</div>
<div id="newhead3">
    <a href="studentdata.php">
<button type="submit"  name="save" class="btn">Go Back</button>
</a>
</div>
</div>
    <div id="upperdiv">
        <img src="cusat.jpg" style="width: 300px;" alt="">
        <p>Training and Placement,CUSAT</p>

    </div>
    <div id="middiv">
        <p>Companies-Placement</p>
    </div>
    <div id="maindiv">
    <table id="content_table">
            <!-- table class -->
        <thead>
            <tr>
                 <th class="head">Company Name</th>
                <th class="head">Visiting Date</th>
                <!-- <th class="head">Branch</th> -->
                <th class="head">Min CGPA</th>
                <th class="head">Backlog</th>
                <th class="head">Salary</th>
                <th class="head">Profile</th>
                <th class="head">Place of Posting</th>
                <!-- <th class="head">Company Name</th>
                <th class="head">Visiting Date</th>
                <th class="head">Branch</th>
                <th class="head">Min CGPA</th>
                <th class="head">Backlog</th>
                <th class="head">Salary</th>
                <th class="head">Profile</th>
                <th class="head">Place of Posting</th> -->
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connection.php';
$selectquery ="select * from company";
$query =mysqli_query($conn, $selectquery);
$num=mysqli_num_rows($query);

 while($res=mysqli_fetch_array($query)){
    if($res['Bool']==="True"){
   ?>
        
          <tr>
                <td><?php echo $res['CompName'] ?></td>
                <td><?php echo $res['Date'] ?></td>
        
                <td><?php echo $res['MinGpa'] ?></td>
                <td><?php echo $res['MaxBack'] ?>
                </td>
                <td><?php echo $res['Salary'] ?></td>
                <td><?php echo $res['Profile'] ?></td>
                <td><?php echo $res['Posting'] ?></td>
            </tr>
            <?php
        }      
 }
 ?> 
        </tbody>
        </table>
    </div>
    
</body>
</html>