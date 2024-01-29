<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style1.css">
      <!-- Icon Font Stylesheet -->
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.0/css/all.min.css" rel="stylesheet">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
      <link rel="stylesheet" href="styles.css">
    <style>
      footer{
        background-color:rgb(236, 240, 240);
      }
    </style>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg fs-4">
        <div class="container">
          <a class="navbar-brand text-black" href="#"><i class="bi bi-question-diamond-fill"></i>JobQuest</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link" href="home.php">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="home.php#about">About</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link" href="home.php#service">
                  Services
                </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="home.php#footer1">Contact</a>
              </li>
            </ul>
            <form class="d-flex">
              <button class="bt0 rounded fs-5" onclick="loadPage('sign-up')"><a href="sign_up.php" style="display: inline-block; text-decoration: none;color: black; ">Register</a></button>
              &nbsp;
              <button class="bt1 rounded fs-5" onclick="loadPage('sign-in')"><a href="sign_in.php" style="display: inline-block; text-decoration: none;color: black;">Login</a></button>
            </form>
          </div>
        </div>
      </nav>

      <section class="main">
         <div class="container-fluid py-5 mb-5 bg-light">
        <div class="container py-5">
            <div class="row justify-content-start">
                <div class="col-lg-8 text-center text-lg-start">
                    <h4 class="d-inline-block display-6 text-uppercase border-bottom border-5">Welcome To
                        JobQuest</h4>
                    <h5 style="text-align: justify;">JobQuest is an interactive job poll website where users share insights
                         through surveys, contributing to a comprehensive understanding of job 
                         market dynamics and preferences.</h5>
                </div>
            </div>
        </div>
    </div>
    <!-- About Start -->
    <div class="container-fluid py-5" id="about">
      <div class="container">
          <div class="row gx-5">
              <div class="col-lg-5 mb-5 mb-lg-0">
                  <div class="position-relative h-100">
                      <img class="position-absolute w-100 h-100 rounded"src="bgimage.jpg"style="object-fit: cover;">
                  </div>
              </div>
              <div class="col-lg-7">
                  <div class="mb-4">
                      <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">About Us</h5>
                      <h1 class="display-4">We intend to make life easier by providing a user-friendly platform.
                      </h1>
                  </div>
                  <p style="text-align: justify;">JobQuest is your all-in-one solution, combining a seamless job search experience with insightful market
                     trends. Navigate effortlessly through job postings while contributing to a dynamic understanding of 
                     employment landscapes, ensuring a simplified and informed journey for you and your family.
                  </p>

              </div>
          </div>
      </div>
  </div>
  <!-- About End -->
  <!-- Services Start -->
  <div class="container-fluid py-5" id="service">
    <div class="container">
        <div class="text-center mx-auto mb-5" style="max-width: 500px;">
            <h5 class="d-inline-block text-primary text-uppercase border-bottom border-5">Services</h5>
            <h1 class="display-4">Our Services</h1>
        </div>
        <div class="row g-5 align-items-center justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div
                    class="service-item bg-light rounded d-flex flex-column align-items-center justify-content-center text-center">
                    <div class="service-icon mb-4 text-white fa-2x">
                        <i class="fas fa-female"></i>
                    </div>
                    <h4 class="mb-3">Search Job</h4>
                    <p class="m-0">Here You will find your job</p>
                    <a href="service.php" class="btn btn-outline-white shadow-lg text-black m-3 p-3 rounded-3"
                        style="background-color:#13C5DD">Search
                        Job</a>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- Services End --> </section>
<!-- Footer Start -->
<div class="container-fluid bg-light text-light mt-5 py-5" id="footer1">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-lg-4 col-md-6">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">
                    Get In Touch</h4>
                <p class="mb-4 fs-4">JobQuest</p>

                <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>admin@gmail.com</p>
                <p class="mb-0"><i class="fa fa-phone-alt text-primary me-3"></i>+88 01792492722</p>
            </div>
            <!-- qucik links -->
            <div class="col-lg-4 col-md-6">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">
                    Quick Links</h4>
                <div class="d-flex flex-column justify-content-start">
                    <a class="text-dark mb-2" href="home.php"><i class="fa fa-angle-right me-2"></i>Home</a>
                    <a class="text-dark mb-2" href="home.php#about"><i class="fa fa-angle-right me-2"></i>About
                        Us</a>
                    <a class="text-dark mb-2" href="home.php#service"><i class="fa fa-angle-right me-2"></i>Our
                        Services</a>
                </div>
            </div>
            <!-- contact section -->
            <div class="col-lg-4 col-md-6">
                <h4 class="d-inline-block text-primary text-uppercase border-bottom border-5 border-secondary mb-4">
                    Contact Us</h4>
                <form id="messageForm" method="POST"> <!--send message -->
                    <textarea class="form-control p-3 border-5" id="message" name="message"
                        placeholder="Your Message" required></textarea>
                    <input class="mt-2 btn btn-primary" type="submit" value="Send">
                </form>

                <h6 class="text-primary text-uppercase mt-4 mb-3">Follow Us</h6>
                <div class="d-flex">
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i
                            class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i
                            class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle me-2" href="#"><i
                            class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg btn-primary btn-lg-square rounded-circle" href="#"><i
                            class="fab fa-instagram"></i></a>
                </div>
            </div>
        </div>
      
    </div>
</div>
<!-- Footer End -->

<!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>