<?php
$matriksA = [
    [4, 2],
    [3, 5]
];
$matriksB = [
    [2, 2],
    [5, 3]
];

for ($i=0; $i < 2; $i++) { 
    for ($j=0; $j < 2; $j++) { 
        $hasil= $matriksA[$i][$j]+$matriksB[$i][$j];
        echo $hasil." ";
    }
    echo "</br>";
}
?>