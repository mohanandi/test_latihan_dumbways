<?php

$kata = "DumbWaysdotid";

$pisah_kata = str_split($kata);
var_dump($pisah_kata);
$jumlah = count($pisah_kata);
echo $jumlah;
$acak_kata = ['u','W','d','o','b','d','D','s','y','m','i','t','a'];
echo count($acak_kata);

for ($i = 0; $i<$jumlah; $i++) {
    if ($pisah_kata[$i] == $acak_kata[$i]) {
    } else {
        for ($j = 0; $j<$jumlah; $j++) {
            if ($pisah_kata[$i] == $acak_kata[$j]) {
             $temp = $acak_kata[$i];
             $acak_kata[$i] = $acak_kata[$j];
             $acak_kata[$j] = $temp;
            }
        }
    }
}

echo "<br>";
var_dump($acak_kata);

// if ('d' == 'D') {
//     echo "sama";
// }else {
//     echo "tidak";
// }