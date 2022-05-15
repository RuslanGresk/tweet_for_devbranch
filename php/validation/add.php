<?php
    $post = $_POST['place'];
    $user = $_COOKIE['user'];
    if($post == ''){
        echo 'Ви нічого не вписали в поле';
        exit();
    }
    if(mb_strlen($post) > 129){
        echo 'Публікація завелика. Максимальна кількість символів - 129';
        exit();
    }

    $mysql = new mysqli('host.docker.internal','root','12345','register');
    $mysql->query("INSERT INTO `posts` (`place`, `name`) VALUES ('$post', '$user')");


    header('Location: /main.php');
