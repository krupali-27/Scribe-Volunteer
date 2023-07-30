<!-- Section: Design Block -->
<?php
require_once "connection.php";
?>
<html>
<head>

        <meta charset="utf-8">
        <title>Scribe Vlounteer</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="Free HTML Templates" name="keywords">
        <meta content="Free HTML Templates" name="description">

        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700;800&family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">

        <!-- Icon Font Stylesheet -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">

        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">


<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
  <style>
    .background-radial-gradient {
      background-color: hsl(218, 41%, 15%);
      background-image: radial-gradient(650px circle at 0% 0%,
          hsl(218, 41%, 35%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%),
        radial-gradient(1250px circle at 100% 100%,
          hsl(218, 41%, 45%) 15%,
          hsl(218, 41%, 30%) 35%,
          hsl(218, 41%, 20%) 75%,
          hsl(218, 41%, 19%) 80%,
          transparent 100%);
    }

    #radius-shape-1 {
      height: 220px;
      width: 220px;
      top: -60px;
      left: -130px;
      background: radial-gradient(#06A3DA, hsl(218, 41%, 30%));
      overflow: hidden;
    }

    #radius-shape-2 {
      border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
      bottom: -60px;
      right: -110px;
      width: 300px;
      height: 300px;
      background: radial-gradient(#06A3DA, hsl(218, 41%, 30%));
      overflow: hidden;
    }

    .bg-glass {
      background-color: hsla(0, 0%, 100%, 0.9) !important;
      backdrop-filter: saturate(200%) blur(25px);
    }
  </style>
  
  
  </head>

  <body>

  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">

            <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 sticky-top shadow-sm" >
              <a href="index.html" class="navbar-brand p-0">
                  <h1 class="m-0"><img src="img/logo1.png" alt="logo"/>Scribe Vlounteer</h1>
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                  <span class="fa fa-bars"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <div class="navbar-nav ms-auto py-0">
                      <a href="index.php" class="nav-item nav-link" style="color: #091E3E;">Home</a>
                      <a href="../about.html" class="nav-item nav-link">About</a>
                      <a href="../service.html" class="nav-item nav-link">Services</a>
                      <a href="../contact.html" class="nav-item nav-link">Contact</a>
                      <div class="nav-item dropdown">
                          <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">Login</a>
                          <div class="dropdown-menu m-0">
                              <a href="login(s).php" class="dropdown-item">Scribe </a>
                              <a href="login(h).php" class="dropdown-item">Handicap</a>
                          </div>
                      </div>
                      
                      
                  </div>
              </div>
          </nav>
          </div> 
        </div>


  <section class="overflow-hidden">
  <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(220, 74%, 27%)">
          Login for  <br />
          <span style="color: hsl(220, 74%, 27%)">Scribe</span>
        </h1>
        <p class="mb-4 opacity-70" style="color: hsl(219, 61%, 46%)">
          Our aim is to make a portal that provides scribe(write) to 
          handicap people without any extra efforts. Handicap people 
          can upload schedules for their exams. According to that a 
          person who wants to be a scribe will accept the request.
        </p>
      </div>

      <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
        <div id="radius-shape-1" class="position-absolute rounded-circle shadow-5-strong"></div>
        <div id="radius-shape-2" class="position-absolute shadow-5-strong"></div>
        
         

        
            
            
          

    <div class="card bg-glass">
      <div class="card-body px-4 py-5 px-md-5">    
        <div class="col-lg-14">
          <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">        
            <form method="post" action="login_action.php">
                <div class="row g-3">
                    <div class="col-12">
                        <h5 class="text-white mb-0">User Name </h5>
                        <input type="email" name="emailid" class="form-control bg-light border-0" placeholder="Your Email" style="height: 50px;" required>
                    </div>
                    <div class="col-12">
                        <h5 class="text-white mb-0">Password </h5>
                        <input type="password" name="pass" class="form-control bg-light border-0" placeholder="Enter Password" style="height: 50px;" required>
                    </div>
                    
                    <div class="col-12">
                        
                        <button class="btn btn-dark w-100 py-3" name="loginbtn" id="loginbtn" type="submit" >Login </button>
                    </div> 
                    <div class="col-12">
                        <p style="color:white;">Not registered? <a href="registration(s).php" style="color: white; text-decoration: underline;">Registration</a></p>
                    </div>
                  </div>
                </form>
              </div>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Section: Design Block -->
  </body>
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
    </html>