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
                <span id="header-txt"><span class="zero">A</span><span class="one">b</span><span class="two">o</span><span class="three">u</span><span class="four">t</span> <span class="ten">U</span><span class="zero">s</span></span>
            </div>
        </div>
    </div>

    <div class="container-fluid team">
        <div class="row">
            <div class="col-sm-12 col-md-6 col-lg-3 text-center">
                <div class="img-container">
                    <img src="images/christianabrera.jpg" alt="Christian Abrera">
                    <br>
                    <span id="team-desc"><span class="zero">Christian Abrera</span></span>
                    <br>
                    <span id="team-desc2"><span class="zero">4ITF</span></span>
                </div>
            </div>
            
            <div class="col-sm-12 col-md-6 col-lg-3 text-center">
                <div class="img-container">
                    <img src="images/ejbejer.jpg" alt="Emmanuel Bejer">
                    <br>
                    <span id="team-desc"><span class="one">Emmanuel Bejer</span></span>
                    <br>
                    <span id="team-desc2"><span class="one">4ITF</span></span>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3 text-center">
                <div class="img-container">
                    <img src="images/jmdomingo.jpg" alt="Jannmichael Domingo">
                    <br>
                    <span id="team-desc"><span class="four">Jannmichael Domingo</span></span>
                    <br>
                    <span id="team-desc2"><span class="four">4ITF</span></span>
                </div>
            </div>

            <div class="col-sm-12 col-md-6 col-lg-3 text-center">
                <div class="img-container">
                    <img src="images/gailtecson.png" alt="Gail Tecson">
                    <br>
                    <span id="team-desc"><span class="ten">Gail Tecson</span></span>
                    <br>
                    <span id="team-desc2"><span class="ten">4ITF</span></span>
                </div>
            </div>
        </div>
    </div>
</body>
</html>