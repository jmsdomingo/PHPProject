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
<style>
	.box_container{
		width: 90%;
		margin: auto;	 
		display: flex;
		flex-direction: row;
		justify-content: center;
        border-color: none;
        border-style: none;
	}
	.box{
		width: 400px;
		margin: 0 80px;
		transition: 1s;
	}
	.box:hover{
		transform: scale(1.3);
		z-index: 1;
	} 
	</style>
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
    <section class="about">
        <div class="main">
            <div class="about-text">
                <h2>Welcome to</h2>
                <h1>COUNT EDU</h1>
                <h3>Please select your year or level</h3>
        <div class="box_container">
		<div class="box">
        <a href="preschool"><img src="images/2.jpg"></a>
		</div>
		<div class="box">
        <a href="kindergarten"><img src="images/1.jpg" ></a>
		</div>
	    </div>     
    </section> 
</body>
</html>