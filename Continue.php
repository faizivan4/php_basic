<?php

// Penulisan Continue
for ($counter = 1; $counter <= 20 ; $counter++) {
    if ($counter % 2 == 0){ //baca : jika $counter di bagi 2 hasil nya adalah 0
        continue; //baca : maka program akan di lanjutkan/tidak di print out
    }
    echo "Hello Continue : " . $counter . "\n"; //output nya adalah bilangan GANJIL. 1,3,5,7,9, dst
}

/*
NOTE :
Continue
- Berbeda dengan Break, Continue digunakan untuk menghentikan perulangan saat ini. Lalu melanjutkan ke perulangan berikutnya.

*/