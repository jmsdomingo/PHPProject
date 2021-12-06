<?php 
require_once "controller.php";

$email = $_SESSION['email'];

if($email != false){
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $run_Sql = mysqli_query($conn, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $password = $fetch_info['password'];
    }
}else{
    header('Location: login');
}

$action = "";
if(isset($_GET['form'])){
    $form = $_GET['form'];
}

if(isset($_GET['action'])){
    $action = $_GET['action'];
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> 
    <title>COUNT EDU | Home</title>  
</head>
<body>
    <nav>
        <div class="logo">
            <h4>COUNT EDU</h4>
        </div>
        <ul class="nav-links">
        <li>
                <a href="home">Home</a>
            </li>
            <li>
                <a href="preschool">Preschool</a>
            </li>
            <li>
                <a href="kindergarten">Kindergarten</a>
            </li>
            <li>
                <a href="about">About</a>
            </li>
            <li>
                <a href="controller?logout=1">Logout</a>
            </li>         
        </ul>
    </nav>
    <br><br> <br><br>
    
    <b><h1 style="text-align:center">WATCH HOW TO COUNT NUMBERS!</h1></b>
    <section class="about">
        <div class="main">
            <video width="320" height="240" controls>
                <source src="videos/countkinder.mp4" type="video/mp4">
            </video>
            <video width="320" height="240" controls>
                <source src="videos/countkinderquiz.mp4" type="video/mp4">
            </video>
            <video width="320" height="240" controls>
                <source src="videos/countkindersong.mp4" type="video/mp4">
            </video>
        </div>  
        <div class="main">
            <video width="320" height="240" controls>
                <source src="videos/countkinderfingers.mp4" type="video/mp4">
            </video>
            <video width="320" height="240" controls>
                <source src="videos/countkinderfruits.mp4" type="video/mp4">
            </video>
            <video width="320" height="240" controls>
                <source src="videos/countkinderobjects.mp4" type="video/mp4">
            </video>
        </div>    
        
    </section>
</body>
</html>