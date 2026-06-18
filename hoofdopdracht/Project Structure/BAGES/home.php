<?php
session_start();

include "../includes/header.php";
include "../includes/nav.php";
include "../includes/db.php";
?>

<link rel="stylesheet" href="../BAGES/stel.css">

<h1>Overzicht</h1>

<?php if (isset($_SESSION['success'])): ?>
    <div class="alert success">
        <?= $_SESSION['success']; ?>
    </div>
    <?php unset($_SESSION['success']); ?>
<?php endif; ?>

<?php
$stmt = $conn->prepare("SELECT * FROM items");
$stmt->execute();
$items = $stmt->fetchAll(PDO::FETCH_ASSOC);

if (!empty($items)) {

    echo "<ul>";

    foreach ($items as $item) {

        echo "<li>";

        echo htmlspecialchars($item['titel']) .
             " (" . htmlspecialchars($item['categorie']) . ") ";

        echo "<a href='edit.php?id=" . $item['id'] . "'>
                <button>Wijzigen</button>
              </a> ";

        echo "<a href='edit.php?id=" . $item['id'] . "&delete=1'
                onclick='return confirm(\"Weet je het zeker?\")'>
                <button>Verwijderen</button>
              </a>";

        echo "</li>";
    }

    echo "</ul>";

} else {

    echo "<p>Er zijn nog geen items toegevoegd.</p>";
}

include "../includes/footer.php";
?>