<?php

    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

    $mysql = new mysqli('host.docker.internal','root','12345','register');
    $result = $mysql->query("SELECT * FROM `users` WHERE `login` = '$login' AND `pass` = '$pass'");
    $user = $result->fetch_assoc();      
    if(count($user) == 0){
        echo "Користувача не існує";
        exit();
    }

    setcookie('user', $user['name'], time() + 3600, "/");

    if($_COOKIE['user'] != '') {
        header('Location: /main.php');
    }else{
        header('Location: /');
    }
    $mysql->close();

