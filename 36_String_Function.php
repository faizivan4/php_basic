<?php
// Beberapa String Function

// 1. join() / implode() (untuk menggabungkan array dengan string)
echo "1. Penggunaan join()"."\n";
var_dump(join(",",[1,2,3,4,5]));


// 2. explode() (untuk memecah String menjadi Array)
echo "2. Penggunaan explode()"."\n";
var_dump(explode(" ", "Faiz IVan Dharmawan"));

// 3. strtolower() (untuk mengubah String menjadi Lower Case/Huruf kecil)
echo "3. Penggunaan strtolower()"."\n";
var_dump(strtolower("TRISNA WIJAYA"));

// 4. strtoupper() (untuk mengubah String menjadi Upper Case/Huruf Besar)
echo "4. Penggunaan strtoupper()"."\n";
var_dump(strtoupper("fajri ikhsanu akbar"));

// 5. trim() (untuk menghapus whitespace/space kosong didepan dan dibelakang saja)
echo "5. Penggunaan substr()"."\n";
var_dump(trim("     faiz     "));

// 6. substr() (untuk Mengambil sebagian String)
echo "5. Penggunaan trim()"."\n";
var_dump(substr("Faiz Ivan Dharmawan",0,10)); //0,10 maksudnya adalah hanya mengambil index ke 0 sampai 10 dari string Faiz Ivan Dharmawan


/*
String Function :
    - adalah Function yang digunakan untuk memanipulasi String(teks huruf)
    - ada sangat banyak sekali String Function yang bisa di gunakan. 
    - cek referensi nya di https://www.php.net/manual/en/ref.strings.php
*/