<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>Eenvoudige Cookies</title>
</head>
<body>
    <form action="cookies.php" method="POST" name="form">
    <input type="radio" name="radio" id="" value="Nederlands">Nederlands<input type="radio" name="radio" id="" value="Frans">Frans<input type="radio" name="radio" id="" value="Engels">Engels
    <input type="hidden" name="hidden" value="20"><br>
    <?php 
     if(isset($_POST['hidden']))
     {
     setcookie('taal',$_POST['radio']);
     header('Location: homepage.php');
    }
    
    
?>
    <button type="submit">submit</button>

    </form>

</body>
</html>