<?php 
    session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
    <form action="vendor/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите свой пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? <a href="/register.php">Зарегистрируйтесь</a>
        </p>
        <?php 
        if ($_SESSION['message']) {
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
        }
            unset($_SESSION['message']);
        ?>
    </form>
</body>
</html>
