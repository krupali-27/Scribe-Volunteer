<?php
session_start();
require_once "connection.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Scribe dashboard</title>
    <link rel="stylesheet" href="handicapdashboard.css">
    <link href="css/style.css" rel="stylesheet">
  <link href="css/bootstrap.min.css" rel="stylesheet">


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

        <style>
            .tb1
            {
                
            }
            .tb1 tr td
            {
                padding-top: 5px;
                
                padding-left: 20px;
            }
            #formdiv
            {
                overflow:scroll;
            }
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
            /*background-color:red;
            color:white;*/
            height:40px;
            width:120px;
            border-radius:20px;
            font-family:Verdana, Geneva, Tahoma, sans-serif;
            background-color: #0a356c;
            color:white;
            margin:10px;
            border:2px solid black;
        }
        #pbtn:hover
        {
            background-color:white;
            color:#0a356c;
            border:2px solid black;
        }
        


        
        #uploadt tr:nth-child(even)
        {
            background-color:white;
        }
        .tab
        {
            
            width:100%;
            text-align: left;
        }
        .tab td:nth-child(odd)
        {
            width:25%;
        }
        .tab td:nth-child(even)
        {
            width:25%;
        }
        #btn2
{
    
    height:40px;
    width:120px;
    position: relative;
    bottom:10px;
    background-color:green ;
    border-color:white;
    font-size: 20px;
    color:white; 
}
    #btn1:hover
    {
        background-color:green;
        color:white;
        border:3px solid black;
    }
    label
    {
        font-weight:bold;
       
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
    
            <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5" >

            <div class="container-fluid position-relative p-0" >
            <nav class="navbar navbar-expand-lg navbar-dark px-5 py-3 py-lg-0 sticky-top shadow-sm" >
            <a href="index.html" class="navbar-brand p-0">
                <img src="img/logo1.png" alt="not found" style="height:50px; width:50px;  float:left;"><h1 class="m-0"> Scribe Vlounteer</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse" >
                <div class="navbar-nav ms-auto py-0">
                    <a href="../index.php" class="nav-item nav-link " style="color: #091E3E;">Home</a>
                    <a href="../about.php" class="nav-item nav-link">About</a>
                    <a href="../service.html" class="nav-item nav-link">Services</a>
                    <a href="../contact.php" class="nav-item nav-link">Contact</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle active" data-bs-toggle="dropdown">
                            <?php echo $_SESSION['fname']; ?> </a>
                        <div class="dropdown-menu m-0">
                            <a href="/Scribe/login(s).php" class="dropdown-item">Scribe </a>
                            <a href="/login(h).php" class="dropdown-item">Handicap</a>
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
            <img src="img/userprofile.png" alt="ueserprofile">
        </div>
        <div id="detailsdiv">
            <table class="tb1" cellspacing="10px" cellpading="10px">
                <tr>
                    <td ><p class="insidepara1" >Name :</p></td>
                    <td><p class="insidepara1"><?php echo $_SESSION['fname'] ." ". $_SESSION['lname']; ?></p></td>
                </tr>
                <tr>
                    <td><p class="insidepara1">Contact No. :</p></td>
                   
                    <td><p class="insidepara1"><?php echo $_SESSION['contactno']; ?></p></td>
                </tr>
                <tr>
                    <td ><p class="insidepara1" >Email :</p></td>
                    <td><p class="insidepara1"><?php echo $_SESSION['emailid']; ?></p></td>
                </tr>
                
                
            </table>
        </div> 
        <div id="logoutdiv" style="position:absolute;
    bottom:100px; left:200px; ">
            <a href="../index.php"><button style="background-color:rgb(225, 99, 57); color:white; height:40px; width:100px; border-radius:20px; border:3px solid white;" id="logout"> Logout
            </button></a></div>

    </div>
    <div id="maindiv">
    <div id="formdiv">
            <div id="uploadpara"><h1 style="  text-align:center;
                    font-family:'Times New Roman', Times, serif;
                background-color:white;color:#0a356c;">Schedules</h1></div>
            
                
            <?php
           $sql3="select * from exam_info where status='pending' order by e_date";
           $result=mysqli_query($conn,$sql3); 
           while($r=mysqli_fetch_assoc($result))
           {
            ?>
          

            <div id="insidediv">
            <form action="confirm.php" method="post">
                <table cellspacing="10px" cellpading="10px" class="tab">
                    <input type="hidden" name="e_id" value="<?php echo $r['e_id']; ?>">
                    <tr>
                        <td><label id="l1" >Name:</label></td>
                        <td><?php echo $r['h_name']; ?></td>
                        <td><label id="l2">Exam Center:</label></td>
                        <td><?php echo $r['e_address']; ?></td>
                    </tr>
                    <tr>
                        <td><label id="l3">Exam Name:</label></td>
                        <td><?php echo $r['e_name']; ?></td>
                        <td><label id="l4">Exam Date:</label></td>
                        <td><?php echo $r['e_date']; ?></td>
                    </tr>
                    <tr>
                        <td><label id="l5">Eligibility Criteria:</label></td>
                        <td><?php echo $r['e_criteria']; ?></td>
                        
                    </tr>   
                    <tr>
                       
                    </tr>
                </table> 
                
                    <input type="submit" value="Confirm" name="btn1" id="btn1">
                </form>
            </div>   

        <?php } ?>

        <!-- //    echo "<table id='uploadt' >";
        //    echo"<tr>"."<th>Name</th>"."<th>Exam Name</th>"."<th>Exam Center</th>"."<th>Exam Criteria</th>"."<th>Exam Date</th>"."<th>Status</th>"."</tr>";
        //    while($r=mysqli_fetch_assoc($result))
        //    {
               
        //        echo "<tr>";
        //        echo "<td style='color:#0a356c;'>".$r['h_name']."</td>";
        //        echo "<td>".$r['e_name']."</td>";
        //        echo "<td>".$r['e_address']."</td>";
        //        echo "<td>".$r['e_criteria']."</td>";
        //        echo "<td>".$r['e_date']."</td>";
        //        echo "<form method='post'>";
        //        echo "<td> <input type='submit'  name='button1' value='".$r['status']."' id='pbtn'/>";
        //        echo "</form>";
        //        if(array_key_exists('button1', $_POST)) 
        //        {
                    
        //             $sql1 = "UPDATE exam_info SET status='pending' WHERE e_id='".$r['e_id']."'";
        //              mysqli_query($conn,$sql1);
        //         }
        //        echo "</tr>";
        //    }
        //    echo "</table>"; -->
                  
               
        </div>    <br><br>


    <div id="uploadeddiv">
            <div id="uploadpara"><h1 style="  text-align:center;
    font-family:'Times New Roman', Times, serif;
    
    background-color:white;color:#0a356c;  ">Your Confirmed Schedule</h1></div>

        <?php
           $sql4="select * from exam_info where status='confirmed' and s_id='".$_SESSION['sid']."' order by e_date";
           $result1=mysqli_query($conn,$sql4); 
           while($r=mysqli_fetch_assoc($result1))
           {
        ?>
            <div id="insidediv">
                
                <table cellspacing="10px" cellpading="10px" class="tab">
                <tr>
                        <td><label id="l1">Name:</label></td>
                        <td><?php echo $r['h_name']; ?></td>
                        <td><label id="l2">Exam Center:</label></td>
                        <td><?php echo $r['e_address']; ?></td>
                    </tr>
                    <tr>
                        <td><label id="l3">Exam Name:</label></td>
                        <td><?php echo $r['e_name']; ?></td>
                        <td><label id="l4">Exam Date:</label></td>
                        <td><?php echo $r['e_date']; ?></td>
                    </tr>
                    <tr>
                        <td><label id="l5">Eligibility Criteria:</label></td>
                        <td><?php echo $r['e_criteria']; ?></td>
                        
                    </tr>   
                    
                       
                    
                    
                </table> 
                <?php
                    echo "<form action='profile1.php' method='post' >";
                    echo "<input type='hidden' name='h_id' value='".$r['h_id']."'/>";
                    echo "<input type='hidden' name='e_id' value='".$r['e_id']."'/>";
                    echo "<td> <input type='submit' name='pbtn' id='pbtn' value='Details'>";
                    echo "</form>";
                ?>
            </div>   
            <?php } ?>
        </div>   
        
    </div>
    <?php
        include_once('footer.html');?>

</body>
</html>