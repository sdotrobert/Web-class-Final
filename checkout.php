<?php
    ob_start();
    session_start();
    
    $conn = mysqli_connect("127.0.0.1", "root", "a22149811", "sufanpage");
    $fan_id = mysqli_real_escape_string($conn, $_SESSION["id"]);

    if (isset($fan_id)) {
        if (!$conn) {
            echo "FAIL";
        }
        else {
            // THIS IS DAMN IMPORTANT, OTHERWISE YOU'LL GET ERROR
            mysqli_query($conn, "SET NAMES utf8mb4");
            
            $sql = "select * from cart WHERE fan_id = '$fan_id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);

            if ($row >= 1) {
                $query_sql = "DELETE FROM cart WHERE fan_id = '$fan_id'";
                $query_result = mysqli_query($conn, $query_sql);
                echo "<script language='javascript'>document.location.href='cart.php?checkout=1';</script>";
            }
            else {
                echo "<script language='javascript'>document.location.href='cart.php?checkout=2';</script>";
            }
        } 
    }
?>