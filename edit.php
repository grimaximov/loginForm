<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">

<h1>Изменение данных</h1>
    <form class="registration" action="edit.php" method="POST">
    <input type="text" name="new_name" id="" placeholder="Введите имя">
   <input type="text" name="new_surname" placeholder="Введите фамилию">
   <input type="password" name="old_password" placeholder="Старый пароль" >

   <input type="password" name="new_password" placeholder=" Новый пароль" >
   <input type="password" name="password_check" placeholder="Подтвердите пароль" >

     <input type="submit" name="reg" value="Изменить данные">

    
     <p class="text_reg">Авторизуйтесь с новыми данными <a href="index.php">Войти</a> </p>
    
         
     
     
    </form>

    
</div>
</body>
</html>
<?php

    ?>
