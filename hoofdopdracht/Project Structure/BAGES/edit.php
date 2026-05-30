<?php

include "../INCLUDES/db.php";

if (!isset($_GET['id'])) {
    die("Geen ID opgegeven.");
}

$id = $_GET['id'];

$sql = "SELECT * FROM items WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);

$item = $stmt->fetch(PDO::FETCH_ASSOC);

if (!$item) {
    die("Item niet gevonden.");
}

?>

<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>View item</title>
</head>
<body>

<h1>Item details</h1>

<h3>Titel</h3>
<p><?= $item['titel']; ?></p>

<br>

<h3>Categorie</h3>
<p><?= $item['categorie']; ?></p>

</body>
</html>