<?php
$showAlert="";
$showError="";
if($_SERVER["REQUEST_METHOD"]== "POST"){
  $showAlert= false;
  $showError = false;
  include '_dbconnect.php';
  $username = $_POST["username"];
  $password = $_POST["password"];
  $cpassword = $_POST["cpassword"];
  //$exists= false;
  $existSql = "SELECT * FROM `users` WHERE username = '$username'";
  
  $result = mysqli_query($conn, $existSql);
  $numExistRow = mysqli_num_rows($result);
  if($numExistRow > 0){
  //$exists= true;
    $showError = " username already exist";
  }
  
  else{
    $exists = false;
  

  if(($password==$cpassword)){
      $sql = "INSERT INTO `users` ( `username`, `password`, `dt`) VALUES ( '$username', '$password', current_timestamp());";
      $result = mysqli_query($conn, $sql);
      if($result){
        $showAlert= true; 
      }
  }
  else{
    $showError = "Passwords do not match";
  }
  }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="CSS/index.css">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Sign Up</title>
    <link rel="icon" href="icons/title-icon.png" type="image/icon type">
  </head>
  <body>
    <header> 
        <nav class="nav-fill navbar navbar-expand-lg navbar-light">
          <div class="container-fluid ">
            <a class="navbar-brand" href="#">
              <img src="icons/logo.png" alt="" width="240" height="120">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
              aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class=" justify-content-end collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav justify-content-end">
                <li class="nav-item ms-5">
                  <a class="nav-link" aria-current="page" href="index.php">Home</a>
                </li>
                <li class="nav-item ms-5">
                  <a class="nav-link" href="trips.php">Trips</a>
                </li>
                <li class="nav-item ms-5">
                  <a class="nav-link" href="about.php">About Us</a>
                </li>
                <a href="signin.php">
                    <button class="btn ms-5 btn-primary">Sign In</button>
                </a>
               
              </ul>
            </div>
          </div>
        </nav>

        <?php
        if($showAlert){
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong>Your account is created and you can sign-in .
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }

        if($showError){
          echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
              <strong>Error!</strong>'.$showError.' .
              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>';
          }
        ?>

      </header>
    <section class="vh-100" style="background-color: #eee;">
        <div class="container h-100">
          <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-lg-12 col-xl-11">
              <div class="card text-black" style="border-radius: 25px;">
                <div class="card-body p-md-5">
                  <div class="row justify-content-center">
                    <div class="col-md-10 col-lg-6 col-xl-5 order-2 order-lg-1">
      
                      <p class="text-center h1 fw-bold mb-5 mx-1 mx-md-4 mt-4">Sign up</p>
      
                      <form class="mx-1 mx-md-4" action="signup.php" method="post">
      
                        
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-envelope fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="email" id="username" name="username" class="form-control" />
                            <label class="form-label" for="username">Your Email</label>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-lock fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="password" name="password" class="form-control" />
                            <label class="form-label" for="password">Password</label>
                          </div>
                        </div>
      
                        <div class="d-flex flex-row align-items-center mb-4">
                          <i class="fas fa-key fa-lg me-3 fa-fw"></i>
                          <div class="form-outline flex-fill mb-0">
                            <input type="password" id="cpassword" name="cpassword" class="form-control" />
                            <label class="form-label" for="cpassword">Confirm password</label>
                          </div>
                        </div>
      
                        <div class="form-check d-flex justify-content-center mb-5" require>
                          <input
                            class="form-check-input me-2"
                            type="checkbox"
                            value=""
                            id="form2Example3c"
                          />
                          <label class="form-check-label" for="form2Example3">
                            I agree all statements in <a href="#">Terms of service</a>
                          </label>
                        </div>
      
                        <div class="d-flex justify-content-center mx-4 mb-3 mb-lg-4">
                          <button type="submit" class="btn btn-primary btn-lg">Register</button>
                        </div>
      
                      </form>
      
                    </div>
                    <div class="col-md-10 col-lg-6 col-xl-7 d-flex align-items-center order-1 order-lg-2">
      
                      <img src="pictures/signup.svg" class="img-fluid" alt="Sample image">
      
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    <!-- Optional JavaScript; choose one of the two! -->
      <br>
    <!-- Footer -->
 <footer class="bg-dark text-center text-white">
  <!-- Grid container -->
  <div class="container p-4">
    <!-- Section: Form -->
    <section class="">
      <form action="">
        <!--Grid row-->
        <div class="row d-flex justify-content-center">
          <!--Grid column-->
          <div class="col-auto">
            <p class="pt-2">
              <strong>Suggestions :</strong>
            </p>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-5 col-12">
            <!-- Email input -->
            <div class="form-outline form-white mb-4">
              <input type="email" id="form5Example21" class="form-control" />
              
            </div>
          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-auto">
            <!-- Submit button -->
            <button type="submit" class="btn btn-outline-light mb-4">
              Send
            </button>
          </div>
          <!--Grid column-->
        </div>
        <!--Grid row-->
      </form>
    </section>
    <!-- Section: Form -->

    <!-- Section: Text -->
    <section class="mb-4">
      <p>
        Travel Buddy website is developed by a team of Full Stack Development interns.
      </p>
    </section>
    <!-- Section: Text -->

    <!-- Section: Links -->
    <section>
      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="container-fluid col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Office</h5>
          KLEIT, Gokul Road <br>
          Opp Airport Road, Hubballi, <br>
          Karnataka, PIN 580032 <br>
          India.
        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="container-fluid col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Go to</h5>

          <ul class="list-unstyled mb-0">
            <li>
              <a href="#!" class="text-white">Home</a>
            </li>
            <li>
              <a href="#!" class="text-white">Trips</a>
            </li>
            <li>
              <a href="#!" class="text-white">About Us</a>
            </li>
          </ul>
        </div>
        <!--Grid column-->
      </div>
      <!--Grid row-->
    </section>
    <!-- Section: Links -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright | Travel Buddy
    
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>