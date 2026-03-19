<form  method="POST">

<input type="naam" name="naam" require>
<input type="number" name="aantal" require>
<button type="submit" >Versturen</button>


</form>
<?php

if(isset($_POST['naam']) && isset($_POST['aantal'])) {
    $naam = htmlspecialchars($_POST['naam']);
    $aantal= htmlspecialchars($_POST['aantal']);


    echo "<p>" . $naam. "</p>";
    echo "<p>" . $aantal. "</p>";



}
?>