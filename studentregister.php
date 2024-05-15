<!DOCTYPE html>
<html lang="en">
<head>
    <title>STUDENT REGISTRATION</title>
    <link rel="stylesheet" href="studentregistercss.css" type="text/css">
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
<div class="main">
    <div class="register"><h2><u>Register here</u></h2><br><br>
        <form action="<?php $_SERVER['PHP_SELF'] ?>"id="register" method="post" enctype="multipart/form-data">
            <label>Student ID:</label>
            <input type="text" name="id" class="name"
            placeholder="Enter your student ID"><br><br>
            <label>First Name:</label>
            <input type="text" name="fname" class="name"
            placeholder="Enter your first name"><br><br>
             <label>Last Name :</label>
             <input type="text" name="lname" class="name"
            placeholder="Enter your last name"><br><br>
            <label>Date of Birth:</label>
            <input type="date" name="age" class="name"
            ;>
            <br><br>
            <label>Email :</label>
            <input type="email" name="email" class="name"
            placeholder="Enter your valid Email" required>
            <br><br>
            <label>Contact Number:</label>
            <input type="tel" minlength="10" maxlength="10" name="contact" class="name"
             required>
            <br><br>
            <!-- gender -->
            <label>Gender :</label>
            <br>
            <!-- &nbsp;&nbsp;&nbsp; -->
            <input type="radio" name="gender" class="male" value="Male">
            <!-- &nbsp; -->
            <span id="male"><label for="male">Male</label></span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="radio" name="gender" class="female" value="Female">
            <span id="female"><label for="female">Female</label></span>
            <br><br>
            <label>Branch:</label>
            <select name="branch" id="branch" class="name">
             <option>Computer Science</option>
             <option>Information Technology</option>
             <option>Electric and Communication</option>
             <option>Electrical Engineering</option>
             <option>Civil Engineering</option>
             <option>Mechanical Engineering</option>
            </select>
            <br><br>
            <label>Semester</label>      
            <input type="number"min="1" max="8" name="semester" class="name" id="branch"
            placeholder="Enter the current semester"><br><br>
            <!-- //skills -->
            
            <label>10th Percentage:</label>      
            <input type="number" min="0" max="100" name="10percent" class="name" id="branch"
            ><br><br>
            <label>12th Percentage:</label>      
            <input type="number" min="0" max="100" name="12percent" class="name" id="branch"
            ><br><br>
            <label>12th Passing Year:</label>      
            <input type="number" name="pass_year" class="name" id="branch"
            ><br><br>
            <label>CGPA</label>      
            <input type="number" min="0" max="10" name="gpa" class="name" id="branch"
            ><br><br>
            <label>Backlogs</label>      
            <input type="number" name="back" class="name" id="branch"
            ><br><br>
            <label> Skills :</label>
            <br>
            &nbsp;&nbsp;&nbsp;
            <input type="checkbox" name="skills1" id="skills" value="C/C++">
            <!-- &nbsp; -->
            <span id="skills">C/C++</span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name="skills2" id="skills" value="HTML">
            <span id="skills">HTML</span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name="skills3" id="skills" value="CSS">
            <span id="skills">CSS</span>
            &nbsp;&nbsp;&nbsp;&nbsp;
            <input type="checkbox" name="skills4" id="skills" Value="JS">
            <span id="skills">JAVASCRIPT</span>
            <br><br>
            <label>Password:</label>
            <input type="password" name="pass" class="name"
            placeholder="Enter the password" required>
            <br><br>
            <label>Confirm Password:</label>
            <input type="password" name="cpass" class="name"
            placeholder="Enter same as Password" required>
            <br><br>
            <div class="fill"> Choose image:
            <input type="file" name="photo">
            </div>
            <br>
            <input type="submit" value="Submit" name="submit" id="submit">
        </form>
    </div>    
</div>
    
</body>
</html>

<?php
include 'connection.php';
if(isset($_POST['submit'])){
 $fname=mysqli_real_escape_string($conn,$_POST['fname']);
 $lname=mysqli_real_escape_string($conn,$_POST['lname']);
 $age=mysqli_real_escape_string($conn,$_POST['age']);
 $email=mysqli_real_escape_string($conn,$_POST['email']);
 $password=mysqli_real_escape_string($conn,$_POST['pass']);
 $Cpassword=mysqli_real_escape_string($conn,$_POST['cpass']);
 $gender=mysqli_real_escape_string($conn,$_POST['gender']);
 $branch=mysqli_real_escape_string($conn,$_POST['branch']);
 $semester=mysqli_real_escape_string($conn,$_POST['semester']);
 $skills1=mysqli_real_escape_string($conn,$_POST['skills1']);
 $skills2=mysqli_real_escape_string($conn,$_POST['skills2']);
 $skills3=mysqli_real_escape_string($conn,$_POST['skills3']);
 $skills4=mysqli_real_escape_string($conn,$_POST['skills4']);
 $skills=$skills1." ".$skills2." ".$skills3." ".$skills4;
 $percent1=mysqli_real_escape_string($conn,$_POST['10percent']);
 $percent2=mysqli_real_escape_string($conn,$_POST['12percent']);
 $pass_year=mysqli_real_escape_string($conn,$_POST['pass_year']);
 $gpa=mysqli_real_escape_string($conn,$_POST['gpa']);
 $back=mysqli_real_escape_string($conn,$_POST['back']);
 $id=mysqli_real_escape_string($conn,$_POST['id']);
 $photo=$_FILES['photo'];
 $filename=$photo['name'];
 $filepath=$photo['tmp_name'];
 $fileerror=$photo['error'];
 
 if($fileerror==0){
     $destfile='Image/'.$filename;
     move_uploaded_file($filepath,$destfile);
 }
$pass=password_hash($password,PASSWORD_BCRYPT);
$cpass=password_hash($cpassword,PASSWORD_BCRYPT);

$emailquery="select * from registration where Email='$email'";
$equery=mysqli_query($conn,$emailquery);
$emailcount=mysqli_num_rows($equery);
if($emailcount>0){
    ?>
    <script>
        alert("Email already exist");
    </script>
    
    <?php
}
else{
    if($password===$Cpassword){
    $insertquery="insert into registration(ID,FirstName,LastName,DOB,Email,Gender,Branch,percent10,percent12,PassYear,GPA,Back,Semester,Skills,Img,password,Cpassword)
    values('$id','$fname','$lname','$age','$email','$gender','$branch','$percent1','$percent2','$pass_year','$gpa','$back','$semester','$skills','$destfile','$pass','$cpass')";
    $query=mysqli_query($conn,$insertquery);
    if($query){
        ?>
        <script>
            alert("Data inserted Successfully");
        </script>

         <script>
             location.replace("index.php");
         </script>
         <?php
    }
    else{
        ?>
        <script>
            alert("Data not inserted Successfully");
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