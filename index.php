<?php require_once "controller.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <?php include "php/head.php"; ?>
    <title>Index — Count EDU</title>
</head>
<body>
    <button id="menu"><span class="material-icons">menu</span></button>

    <?php include "php/navigation.php"; ?>

    <div class="container-fluid" id="header">
        <div class="row text-center m-2">
            <div class="col-12">
                <span id="header-txt">Welcome to Count EDU</span>
            </div>
        </div>
    </div>

    <div class="container-fluid age-selector">
        <div class="row">
            <div class="col-6">
                <div class="card text-center">
                    <div class="card-header">PRESCHOOL</div>
                    <div class="card-text preschool"><span class="age-txt">3-4 yrs old</span></div>
                </div>
            </div>
            
            <div class="col-6">
                <div class="card text-center">
                    <div class="card-header">KINDERGARTEN</div>
                    <div class="card-text kindergarten"><span class="age-txt">5-7 yrs old</span></div>
                </div>
            </div>
        </div>
    </div>
</body>

<script>
    $(".preschool").click(function() {
        window.location.replace("activities.php?level=preschool");
    })

    $(".kindergarten").click(function() {
        window.location.replace("activities.php?level=kindergarten");
    })
</script>
</html>