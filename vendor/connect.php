<?php 
// mysqli_connect
$connect = mysqli_connect($host = 'localhost', $user = 'root', $password = 'root', $database = 'assignments');
if (!$connect) {
    die('Error connect to DataBase');
}
?>
