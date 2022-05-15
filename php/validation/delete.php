<?php
    require 'configBD.php';
    $id = $_GET['id'];
    $sql = 'DELETE FROM `posts` WHERE `id` = ?';
    $query =$pdo->prepare($sql);
    $query->execute([$id]);

    header('Location: /main.php');
    

