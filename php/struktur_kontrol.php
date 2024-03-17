<?php
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai huruf : A";
} elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai huruf : B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai huruf : C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai huruf : D";
}

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer.";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i = 1; $i <= $jumlahLahan; $i++) {
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "Jumlah buah yanng akan dipanen adalah : $jumlahBuah";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach ($skorUjian as $skor) {
    $totalSkor += $skor;
}

echo "Total skor ujian adalah : $totalSkor"

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai : $nilai (tidak lulus) <br>";
        continue;
    }
    echo "Nilai : $nilai (Lulus) <br>";
}

echo "<br> <br>";

$nilai = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];
$rataNilai = 0;
$totalNilai = 0;

sort($nilai);
for ($i = 2; $i < count($nilai) - 2; $i++) {
    $totalNilai += $nilai[$i];
}

$rataNilai = $totalNilai / (count($nilai) - 4);
echo "Rata-rata nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah : $rataNilai";

echo "<br> <br>";

$harga_produk = 120000;
$batas_diskon = 100000;
$persentase_diskon = 20;
$harga_setelah_diskon = $harga_produk;

if ($harga_produk > $batas_diskon) {
    $diskon = ($persentase_diskon / 100) * $harga_produk;
    $harga_setelah_diskon = $harga_produk - $diskon;
}

echo "Harga yang harus dibayar setelah mendapatkan diskon: Rp " . number_format($harga_setelah_diskon, 2, ',', '.') . "<br>";

echo "<br> <br>";

function hitungTotalSkor($poin) {
    $total_skor = $poin;
    $hadiah_tambahan = ($poin > 500) ? "YA" : "TIDAK";
    echo "Total skor pemain adalah: $total_skor <br>";
    echo "Apakah pemain mendapatkan hadiah tambahan? $hadiah_tambahan";
}


$poin_pemain = 600;
hitungTotalSkor($poin_pemain);

echo "<br> <br>";



?>