<?php 
/*
*   require;
*   include;
*   include_once;
*/
    session_start();
   require_once 'connect.php';

   $full_name = $_POST['full_name'];
   $email =$_POST['email'];
   $login = $_POST['login'];
   $password = $_POST['password'];
   $password_confirm = $_POST['password_confirm'];

if ($password === $password_confirm) {
    //con...
    $path ='uploads/' . time() . $_FILES['avatar']['name'];
    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], '../' . $path)) {
        $_SESSION['message'] = 'Ошибка при загрузке файла';
        header('Location: ../register.php');
    }
    // Кодирование пароля для DB md5 "$password = md5($password);"
    $password = md5($password);

    mysqli_query($connect, "INSERT INTO `users` (`id`, `full_name`, `email`, `login`, `password`, `avatar`) VALUES (NULL, '$full_name', '$email', '$login', '$password', '$path')");
    $_SESSION['message'] = 'Регистрация прошла успешно!';
    header('Location: ../index.php');

} else {
    $_SESSION['message'] = 'Пароли не совподают';
    header('Location: ../register.php');
}


?>



