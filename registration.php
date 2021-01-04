
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница регистрации</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

<h1>Регистрация</h1>
    <form class="registration" action="auth.php" method="POST">
    <input type="text" name="name" id="" placeholder="Имя">
   <input type="text" name="surname" placeholder="фамилия">
    <input type="text" name="email" placeholder="почта">
    <input type="text" name="login" placeholder="Логин">
   <input type="password" name="password" placeholder="Пароль" >
   <input type="password" name="password_check" placeholder="Подтвердите пароль" >

     <input type="submit" name="reg" value="Зарегистрироваться">
     <p class="text_reg">Уже есть аккаунт? <a href="index.php">Войти</a> </p>
    
         <?php if($_SESSION['msg']){
             echo ' <p class="alert">'.$_SESSION['msg'].'</p>';
         }
    
     unset($_SESSION['msg']);
     ?>
     
    </form>
</div>

    
</body>
</html>