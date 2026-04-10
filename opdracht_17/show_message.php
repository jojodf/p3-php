<?php
session_start(); //session_start 
?>

<!DOCTYPE html>
<html>
<body>

<?php
if (isset($_SESSION['flash'])) {
    echo $_SESSION['flash']; // 

 
    unset($_SESSION['flash']); // verwijderen
}



//////Een flash message moet tijdelijk zijn,
//  anders geeft hij verkeerde en verwarrende informatie.
?>

</body>
</html>