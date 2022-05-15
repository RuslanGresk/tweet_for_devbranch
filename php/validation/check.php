<?php
    $login = filter_var(trim($_POST['login']),FILTER_SANITIZE_STRING);
    $name = filter_var(trim($_POST['name']),FILTER_SANITIZE_STRING);
    $pass = filter_var(trim($_POST['pass']),FILTER_SANITIZE_STRING);

    $errors ='';
    if(mb_strlen($login) < 5 || mb_strlen($login) > 15){
        echo 'Недопустима довжина логіна';
        exit();
    }else if(mb_strlen($name) < 5 || mb_strlen($name) > 15){
        echo 'Недопустима довжина імені';
        exit();
    }else if(mb_strlen($pass) < 5 || mb_strlen($pass) > 15) {
        echo 'Недопустима довжина пароля';
        exit();
    }

    $mysql = new mysqli('host.docker.internal','root','12345','register');
    $mysql->query("INSERT INTO `users` (`login`, `pass`, `name`)
    VALUES('$login', '$pass', '$name')");

    header('Location: /');

    $mysql->close();

    

