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

      <main id="main-content">
        <section class="main">
          <div class="container">
              <div class="row">
                  <div class="col text-center">
                      <h3>
                          Find The Most
                          Exciting <br>
                          Startup Jobs
                      </h3>
                      <input class="mt-5"type="text" placeholder="Job title or keyword" id="search1">
                  </div>
              </div>
          </div>
        </section>
        
      </main>
      <div id="searchresult">
        </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
 
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <!-- ajax code for live datasearch -->
    <script type="text/javascript">
     
        $(document).ready(function () {
            $("#search1").keypress(function () {
                $.ajax({
                    type: 'POST',
                    url: 'fetch.php',
                    data: {
                        name: $("#search1").val(),
                    },
                    success: function (data) {
                        $("#searchresult").html(data);
              
                    }
                });
            });
        });
    </script> 
  </body>
</html>