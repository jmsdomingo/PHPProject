<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css?v=<?php echo time(); ?>"> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Material+Icons" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <title>Watch — Count EDU</title>

</head>
<body>
    <section class="about">
        <div class="main">
            <video width="320" height="240" controls>
                <source src="videos/countkinder.mp4" type="video/mp4">
            </video>
            <video width="320" height="240" controls>
                <source src="videos/countkinderquiz.mp4" type="video/mp4">
            </video>
            <video width="320" height="240" controls>
                <source src="videos/countkindersong.mp4" type="video/mp4">
            </video>
        </div>  
        <div class="main">
            <video width="320" height="240" controls>
                <source src="videos/countkinderfingers.mp4" type="video/mp4">
            </video>
            <video width="320" height="240" controls>
                <source src="videos/countkinderfruits.mp4" type="video/mp4">
            </video>
            <video width="320" height="240" controls>
                <source src="videos/countkinderobjects.mp4" type="video/mp4">
            </video>
        </div>
    </section>
</body>

<script>
    $("").click(function() {
        window.location.replace("index");
    })
</script>
</html>