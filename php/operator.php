<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOR = $a || $b;
$hasilNotA  = !$a;
$hasilNotB = !$b;

$hasilTambahSama = $a += $b;
$hasilKurangSama = $a -= $b;
$hasilKaliSama = $a *= $b;
$hasilBagiSama = $a /= $b;
$hasilModulSama = $a %= $b;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;


echo "a + b : {$hasilTambah} <br>";
echo "a - b : {$hasilKurang} <br>";
echo "a * b : {$hasilKali} <br>";
echo "a / b : {$hasilBagi} <br>";
echo "a % b : {$sisaBagi} <br>";
echo "a ** b : {$pangkat} <br>";

echo "a == b : $hasilSama <br>";
echo "a != b : $hasilTidakSama <br>";
echo "a < b : $hasilLebihKecil <br>";
echo "a > b : $hasilLebihBesar <br>";
echo "a <= b :  $hasilLebihKecilSama <br> ";
echo "a >= b : $hasilLebihBesarSama <br> ";

echo "a && b : $hasilAnd <br> ";
echo "a || b : $hasilOR <br> ";
echo "!a : $hasilNotA <br> ";
echo "!b : $hasilNotB <br> ";

echo "a += b : $hasilTambahSama <br>";
echo "a -= b : $hasilKurangSama <br>";
echo "a *= b : $hasilKaliSama <br>";
echo "a /= b : $hasilBagiSama <br>";
echo "a %= b : $hasilModulSama <br>";

echo "a === b : $hasilIdentik <br> ";
echo "a !== b : $hasilTidakIdentik <br> ";

// Sebuah restoran memiliki 45 kursi di dalamnya. Pada suatu malam, 28 kursi telah ditempati oleh pelanggan. 
// Berapa persen kursi yang masih kosong di restoran tersebut? 

$jumlahKursi = 45;
$jumlahPinjam = 28;
$sisaKursi = $jumlahKursi - $jumlahPinjam;

echo "Jumlah Kursi :  $jumlahKursi <br>";
echo "Jumlah Pinjam : $jumlahPinjam <br>";
echo "Sisa Kursi : $sisaKursi <br>";


?>