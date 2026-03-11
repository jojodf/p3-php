


<?php include "../includes/header.php"; ?>

<?php include "../includes/nav.php"; ?>





<h1>Home</h1>

<?php

$games=[
    [
    
    "titel"  =>  "PlayerUnknown's Battlegrounds",
 "Genre"  =>  "Genre: Battle Royale, Shooter",
 "tijd"   => 2,
    ],


    [
     "Genre"  =>  "Person Shooter (FPS)",
    "Platform"  =>  "Genre: Battle Royale, Shooter",
    "Rating"   => "PEGI 18 / ESRB M (Mature 17+) vanwege geweld en grof taalgebruik"
    ],

    
[
"Volledige" =>  "EA Sports FC 25",
"Ge"=> "Sport, Voetbalsimulatie",
 "Platform"=>"PlayStation 5, PlayStation 4, Xbox Series X|S, Xbox One, PC (Windows), Nintendo Switch",
]
]


?>


  <h1> PUBG: BATTLEGROUNDS</h1>
    <p>Volledige titel:<?=  $games[0]["titel"]  ?></p>
    <p>Genre:<?= $games[0]["Genre"]?></p>
    <p>uur gespeeld:<?= $games[0]["tijd"]?></p>
    <br>

    <h1> Battlefield 1</h1>
    <p>Volledige titel:<?=  $games[1]["Genre"]  ?></p>
    <p>Genre:<?= $games[1]["Platform"]?></p>
    <p>uur gespeeld:<?= $games[1]["Platform"]?></p>



    <h1>EA Sports FC 25</h1>
    <p>titel<?=  $games[2]["Volledige"] ?></p>
    <p>Genree<?=  $games[2]["Ge"] ?></p>
    <p>Platform <?=  $games[2]["Platform"] ?></p>
<?php  ?>
<?php include "../includes/footer.php"; ?>