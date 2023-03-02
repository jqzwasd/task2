<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href = "style.css" rel="stylesheet" type="text/css">
    <title>Document</title>
</head>
<header class="dark-back">
    <h2>Разработка Веб-Приложений</h2>
    <?php 
    print "Всем привет это слоник ";
    $login = $_GET['login'];
    print "Было введено". $login;
    $mysqli = new mysqli("localhost", "root", "root", "task1");
    $sql = "INSERT INTO users(login,password) VALUES ('test','test')";
    $result = $mysqli->query($sql);
    ?>
</header>
<body>
<nav>
        <ul>
            <li>
                <a href="index.html">Главная</a>
            </li>
            <li>
                <a href="reg.html">Регистраиция</a>
            </li>
            <li>
                <a href="auth.html">Авторизация</a>
            </li>
            <li>
                <a href="hidden_page.html">Скрытая страница</a>
            </li>
        </ul>
</nav>
<main class="dark-back">
    <div>
        <h2>Это Главная</h2>
    </div>
    <form action="" method="get">
            <input type="text" name = "login">
            <input type="submit" value = "отправить">
        </form>
</main>
    <footer class="light-back">
    Sokolov Timofey
    </footer>
</body>


</html>