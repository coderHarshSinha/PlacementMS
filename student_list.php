
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border:solid 2px black;
        }
    </style>
</head>
<body>

<div>
    <h1>Candidates details</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th colspan="2">Operation</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include 'connection.php';
$selectquery ="select * from registration";
$query =mysqli_query($conn, $selectquery);
$num=mysqli_num_rows($query);

 while($res=mysqli_fetch_array($query)){
   ?>
          <tr>
                <td><?php echo $res['ID'] ?></td>
                <td><?php echo $res['FirstName']." ". $res['LastName']?></td>
                <td><a href="studentdetails.php?Id=<?php echo $res['ID'] ?>">Details</a></td>
    
            </tr>
    <?php        
 }
 ?>
          
        </tbody>
    </table>
</div>
    
</body>
</html>