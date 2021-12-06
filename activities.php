<?php require_once "controller.php"; ?>
<?php

if(isset($_SESSION['email'])){
    $email = $_SESSION['email'];
}else{
    $email = '';
}

if($email != false){
    $sql = "SELECT * FROM admin WHERE email = '$email'";
    $run_Sql = mysqli_query($conn, $sql);
    if($run_Sql){
        
    }
}else{
    header('Location: login');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "php/head.php"; ?>
    <title>Activities — Count EDU</title>
</head>
<body>
    <button id="menu"><span class="material-icons">menu</span></button>

    <?php include "php/navigation.php"; ?>

    <div class="container-fluid" id="header">
        <div class="row text-center m-2">
            <div class="col-12">
                <span id="header-txt">
                <?php
                    if(isset($_GET['level'])){
                        $level = $_GET['level'];
                        $_SESSION['level'] = $level;
                        echo ucfirst($level);
                    }
                ?>
                <br>
                </span>
                <span id="header-subtxt">Select an activty!</span>
            </div>
        </div>
    </div>

    <div class="container-fluid activity-selector">
        <div class="row">
            <div class="col-6 text-center">
                <div class="btn-container learn">
                    <img src="images/abacus-clipart-xl.png" alt="learn">
                    <br>
                    <button class="activity-button">LEARN</button>
                </div>
            </div>
            
            <div class="col-6 text-center">
                <div class="btn-container watch">
                    <img src="images/website-clipart-xl.png" alt="watch">
                    <br>
                    <button class="activity-button">WATCH</button>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    $(".learn").click(function() {
        window.location.replace("learn.php?level=<?php echo $level;?>");
    })
    $(".watch").click(function() {
        window.location.replace("watch.php?level=<?php echo $level;?>");
    })
</script>
</html>