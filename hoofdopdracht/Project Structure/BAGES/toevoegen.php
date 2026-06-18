<?php
include "../includes/header.php";
include "../includes/nav.php";


?>
<link rel="stylesheet" href="../BAGES/stel.css">
<h1>Nieuw item toevoegen</h1>

<?php if (!empty($errors)): ?>
    <ul>
        <?php foreach ($errors as $error): ?>
            <li style="color:red;"><?php echo htmlspecialchars($error); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>



<form method="POST" action="verwerk.php">
    <label>Titel:</label><br>
    <input type="text" name="titel" required><br><br>

    <label>Categorie:</label><br>
    <input type="text" name="categorie" required><br><br>

    <button type="submit">Toevoegen</button>
</form>