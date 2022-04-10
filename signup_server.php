<?php
    session_start();

    $username = "";
    $email = "";
    $errors = array(); 

    $conn = mysqli_connect("127.0.0.1", "root", "a22149811", "sufanpage");
    //get value from the signup form
    if(isset($_POST['username'])){
        $username = mysqli_real_escape_string($conn, $_POST['username']);
        $password = mysqli_real_escape_string($conn, $_POST['password']);
        $password2 = mysqli_real_escape_string($conn, $_POST['password2']);
        $phoneNum = mysqli_real_escape_string($conn, $_POST['phoneNum']);
        $email = mysqli_real_escape_string($conn, $_POST['email']);

    
    //detect varoius errors from user's input
    if(empty($username)) {
        array_push($errors, "請填寫帳號");
    }
    if(empty($password)) {
        array_push($errors, "請填寫密碼");
    }
    if(empty($phoneNum)) {
        array_push($errors, "請填寫電話號碼");
    }
    if(empty($email)){
        array_push($errors, "請填寫Email");
    }
    if($password != $password2){
        array_push($errors, "再次確認您的密碼");
    }

    //check the database to make sure the user have not been registered.
    $sql_exist = "Select * from fans where username ='$username' OR email ='$email'";
    $result = mysqli_query($conn, $sql_exist);
    $user = mysqli_fetch_assoc($result);

    if($user){
        if($user['username'] == $username){
            array_push($errors, "此帳號已經被註冊");
        }
        
        if($user['email'] == $email){
            array_push($errors, "此信箱已經被註冊");
        }
    }

    //insert data to the database
    if(count($errors) == 0){
        $sql = "insert into fans(username, password, email, phoneNum) values('$username', '$password', '$email', '$phoneNum')";
        $result = mysqli_query($conn, $sql);
        $_SESSION['username'] = $username;
        echo "<script>alert ('註冊成功') </script>";
    }
}
?> 