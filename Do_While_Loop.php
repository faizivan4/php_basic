<?php

// Penulisan Do While Loop
$counter = 100;

do {
    echo "Do While Loop : ". $counter."\n";
    $counter++;
} while ($counter <= 10); //kondisi nya FALSE, akan tetap di eksekusi minimal 1 kali

/*
NOTE :
- Do While Loop adalah perulangan yang mirip dengan While
- Perbedaan nya HANYA pada pengecekan Kondisi
- Pengecekan Kondisi di While Loop lakukan di awal sebelum perulangan dilakukan, sedangkan di Do While Loop di lakukan setelah perulangan di lakukan
- Oleh karena itu di dalam Do While Loop , minimal ada sekali perulangan dilakukan walaupun kondisi nya bernilai FALSE.
*/