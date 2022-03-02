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
function rekenUit($num1,$num2,$num3){
   $answer = $num1+$num2+$num3;
   return $answer;
}

echo "als ik de getallen 5, 2 en 7 bij elkaar optel, is de uitkomst: ".rekenUit(5,2,7)."<br>";
echo "als ik de getallen 2, 4584 en 808 bij elkaar optel, is de uitkomst: ".rekenUit(2,4584,808)."<br>";
echo "als ik de getallen 1, 1 en 1 bij elkaar optel, is de uitkomst: ".rekenUit(1,1,1);

?>
</body>
</html>