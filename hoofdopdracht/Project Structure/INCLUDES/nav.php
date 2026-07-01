<?php
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}
?>
<nav>
    <a href="home.php">Home</a>

    <?php if (isset($_SESSION['user'])): ?>
        <a href="toevoegen.php">Toevoegen</a>
        <a href="logout.php">Logout (<?= htmlspecialchars($_SESSION['user']) ?>)</a>
    <?php else: ?>
        <a href="login.php">Login</a>
        <a href="register.php">Registreren</a>
    <?php endif; ?>
</nav>
<hr>
