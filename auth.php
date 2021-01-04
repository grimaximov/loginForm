

<?php

session_start();
require_once('function.php');

$name = htmlspecialchars($_POST['name']);
 $surname = htmlspecialchars($_POST['surname']); 
 $email = htmlspecialchars($_POST['email']); 
 $login = htmlspecialchars($_POST['login']); 
 $password = htmlspecialchars($_POST['password']);
 $password_check = htmlspecialchars($_POST['password_check']);



if($password === $password_check){
  $reguser = regUser($name, $surname, $email, $login, $password);
if($reguser){
   $_SESSION['msg']='Регистрация прошла успешно!';
header('Location:index.php');
} 
}
else {
   $_SESSION['msg']='Пароли не совпадают!';
   header('Location: registration.php');
}



?>