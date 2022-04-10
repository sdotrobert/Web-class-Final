<?php
    session_start();
    ob_start();

    if(empty($_SESSION['username'])){
        echo "<script> alert('請先登入') </script>";
        echo "<script language='javascript'>document.location.href='signin.php';</script>";
    }
    
    $conn = mysqli_connect("127.0.0.1", "root", "a22149811", "sufanpage");
    $fan_id = mysqli_real_escape_string($conn, $_SESSION["id"]);
    $course_id = mysqli_real_escape_string($conn, $_GET['course']);

    if(isset($fan_id) && isset($course_id)){
        if (!$conn) {
            echo "FAIL";
        }
        else {
            // THIS IS DAMN IMPORTANT, OTHERWISE YOU'LL GET ERROR
            mysqli_query($conn, "SET NAMES utf8mb4");
            
            $sql = "SELECT * FROM cart WHERE course_id ='$course_id' and fan_id = '$fan_id'";
            $result = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($result);
            echo $row['course_id'];

            if ($row  >= 1) {
                echo "<script language='javascript'>document.location.href='Services.php?code=2';</script>";
            }
            else {
                $insert_sql = "INSERT INTO cart VALUES('$course_id', '$fan_id')";
                $insert_result = mysqli_query($conn, $insert_sql);
                echo "<script language='javascript'>document.location.href='Services.php?code=1';</script>";
            }

        }
    }
?>