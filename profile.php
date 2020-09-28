<?php 
    session_start();
if (!$_SESSION['user']) {
    header('Location: /');
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
    <form>
        <img src="<?php echo $_SESSION['user']['avatar'] ?>" width="100" alt="">
        <h2><?php echo $_SESSION['user']['full_name'] ?></h2>
        <a href="#"><?php echo $_SESSION['user']['email'] ?></a>
        <a href="vendor/logout.php">Выход</a>
    </form>
</body>
</html>
