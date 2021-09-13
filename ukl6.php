<?php
$matriksA=[
    [1, 3],
    [2, 4]
];
$matriksB=[
    [4],
    [2]
];

for ($i=0; $i < count($matriksA); $i++) { 
    for ($j=0; $j < count($matriksB[$i]); $j++) { 
        $hasil=0;
        for ($k=0; $k < count($matriksA[$i]); $k++) { 
            $hasil+=$matriksA[$i][$k]*$matriksB[$k][$j];
        }
        echo $hasil." ";
    }
    echo "</br>";
}
?>