<?php 



$dbhost = 'localhost';
$dbname = 'movement';
$dbusername = 'root';
$dbpass = '';






$conn= mysqli_connect($dbhost, $dbusername, $dbpass, $dbname);



?>
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="bot.css">

    <meta charset="utf-8">
    <title>    Robot Movement  </title>
</head>




<?php 

switch($_POST['nxtmv']){

    
    case 'Forward': echo "Moving Forward!";
    $forward=$_POST['nxtmv'];
    $query= "INSERT INTO ctrl (lastmv) VALUES ('$forward')";
    $conn->query($query);
    echo $forward;
    break;


    case 'Left': echo "Turning Left!";
    $left=$_POST['nxtmv'];
    $query= "INSERT INTO ctrl (lastmv) VALUES ('$left')";
    $conn->query($query);
    echo $left;
    break;

    case 'Right': echo "Turning Right!";
    $right=$_POST['nxtmv'];
    $query= "INSERT INTO ctrl (lastmv) VALUES ('$right')";
    $conn->query($query);
    echo $right;
    break;

    case 'Back': echo "Moving Backward";
    $back=$_POST['nxtmv'];
    $query= "INSERT INTO ctrl (lastmv) VALUES ('$back')";
    $conn->query($query);
    echo $back;
    break;
    case 'Stop': echo "Stopping";
    $stop=$_POST['nxtmv'];
    $query= "INSERT INTO ctrl (lastmv) VALUES ('$stop')";
    $conn->query($query);
    echo $stop;
    break;
}

$url = "bot.html";

header("refresh: 0.5 ; $url");


 ?>


</html>