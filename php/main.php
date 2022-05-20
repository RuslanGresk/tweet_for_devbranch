<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Твітерок</title>
</head>
<body>
    <nav class="navabar-dafault">
    <div class="container-fluid">
        <div class="header row">
            <div class="col-md-11">
                <h4 class="hello">Привіт <?=$_COOKIE['user'];?></h4>
            </div>

            <div class="col-md-1">   
                <a href="validation/exit.php"><button class="btn btn-danger flex-child w-100">Вихід</button></a> 
            </div>
        </div> 
    </div>

    
    <div class='container-fluid'>
        <div class="form container-sm" >
            <form class="forms row centered" action="validation/add.php" method="post">
                <textarea class="text_area" name="place" id="place" placeholder="Що у вас на думці?"></textarea><br>
                <button type="submit" name="publish" class="submit btn btn-dark">Опублікувати</button>
            </form>
        </div>

         <div class="main_area" >
            <div class="main_row ">
                <?php
                $mysql = new mysqli('host.docker.internal','root','12345','register');
                $post = $mysql->query("SELECT * FROM `posts` ORDER BY `id` DESC");
                while($row = $post->fetch_assoc()):?>
                   <?php $post_date = $row['date'];
                    $post_area = $row['place'];
                    $user_name = $row['name'];
                    $post_id = $row['id']; 
                    ?>

                    <?php if($_COOKIE['user'] == $user_name || $_COOKIE['user'] == 'Admin'):?> 
                        <div class='name row'>
                            <div class='name_back col-md-8'> 
                                <?=$user_name; ?> 
                            </div>
                                    
                            <div class='date col-md-4'>
                                <?=$post_date;?>
                            </div>
                        </div>

                        <div class='post_area'>
                            <?=$post_area; ?>
                        </div>

                        <div class="buttons row justify-content-end">
                            <div class="button_del col-2">
                                <a href="validation/delete.php?id=<?=$post_id; ?>"><button class="btn btn-danger flex-child">Видалити</button></a> 
                            </div>

                            <div class="col-3">
                                <a name="send" href="validation/update.php?up=<?=$post_id;?>"><button class="btn btn-dark flex-child">Редагувати</button></a>
                            </div>
                        </div>

                    <?php else: ?>
                        <div class='name row'>
                            <div class='name_back col-md-8 '>
                                <?=$user_name;?>
                            </div>
                            
                            <div class='date col-md-4'>
                                <?=$post_date;?>
                            </div>
                        </div>

                        <div class='post_area'>
                            <?=$post_area?>
                        </div>

                        <div class="buttons row justify-content-end">
                            <div class="button_del col-2">
                                <button disabled class="btn btn-danger flex-child">Видалити</button>
                            </div>
                            
                            <div class="col-3">
                                <button disabled class="btn btn-dark flex-child">Редагувати</button>
                            </div>
                        </div>
                        <?php endif; ?> <!-- Перевірка, чи редагувалось поле -->
                            <?php
                            if ($row['chg'] != 1){?>  
                                <div class="change">
                                    <input class="form-check-input" disabled  type="checkbox" name="check" value="yes" />
                                </div>
                            <?php }else{ ?>
                            <div class="change">
                                <input class="form-check-input" checked  disabled type="checkbox" name="check" value="yes" />
                            </div>
                            <?php } ?>
	            <?php endwhile; ?>
            
            </div>
        </div>      
    </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

