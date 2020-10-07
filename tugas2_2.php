<?php 

$jual = 80000;
$beli = 50000;

$untung = $jual - $beli;
$persenuntung=($untung/$beli)*100;

echo "Jual = ", $jual, "<br>";
echo "Beli = ", $beli, "<br>";
echo "Keuntungan = ? <br>";
echo "Jawaban: ", $persenuntung, "%";

 ?>