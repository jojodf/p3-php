<?php
$pdo = new PDO("mysql:host=localhost;dbname=test_db", "root", "");

// Verwerken van POST
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $titel = $_POST["titel"];

    $stmt = $pdo->prepare("INSERT INTO posts (titel) VALUES (:titel)");
    $stmt->execute([
        ":titel" => $titel
    ]);

header("Location: refresh_test.php");
exit;    
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>Refresh test</title>
</head>
<body>

<form method="POST">
    <input type="text" name="titel" placeholder="Titel">
    <button type="submit">Opslaan</button>
</form>

</body>
</html>