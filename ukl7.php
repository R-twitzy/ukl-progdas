<?php
$person = [
    ["id"=>"1", "nama"=>"Galuh", "golongan" => "1", "alamat" => "Sawojajar"],
    ["id"=>"2", "nama"=>"Indro", "golongan" => "3", "alamat" => "Kedungkandang"],
    ["id"=>"3", "nama"=>"Jedi", "golongan" => "2", "alamat" => "Ijen"],
    ["id"=>"4", "nama"=>"Kanu", "golongan" => "3", "alamat" => "Dinoyo"],
];

//masukkan
$id=3;
$pemakaian=55;

//golongan
$id -= 1;
$gol= $person[$id]["golongan"];
if ($gol == 1) {
    $tarif = 1000;
}
elseif ($gol == 2){
    $tarif = 1300;
}
elseif ($gol == 3){
    $tarif = 1500;
}
elseif ($gol == 4){
    $tarif = 1500;
}

//menghitung
$tagihan = ($pemakaian * $tarif) + 13000;

//print
echo "id = ".$person[$id]["id"]."</br>";
echo "Nama = ".$person[$id]["nama"]."</br>";
echo "Golongan = ".$person[$id]["golongan"]."</br>";
echo "Pemakaian = ".$pemakaian."kwh </br>";
if ($tagihan<=50000) {
    echo "Jumlah tagihan = Rp.50000 </br>";
}
else {
    echo "Jumlah tagihan = Rp.".$tagihan."</br>";
}
echo "Alamat = ".$person[$id]["alamat"]."</br>";
?>