<!DOCTYPE html>
<html lang="en">
<head>
    <title>STUDENT REGISTRATION</title>
    <link rel="stylesheet" href="studentregistercss.css" type="text/css">

</head>
<body>

    <div id="headm">
    
    <div class="head">
    <h2>Placement Management System @CUSAT</h1>
    <h1 class="second_heading"><centre>Student Updation Page</centre></h2>
    </div>
    <div id="but">
    <a href="index.php" id="home"><button type="submit"  name="save" class="btn">Log out</button></a>
    </div>
    </div>
<div class="main">
    <div class="register"><h2><u>Update here</u></h2><br><br>
        <form action="<?php $_SERVER['PHP_SELF'] ?>"id="register" method="post" enctype="multipart/form-data">
    
<?php
include 'connection.php';

$ids = $_GET['Id'];
$showquery="select * from registration where ID={$ids}";
$showdata=mysqli_query($conn,$showquery);
$arrdata=mysqli_fetch_array($showdata);

if(isset($_POST['save'])){
 $idupdate=$_GET['Id'];
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$dob=$_POST['dob'];
$semester=$_POST['semester'];
$gender=$_POST['gender'];
$branch=$_POST['branch'];
$percent1=$_POST['10percent'];
$percent2=$_POST['12percent'];
$passyear=$_POST['passyear'];
$gpa=$_POST['gpa'];
$back=$_POST['back'];


$skills1=mysqli_real_escape_string($conn,$_POST['skills1']);
 $skills2=mysqli_real_escape_string($conn,$_POST['skills2']);
 $skills3=mysqli_real_escape_string($conn,$_POST['skills3']);
 $skills4=mysqli_real_escape_string($conn,$_POST['skills4']);
 $skills=$skills1." ".$skills2." ".$skills3." ".$skills4;

$query ="update registration set ID=$ids,FirstName='$fname',LastName='$lname', DOB='$dob',Gender='$gender',Skills='$skills',Branch='$branch',percent10='$percent1',percent12='$percent2',GPA='$gpa',PassYear='$passyear',Back='$back',
Semester='$semester' where ID=$idupdate";
$res=mysqli_query($conn,$query);
if($res){
    ?>
    <script>
        alert("Data updated successfully");
    </script>
    <script>
        location.replace("studentdata.php");
    </script>
    <?php
}
else{
    ?>
    <script>
        alert("Data not updated properly");
    </script>
    <?php
}
}
?>
        
        <label>First Name:</label>
            <input type="text" name="fname" class="name"
            placeholder="Enter your first name" value="<?php echo $arrdata['FirstName'] ?>"><br><br>
             <label>Last Name :</label>
             <input type="text" name="lname" class="name"
            placeholder="Enter your last name" value="<?php echo $arrdata['LastName'] ?>"><br><br>
            <label>DOB :</label>
            <input type="date" name="dob" class="name"
            placeholder="12/03/2002" value="<?php echo $arrdata['DOB'] ?>">
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
            <!-- <input type="text" name="branch"  class="name" id="branch"
            placeholder="Enter the branch" "> -->
            <select name="branch" id="branch" class="name"value="<?php echo $arrdata['Branch'] ?>">
             <option>Computer Science</option>
             <option>Information Technology</option>
             <option>Electric and Communication</option>
             <option>Electrical Engineering</option>
             <option>Civil Engineering</option>
             <option>Mechanical Engineering</option>
            </select>
            <br><br>
            <label>Semester</label>      
            <input type="number" min="1" max="8" name="semester" class="name" id="branch"
            placeholder="Enter the current semester" value="<?php echo $arrdata['Semester'] ?>"><br><br>
            <!-- //skills -->
            <label>10thPercent</label>
            <input type="number" min="0" max="100" name="10percent" class="name"
             value="<?php echo $arrdata['percent10'] ?>">
             <br><br>
             <label>12thPercent</label>
            <input type="number" min="0" max="100" name="12percent" class="name"
             value="<?php echo $arrdata['percent12'] ?>">
             <br><br>
             <label>Passing Year</label>
            <input type="text" name="passyear" class="name"
             value="<?php echo $arrdata['PassYear'] ?>">
             <br><br>
             <label>GPA</label>
             <br>
            <input type="text" min="0" max="10" name="gpa" class="name"
             value="<?php echo $arrdata['GPA'] ?>">
             <br><br>
             <label>BackLogs</label>
            <input type="text" name="back" class="name"
             value="<?php echo $arrdata['Back'] ?>">
             <br><br>
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
            <br>
            <input type="checkbox" name="skills4" id="skills" Value="JS">
            <span id="skills">JAVASCRIPT</span>
            <br><br>
           
            <input type="submit" value="Update" name="save" id="submit">
        </form>
    </div>    
</div>
    
</body>
</html>

