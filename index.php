<!DOCTYPE html>
<html lang="en">
<head>

    <title>Placement Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
     integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" 
     integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <link href="./css/decor.css" rel="stylesheet">
</head>
<body>
  


<section id="colored-section"  class="gradient-background">

    <div class="container-fluid">

     <nav class="navbar navbar-expand-lg  ">  
        <div class="container-fluid">
          <a class="navbar-brand" href="https://cpo.cusat.ac.in">PLACEMENT</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="https://cusat.ac.in">HOME</a>
              </li>
              
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  COMPANY
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="companyregiter.php">Registration</a></li>
                  <li><a class="dropdown-item" href="companylogin.php">SignIn</a></li>
        
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  STUDENT
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="studentregister.php">Registration</a></li>
                  <li><a class="dropdown-item" href="SignIn.php">SignIn</a></li>

                </ul>
              </li>
              <li class="nav-item">
                <!-- <a class="nav-link disabled" href="https://cusat.ac.in">About Cusat</a> -->
                <!-- <a class="nav-link disabled" href="https://cpo.cusat.ac.in">Cusat</a> -->
              </li>
            </ul>
            <form class="d-flex" role="search">
              <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
              <!-- <button class="btn btn-outline-success" type="submit">Search</button> -->
              <button class="btn btn-success" type="submit">Search</button>
            </form>
          </div>
        </div>
      </nav>

<div class="abc" >
<div class="container col-xl-10 col-xxl-8 px-4 py-5">
    <div class="row align-items-center g-lg-5 py-5">
      <h1 class="upper">Placement Management System @ CUSAT </h1>
        
      
      
      
        <div class="col-lg-7 text-center text-lg-start">
        <h1 class="display-4 fw-bold lh-1 text-body-emphasis mb-3">Placement Management System Login Page</h1>
        <p class="col-lg-10 fs-4">This is the site for registration of various departments for the placement session of 2023-24</p>
      </div>
      <div class="col-md-10 mx-auto col-lg-5">
        <form class="p-4 p-md-5 border rounded-3 bg-body-tertiary" action="<?php $_SERVER['PHP_SELF'] ?>" method="post">
        <p style="padding-left:4rem; font-weight:bold;font-size:20px;">Admin Login</p>
          <div class="form-floating mb-3">
            <!-- <p>Admin Login</p> -->
            <input type="email" class="form-control" name="mail" id="floatingInput" placeholder="name@example.com" fdprocessedid="h6isjw">
            <label for="floatingInput">Email address</label>
          </div>
          <div class="form-floating mb-3">
            <input type="password" class="form-control" name="pass" id="floatingPassword" placeholder="Password" fdprocessedid="m255ba">
            <label for="floatingPassword">Password</label>
          </div>
          <div class="checkbox mb-3">
            <label>
              <input type="checkbox" value="remember-me">Remember me
            </label>
          </div>
          <br>
          <br>
          <button class="w-100 btn btn-lg btn-primary" name="submit" type="submit" fdprocessedid="zbez7l">Sign In</button>
          <hr class="my-4">
          <small class="text-body-secondary">By clicking Sign up, you agree to the terms of use.</small>
        </form>
      </div>
    </div>
  </div>


</div>
</section>

<section id="courosel" class="abc">
<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide mt-5">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="home.jpg" class="d-block w-100" alt="home0">
          </div>
          <div class="carousel-item">
            <img src="placement2.jpg" class="d-block w-100" alt="photo">
          </div>

<!-- helolo -->
          <div class="carousel-item">
            <img src="home0.jpg" class=" cusatphoto d-block w-100" alt="photo">
          </div>
<!-- hello -->

          <div class="carousel-item">
            <img src="home.jpg" class="d-block w-100" alt="photo2">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
      </section>



    <section class="container px-4 py-5" id="hanging-icons">
        <h2 class="pb-2 border-bottom">Key features</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
          <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-universal-access" viewBox="0 0 16 16">
                    <path d="M9.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0ZM6 5.5l-4.535-.442A.531.531 0 0 1 1.531 4H14.47a.531.531 0 0 1 .066 1.058L10 5.5V9l.452 6.42a.535.535 0 0 1-1.053.174L8.243 9.97c-.064-.252-.422-.252-.486 0l-1.156 5.624a.535.535 0 0 1-1.053-.174L6 9V5.5Z"/>
                  </svg>
            </div>
            <div>
              <h3 class="fs-2">Easy Access</h3>
              <p>Placement management system enables you to plan placements, train students in accordance with relevant market demands, organize placement drives, and allow companies to recruit students.The placement software takes complete control of any college’s placement efforts right from nurturing an employer to hiring from an institute to training, evaluation, and job fitment.</p>
              <a href="#" class="btn btn-primary">
                placement portal
              </a>
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">


                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-microsoft-teams" viewBox="0 0 16 16">
                    <path d="M9.186 4.797a2.42 2.42 0 1 0-2.86-2.448h1.178c.929 0 1.682.753 1.682 1.682v.766Zm-4.295 7.738h2.613c.929 0 1.682-.753 1.682-1.682V5.58h2.783a.7.7 0 0 1 .682.716v4.294a4.197 4.197 0 0 1-4.093 4.293c-1.618-.04-3-.99-3.667-2.35Zm10.737-9.372a1.674 1.674 0 1 1-3.349 0 1.674 1.674 0 0 1 3.349 0Zm-2.238 9.488c-.04 0-.08 0-.12-.002a5.19 5.19 0 0 0 .381-2.07V6.306a1.692 1.692 0 0 0-.15-.725h1.792c.39 0 .707.317.707.707v3.765a2.598 2.598 0 0 1-2.598 2.598h-.013Z"/>
                    <path d="M.682 3.349h6.822c.377 0 .682.305.682.682v6.822a.682.682 0 0 1-.682.682H.682A.682.682 0 0 1 0 10.853V4.03c0-.377.305-.682.682-.682Zm5.206 2.596v-.72h-3.59v.72h1.357V9.66h.87V5.945h1.363Z"/>
                  </svg>

                </div>
            <div>
              <h3 class="fs-2">Effective Management </h3>
              <p>Easy access is one of the key feature in which user can access the system in one click. The complete data will be in finger tips.It can be easily accessed anytime and from anywhere across the world.This enable the user to not worry about the data.The placement management system creates databases of students, and companies can use these to access details of students who qualify the company’s criteria.</p>
              <a href="#" class="btn btn-primary">
              about
              </a>
            </div>
          </div>
          <div class="col d-flex align-items-start">
            <div class="icon-square text-body-emphasis bg-body-secondary d-inline-flex align-items-center justify-content-center fs-4 flex-shrink-0 me-3">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-reception-4" viewBox="0 0 16 16">
                    <path d="M0 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-2zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-5zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-8zm4-3a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v11a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-11z"/>
                  </svg>
            </div>
            <div>
              <h3 class="fs-2">Data Management</h3>
              <p>In a complete placement data management system, the placement cell will have the power of data in one place. Your placement cell can quickly maintain each student's academic information, such as semester results, assignments, attendance, and demographic information. A recruiter, on the other hand, can easily view this information during placements with a single click. The whole team will have a compact student database alongside student information for future reference.</p>
              <a href="#" class="btn btn-primary">
                Alumini
              </a>
            </div>
          </div>
        </div>
      </div>
</section>



<section id="footer"  class="gradient-background">

  <div class="container">
    <footer class="row row-cols-1 row-cols-sm-2 row-cols-md-5 py-5 mt-5">
      <div class="col mb-3">
       
        <p class="text-body-secondary">© CUSAT PLACEMENT CELL</p>
      </div>
  
      <div class="col mb-3">
  
      </div>
  
      <div class="col mb-3">
        <h5>Navigation</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
          <li class="nav-item mb-2"><a href="#colored-section" class="nav-link p-0 text-body-secondary">Login</a></li>
          <li class="nav-item mb-2"><a href="#courosel" class="nav-link p-0 text-body-secondary">Images</a></li>
          <li class="nav-item mb-2"><a href="#hanging-icons" class="nav-link p-0 text-body-secondary">Key Features</a></li>
          <li class="nav-item mb-2"><a href="#footer" class="nav-link p-0 text-body-secondary"></a></li>
        </ul>
      </div>
  
      <div class="col mb-3">
        <h5>Company</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="companylogin.php" class="nav-link p-0 text-body-secondary">Login</a></li>
          <li class="nav-item mb-2"><a href="companyregiter.php" class="nav-link p-0 text-body-secondary">Registeration</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
          
        </ul>
      </div>
  
      <div class="col mb-3">
        <h5>Admin</h5>
        <ul class="nav flex-column">
          <li class="nav-item mb-2"><a href="companylogin.php" class="nav-link p-0 text-body-secondary">Login</a></li>
          <li class="nav-item mb-2"><a href="studentregister.php" class="nav-link p-0 text-body-secondary">Registeration</a></li>
          <li class="nav-item mb-2"><a href="#" class="nav-link p-0 text-body-secondary">Home</a></li>
          
        </ul>
      </div>
    </footer>
  </div>

</section>
</body>

</html>

<?php
include 'connection.php';
if($_SERVER['REQUEST_METHOD']=='POST'){
    $email=$_POST['mail'];
    $pass=$_POST['pass'];

    $emailsearch="select * from admin where Email='$email'";
    $query=mysqli_query($conn,$emailsearch);

    $emailcount=mysqli_num_rows($query);
    if($emailcount){
        $email_pass=mysqli_fetch_assoc($query);
        $dbpass=$email_pass['password'];
        // $_SESSION['Id']=$email_pass['ID'];
        $pass_decode=password_verify($pass,$dbpass);
        if($pass_decode){
            ?>
            <script>
                alert("Login successfully");
            </script>
                <script>
                    location.replace("ad_portal.php");
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
