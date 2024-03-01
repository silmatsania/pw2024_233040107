<?php 

$a = 10;
$b=3.14;


echo "<br><b> Menghitung Luas Lingkaran </b><br><br>";
function Hitung_Luas_Lingkaran($a, $b) {
    $luaslingkaran =$b * $a * $a;
    return $luaslingkaran;
}
echo "Jari-jari = ". $a ." cm.<br>";
echo "Luas lingkaran = ".$luas = Hitung_Luas_Lingkaran($a,$b)." cm <sup>2</sup> <br> <hr>";

echo "<b> Menghitung Keliling Lingkaran </b><br><br>";
function Hitung_Keliling_Lingkaran($a, $b) {
    $kelilinglingkaran = 2 * $b * $a;
    return  $kelilinglingkaran ;
}
echo "Jari-jari = ". $a * 2 ." cm.<br>";
echo "Keliling lingkaran = ".$keliling = Hitung_Keliling_Lingkaran($a,$b* 2)." cm <sup> </sup> <br> <hr>";

