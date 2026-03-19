<form method="POST">
    <input type="text" name="titel">
    <button type="submit">send</button>
</form>

<?php
print_r($_POST);

if (isset($_POST['titel'])) {
    echo "Titel: " . $_POST['titel'];
}
