<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="/css/style.css">
    <title>Форма реєстрації</title>
</head>
<body>
    <div class="container mt-4">
        <div class="row justify-content-around">
            <div class="login col-5">
                <h1>Реєстрація</h1>
                <form action="validation/check.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введіть логін"><br>
                    <input type="text" class="form-control" name="name" id="name" placeholder="Введіть ім'я"><br>
                    <input type="text" class="form-control" name="pass" id="pass" placeholder="Введіть пароль"><br>
                    <button type="submit" class="btn btn-success">Реєстрація</button>
                </form>
            </div>
            <div class="login col-5">
                <h1>Авторизація</h1>
                <form action="validation/auth.php" method="post">
                    <input type="text" class="form-control" name="login" id="login" placeholder="Введіть логін"><br>
                    <input type="text" class="form-control" name="pass" id="pass" placeholder="Введіть пароль"><br>
                    <button type="submit" class="btn btn-success">Авторизація</button>
                </form>
            </div>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>

