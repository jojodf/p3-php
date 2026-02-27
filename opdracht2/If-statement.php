<?php
$naam ="waleed";
$age =22;
$ingelogd = true;

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

<h1>hoi, mijn naam is <?=$naam?></h1>


<?php
if ($ingelogd=== true){
    echo"Je bent ingelogd";

}else{
    echo"Je bent niet ongelogd";

}


?>

</head>
<body>
    
</body>
</html>