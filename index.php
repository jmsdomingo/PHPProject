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
    <title>Index — Count EDU</title>

</head>
<body>
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
        window.location.replace("home.php?level=preschool");
    })

    $(".kindergarten").click(function() {
        window.location.replace("home.php?level=kindergarten");
    })
</script>
</html>