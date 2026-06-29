<?php
session_start();
?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Menu Test</title>
</head>
<body>

<nav>
    <a href="#">Home</a> |
    <a href="#">Contact</a> |

    <?php
    if (isset($_SESSION['user'])) {
        echo "Ingelogd";
    } else {
        echo "Niet ingelogd";
    }
    ?>
</nav>

</body>
</html>