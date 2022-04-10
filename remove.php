<?php
    ob_start();
    session_start();
    
    $conn = mysqli_connect("127.0.0.1", "root", "a22149811", "sufanpage");
    $course_id = mysqli_real_escape_string($conn, $_GET["course_id"]);
    $fan_id = mysqli_real_escape_string($conn, $_SESSION['id']);
    if (isset($fan_id) && isset($course_id)) {
        if (!$conn) {
            echo "FAIL";
        }
        else {
            // THIS IS DAMN IMPORTANT, OTHERWISE YOU'LL GET ERROR
            mysqli_query($conn, "SET NAMES utf8mb4");
            
            $query_sql = "DELETE FROM cart WHERE fan_id = '$fan_id' AND course_id = $course_id";
            $query_result = mysqli_query($conn, $query_sql);
            if($query_result) {
                
                echo "<script language='javascript'>document.location.href='cart.php?code=1';</script>";
            }
            else {
                echo "<script language='javascript'>document.location.href='cart.php?code=2';</script>";
            }

        } 
    }
?>