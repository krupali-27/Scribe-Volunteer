<?php
    session_start();
    require_once "connection.php";
    ?>


<?php
    if(isset($_SESSION['uid']))
    {
?>



<!DOCTYPE html>
<html lang="en">
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


    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>handicap dashboard</title>
    
    <link rel="stylesheet" href="handicapdashboard.css">
    <link href="css/style.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">


    <style>
        #uploadt
        {
            border:2px solid black;
            width:100%;
        }
        #uploadt th
        {
            font-size:20px;
            background-color:#0a356c;
            color:white;
            font-weight:normal;
        }
        #pbtn
        {
            background-color:red;
            color:white;
            border:3px double black;
        }
        #pbtn:hover
        {
            color:black;
            height:35px;
            width:90px;
        }
        #uploadt tr:nth-child(even)
        {
            background-color:white;
        }
        #submit:hover
        {
            background-color:white;
            color:#0a356c;
            border:2px solid black;
            
        }
        .reset1:hover
        {
            background-color:white;
            color:#0a356c;
            border:2px solid black;
            
        }
        #profile
    {
        display: flex;
        justify-content:left ;
        align-items:left ;
        background-color:#06A3DA;
        color:white;
        font-family:Verdana, Geneva, Tahoma, sans-serif;
        margin:5px;
        font-size:20px;
        
    }
        

        </style>

</head>
<body style="background-color:#091E3E;">

<div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">

            <div class="container-fluid position-relative p-0">
            <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 sticky-top shadow-sm" >
              <a href="index.html" class="navbar-brand p-0"><img src="img/logo1.png" alt="not found" style="height:50px; width:50px;  float:left;">   
              <h1 class="m-0">Scribe Vlounteer</h1>               
              
              </a>
              <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                  <span class="fa fa-bars"></span>
              </button>
              <div class="collapse navbar-collapse" id="navbarCollapse">
                  <div class="navbar-nav ms-auto py-0">
                      <a href="../index.php" class="nav-item nav-link" style="color: #091E3E;">Home</a>
                      <a href="../about.php" class="nav-item nav-link">About</a>
                      <a href="../service.html" class="nav-item nav-link">Services</a>
                      <a href="../contact.php" class="nav-item nav-link">Contact</a>
                      <div class="nav-item dropdown ">
                          <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown"><?php echo $_SESSION['firstname'];?></a>
                          <div class="dropdown-menu m-0 ">
                              <a href="Scribe/login(s).php" class="dropdown-item">Scribe </a>
                              <a href="login(h).php" class="dropdown-item">Handicap</a>
                          </div>
                      </div>
                      
                      
                  </div>
              </div>
          </nav>
          </div> 
        </div>



    <div id="sidediv">
    <div id="profile"><p style="border:1.5px solid white;background-color:rgba(229, 217, 217, 0.235);padding:5px;">My Profile</p></div>
        <div id="imgdiv">
            <img src="img/userprofile.png" alt="ueserprofile"/>
        </div>
        <div id="detailsdiv">
            <table>
                <tr>
                    <td><p class="insidepara1">Name:</p></td>
                    <td><p class="insidepara1"><?php echo $_SESSION['firstname']." ". $_SESSION['lastname']; ?></p> </td>
                </tr>
                <tr>
                    <td><p class="insidepara1">Contact Number:</p></td>
                    <td><p class="insidepara1"><?php echo $_SESSION['contact']; ?> </p></td>
                </tr>
                <tr>
                    <td><p class="insidepara1">Email:</p></td>
                    <td><p class="insidepara1"> <?php echo $_SESSION['email']; ?> </p></td>
                </tr>
                
            </table>
        </div>   

        <div id="logoutdiv" style="position:absolute;
    bottom:100px; left:200px; ">
            <a href="../index.php"><button id="log" style="background-color:rgb(225, 99, 57); color:white; height:40px; width:100px; border-radius:20px; border:3px solid white;"> Logout
            </button></a></div>

    </div>
    <div id="maindiv">
        <div id="formdiv">
            <div id="formpara"><h1 style="  text-align:center;
    font-family:'Times New Roman', Times, serif;
    
    background-color:white;color:#0a356c;  ">Upload Schedule</h1></div>
             <form action="upload_exam.php" method="post">
                <table cellspacing="30px" cellpading="30px" >
                    <tr>
                        <td><label for="name">Name : </label></td>
                        <td><input type="text" name="hname" id="name" value="<?php echo $_SESSION['firstname'] ." ".$_SESSION['lastname']; ?>" ></td>
                        <td><label for="exd">Exam Name : </label></td>
                        <td><input type="text" name="exn" id="exn" placeholder="Enter exam name" required autofocus></td>
                    </tr>
                        
                    <tr>
                        <td><label for="excen">Exam Center : </label></td>
                        <td><textarea rows="3" columns="30" placeholder="Enter whole address of exam center including city,state" name="excn" id="excen" required ></textarea></td>
                        <td><label for="exn">Exam Date : </label></td>
                        <td><input type="date" name="exd" id="exd" min="2023-06-28" max="2023-12-31" required  ></td>
                    </tr>
                        
                    <tr>
                        <td><label for="elcri">Eligibility Criteria : </label></td>
                        <td><textarea rows="3" columns="30" placeholder="Enter all the criteria required to be eligible for exam" name="elcri" id="elcri" required></textarea></td>
                    </tr>
                </table> 
                    <div id="buttondiv">
                        <input type="submit" id="submit" name="sbtn" value="Upload" class="submit1" onclick="change()">
                        <input type="reset" value="Reset" class="reset1">
                    </div>
                </form>
        </div>    <br><br>
        <div id="uploadeddiv">
            <div id="uploadpara"><h1 style="  text-align:center;
    font-family:'Times New Roman', Times, serif;
    
    background-color:white;color:#0a356c;  ">Your Uploaded Schedule</h1></div>
           
           <?php
           $sql3="select * from exam_info where h_id='".$_SESSION['uid']."' order by e_date" ;
           $result=mysqli_query($conn,$sql3);
           echo "<table id='uploadt'  >";
           echo"<tr>"."<th>Name</th>"."<th>Exam Name</th>"."<th>Exam Center</th>"."<th>Exam Criteria</th>"."<th>Exam Date</th>"."<th>Status</th>"."</tr>";
           while($r=mysqli_fetch_assoc($result))
           {
               echo "<tr>";
               echo "<td style='color:#0a356c;'>".$r['h_name']."</td>";
               echo "<td>".$r['e_name']."</td>";
               echo "<td>".$r['e_address']."</td>";
               echo "<td>".$r['e_criteria']."</td>";
               echo "<td>".$r['e_date']."</td>";
               echo "<form action='profile.php' method='post' >";
               echo "<input type='hidden' name='s_id' value='".$r['s_id']."'/>";
               echo "<input type='hidden' name='e_id' value='".$r['e_id']."'/>";
               echo "<td> <input type='submit' name='pbtn' id='pbtn' value='".$r['status']."'>";
               echo "</form>";
               echo "</tr>";
           }
           echo "</table>";
                    ?>
        <script>
            console.log("after hello");
            var buttons=document.getElementsByName("pbtn");
            for(var i=0;i<buttons.length;i++)
            {
                if(buttons[i].value=="confirmed")
                {
                    buttons[i].style.backgroundColor="green";
                    buttons[i].style.border="3px double black";
                    
                }
            }
        </script>                

        </div>   
    </div>
    <?php
        include_once('footer.html');
    ?>

</body>
</html>


<?php
    }
    else
    {
        header('location:/login(h).php');
    }
?>