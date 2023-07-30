<?php
session_start();
require_once "connection.php";
?>
<?php
            if(isset($_SESSION['username']))
            {
                header('location:index.php');
                exit;
            }

            // require_once "connection.php";

            $username = $password = "";
            $err = "";

            if($_SERVER['REQUEST_METHOD'] == "POST")
            {
                
                
                    
                        if(isset($_POST['loginbtn']))
                        {
                            extract($_POST);
                            echo $sql = "SELECT * FROM `scribe1` WHERE `emailid` = '".$_POST['emailid']."' And `pass` = '".$_POST['pass']."' ";
                            $result = mysqli_query($conn,$sql);
                            $row = mysqli_num_rows($result);
                            if($row > 0)
                            {
                                $fetchrow = mysqli_fetch_array($result);
                                echo $_SESSION['sid'] = $fetchrow['sr_no'];
                                echo $_SESSION['fname'] = $fetchrow['Fname'];
                                echo $_SESSION['lname'] = $fetchrow['Lname'];
                                echo $_SESSION['emailid'] = $fetchrow['emailid'];
                                echo $_SESSION['contactno'] = $fetchrow['contactno'];
                                echo $_SESSION['dob_s'] = $fetchrow['dob'];

                                header('location: index.php');
                            }
                            else
                            {
                                header('location:login(s).php');
                                echo "<h1>error</h1>"; 
                                
                                $_SESSION['errormsg'] =  "Invalid Username And Password";
                            }

                        }else
                        {

                        }
            }
        ?>