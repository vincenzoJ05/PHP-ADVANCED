<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form</title>
</head>
<body>
    <form name = "formulier" method="POST" action="mijngegevens.php">
        <p>Voornaam: <input name= "firstname"></p>
        <p>Achternaam: <input name= "lastname"></p>
        <p>Klas: <input name= "class"></p>
        <p>Leeftijd: <input name= "age"></p>
        <p>Adres: <input name= "adres"></p>
        <p>Plaatsnaam: <input name= "placename"></p>
        <p>Favoriete muziekband:  <input name= "favemusicband"></p>
    <input type= "radio" id="Man" name= "gender" value="man">Man</input>
    <input type= "radio" id="Vrouw" name="gender" value="vrouw">Vrouw</input>
    <br>       
    <select id="kleur" name="kleur">
        <?php 
        $lievelingskleuren = ['blue' , 'red' , 'yellow' , 'green'];
        foreach($lievelingskleuren as $lievelingskleur){
             echo "<option value='$lievelingskleur'selected>$lievelingskleur</option>";
        }
        ?>
    </select>
    <br>
    <button>verzend</button>
    </form>  
</body>
</html>