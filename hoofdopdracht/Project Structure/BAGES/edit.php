<?php
include "../includes/db.php";

/* حذف */
if (isset($_GET['delete'])) {

    $id = $_GET['id'];

    $sql = "DELETE FROM items WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$id]);

    header("Location: home.php");
    exit;
}

/* تعديل */
if (isset($_POST['submit'])) {
    
    $id = $_POST['id'];
    $titel = $_POST['titel'];
    $categorie = $_POST['categorie'];

    $sql = "UPDATE items SET titel = ?, categorie = ? WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->execute([$titel, $categorie, $id]);

    header("Location: home.php");
    exit;
}

/* جلب البيانات */
$id = $_GET['id'];

$sql = "SELECT * FROM items WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->execute([$id]);

$item = $stmt->fetch();
?>

<form method="POST">

    <input type="hidden" name="id" value="<?= $item['id'] ?>">

    <label>Titel</label>
    <input type="text" name="titel" value="<?= $item['titel'] ?>">

    <br><br>

    <label>Categorie</label>
    <input type="text" name="categorie" value="<?= $item['categorie'] ?>">

    <br><br>

<button type="submit" name="submit">Opslaan</button>
</form>