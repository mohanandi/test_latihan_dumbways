<?php

function bendera ($kata) {
    $bendera_jenis_satu = '= * = * = * = * = * ';
    $bendera_jenis_dua = '* = * = * = * = * = ';
    for ($i=1; $i<=7; $i++) {
        if (($i == 3) || ($i == 5)) {
            echo $bendera_jenis_dua;
        } else if ($i == 4) {
            echo $kata;
        } else {
            echo $bendera_jenis_satu;
        }
        echo "<br>";
    }
}
$word = "DUMBWAYSID";
bendera($word);