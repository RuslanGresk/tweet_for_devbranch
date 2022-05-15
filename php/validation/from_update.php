<?php
array_push($_POST, 'check');
$post = $_POST['place'];
$id = $_POST['id'];
    if($post == ''){
        echo 'Ви нічого не вписали в поле';
        exit();
    }

    $mysql = new mysqli('host.docker.internal','root','12345','register');
    $mysql->query("UPDATE `posts` SET `place` = '$post',`chg` = '1', `date` =  NOW() WHERE `posts`.`id` = '$id'");

    
    header('Location: /main.php');

?>