<?php
$login = false;
$showError = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '_dbconnect.php';
    $username = $_POST["username"];
    $password = $_POST["password"]; 
    
     
    $sql = "Select * from users where username='$username' AND password='$password'";
    $result = mysqli_query($conn, $sql);
    $num = mysqli_num_rows($result);
    if ($num == 1){
        $login = true;
        session_start();
        $_SESSION['loggedin'] = true;
        $_SESSION['username'] = $username;
        header("location: trips.php");

    } 
    else{
        $showError = "Invalid Credentials";
    }
}
    
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/signin.css">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <title>Login | Travel Buddy</title>
    <link rel="icon" href="icons/title-icon.png" type="image/icon type">
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
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
                <a href="signup.php">
                <button type="button" class="btn btn-warning">sign-up</button></a>
              </ul>
            </div>
          </div>
        </nav>

        <?php
        if($login){
        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong>You are successfully logged-in .
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
        <div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>User Login</h3>
                    <form action="signin.php" method="post">
                        <div class="form-group">
                            <input type="email" id="username" name="username" class="form-control" placeholder="Your Email *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" id="password" name="password" class="form-control" placeholder="Your Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                            <br>
                            <b>
                              <a href="signup.php">New User? Signup here</a>
                            </b>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Admin Login</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Admin ID *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Password *" value="" />
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    <!-- Optional JavaScript; choose one of the two! -->
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