
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

<?php if (isset($_SESSION['error'])): ?>
    <div class="alert error">
        <?= $_SESSION['error']; ?>
    </div>
    <?php unset($_SESSION['error']); ?>
<?php endif; ?>
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





<?php
/*
//////////////
// الفكرة الحقيقية

1. session_start()
👉 يفتح مساحة تخزين مؤقتة بين الصفحات (Session)

2. تخزين الرسائل:
$_SESSION['error'] = "Fout!";
$_SESSION['success'] = "Gelukt!";

3. redirect إلى صفحة ثانية:
header("Location: home.php");

4. في الصفحة الثانية نعرض الرسالة:
echo $_SESSION['error'];

5. بعد العرض نحذفها:
unset($_SESSION['error']);

//////////////////////////
*/
?>