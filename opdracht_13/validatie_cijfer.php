<?php



$aantal ="10";

if(is_numeric($aantal)){
    echo"Correct ingevoerd";
}


echo"<br>";

$aantal = "tien";

if(is_numeric($aantal)){
    echo"Correct ingevoerd.";
}else{
    echo"Voer een geldig getal in.";
}

?>