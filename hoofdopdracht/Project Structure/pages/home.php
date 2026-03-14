
<?php include "../includes/header.php"; ?>
<?php include "../includes/nav.php"; ?>
<?php include  "../includes/db.php";?>

<h1>Home</h1>


<?php 

$query = $conn->prepare("SELECT * FROM items"); 

$query->execute();

$item = $query->fetchAll(PDO::FETCH_ASSOC);

?>

<?php
if(!empty($item)){
  echo"<ul>";
  foreach($item as $item){
        echo "<li>" . $item["titel"] . " - " .  " - " . $item["status"].""  .$item["jaartal"]. "</li>";
  }
  echo"</ul>";
  echo "<p>Er zijn nog geen items toegevoegd.</p>";
}

?>

  
<?php  ?>
<?php include "../includes/footer.php"; ?>