<?php
session_start();
require_once "connection.php";
    if (isset($_POST['btn1']))
    {
        echo "hello";
       
        $sql1 = "UPDATE exam_info SET status='confirmed',s_id='".$_SESSION['sid']."' WHERE e_id='".$_POST['e_id']."'";
        if(mysqli_query($conn,$sql1))
        {
            echo "altered";
            header('location: index.php');
        }
    }
?>