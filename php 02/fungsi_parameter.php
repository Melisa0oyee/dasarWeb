<?php
function perlkenalan($nama, $salam) {
    echo $salam.", ";
    echo "Perkenalkan, nama saya ".$nama." <br/>";
    echo "Senang berkenelan dengan Anda<br/>";
}

perlkenalan("Hamdan", "Hallo");
echo "<hr>";

$saya = "Elok";
$ucapanSalam = "Selamat Pagi";

perlkenalan($saya, $ucapanSalam);
?>