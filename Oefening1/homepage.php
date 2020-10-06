<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
</head>
<body>
    <h1>
<?php 
    if(empty($_COOKIE['taal'])){
        echo "Welkom op onze website";
    }
    else {
        $taal=$_COOKIE['taal'];
        if($taal=='Nederlands'){
            echo "Welkom op onze website";
        }
        else if($taal=='Frans'){
            echo "bienvenue dans notre site web";
        }
        else if($taal=='Engels'){
            echo "Welcome to our website";
        }
    }
?>
    </h1>
    <a href="cookies.php">Ga naar instellingen </a>
</body>
</html>








