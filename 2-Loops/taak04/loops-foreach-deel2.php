<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>

<form class= "Form" method="GET" action="JEBEM.php">
    <label>Klassenformulier</label> <br>
    <label>Ik zit in klas:</label> 
<select id="school" name="school">
<?php
$Klas = "8B";
$klassen = ['8A' , '8B' , '8C' , '8D' , '8E' , '9A' , '9B' , '9C' , '9D' , '9E'];
foreach($klassen as $klas){
    if($Klas == $klas){
        echo "<option value='$Klas' selected>$klas</option>";
    }
    else{
        echo "<option value='$Klas'>$klas</option>";
    }
}
?>
</select> <br>
<button class= "btn">Verzend</button>
</form>

</body>
</html>
