<?php
    session_start();
    $errors = array(); 

    $conn = mysqli_connect("127.0.0.1", "root", "a22149811", "sufanpage");

    //get value from the signin form
    if(isset($_POST['login_btn'])) {
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
    //detect varoius errors from user's input
    if(empty($username)) {
        array_push($errors, "請填寫帳號");
    }
    if(empty($password)) {
        array_push($errors, "請填寫密碼");
    }

    if(count($errors) == 0){

    //login checking
    $sql = "Select * From fans Where username = '$username' and password ='$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);
    if(mysqli_num_rows($result) == 1){
        $_SESSION['username'] = $username;
        $_SESSION['id'] = $row['id'];

        //remember me cookie setting
        if($_POST['remember'] == "1") {
            setcookie ("username",$_POST["username"],time()+ (10 * 365 * 24 * 60 * 60));
            setcookie ("password",$_POST["password"],time()+ (10 * 365 * 24 * 60 * 60));
        } else if($_POST['remember'] != "1"){
                setcookie ("username","");
                setcookie ("password","");
        }
        echo "<script>alert ('登入成功') </script>";
        echo "<script language='javascript'>document.location.href='homepage.php';</script>";
    }
    else{
        $sql = "select username, password from fans where username='$username'";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) == 1){
                array_push($errors, "密碼錯誤");
            }
            else{
                array_push($errors, "此帳號未註冊");
            }
        }
    }
}
?>