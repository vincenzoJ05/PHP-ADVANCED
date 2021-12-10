<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "<ul>";
    $dagen = ['maandag' , 'dinsdag' , 'woensdag' , 'donderdag' , 'vrijdag' , 'zaterdag' , 'zondag'];
    foreach($dagen as $dag)
    echo "<li> $dag  <br> </li>";
    echo "</ul>";
        ?>
</body>
</html>