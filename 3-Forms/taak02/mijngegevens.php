<?php
/*ik heb GET gebruikt omdat ik wil zien hoe het eruit ziet in de url beter is*/
echo var_dump($_GET);
foreach($_GET as $key => $value){
    echo " De value is: " . $value . "<br>"; 
}

echo "<body style='background-color:".$_GET['kleur']."'>";
?>


