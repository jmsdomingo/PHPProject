<?php 
require_once "controller.php";

$email = $_SESSION['email'];

if($email != false){
    $sql = "SELECT * FROM users WHERE email = '$email'";
    $run_Sql = mysqli_query($conn, $sql);
    if($run_Sql){
        $fetch_info = mysqli_fetch_assoc($run_Sql);
        $password = $fetch_info['password'];
    }
}else{
    header('Location: login');
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css"> 
    <title>COUNT EDU | Home</title>  
</head>
<body>
    <nav>
        <div class="logo">
            <h4>COUNT EDU</h4>
        </div>
        <ul class="nav-links">
            <li>
                <a href="home">Home</a>
            </li>
            <li>
                <a href="preschool">Preschool</a>
            </li>
            <li>
                <a href="kindergarten">Kindergarten</a>
            </li>
            <li>
                <a href="about">About</a>
            </li>
            <li>
                <a href="controller?logout=1">Logout</a>
            </li>          
        </ul>
    </nav>
    <br><br> <br><br>
    <section class="about">
        <div class="main">
               <a href="NumberOne.php"><input type="submit" value="Count One"></a>
               <a href="NumberTwo.php"><input type="submit" value="Count Two"></a>
               <a href="NumberThree.php"><input type="submit" value="Count Three"></a>
               <a href="NumberFour.php"><input type="submit" value="Count Four"></a>
        </div>     
    </section>
</body>
</html>

<!-- 
<!DOCTYPE html>
<html>
<body>

<?php
// Class Parent
abstract class Number {
  public $name;
  public function __construct($name) {
    $this->number = $name;
  }
  abstract public function Num() : string; 
}

// Class Child
class One extends Number {
  public function Num() : string {
    return "Let's Count One, $this->number!"; 
  }
}

class Two extends Number {
  public function Num() : string {
    return "Let's Count Two, $this->number!"; 
  }
}

class Three extends Number {
  public function Num() : string {
    return "Let's Count Three, $this->number!"; 
  }
}
class Four extends Number {
  public function Num() : string {
    return "Let's Count Four, $this->number!"; 
  }
}
// Objects of Class Child
$NumberOne = new One("One");
echo $NumberOne->Num();
echo "<br>";

$NumberTwo = new Two("One, Two");
echo $NumberTwo->Num();
echo "<br>";

$NumberThree = new Three("One, Two, Three");
echo $NumberThree->Num();
echo "<br>";
 
$NumberFour = new Four("One, Two, Three, Four");
echo $NumberFour->Num();
?>
</body>
</html>
 -->