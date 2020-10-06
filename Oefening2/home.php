<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Homepage</title>
</head>
<body>

    
<?php 
   
    if(empty($_COOKIE['background'])){
        echo '<div style="background-color: white">';
    }
    else{
        $background=$_COOKIE['background'];
        if($background=='blue'){
            
            echo '<div style="background-color: blue">';

        }else if($background=='rose'){
            echo '<div style="background-color: rose">';

        }
    }
    echo "<h1>";

    $username="";
    if(empty($_COOKIE['user'])){
        $username="USER";
    }
    else{
        $username=$_COOKIE['user'];
    }

    if(empty($_COOKIE['taal'])){
        echo "Welkom op onze website $username";
    }
    else {
        $taal=$_COOKIE['taal'];
        if($taal=='Nederlands'){
            echo "Welkom op onze website $username";
        }
        else if($taal=='Frans'){
            echo "bienvenue dans notre site web $username";
        }
        else if($taal=='Engels'){
            echo "Welcome to our website $username";
        }
    }
    echo "</h1>";
    echo '<a href="instelling.php">Ga naar instellingen </a>';
    echo "</div>";
?>
    
</body>
</html>








