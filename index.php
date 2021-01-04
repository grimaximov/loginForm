<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TestTask</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

 



        <div class="container">

        <h1>Войти в систему</h1>
            <form class="auth" action='signin.php' method="POST">
           
            <input type="text" name="login" placeholder="Логин">
           <input type="password" name="password" placeholder="Пароль" >
           

             <input type="submit" name="reg" value="Войти">

             <p class="text_reg">Нет аккаунта? <a href="registration.php">Зарегистрируйтесь</a> </p>
             <?php if($_SESSION['msg']){
             echo ' <p class="alert">'.$_SESSION['msg'].'</p>';
         }
    
     unset($_SESSION['msg']);
     ?>
            </form>
        </div>
    
</body>
</html>

