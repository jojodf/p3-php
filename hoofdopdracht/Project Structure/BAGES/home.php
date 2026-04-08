<?php include "../includes/header.php"; ?>
<?php include "../includes/nav.php"; ?>
<?php include "../includes/db.php"; ?>


<h1>Overzicht</h1>

<?php
// تنفيذ الاستعلام
$stmt = $conn->prepare("SELECT * FROM items");
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);

// التحقق إذا كانت هناك عناصر
if (!empty($items)) {
    echo "<ul>";
    foreach ($items as $item) {
        echo "<li>" . htmlspecialchars($item['titel']) . " (" . htmlspecialchars($item['categorie']) . ")</li>";
    }
    echo "</ul>";
} else {
    echo "<p>Er zijn nog geen items toegevoegd.</p>";
}

// تضمين الـ footer
include "../includes/footer.php";
?>
