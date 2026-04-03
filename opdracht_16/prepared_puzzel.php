<?php 
$connection = new PDO("mysql:host=localhost;dbname=database", "root","");
$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);



 $titel = "dat is Test voor item";
$omschrijving = "Dit is een test.";

$sql = "INSERT INTO items(titel,omschrijving)VALUES (:titel, :omschrijving)";
$stmt = $connection->prepare($sql);

$stmt->execute([
    ":titel" => $titel,
    ":omschrijving" => $omschrijving
]);
echo"Insert gelukt (als je geen error ziet).";
?>