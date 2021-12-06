<?php require_once "controller.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    Register an account
    <form method="POST">
        <input type="text" name="email" placeholder="Enter email"><br>
        <input type="password" name="password" placeholder="Enter password"><br>
        <input type="password" name="cpassword" placeholder="Confirm password"><br>
        <input type="submit" name="register" value="Submit">
    </form>

    <?php 
    if(count($errors) > 0){
        foreach($errors as $showerror){
            echo $showerror;
        }
    }?>
</body>
</html>