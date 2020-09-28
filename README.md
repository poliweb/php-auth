# PHP-auth
### Authorization for a site in PHP

>This is a snippet of PHP code for configuring authorization on the site.
---
```php
<?php 
    session_start();
if ($_SESSION['user']) {
    header('Location: profile.php');
}
?>
```
---
[My site on GitHub](https://poliweb.github.io/)
