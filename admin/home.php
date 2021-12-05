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
                <a href="home.php">Home</a>
            </li>
            <li>
                <a href="exercise.php">Exercises</a>
            </li>
            <li>
                <a href="about.php">About</a>
            </li>
            <li>
                <a href="controller?logout=1">Logout</a>
            </li>     
        </ul>
    </nav>
    <br><br> <br><br>
    <section class="about">
        <div class="main">
            <div class="about-text">
                <h1>Welcome to COUNT EDU!</h1>
                <h5>GROUP # 1<br> 4-ITF</h5>
            </div>    
        </div>     
    </section> 
</body>
</html>