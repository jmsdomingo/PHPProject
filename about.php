<?php require_once "controller.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "php/head.php"; ?>
    <title>About Us— Count EDU</title>
</head>
<body>
    <button id="menu"><span class="material-icons">menu</span></button>

    <?php include "php/navigation.php"; ?>

    <div class="container-fluid" id="header">
        <div class="row text-center m-2">
            <div class="col-12">
                <span id="header-txt">About Us</span>
            </div>
        </div>
    </div>

    <div class="container-fluid team">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 text-center">
                <div class="img-container">
                    <img src="images/christianabrera.jpg" alt="Christian Abrera">
                    <br>
                    <span id="team-desc">Christian Abrera</span>
                    <br>
                    <span id="team-desc2">4ITF</span>
                </div>
            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-3 text-center">
                <div class="img-container">
                    <img src="images/ejbejer.jpg" alt="Emmanuel Bejer">
                    <br>
                    <span id="team-desc">Emmanuel Bejer</span>
                    <br>
                    <span id="team-desc2">4ITF</span>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3 text-center">
                <div class="img-container">
                    <img src="images/jmdomingo.jpg" alt="Jannmichael Domingo">
                    <br>
                    <span id="team-desc">Jannmichael Domingo</span>
                    <br>
                    <span id="team-desc2">4ITF</span>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3 text-center">
                <div class="img-container">
                    <img src="images/gailtecson.png" alt="Gail Tecson">
                    <br>
                    <span id="team-desc">Gail Tecson</span>
                    <br>
                    <span id="team-desc2">4ITF</span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>