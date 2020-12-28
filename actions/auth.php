<?php

$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);




$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name ='barbershop_db';
$mysql = new mysqli($db_host,$db_user, $db_pass, $db_name);
$result = $mysql->query("SELECT * FROM `users` WHERE `login`= '$login' AND `password`= '$pass'");
$user = mysqli_fetch_all($result,1);
if(count($user) == 0){
   echo "user not found";
   $mysql->close();
   exit();
}
$user = $user['0']; // відкриваємо перший рядок у масиві

setcookie('user', $user['id'], time() + 3600, "/");
$mysql->close();


header('Location: /');
?>


