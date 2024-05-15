<?php
session_start()
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company Registeration</title>
    <link rel="stylesheet" href="file1.css" type="text/css">
</head>
<body>
    <div class="background-img">
    <header id="head-background">
        <p>
            Placement Management System @ CUSAT
        </p>
    </header>
    <main>
        <div id="c-log">
            <p>
                Company Login
            </p>
            <form action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
                <div id="login-input">
                    <label for="C-name">Comapny Name</label>
                    <input type="text" id="C-name" name="CompanyName" required>
                </div>
                <div id="login-input">
                    <label for="C-Id">Company ID</label>
                    <input type="text" id="C-Id" name="CompanyID" required>
                </div>
                <div id="login-input">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="Password" required>
                </div>
                <div id="login-input">
                    <button type="submit"  name="save" class="btn">Sign in</button>
                </div>
                <p class="register">
                    Not Registered Yet?
                    <a href="companyregiter.php">Sign up</a>
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
    $companyName=$_POST['CompanyName'];
    $companyId=$_POST['CompanyID'];
    $password=$_POST['Password'];

  $namesearch="select * from company where CompName='$companyName'";
  $nquery=mysqli_query($conn,$namesearch);
  $countn=mysqli_num_rows($nquery);

  $IDsearch="select * from company where CompID='$companyId'";
  $iquery=mysqli_query($conn,$IDsearch);
  $counti=mysqli_num_rows($iquery);
  if(($countn && $counti)==1){
     $comp_pass=mysqli_fetch_assoc($iquery);
     $dbpass=$comp_pass['password'];
     $_SESSION['Comp_id']=$comp_pass['CompID'];
     $pass_decode=password_verify($password,$dbpass);
     if($pass_decode){
        ?>
        <script>
            alert("Login successfully");
        </script>
             <script>
                location.replace("after_login.php");
            </script> 
        <?php
    }
    else{
        ?>
        <script>
            alert("Password is Incorrect");
        </script>
        <?php
    }
  }
  else{
    ?>
    <script>
        alert("Either CompanyName or CompanyID is incorrect");
    </script>
    <?php
  }
}
?>