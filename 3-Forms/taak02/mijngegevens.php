<?php
/*ik heb GET gebruikt omdat ik wil zien hoe het eruit ziet in de url beter is*/
$zinnen = [
    "firstName" => "Voornaam: ",
    "lastName" => "Achternaam: ",
    "class" => "Klas: ",
    "age" => "Leeftijd: ",
    "placeName" => "Plaatsnaam: ", 
    "favemusicband" => "Favoriete muziek band: ",
    "gender" => "Geslacht: ",
    "Color" => "Kleur: " 
];


foreach($$_GET as $key => $value){
    echo $zinnen['$key'].$value."<br>"; 
}

echo "<body style='background-color:".$_GET['kleur']."'>";
?>


