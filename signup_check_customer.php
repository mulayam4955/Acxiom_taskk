<?php
session_start();
include "db_conn_customer.php";

if (isset($_POST['uname']) && isset($_POST['password']) && 
    isset($_POST['name']) && isset($_POST['re_password'])) {
    function validate($data){
        $data=trim($data);
        $data=stripcslashes($data);
        $data=htmlspecialchars($data);
        return $data;
    }
    $uname = validate($_POST['uname']);
    $pass = validate($_POST['password']); 
    $name = validate($_POST['name']);
    $re_pass = validate($_POST['re_password']);

    $user_data = 'uname='. $uname. '&name='. $name;

    if (empty($uname)) {
        header("Location: user_signup.php?error=User Name is required&$user_data");
        exit();
    }else if (empty($pass)) {
        header("Location: user_signup.php?error=Password is required&$user_data");
        exit();
    }else if (empty($name)) {
        header("Location: user_signup.php?error=Name is required&$user_data");
        exit();
    }else if (empty($re_pass)) {
        header("Location: user_signup.php?error=Re Password is required&$user_data");
        exit();
    }else if (($pass !== $re_pass)) {
        header("Location: user_signup.php?error=The confirmation password does not match&$user_data");
        exit();
    }else {

        $pass=md5($pass);
        
        $sql = "SELECT * from users where user_name='$uname'";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) >0){
            header("Location: user_signup.php?error=The User Name is already taken try another&$user_data");
            exit();
        }else{
           $sql2 = "INSERT INTO users(user_name, password, name) VALUES('$uname', '$pass', '$name')";
           $result2 = mysqli_query($conn, $sql2);
           if ($result2) {
                header("Location: user_signup.php?success=Your account has been created successfully&$user_data");
                exit();
           }else {
                header("Location: user_signup.php?error=Error Occured&$user_data");
                exit();
           }
        }

    }
}else{
    header("Location: user_signup.php");
    exit();
}