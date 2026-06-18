<?php
include "../includes/db.php";

if (isset($_POST['submit'])) {

    $username = $_POST["username"];
    $password = $_POST["password"];

    // Controleer of gebruiker al bestaat
    $register = $conn->prepare("SELECT id FROM users WHERE username = ?");
    $register->execute([$username]);

    $result = $register->fetch();

    if ($result) {

        echo "Gebruikersnaam bestaat al!";

    } else {

        $hash = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $conn->prepare(
            "INSERT INTO users (username, password) VALUES (?, ?)"
        );

        $stmt->execute([$username, $hash]);

        echo "Gebruiker opgeslagen!";
    }
}
?>

<form method="POST">
    <input type="text" name="username" placeholder="Username" required>
    <br><br>

    <input type="password" name="password" placeholder="Password" required>
    <br><br>

    
    <button type="submit" name="submit">Registreren</button>

</form>