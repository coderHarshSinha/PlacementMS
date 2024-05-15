<?php
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     <link rel="stylesheet" href="studentsignin.css" type="text/css">
     <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
</head>
<body>
<div id="headm">
    <div id="but">
    <a href="index.php" id="home"><i class="material-icons">home</i></a>
    </div>
    <div class="head">
    <h2>Placement Management System @CUSAT</h1>
    <h1 class="second_heading"><centre>Student Registratrion</centre></h2>
    </div>
    </div>
<div id="form">
   
    <h2 id="f1"><centre>Log In Page</centre></h2>
    
    <form action="<?php $_SERVER['PHP_SELF']?>" method="post" id="register">
    <div class="data"> Email: <br>
     <div class="fill">
    <input type="email" class ="name" name="mail"></div>
    </div>
    <br>
    <div class="data"> Password: <br>
    <div class="fill">
    <input type="password" name="pass" class="name">
    </div>
    </div>
    <br>
    <div id="submit"><button type="submit"  name="save" class="btn">Sign in</button></div>
    </form>
    <div style="text-align:center; padding-bottom: 1rem;">
     <i>Don't not an Account?</i>
    <a id="next" href="studentregister.php" >SignUp</a>
   </div>
    </div>
</body>
</html>

<?php
include 'connection.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['mail'];
    $pass=$_POST['pass'];

    $emailsearch="select * from registration where Email='$email'";
    $query=mysqli_query($conn,$emailsearch);

    $emailcount=mysqli_num_rows($query);
    if($emailcount){
        $email_pass=mysqli_fetch_assoc($query);
        $dbpass=$email_pass['password'];
        $_SESSION['Id']=$email_pass['ID'];
        $pass_decode=password_verify($pass,$dbpass);
        if($pass_decode){
            ?>
            <script>
                alert("Login successfully");
            </script>
                <script>
                    location.replace("studentdata.php");
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
            alert("Invalid Email");
        </script>
        <?php
    }
}
?>