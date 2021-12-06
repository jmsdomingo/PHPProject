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


if(isset($_GET['level'])){
    $level = $_GET['level'];
}
?>

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
                <span id="header-txt"><span class="zero">L</span><span class="one">E</span><span class="two">A</span><span class="three">R</span><span class="ten">N</span></span>
                <br>
                <span id="header-subtxt">Level: <?php echo ucfirst($level); ?></span>
                <br><br>
                <span id="header-subtxt">Click on the numbers to play a sound!</span>
            </div>
        </div>

        <div class="row text-center mb-5">
            <?php
            if($level == 'preschool'){?>
                <div class="col-lg-4">
                    <button class="number zero">0 <span class="number-txt">Zero</span></button><br>
                    <button class="number one">1 <span class="number-txt">One</span></button><br>
                    <button class="number two">2 <span class="number-txt">Two</span></button><br>
                    <button class="number three">3 <span class="number-txt">Three</span></button><br>
                    <button class="number four">4 <span class="number-txt">Four</span></button><br>
                </div>
                <div class="col-lg-4">
                    <button class="number five">5 <span class="number-txt">Five</span></button><br>
                    <button class="number six">6 <span class="number-txt">Six</span></button><br>
                    <button class="number seven">7 <span class="number-txt">Seven</span></button><br>
                    <button class="number eight">8 <span class="number-txt">Eight</span></button><br>
                    <button class="number nine">9 <span class="number-txt">Nine</span></button><br>
                </div>
                <div class="col-lg-4">
                    <button class="number ten">10 <span class="number-txt">Ten</span></button><br>
                </div>
                <?php } elseif($level == 'kindergarten'){?>
                    <div class="col-lg-6">
                    <button class="number eleven">11 <span class="number-txt">Eleven</span></button><br>
                    <button class="number twelve">12 <span class="number-txt">Twelve</span></button><br>
                    <button class="number thirteen">13 <span class="number-txt">Thirteen</span></button><br>
                    <button class="number fourteen">14 <span class="number-txt">Fourteen</span></button><br>
                    <button class="number fifteen">15 <span class="number-txt">Fifteen</span></button><br>
                </div>
                <div class="col-lg-6">
                    <button class="number sixteen">16 <span class="number-txt">Sixteen</span></button><br>
                    <button class="number seventeen">17 <span class="number-txt">Seventeen</span></button><br>
                    <button class="number eighteen">18 <span class="number-txt">Eighteen</span></button><br>
                    <button class="number nineteen">19 <span class="number-txt">Nineteen</span></button><br>
                    <button class="number twenty">20 <span class="number-txt">Twenty</span></button><br>
                </div>
                <?php } ?>
            <audio id="audio" src=""></audio>
        </div>
    </div>
</body>
<script>
    $(".zero").click(function(){
        $("#audio").attr("src", "numbers/preschool/zero.mp3");
        play();
    });

    $(".one").click(function(){
        $("#audio").attr("src", "numbers/preschool/one.mp3");
        play();
    });
    $(".two").click(function(){
        $("#audio").attr("src", "numbers/preschool/two.mp3");
        play();
    });
    $(".three").click(function(){
        $("#audio").attr("src", "numbers/preschool/three.mp3");
        play();
    });
    $(".four").click(function(){
        $("#audio").attr("src", "numbers/preschool/four.mp3");
        play();
    });
    $(".five").click(function(){
        $("#audio").attr("src", "numbers/preschool/five.mp3");
        play();
    });
    $(".six").click(function(){
        $("#audio").attr("src", "numbers/preschool/six.mp3");
        play();
    });
    $(".seven").click(function(){
        $("#audio").attr("src", "numbers/preschool/seven.mp3");
        play();
    });
    $(".eight").click(function(){
        $("#audio").attr("src", "numbers/preschool/eight.mp3");
        play();
    });
    $(".nine").click(function(){
        $("#audio").attr("src", "numbers/preschool/nine.mp3");
        play();
    });
    $(".ten").click(function(){
        $("#audio").attr("src", "numbers/preschool/ten.mp3");
        play();
    });

    $(".eleven").click(function(){
        $("#audio").attr("src", "numbers/kindergarten/eleven.mp3");
        play();
    });

    $(".twelve").click(function(){
        $("#audio").attr("src", "numbers/kindergarten/twelve.mp3");
        play();
    });

    $(".thirteen").click(function(){
        $("#audio").attr("src", "numbers/kindergarten/thirteen.mp3");
        play();
    });

    $(".fourteen").click(function(){
        $("#audio").attr("src", "numbers/kindergarten/fourteen.mp3");
        play();
    });

    $(".fifteen").click(function(){
        $("#audio").attr("src", "numbers/kindergarten/fifteen.mp3");
        play();
    });

    $(".sixteen").click(function(){
        $("#audio").attr("src", "numbers/kindergarten/sixteen.mp3");
        play();
    });

    $(".seventeen").click(function(){
        $("#audio").attr("src", "numbers/kindergarten/seventeen.mp3");
        play();
    });

    $(".eighteen").click(function(){
        $("#audio").attr("src", "numbers/kindergarten/eighteen.mp3");
        play();
    });

    $(".nineteen").click(function(){
        $("#audio").attr("src", "numbers/kindergarten/nineteen.mp3");
        play();
    });

    $(".twenty").click(function(){
        $("#audio").attr("src", "numbers/kindergarten/twenty.mp3");
        play();
    });

    function play() {
        var audio = document.getElementById("audio");
        audio.play();
    }
</script>
</html>