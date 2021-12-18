<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
function rekenUit($num1, $num2, $num3, $antwoord){
    echo "Als ik de getallen $num1, $num2 en $num3 bij elkaar optel krijg je de uitkomst: $antwoord" . "<br>";
}

rekenUit(5, 5, 5, 15);
rekenUit(2, 4, 6, 12);
rekenUit(7, 105, 456.7, 568.7);
?>

</body>
</html>