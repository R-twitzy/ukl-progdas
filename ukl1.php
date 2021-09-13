<?php
//nilai suku pertama adalah 11, nilai suku berdekatan adalah 5, tampil suku 20-28
$a=11;
$b=5;
$total=0;

for ($i=20; $i <= 28 ; $i++) { 
    $un= $a + ($i-1) * $b;
    echo $un.", ";
    $total += $un;
}
echo "</br>";
echo "Sn= ".$total;
?>