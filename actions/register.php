<?php

$name = filter_var(trim($_POST['name']), FILTER_SANITIZE_STRING);
$birthday = filter_var(trim($_POST['birthday']), FILTER_SANITIZE_STRING);
$email = filter_var(trim($_POST['email']), FILTER_SANITIZE_STRING);
$login = filter_var(trim($_POST['login']), FILTER_SANITIZE_STRING);
$pass = filter_var(trim($_POST['pass']), FILTER_SANITIZE_STRING);
$contactNumber = filter_var(trim($_POST['contactNumber']), FILTER_SANITIZE_STRING);



$db_host = 'localhost';
$db_user = 'root';
$db_pass = '';
$db_name ='barbershop_db';
$mysql = new mysqli($db_host,$db_user, $db_pass, $db_name);
$result = $mysql->query("SELECT * FROM `users` WHERE `login`= '$login'");
$user = mysqli_fetch_all($result,1);
if(count($user) != 0){
   $mysql->close();
   header('Location: /');
   exit();
}

$mysql->query("INSERT INTO `users` (`login`, `password`) 
VALUES ('$login', '$pass')");
$mysql->close();
$mysql = new mysqli($db_host,$db_user, $db_pass, $db_name);
$result = $mysql->query("SELECT * FROM `users` WHERE `login`= '$login'");
$userId = mysqli_fetch_all($result,1);
$userId = $userId['0']; // відкриваємо перший рядок у масиві
$userId = $userId['id']; 

$mysql->query("INSERT INTO `userinfo` (`userId`, `name`, `birthday`, `email`, `contactNumber`) 
VALUES ('$userId', '$name', '$birthday', '$email', '$contactNumber')");
$mysql->close();
header('Location: /');
?>


