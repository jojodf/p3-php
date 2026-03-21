<?php include "../includes/header.php"; ?>
<?php include "../includes/nav.php"; ?>
 

<!DOCTYPE html>
<html lang="en">
<head>
    
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nieuw item toevoegen</title>
</head>
<body>
    <form  method="POST" action="/Project Structure/pages/verwerk.php">

    <LAbel for="titel"> Titel:</LAbel> <br>
    <input type="text" id="titel" name="titel" required > <br> <br>


     <label for="categorie">Categorie:</label><br>
    <input type="text" id="categorie" name="categorie"><br><br>
    <button type="submit">Toevoegen</button>




</form>
</body>
</html>
