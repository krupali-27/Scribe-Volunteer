
<?php
    session_start();
    require_once "connection.php";
    echo "heyy...";
    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        echo "hyyy..";
        if(isset($_POST['sbtn']))
        {
            echo "hello";
            $h_name = $_POST['hname'];
            $e_name = $_POST['exn'];
            $e_cen = $_POST['excn'];
            $e_date = $_POST['exd'];
            $e_criteria = $_POST['elcri'];
            $h_id = $_SESSION['uid'];

            
            $sql = "INSERT INTO `exam_info`(`e_name`, `e_date`, `e_address`, `e_criteria`, `h_name`, `h_id`, `status`) VALUES
             ('$e_name','$e_date','$e_cen','$e_criteria','$h_name','$h_id','pending')";
            if($conn->query($sql)==true)
            {   
                
                header("location: handicapdashboard.php");
                
            }
            else
            
            {
                header("location: handicapdashboard.php");
            }

        }
    }
?>    