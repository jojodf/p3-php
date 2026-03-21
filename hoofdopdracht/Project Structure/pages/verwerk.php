<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verwerking</title>
</head>
<body>
    <?php
    if(isset($_POST['titel'])){
        $titel = htmlspecialchars($_POST['titel']);
        $categorie = htmlspecialchars($_POST['categorie']);



        
    echo "<h1>Item succesvol ontvangen</h1>";

    echo "<p><strong>Titel:</strong> $titel</p>";
    echo "<p><strong>Categorie:</strong> $categorie</p>";
     


    }else{
         echo "<p>Er is geen formulier verzonden.</p>";
    }

    ?>

    <br>
    <a href="toevoegen.php">← Nog een item toevoegen</a><br>
<a href="home.php">← Home</a>
</body>
</html>