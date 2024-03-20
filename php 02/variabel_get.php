<?php

    $nama = @$_GET['nama']; 
    // tanda @ agar tidakk ada peringatan error

    $usia = @$_GET['usia'];

    echo "Halo {$nama}! Apakah benar anda berusia {$usia} tahun?"



?>