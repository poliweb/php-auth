# PHP-auth
### Authorization for a site in PHP

>This is a snippet of PHP code for configuring authorization on the site.
---
```html
<form action="vendor/signin.php" method="post">
        <label>Login</label>
        <input type="text" name="login" placeholder="Enter your login">
        <label>Password</label>
        <input type="password" name="password" placeholder="Enter your password">
        <button type="submit">Enter</button>
        <p>
            Don't have an account? <a href="/register.php">Register now</a>
        </p>
```
 ```php
        <?php 
        if ($_SESSION['message']) {
            echo '<p class="msg">' . $_SESSION['message'] . '</p>';
        }
            unset($_SESSION['message']);
        ?>
 ```
```html
</form>
```
---
[My site on GitHub](https://poliweb.github.io/)
