<?php
session_start();
require_once('function.php');




$login = $_POST['login'];
$password = $_POST['password'];
authorize($login, $password);
if (mysqli_num_rows($query)>0){
    $user = mysqli_fetch_assoc($query);
     $_SESSION['msg']=  'Авторизация прошла успешно!';
    
    // $_SESSION['user']= [
    //     "name"=> $user['name'],
    //     "surname"=> $surname['surname'],
    //     "login"=> $login['login'],
    //     "email"=> $email ['email']
    // ];
    header('Location: account.php');
}
else {
    $_SESSION['msg']=  'Авторизация не состоялась, проверьте данные!';
    header('Location: index.php');
};
?>