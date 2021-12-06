<?php
if(isset($_SESSION['level'])){
    $level = $_SESSION['level'];
}else{
    $level = "preschool";
}
?>
<nav class="nav">
    <div class="nav__links">
        <a href="index" class="nav__link <?php if(basename($_SERVER['PHP_SELF'])=='index.php'){echo 'nav__link--active';}else{echo '';} ?>">
            <i class="material-icons nav__icon">home</i> 
            <span id="nav__txt">Home</span>
        </a>

        <a href="activities.php?level=<?php echo $level; ?>" class="nav__link <?php if(basename($_SERVER['PHP_SELF'])=='activities.php'){echo 'nav__link--active';}else{echo '';} ?>">
            <i class="material-icons nav__icon">lightbulb</i>
            <span id="nav__txt">Activities</span>
        </a>
    </div> 

    <div class="nav__overlay"></div>
</nav>

<script>
    $("#menu").click(function(){
        $(".nav").addClass("nav--open");
    });

    $(".nav__overlay").click(function(){
        $(".nav").removeClass("nav--open");
    });
</script>