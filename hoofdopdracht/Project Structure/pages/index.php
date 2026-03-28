<?php

$errors = [];
$naam = "";
$aantal = "";

if(isset($_POST['naam']) && isset($_POST['aantal'])){
    
    $naam = trim($_POST['naam']);
    $aantal = trim($_POST['aantal']);

    if($naam ===""){
        $errors[] ="Naam is verplicht";
    }

    if( strlen($naam)<3){
        $errors[] ="Naam moet minimaal 3 tekens bevatten.";
    }

    if(strlen($naam)>50){
        $errors[]="Naam mag maximaal 50 tekens bevatten.";
    }


    if($aantal===""){
        $errors[] ="aantal is verplicht.";
    }

    if(!is_numeric($aantal)){
        $errors[]="aantal moet een getal zijn.";

    }



}


?>





<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Backend validatie</title>
</head>
<body>

<?php
if(!empty($errors)){
    echo"<ul>";
    foreach($errors as $error){
        echo "<li style='color:red;'>$error</li>";
    }
    echo"</ul>";
 
}
// 
if(isset($_POST['naam']) && isset($_POST['aantal']) && empty($errors)) {
    echo "<p style='color:blue;'>  Formulier succesvol verzonden!</p>";
}
?>

    <form  method="POST">

<input type="text" name="naam"  placeholder="Naam"
       value="<?php echo htmlspecialchars($naam);?>">
    
<input type="text" name="aantal" placeholder="Aantal"
       value="<?php echo htmlspecialchars($aantal);?>"> 

<button type="submit" >Versturen</button>




</form>
</body>
</html>