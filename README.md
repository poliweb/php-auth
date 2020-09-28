# PHP-auth
### Authorization for a site in PHP

>This is a snippet of PHP code for configuring authorization on the site.
---
```html
<form action="vendor/signin.php" method="post">
        <label>Логин</label>
        <input type="text" name="login" placeholder="Введите свой логин">
        <label>Пароль</label>
        <input type="password" name="password" placeholder="Введите свой пароль">
        <button type="submit">Войти</button>
        <p>
            У вас нет аккаунта? <a href="/register.php">Зарегистрируйтесь</a>
        </p>
        ```php
        <?php 
        if ($_SESSION['message']) {
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
        }
            unset($_SESSION['message']);
        ?>
        ```
    </form>
```
---
[My site on GitHub](https://poliweb.github.io/)
