<!-- Section: Design Block -->


<?php
require_once "connection.php";

if(isset($_POST['firstname']))
{
    $fname= $_POST['firstname'];
    $lname= $_POST['lastname'];
    $email =  $_POST['emailid'];
    $contactno= $_POST['contactno'];
    $dob= $_POST['dob'];
    $gender= $_POST['gender'];
    $pass= $_POST['pass'];
    $pass2= $_POST['checkPass'];
    $errors = array();

    $e = array();
    $sql1 = mysqli_query($conn,"SELECT *FROM scribe1 WHERE 'emailid'='".$email."'");
    $n = mysqli_num_rows($sql1);
    if($n > 0)
    {
      array_push($e,"Email already exsist.");
    }
    
    $p1 = "/[a-z]/";
    $p2 = "/[A-Z]/";
    $p3 = "/\W/";

    if(strlen($pass)<=8)
    {
      if(preg_match($p1,$pass) != true)
      {
        if(preg_match($p2,$pass) != true)
        {
          if(preg_match($p3,$pass) != true)
          {
            array_push($errors, "Password must contain atleast one digit.");
          }
          array_push($errors, "Password must contain atleast one uppercase.");
        }
        array_push($errors, "Password must contain atleast one lowercase.");
      } 
      array_push($errors, "Password must have atleast 8 character.");
    }
    
    $p2 = array();
    if($pass2 != $pass)
    {
      array_push($p2 ,"Both field is not same.");
    }

    $d=array();
    $p4 = "/d{10}/";
    if(strlen($contactno) != 10)
    {
      array_push($d,"Number must be 10 digit.");
    }

    if( $errors == null && $p2 == null && $d == null && $e == null)
    {
            $sql = "INSERT INTO `scribe1`( `Fname`, `Lname`, `emailid`, `contactno`, `dob`, `gender`, `pass`) 
            VALUES ('$fname','$lname','$email','$contactno','$dob','$gender','$pass')";
        
            if($conn->query($sql)==true)
            {
                header("location: login(s).php");
            }
            else
            {
                echo "error";
            }
    }
    
    //mysqli_close($conn);
}
?>


<section class="overflow-hidden">
    
    <script type="text/javascript">
      
      
      
    </script>
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


  

  <link href="css/style.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">

  <!-- <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">

    <div class="container-fluid position-relative p-0">
    <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 sticky-top shadow-sm" >
      <a href="index.html" class="navbar-brand p-0">
          <h1 class="m-0"><i class="fa fa-user-tie me-2"></i>Scribe Vlounteer</h1>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
          <span class="fa fa-bars"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
          <div class="navbar-nav ms-auto py-0">
              <a href="index.html" class="nav-item nav-link active" style="color: #091E3E;">Home</a>
              <a href="about.html" class="nav-item nav-link">About</a>
              <a href="service.html" class="nav-item nav-link">Services</a>
              <a href="contact.html" class="nav-item nav-link">Contact</a>
              <div class="nav-item dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Login</a>
                  <div class="dropdown-menu m-0">
                      <a href="blog.html" class="dropdown-item">Scribe </a>
                      <a href="login(h).html" class="dropdown-item">Handicap</a>
                  </div>
              </div>
              
              
          </div>
      </div>
  </nav>
  </div> -->
<?php
include_once('header.html');?>

    <div class="row gx-lg-5 align-items-center mb-5">
      <div class="col-lg-6 mb-5 mb-lg-0" style="z-index: 10">
        <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(220, 74%, 27%)">
          Registration for  <br />
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
            
            <script src="js/log_in.js"></script>
    <div class="col-lg-14">
        <div class="bg-primary rounded h-100 d-flex align-items-center p-5 wow zoomIn" data-wow-delay="0.9s">        
            <form action="registration(s).php" id="form" method="post" >
          
                <div class="row g-3">
                
                    
                    
                    <div class="col-xl-12">
                        <h5 class="text-white mb-0">First Name</h5>
                        <input type="text" id="firstname" name="firstname" class="form-control bg-light border-0" placeholder="Your Name" style="height: 50px;" required>
                    </div>
                    <div class="col-xl-12">
                        <h5 class="text-white mb-0">Last Name</h5>
                        <input type="text" id="lastname" name="lastname" class="form-control bg-light border-0" placeholder="Your Name" style="height: 50px;" required>
                    </div>
                    <div class="col-12">
                        <h5 class="text-white mb-0">Email</h5>
                        <input type="email" id="emailid" name="emailid" class="form-control bg-light border-0" placeholder="Your Email" style="height: 50px;" required>
                    </div>

                    <?php
                        if(isset($e))
                        {
                          for($i=0;$i<count($e);$i++)
                          {
                            echo "<div class='col-xl-12'>";
                              
                              echo "<label class='form-control bg-light border-0' style='color:red;  '>".$e[$i]."</label>";
                              //echo '<input type="text" value='.$errors[$i].' id="error"  class="form-control bg-light border-0"  style="height: 50px;" >';  
                              echo "</div>";
                            
                          }
                        }
                    ?>

                    <div class="col-12">
                        <h5 class="text-white mb-0">Contact Number </h5>
                        <input type="text" id="contactno" name="contactno" class="form-control bg-light border-0" placeholder="Cantact Number" style="height: 50px;" required>
                    </div>
                    <?php
                        if(isset($d))
                        {
                          for($i=0;$i<count($d);$i++)
                          {
                            echo "<div class='col-xl-12'>";
                              
                              echo "<label class='form-control bg-light border-0' style='color:red;  '>".$d[$i]."</label>";
                              //echo '<input type="text" value='.$errors[$i].' id="error"  class="form-control bg-light border-0"  style="height: 50px;" >';  
                              echo "</div>";
                            
                          }
                        }
                    ?>
                    <div class="col-12">
                        <h5 class="text-white mb-0">Date Of Birth</h5>
                        <input type="date" id="dob" name="dob" max="2018-12-01" class="form-control bg-light border-0" placeholder="Date Of Birth" style="height: 50px;" required>
                    </div>
                    <div class="col-12">
                        <h5 class="text-white mb-0">Gender</h5>
                        <div class="col-12">
                          <h5 class="text-white mb-0">
                            <input type="radio" name="gender" value="m"/> Male
                          </h5>
                        </div>
                        <div class="col-12">
                          <h5 class="text-white mb-0">
                            <input type="radio" name="gender" value="f"/> Female
                          </h5>
                        </div>
                        <div class="col-12">
                          <h5 class="text-white mb-0">
                            <input type="radio" name="gender" value="o"/> Other
                          </h5>
                        </div>
                    </div>
                    <div class="col-12" id="pass">
                        <h5 class="text-white mb-0">Create Password</h5>
                        <input type="password" name="pass" id="pass"  class="form-control bg-light border-0" placeholder="Enter Password"  />
                      <br>
                    </div>
                    <?php
                      if(isset($errors))
                      {
                        for($i=0;$i<count($errors);$i++)
                        {
                          echo "<div class='col-xl-12'>";
                            
                            echo "<label class='form-control bg-light border-0' style='color:red;  '>".$errors[$i]."</label>";
                            //echo '<input type="text" value='.$errors[$i].' id="error"  class="form-control bg-light border-0"  style="height: 50px;" >';  
                            echo "</div>";
                          
                        }
                      }
                    ?>
                    
                    <div class="col-12">  
                        <h5 class="text-white mb-0">Confirm Password</h5>
                        <input type="password" name="checkPass" id="checkPass" class="form-control bg-light border-0"  placeholder="Enter Password" />
                        <span id='message'></span>
                    </div>
                    
                    <?php
                        if(isset($p2))
                        {
                          for($i=0;$i<count($p2);$i++)
                          {
                            echo "<div class='col-xl-12'>";
                              
                              echo "<label class='form-control bg-light border-0' style='color:red;  '>".$p2[$i]."</label>";
                              //echo '<input type="text" value='.$errors[$i].' id="error"  class="form-control bg-light border-0"  style="height: 50px;" >';  
                              echo "</div>";
                            
                          }
                        }
                    ?>

                    <div class="col-12">
                        
                        <input type="submit" class="btn btn-dark w-100 py-3" id="submit" name="submit" value="Registration"   />
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

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>