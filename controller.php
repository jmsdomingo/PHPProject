<?php 
session_start();
require "connection.php";

date_default_timezone_set("Asia/Manila");

$errors = array();

if(isset($_POST['register'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if($cpassword != $password){
        $errors['pwd_err'] = "Password does not match.";
    }

    if(count($errors) == 0){
        $sql = "INSERT INTO users (email, password) VALUES ('$email', '$password')";
        $result = $conn->query($sql);

        if($result){
            header("Location: register-success");
        }
    }
}

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email = '$email'";
    $result = $conn->query($sql);

    if(mysqli_num_rows($result) > 0){
        $fetch = mysqli_fetch_assoc($result);
        $fetch_pass = $fetch['password'];

        if($password == $fetch_pass){
            $_SESSION['email'] = $email;
            header("Location: index");
        }else{
            $errors['incorrect_pass'] = "Password incorrect.";
        }
    }else{
        $errors['email_error'] = "Email is not registered.";
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
