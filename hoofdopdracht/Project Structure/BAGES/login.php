<?php
include "../includes/db.php";

$message = "";

if (isset($_POST['submit'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM users WHERE username = ?");
    $stmt->execute([$username]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {
        if (password_verify($password, $user['password'])) {
            $message = "Succesvol ingelogd";
        } else {
            $message = "Onjuist wachtwoord";
        }
    } else {
        $message = "Gebruiker niet gevonden";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <br><br>

    <input type="password" name="password" placeholder="Password" required>
    <br><br>

    <button type="submit" name="submit">Inloggen</button>
</form>

<p><?= $message ?></p>