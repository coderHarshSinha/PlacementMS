<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="registeredstudent.css">
</head>
<body>
<h1>Registered Student</h1>

<table id="customers">
  <tr>
    <th>ID</th>
    <th>Name</th>
    <th>Age</th>
    <th>Email</th>
    <th>Gender</th>
    <th>Branch</th>
    <th>Semester</th>
    <th>Skills</th>
    <th>Company</th>
    <?php
    include 'connection.php';
$selectquery ="select * from registration";
$query =mysqli_query($conn, $selectquery);
$num=mysqli_num_rows($query);

while($res=mysqli_fetch_array($query)){
    if($res['Status']==="Placed")
    {
?>

  <tr>
        <td><?php echo $res['ID'] ?></td>
        <td> <?php echo $res['FirstName']." ". $res['LastName'] ?></td>
        <td><?php echo $res['Age'] ?></td>
        <td><?php echo $res['Email'] ?></td>
        <td><?php echo $res['Gender'] ?>
        </td>
        <td><?php echo $res['Branch'] ?></td>
        <td><?php echo $res['Semester'] ?></td>
        <td><?php echo $res['Skills'] ?></td>
        <td><?php echo $res['Company'] ?></td>
    </tr>
    
    <?php
    }
}
?>
</table>
</body>
</html>