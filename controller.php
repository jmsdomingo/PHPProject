<?php 
session_start();
require "connection.php";

date_default_timezone_set("Asia/Manila");

$errors = array();

if(isset($_POST['register'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);
    if($password !== $cpassword){
        $errors['password'] = "Confirm password does not match!";
    }
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "Invalid email format!";
    }
    $email_check = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($conn, $email_check);
    if(mysqli_num_rows($res) > 0){
        $errors['email'] = "The email you have entered already exist!";
    }
    if(count($errors) === 0){
        $encpass = password_hash($password, PASSWORD_BCRYPT);
        $code = rand(999999, 111111);
        $minutes5 = strtotime(date("Y-m-d H:i:s")) + 300;
        $status = "notverified";
        $insert_data = "INSERT INTO users (email, password) VALUES('$email', '$encpass')";
        $data_check = mysqli_query($conn, $insert_data);
        if($data_check){
           header("Location: register-success");
        }else{
            $errors['db-error'] = "Failed while inserting data to database!";
        }
    }
}

if(isset($_POST['login'])){
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $check_email = "SELECT * FROM users WHERE email = '$email'";
    $res = mysqli_query($conn, $check_email);
    if(mysqli_num_rows($res) > 0){
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['password'];
        if(password_verify($password, $fetch_pass)){
            header('location: index');
        }else{
            $errors['email'] = "The email or password is incorrect!";
        }
    }else{
        $errors['email'] = "The email or password is incorrect!";
    }
}

if(isset($_GET['logout'])){

    $logout = $_GET['logout'];

    if($logout == 1){
        session_unset();
        session_destroy();
        header('location: login');
    }
}
?>
