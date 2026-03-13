<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "p3_games";

// الاتصال بقاعدة البيانات
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

$games  = $conn->prepare("SELECT * FROM games");
$games->execute();

//$doosje_met_games = $games->fetchAll(PDO:: FETCH_ASSOC);

$game = $games->fetchAll(PDO:: FETCH_ASSOC);

echo "<ul>";
foreach($game as $game ){
  echo " <li>". $game['title']."</li>";

}
  
  
echo "<ul>";
  




?>


