<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
  
    <title>Eenvoudige Cookies</title>
</head>
<body>
    <form action="instelling.php" method="POST" name="form">
    <input type="radio" name="radio" id="" value="Nederlands">Nederlands<input type="radio" name="radio" id="" value="Frans">Frans<input type="radio" name="radio" id="" value="Engels">Engels
    <p>Username<input type="text" name="username" id=""></p>
    <select name="select" id="">
    <option value="blue">blue</option>
    <option value="rose">rose</option>
    </select>
    <input type="hidden" name="hidden" value="20"><br>
    
    <?php 

     if(isset($_POST['hidden']))
     {
     setcookie('taal',$_POST['radio']);
     setcookie('user',$_POST['username']);
     setcookie('background',$_POST['select']);
     header('Location: home.php');
    }
    
    
?>
    <button type="submit">submit</button>

    </form>

</body>
</html>