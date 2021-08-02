<?php

$jumlah_burung = 6969;

$waktu_netas = 21 ;

$percent_mati = 11.1/100;

$kali_menetas = 441/21;
for ($i=1; $i<=$kali_menetas; $i++) {
    $jumlah_mati = $percent_mati * $jumlah_burung;
    $jumlah_menetas = $jumlah_burung - $jumlah_mati;
    $jumlah_burung = $jumlah_burung + $jumlah_menetas;
}
echo "Jumlah Burung dalam 441 hari adalah ". round($jumlah_burung). " ekor \n";