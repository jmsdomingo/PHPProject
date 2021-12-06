<?php
if(isset($_GET['level'])){
    $level = $_GET['level'];
}
?>
<?php require_once "controller.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "php/head.php"; ?>
    <title>Learn — Count EDU</title>
</head>
<body>
    <button id="menu"><span class="material-icons">menu</span></button>

    <?php include "php/navigation.php"; ?>

    <div class="container-fluid" id="header">
        <div class="row text-center m-2">
            <div class="col-12">
                <span id="header-txt">Learn</span>
                <br>
                <span id="header-subtxt">Level: <?php echo ucfirst($level); ?></span>
            </div>
        </div>
    </div>
</body>
</html>