<?php require_once "controller.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> 
    <title>COUNT EDU | Login</title> 
</head>
<body>
    <div class="login-form container-fluid">
		<form method="POST">
			<div class="row">
                <div class="col-12 col-lg-12 order-lg-first">
                    <span class="login-text">Login</span>
                </div>
				<div class="col-12 col-lg-12 mt-1"> 
					<label for="email">Email</label>
					<input class="login-credentials" type="text" id="email" name="email" placeholder="Enter email" required>
				</div>
				<div class="col-12 col-lg-12 mt-3">
					<label for="password">Password</label>
					<input class="login-credentials" type="password" id="password" name="password" minlength="8" placeholder="Enter password" required>
					<i class="bi bi-eye-slash eye-icon" id="togglePassword"></i>
				</div>
                <div class="col-12 col-lg-12 mt-3">
					<input type="checkbox" id="ck" name="ck" value="ck">
 					<label for="ck">Keep me logged in</label><br>
				</div>
                <div class="col-12 col-lg-12 my-3">
					<span class="forgot-password"><a style="text-decoration: none;" href="forgot-password">Forgot Password?</a></span>
				</div>
                <div class="col-12 col-lg-12">
					<input type="submit" name="login" value="Login">
				</div>
            </div>
        </form>
    </div>    

    <?php 
    if(count($errors) > 0){
        foreach($errors as $showerror){
            echo $showerror;
        }
    }?>
</body>
</html>