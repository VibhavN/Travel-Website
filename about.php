<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/about.css">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <title>About Us | Travel Buddy</title>
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
                <a class="nav-link active" href="about.php">About Us</a>
              </li>
              <a href="signin.php">
                  <button class="btn ms-5 btn-primary">Sign In</button>
              </a>
              <button type="button" class="btn btn-warning">Log Out</button>
            </ul>
          </div>
        </div>
      </nav>
    </header>
    <!-- Team -->
    <section id="team" class="pb-5">
      <div class="container">
          <b><h5 class="section-title h1">OUR TEAM</h5></b>
          <div class="row">
              <!-- Team member -->
              <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="image-flip" >
                      <div class="mainflip flip-0">
                          <div class="frontside">
                              <div class="card">
                                  <div class="card-body text-center">
                                      <p><img class=" img-fluid" src="pictures/vibhav-pic.jpg" alt="card image"></p>
                                      <h4 class="card-title">Vibhav Nesarikar</h4>
                                      <p class="card-text"> <b>Full Stack Web Dev Intern</b> <br> @ Tequed Labs</p>
                                      <i class="fa fa-align-justify" aria-hidden="true"></i>
                                  </div>
                              </div>
                          </div>
                          <div class="backside">
                              <div class="card">
                                  <div class="card-body text-center mt-4">
                                      <h4 class="card-title">Vibhav Nesarikar</h4>
                                      <p class="card-text">I am a Final Year CS Engineering student interested in Web Dev and UI Design. I have been self-learning and building in public. <br> Connect with me here. </p>
                                      <ul class="list-inline">
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://twitter.com/vibhav_n">
                                                  <i class="fa fa-twitter"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/vibhav-nesarikar-056125178/">
                                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://github.com/VibhavN">
                                                  <i class="fa fa-github"></i>
                                              </a>
                                          </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ./Team member -->
              <!-- Team member -->
              <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                      <div class="mainflip">
                          <div class="frontside">
                              <div class="card">
                                  <div class="card-body text-center">
                                      <p><img class=" img-fluid" src="pictures/sumanth-pic.jpg" alt="card image"></p>
                                      <h4 class="card-title">Sumanth Yattinahalli</h4>
                                      <p class="card-text"> <b>Full Stack Web Dev Intern</b> <br> @ Tequed Labs</p>
                                      <i class="fa fa-align-justify" aria-hidden="true"></i>
                                  </div>
                              </div>
                          </div>
                          <div class="backside">
                              <div class="card">
                                  <div class="card-body text-center mt-4">
                                      <h4 class="card-title">Sumanth Yattinahalli</h4>
                                      <p class="card-text">I am a Final Year Computer Science Engineering Student interested in Web Development and Python.</p>
                                      <ul class="list-inline">
                                        <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/sumanth-yattinahalli-89a122178/">
                                              <i class="fa fa-linkedin" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.instagram.com/avg_engineer_/">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                              </a>
                                          </li>
                                          
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ./Team member -->
              <!-- Team member -->
              <div class="col-xs-12 col-sm-6 col-md-4">
                  <div class="image-flip" ontouchstart="this.classList.toggle('hover');">
                      <div class="mainflip">
                          <div class="frontside">
                              <div class="card">
                                  <div class="card-body text-center">
                                      <p><img class=" img-fluid" src="pictures/vishal-pic.jpeg" alt="card image"></p>
                                      <h4 class="card-title">Vishal Kaliwal</h4>
                                      <p class="card-text"> <b>Full Stack Web Dev Intern</b> <br> @ Tequed Labs</p>
                                      <i class="fa fa-align-justify" aria-hidden="true"></i>
                                  </div>
                              </div>
                          </div>
                          <div class="backside">
                              <div class="card">
                                  <div class="card-body text-center mt-4">
                                      <h4 class="card-title">Vishal Kaliwal</h4>
                                      <p class="card-text">Hey folks, I'm a final year Computer Science Engineering Student, interested in Web Development and learning the same.</p>
                                      <ul class="list-inline">
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="https://www.linkedin.com/in/vishal-kaliwal-67044a174/">
                                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                              <a class="social-icon text-xs-center" target="_blank" href="mailto: kaliwalvishal@gmail.com">
                                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                              </a>
                                          </li>
                                          <li class="list-inline-item">
                                            <a class="social-icon text-xs-center" target="_blank" href="https://www.instagram.com/vishal_kaliwal/">
                                                <i class="fa fa-instagram" aria-hidden="true"></i>
                                            </a>
                                        </li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <!-- ./Team member -->

          </div>
      </div>
    </section>
    <!-- Team -->
    <!-- Optional JavaScript; choose one of the two! -->
    
  
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
    -->
  </body>
</html>