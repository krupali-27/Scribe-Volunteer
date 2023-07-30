<?php
session_start();
require_once "connection.php";
?>
<?php
            // if(isset($_SESSION['uid']))
            // {
            //     header('location:handicap/index.php');
            //     exit;
            // }

            // require_once "connection.php";

            $username = $password = "";
            $err = "";

            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
                
                
                    
                        if(isset($_POST['loginbtn']))
                        {
                            extract($_POST);
                            echo $sql = "SELECT * FROM `handicap1` WHERE `emailid` = '".$_POST['emailid']."' And `pass` = '".$_POST['pass']."' ";
                            $result = mysqli_query($conn,$sql);
                            $row = mysqli_num_rows($result);
                            if($row > 0)
                            {
                                $fetchrow = mysqli_fetch_array($result);
                                echo $_SESSION['uid'] = $fetchrow['sr_no'];
                                echo $_SESSION['firstname'] = $fetchrow['Fname'];
                                echo $_SESSION['lastname'] = $fetchrow['Lname'];
                                echo $_SESSION['contact'] = $fetchrow['contactno'];
                                echo $_SESSION['email'] = $fetchrow['emailid'];
                                
                                echo $_SESSION['dob'] = $fetchrow['dob'];

                                header('location: handicap/handicapdashboard.php');
                            }
                            else
                            {
                                header('location:login(h).php');
                                echo "<h1>error</h1>"; 
                                $_SESSION['errormsg'] =  "Invalid Username And Password";
                            }

                        }else
                        {

                        }
            }
        ?>
        