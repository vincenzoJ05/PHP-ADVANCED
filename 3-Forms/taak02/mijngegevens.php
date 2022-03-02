<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Result</title>
</head>
<body>

<?php
/*ik heb GET gebruikt omdat ik wil zien hoe het eruit ziet in de url beter is*/
$zinnen = [
    "firstname" => "Voornaam: ",
    "lastname" => "Achternaam: ",
    "class" => "Klas: ",
    "age" => "Leeftijd: ",
    "adres" => "adres: ",
    "placename" => "Plaatsnaam: ", 
    "favemusicband" => "Favoriete muziek band: ",
    "gender" => "Geslacht: ",
    "kleur" => "Kleur: " 
];

foreach($_GET as $key => $value){
    echo $zinnen[$key].$value."<br>"; 
}

echo "<body style='background-color:".$_GET['kleur']."'>";
?>   

</body>
</html>




