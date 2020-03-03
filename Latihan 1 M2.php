<?php
 $angka_1 ='10';
 $angka_2 ='9';

 $kali =$angka_1 * $angka_2;
 $bagi =$angka_1 / $angka_2;
 $tambah =$angka_1 + $angka_2;
 $kurang =$angka_1 - $angka_2;
 $modulus =$angka_1 % $angka_2;

 echo "<h1>Hasil Operasi Penghitungan</h1>";
 echo " <b>Perkalian</b> " .$angka_1. " * ".$angka_2. " = ".$kali. "<br>";
 echo " <b>Pembagian</b> " .$angka_1. " / ".$angka_2. " = ".$bagi. "<br>";
 echo " <b>Pengurangan</b> " .$angka_1. " - ".$angka_2. " = ".$kurang. "<br>";
 echo " <b>Penjumlahan</b> " .$angka_1. " + ".$angka_2. " = ".$tambah. "<br>";
 echo " <b>Sisa Hasil Bagi</b> " .$angka_1. " % ".$angka_2. " = ".$modulus. "<br>";
 ?>
