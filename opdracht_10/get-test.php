<form  method="GET">
    <input type="text" name="titel">
    <button type="submit">send</button>
</form>

<?php
print_r($_GET);

if(isset($_GET["titel"])){
    echo "titel" . $_GET['titel'];
}