<?php

$nilai = 45;
$absen = 90;

echo "Penggunaan IF dan Else"."\n";
// Contoh penggunaan if else
if ($nilai >= 75 && $absen >= 75) {
    echo "Selamat Anda lulus"."\n"."\n";
} else {
    echo "Maaf anda belum lulus !"."\n"."\n";    
}

// Contoh penggunaan (else if)
echo "Penggunaan (else if)"."\n";

if ($nilai >= 80 && $absen >= 80) {
    echo "Nilai anda A";
} else if ($nilai >= 70 && $absen >=70) {
    echo "Nilai anda B";
} else if ($nilai >= 60 && $absen >=60) {
    echo "Nilai anda C";
} else if ($nilai >= 50 && $absen >=50) {
    echo "Nilai anda D";
} else {
    echo "Nilai Anda E FUCK !!!";
}

/*
NOTE :
IF Statement :
    - IF digunakan untuk kata kunci dalam percabangan
    - Percabangan artinya, program tertentu bisa di eksekusi ketika memenuhi suatu kondisi (bernilai "True")

ELSE Statment :
    - Blok IF akan dieksekusi ketika kondisi nya bernilai (True)
    - ELSE statement digunakan pada saat ekesekusi program yang bernilai (False)

ELSE IF Statement : 
    - ELSE IF digunakan pada saat ingin membuat beberapa kondisi (lebih dari satu kondisi)
    - ELSE IF bisa digunakan lebih dari satu
*/