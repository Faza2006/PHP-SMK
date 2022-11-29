<?php

// Array Dimensi

// $nama = array("joni","tejo","budi","siti",100,2.5);

// var_dump($nama);

// echo '<br>';

// echo $nama[5];

// echo '<br>';

// for ($i=0; $i < 6; $i++) {
//     // echo $i;
//     echo $nama[$i]. '<br>';
// }

// foreach ($nama as $key) {
//     echo $key.'<br>';
// }

// Array Asosiatif

// $nama = array(
//     "joni" => "Surabaya",
//     "budi" => "Malang Raya",
//     "tejo" => "Jakarta",
//     "siti" => "Sidoarjo"
// );

$nama['joni'] = 'Surabaya';
$nama['budi'] = 'Malang Raya';
$nama['tejo'] = 'Jakarta';
$nama['siti'] = 'Sidoarjo';
$nama['edi'] = 'Semarang';

var_dump($nama);

echo '<br>';

// echo $nama['budi'];

foreach ($nama as $key => $value) {
    echo $key . '=>' . $value;

    echo '<br>';
}

?>
