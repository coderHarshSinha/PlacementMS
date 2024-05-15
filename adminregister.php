<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Register</title>
    <link rel="stylesheet" href="profile.css" type="text/css">
</head>
<body>
    <div class="background-img">
    <header id="gradient">
        <p>
            Placement Management System @ CUSAT
        </p>
        <h3>
            Admin Registration
        </h3>


    </header>
    <main>
        <div id="c-reg">
            <p>
                Enter Admin Details
            </p>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                
                <div id="for-input">
                    <label for="A-Id">Admin ID</label>
                    <input type="text" id="A-Id" name="AdminID">
                </div>
                <div id="for-input">
                    <label for="A-name">Admin Name</label>
                    <input type="text" id="A-name" name="AdminName">
                </div>
                <div id="for-input">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email">
                </div>
                <div id="for-input">
                    <label for="post">Post</label>
                    <input type="text" id="post" name="post">
                </div>
                <div id="for-input">
                    <label for="number">Contact Number</label>
                    <input type="number" id="number" name="number">
                </div>
                <div id="for-input">
                    <label for="date">Date of Birth</label>
                    <input type="date" id="date" name="date">
                </div>
                <div id="for-input">
                    <label for="Quali">Qualification</label>
                    <input type="text" id="Quali" name="Quali">
                </div>
                
                <div id="for-input">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="Password">
                </div>
                
                <div id="for-input">
                    <label for="C-password">Confirm Password</label>
                    <input type="password" id="C-password" name="CPassword">
                </div>
                <div id="for-input">
                    <button type="submit" name="save" class="btn">Add Admin</button>
                </div>
                <p>Already Registered..?&nbsp<a href="ad_portal.php">Go Back</a></p>
            </form>
        </div>
    </main>
</div>
</body>
</html>



<?php
include 'connection.php';

if(isset($_POST['save'])){
$adminid=mysqli_real_escape_string($conn,$_POST['AdminID']);
$adminName=mysqli_real_escape_string($conn,$_POST['AdminName']);
$email=mysqli_real_escape_string($conn,$_POST['email']);
$post=mysqli_real_escape_string($conn,$_POST['post']);
$number=mysqli_real_escape_string($conn,$_POST['number']);
$date=mysqli_real_escape_string($conn,$_POST['date']);
$Quali=mysqli_real_escape_string($conn,$_POST['Quali']);
$password=mysqli_real_escape_string($conn,$_POST['Password']);
$Cpassword=mysqli_real_escape_string($conn,$_POST['CPassword']);

$pass=password_hash($password,PASSWORD_BCRYPT);
$cpass=password_hash($Cpassword,PASSWORD_BCRYPT);

$IDquery="select * from admin where ID='$adminid'";
$equery=mysqli_query($conn,$IDquery);
$IDcount=mysqli_num_rows($equery);
if($IDcount>0){
    ?>
    <script>
        alert(" Admin is already registered with this ID");
    </script>
    
    <?php
}
else{
if($password===$Cpassword){
    $insertquery="insert into admin(ID,AdminName,Email,Number,DOB,Qualification,Post,password,Cpassword)
    values('$adminid','$adminName','$email','$number','$date','$Quali','$post','$pass','$cpass')";
    $iquery=mysqli_query($conn,$insertquery);
    if($iquery){
        ?>
        <script>
            alert("Data inserted Succesfully");

        </script>
          <?php
    }
    else{
        ?>
        <script>
            alert("Data Not inserted");
        </script>
       <?php
    }
}
else{
    ?>
    <script>
        alert("Password doesnot match");
    </script>
    <?php
}
}
}
?>