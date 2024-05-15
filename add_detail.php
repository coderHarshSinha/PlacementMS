<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company Details</title>
    <link rel="stylesheet" href="file2.css" type="text/css">
</head>

<body>
    <div class="img-back">
    <div id="headm">
    <div class="head">
    <h2>Placement Management System @CUSAT</h1>
    </div>
    <div id="but">
    <a href="index.php" id="home"><button type="submit"  name="save" class="btn">Log out</button></a>
    </div>
    </div>
        <main>
            <div id="c-reg">

                <p>
                    Details from Company
                </p>
                <form action="<?php $_SERVER['PHP_SELF'] ?>"  method="post">
                    
                    <!-- <div id="for-input">
                        <label for="C-name">Comapny Name</label>
                        <input type="text" id="C-name" name="Company Name">
                    </div> -->
                    <!-- <div id="for-input">
                        <label for="c_type">Company Type</label>
                        <select name="c_type" id="c_type">
                            <option value="Placement">Placemant</option>
                            <option value="Internship">Internship</option>
                        </select>
                    </div> -->
                    
                    <!-- <div id="for-input">
                        <label for="branch">Branch</label>
                        <select name="branch" id="branch">
                            <option value="Civil Engineering">Civil Engineering</option>
                            
                            <option value="Computer Science and Engineering">Computer Science and Engineering</option>
                            <option value="Electrical Engineering">Electrical Engineering</option>
                            <option value="Electronics and Comm Engineering">Electronics and Comm Engineering</option>
                            <option value="Information Technology Engineering">Information Technology Engineering</option>
                            <option value="Mechanical Engineering">Mechanical Engineering</option>
                            <option value="Safety & Fire Engineering">Safety & Fire Engineering</option>
                        </select>
                    </div> -->
                    
                    <div id="for-input">
                        <label for="gpa">Minimum CGPA</label>
                        <input type="text" id="gpa" name="min_gpa" required>
                    </div>
                    <div id="for-input">
                        <label for="back">Maximum Backlogs</label>
                        <input type="text" id="back" name="max_back" required>
                    </div>
                    <div id="for-input">
                        <label for="stipend">Minimum Stipent</label>
                        <input type="number" id="stipend" name="stipend" required>
                    </div>
                    <div id="for-input">
                        <label for="salary">Minimum Salary</label>
                        <input type="number" id="salary" name="salary" required>
                    </div>
                    <div id="for-input">
                        <label for="j_profile">Job Profile</label>
                        <input type="text" id="j_profile" name="j_profile" required>
                    </div>
                    <div id="for-input">
                        <label for="p_posting">Place of Posting</label>
                        <input type="text" id="p_posting" name="p_posting" required>
                    </div>
                    <div id="for-input">
                        <button type="submit" name="save" class="btn">Submit</button>
                    </div>
                    <p class="login">
                        Already added details?
                        <a href="after_login.php">Go Back</a>
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
    $min_gpa=mysqli_real_escape_string($conn,$_POST['min_gpa']);
    $max_back=mysqli_real_escape_string($conn,$_POST['max_back']);
    $stipend=mysqli_real_escape_string($conn,$_POST['stipend']);
    $salary=mysqli_real_escape_string($conn,$_POST['salary']);
    $j_profile=mysqli_real_escape_string($conn,$_POST['j_profile']);
    $p_posting=mysqli_real_escape_string($conn,$_POST['p_posting']);
    $compid=$_SESSION['Comp_id'];
    $updatequery="update company set MinGpa='$min_gpa',MaxBack='$max_back',Stipend='$stipend',Salary='$salary',Profile='$j_profile',Posting='$p_posting' where CompID='$compid' ";
    $uquery=mysqli_query($conn,$updatequery);
    
    if($uquery){
        ?>
        <script>
            alert("Data Added successfully");
        </script>
        <?php
    }
    else{
        ?>
        <script>
            alert("Data not Added properly");
        </script>
        <?php
    }
}
?>