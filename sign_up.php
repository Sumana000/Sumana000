<?php
session_start();
if (isset($_SESSION["user"])) {
   header("Location: home.php");
}
?>
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

        <div class="container1 bg-light">
        <div class="form-container">
                <h2>Sign Up</h2>
        
        <!-- data insert in database -->
        <?php
        if (isset($_POST["submit"])) {
           $fullName = $_POST["fullname"];
           $email = $_POST["email"];
           $password = $_POST["password"];
           $passwordRepeat = $_POST["repeat_password"];
           
           $passwordHash = password_hash($password, PASSWORD_DEFAULT);

           $errors = array();
           
           if (empty($fullName) OR empty($email) OR empty($password) OR empty($passwordRepeat)) {
            array_push($errors,"All fields are required");
           }
           if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            array_push($errors, "Email is not valid");
           }
           if (strlen($password)<8) {
            array_push($errors,"Password must be at least 8 charactes long");
           }
           if ($password!==$passwordRepeat) {
            array_push($errors,"Password does not match");
           }
           require_once "database.php";
           $sql = "SELECT * FROM users WHERE email = '$email'";
           $result = mysqli_query($conn, $sql);
           $rowCount = mysqli_num_rows($result);
           if ($rowCount>0) {
            array_push($errors,"Email already exists!");
           }
           if (count($errors)>0) {
            foreach ($errors as  $error) {
                echo "<div class='alert alert-danger'>$error</div>";
            }
           }else{
            
            $sql = "INSERT INTO users (full_name, email, password) VALUES ( ?, ?, ? )";
            $stmt = mysqli_stmt_init($conn);
            $prepareStmt = mysqli_stmt_prepare($stmt,$sql);
            if ($prepareStmt) {
                mysqli_stmt_bind_param($stmt,"sss",$fullName, $email, $password);
                mysqli_stmt_execute($stmt);
                echo "<div class='alert alert-success'>You are registered successfully.</div>";
            }else{
                die("Something went wrong");
            }
           }
          

        }
        ?>
        <!-- end data insert -->
        <form action="sign_up.php" method="post">
            <input type="text" class="form-control" name="fullname" placeholder="Full Name:">
            <input type="emamil" class="form-control" name="email" placeholder="Email:">
            <input type="password" class="form-control" name="password" placeholder="Password:">
            <input type="password" class="form-control" name="repeat_password" placeholder="Confirm Password:">
            <input type="submit" value="Register" name="submit" class="btn">
        </form>
        <div>
        <div><p>Already Registered <a href="sign_in.php">Login Here</a></p></div>
      </div>
      </div>
      </div>


  
<!-- Footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>