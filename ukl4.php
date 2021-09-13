<?php
$kolom=4;
for ($i=0; $i < $kolom; $i++) { 
    for ($j=0; $j <= $i; $j++) { 
        echo "* \t";
    }
    echo "</br>";
}
for ($i=0; $i < $kolom; $i++) { 
    for ($j=$kolom -1; $j > $i ; $j--) { 
        echo "* \t";
    }
    echo "</br>";
}
?>