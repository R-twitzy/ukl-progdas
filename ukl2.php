<?php
$a=10;
$b=4;
$u=10;
$s=0;
$baris=5;
$kolom=4;
for ($i=0; $i < $kolom; $i++) { 
    for ($j=0; $j < $baris; $j++) { 
        echo $u."\n";
        $u+=$b;
        $s+=$u;
    }
    echo "</br>";
}
?>