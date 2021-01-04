

<?php
function connect() {
    $connect = mysqli_connect('localhost', 'root', '', 'work');
    mysqli_set_charset($connect, 'utf8');
    if(!$connect){
        die('Ошибка соединения с базой WORK');
    }
    return $connect;
}

 function regUser($name, $surname, $email, $login,$password){
    $connect = connect();
    $password = md5($password);
    $query = "INSERT INTO `users` (`name`,`surname`,`email`,`login`,`password`) VALUES('$name','$surname','$email','$login','$password') ";
    
    mysqli_query($connect, $query);

 }

 function authorize($login, $password){
     $connect = connect();
     $password = md5($password);
    
    $query = "SELECT * FROM `users` WHERE `login`='$login' AND `password`='$password'";
    mysqli_query($connect, $query);
    if (mysqli_num_rows($query)>0){
        $user = mysqli_fetch_assoc($query);
         $_SESSION['msg']=  'Авторизация прошла успешно!';
        
        // $_SESSION['user']= [
        //     "name"=> $user['name'],
        //     "surname"=> $surname['surname'],
        //     "login"=> $login['login'],
        //     "email"=> $email ['email']
        // ];
    }
        header('Location: account.php');
    }
    

 
?>