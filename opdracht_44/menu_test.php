<?php
session_start();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Menu</title>
</head>
<body>

<nav>
    <a href="index.php">Home</a>

    <?php if (isset($_SESSION['user'])) { ?>
        | <a href="new_item.php">Nieuw item</a>
        | <a href="logout.php">Logout</a>
    <?php } else { ?>
        | <a href="login.php">Login</a>
        | <a href="register.php">Register</a>
    <?php } ?>

</nav>

</body>
</html>