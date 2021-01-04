

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Account</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body>
<?php
session_start();
?>
<div class="container">
    <?php
   echo '<p class="account">Приветствуем вас '.$_SESSION['user']['name'].' '. $_SESSION['user']['surname'].'</p>';
   echo '<p class="alert">'.$_SESSION['msg'].'</p>';

    ?>
<a href="logout.php" class="logout">Выход</a>
<a href="edit.php" class="change_data">Изменить данные</a>

</div>

</body>
</html>