
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company Registeration</title>
    <link rel="stylesheet" href="file.css" type="text/css">

</head>
<body>
   
    <div class="background-img">
    <header id="gradient">
      
        <p>
            Placement Management System @ CUSAT
        </p>
        <h3>
            Company Registration
        </h3>
    </header>
    <main>
        <div id="c-reg">
            <p>
                Enter Company Details
            </p>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                
                <div id="for-input">
                    <label for="C-Id">Company ID</label>
                    <input type="text" id="C-Id" name="CompanyID"  required>
                </div>
                <div id="for-input">
                    <label for="C-name">Comapny Name</label>
                    <input type="text" id="C-name" name="CompanyName"   required>
                </div>
                <div id="for-input">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="Password"  required>
                </div>
                
                <div id="for-input">
                    <label for="C-password">Confirm Password</label>
                    <input type="password" id="C-password" name="CPassword"  required>
                </div>
                
                <div id="for-input">
                    <label for="web">Website of Company</label>
                    <input type="text" id="web" name="Webcompany"  required>
                </div>
                <div id="for-input">
                    <label for="c-place">Company Headquater</label>
                    <input type="text" id="c-place" name="Cheadquater"   required>
                </div>
                <div id="for-input">
                    <label for="date">Visiting Date</label>
                    <input type="date" id="date" name="date" required>
                </div>
                <div id="for-input">
                    <button type="submit" name="save" class="btn">Sign up</button>
                </div>
                <p class="login">
                    Already Rgistered?
                    <a href="companylogin.php">Sign in</a>
                </p>
            </form>
        </div>
    </main>
</div>
</body>
</html>


<?php
include 'connection.php';
if(isset($_POST['save'])){
$company_id=mysqli_real_escape_string($conn,$_POST['CompanyID']);
$companyName=mysqli_real_escape_string($conn,$_POST['CompanyName']);
$password=mysqli_real_escape_string($conn,$_POST['Password']);
$Cpassword=mysqli_real_escape_string($conn,$_POST['CPassword']);
$Webcompany=mysqli_real_escape_string($conn,$_POST['Webcompany']);
$Cheadquater=mysqli_real_escape_string($conn,$_POST['Cheadquater']);
$date=mysqli_real_escape_string($conn,$_POST['date']);

$pass=password_hash($password,PASSWORD_BCRYPT);
$cpass=password_hash($Cpassword,PASSWORD_BCRYPT);
$namesearch="select * from company where CompName='$companyName'";
$nquery=mysqli_query($conn,$namesearch);
$countn=mysqli_num_rows($nquery);

$IDsearch="select * from company where CompID='$company_id'";
$iquery=mysqli_query($conn,$IDsearch);
$counti=mysqli_num_rows($iquery);

if($countn>0){
    ?>
        <script>
            alert("Company Name already registered");
        </script>
          <?php
}
else if($counti>0){
    ?>
    <script>
        alert("Company ID already registered");

    </script>
      <?php
}
else{
if($password===$Cpassword){
    $insertquery="insert into company(CompID,CompName,password,Cpassword,Webcompany,Comphead,Date)
    values('$company_id','$companyName','$pass','$cpass','$Webcompany','$Cheadquater','$date')";
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