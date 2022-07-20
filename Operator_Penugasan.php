<?php


$total = 0;

$nasiGoreng = 10000;
$ayamUngkep = 15000;
$brownies = 13000;

// Sebelum gunakan operator penugasan
$total = $nasiGoreng + $brownies;

echo "Total Harga = ";
echo $total;

echo "\n";

// Setelah gunakan operator penugasan
$total+=$brownies;
$total+=$ayamUngkep;
$total+=$nasiGoreng;

echo "Total Harga = ";
echo $total;


/*
Operator Penugasan
- Di gunakan sebagai shortcut untuk operasi aritmatika
- Operator Penugasan menggunakan tanda = (sama dengan)

*/