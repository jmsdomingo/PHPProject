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
    <title>Watch — Count EDU</title>
</head>
<body>
    <button id="menu"><span class="material-icons">menu</span></button>

    <?php include "php/navigation.php"; ?>

    <div class="container-fluid" id="header">
        <div class="row text-center m-2">
            <div class="col-12">
                <span id="header-txt"><span class="zero">W</span><span class="one">A</span><span class="two">T</span><span class="three">C</span><span class="four">H</span></span>
                <br>
                <span id="header-subtxt">Level: <?php echo ucfirst($level); ?></span>
                <br><br>
                <span id="header-subtxt">Click on a video to watch!</span>

                <div class="container-fluid">
                    <div class="row gallery">
                        <?php
                            $dirname = "videos/".$level."/";
                            $videos = str_replace(' ', '%20', glob($dirname."*.*"));
                            ?>
                                <?php
                            foreach($videos as $key => $video) {
                                echo 

                                "<div class='col-lg-4 video-wrap'>
                                    <a href=".$video." data-fancybox='video'>
                                        <div class='play-btn'>
                                            <svg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 311.69 311.69'>
                                                <path d='M155.84,0A155.85,155.85,0,1,0,311.69,155.84,155.84,155.84,0,0,0,155.84,0Zm0,296.42A140.58,140.58,0,1,1,296.42,155.84,140.58,140.58,0,0,1,155.84,296.42Z'></path>
                                                <polygon points='218.79 155.84 119.22 94.34 119.22 217.34 218.79 155.84'></polygon>
                                            </svg>
                                        </div>
                                        <video width='100%' height='240' preload='metadata'>
                                            <source src=".$video."#t=4"." type='video/mp4'>
                                        </video>
                                    </a>
                                </div>";
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>