<?php

$nama = "Abdull";
$umur = 20;
$tinggi = 170.5;
$menikah = true;
$hobi = ["membaca", "berenang", "bermain gitar"];

echo "Nama saya $nama,umur saya $, tinggi saya $tinggi cm, status saya $menikah, hobi saya $hobi[1]";

echo "<br><br>===========================<br><br>";

//OPERATOR
$nilai1 = 5;
$nilai2 = 8;
$nilai3 = 10;
$nilai4 = 20;
$nilai5 = 13;

$hasil = $nilai1 + $nilai2 - $nilai3 * $nilai4 / $nilai5;

echo "Hasil dari $nilai1 + $nilai2 - $nilai3 * $nilai4 / $nilai5 adalah $hasil";

echo "<br><br>===========================<br><br>";
//Percabangan

$nilai = 70;

if ($nilai >= 85) {
    echo "Grade A";
} else if ($nilai >= 70) {
    echo "Grade B";
} else if ($nilai >= 50) {
    echo "Grade C";
} else if ($nilai >= 30) {
    echo "Grade D";
} else {
    echo "Grade E";
}
?>
