<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Company Page</title>
    <link rel="stylesheet" href="copy.css" type="text/css">
</head>
<body>
    <div id="headm">
<div class="head">
    <h2>Placement Management System @CUSAT</h1>
    <h1 class="second_heading"><centre>Company Portal</centre></h2>
    </div>
    <div id="but">
    <a href="index.php" id="home"><button type="submit"  name="save" class="btn">Log out</button></a>
    </div>
    </div>
    <main>
        
         
        <div id="head_of">
            <h3>Welcome to Placement Management Cell of our College</h3><br><br>
            <?php
            include 'connection.php';
            $compid=$_SESSION['Comp_id'];
            $selectquery ="select * from company where CompID='$compid'";
            $query =mysqli_query($conn, $selectquery);
            $res=mysqli_fetch_array($query);
            $result=$res['Bool'];
            if($result==="False"){
                ?>
            <p>Status: Pending</p>
            <?php
            }
            else{
                ?>
                <p>Status:Approved</p>
                <?php
                }
                ?>
        </div>
        <div id="centre">
            <?php
            if($result==="True"){
                ?>
            <a href="add_detail.php">
            <button type="submit"  id="btn1">Add Details</button>
            </a>
            <?php
            }
            else{
                ?>
                <script>
                    alert("Company is Not Verified");
                </script>
                <?php
                }
            ?>
        </div>
        <div id="note">
            <p>Note: If you are visiting our college for placement this year then click on <span id="bold">add details</span> to add the necessary details prior visiting the college. We appreciate your fully cooperation in college and sharing required details........</p>
        </div>
    </main>
</body>
</html>