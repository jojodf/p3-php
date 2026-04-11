<?php
session_start(); // 👈 مهم جداً
include "../includes/db.php";

$errors = [];
$titel = trim($_POST['titel'] ?? '');
$categorie = trim($_POST['categorie'] ?? '');

// ==== التحقق من صحة البيانات ====
if ($titel === "") {
    $errors[] = "Titel is verplicht";
} elseif (strlen($titel) < 3) {
    $errors[] = "Titel moet minimaal 3 tekens bevatten";
} elseif (strlen($titel) > 50) {
    $errors[] = "Titel mag maximaal 50 tekens bevatten";
}

if ($categorie === "") {
    $errors[] = "Categorie is verplicht";
} elseif (strlen($categorie) < 2) {
    $errors[] = "Categorie is te kort";
} elseif (strlen($categorie) > 50) {
    $errors[] = "Categorie mag maximaal 50 tekens bevatten";
}

// ==== إذا في أخطاء ====
if (!empty($errors)) {
    $_SESSION['error'] = implode("<br>", $errors); // 👈 تخزين الأخطاء في session
    header("Location: home.php");
    exit;
}

// ==== إدراج البيانات ====
try {
    $sql = "INSERT INTO items (titel, categorie) VALUES (:titel, :categorie)";
    $stmt = $conn->prepare($sql);
    $stmt->execute([
        ':titel' => $titel,
        ':categorie' => $categorie
    ]);

    $_SESSION['success'] = "Item toegevoegd!"; // 👈 رسالة نجاح

} catch (Exception $e) {
    $_SESSION['error'] = "Opslaan mislukt!";
}

// ==== الرجوع للصفحة الرئيسية ====
header("Location: home.php");
exit;
?>