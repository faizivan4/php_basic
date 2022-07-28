<?php
//Array Function

$data = [1,2,3,4,5,6,7,8];

// array_keys() 
$mapFunction = fn(int $value) => $value * 10;
$dataResult = array_map($mapFunction, $data);
var_dump($dataResult);

echo "reverse Sort / rsort()"."\n";
rsort($data);
var_dump($data);

var_dump(array_keys($data));




/*
Array Function :
- Berfungsi untuk memanipulsai data pada Array
- Dokumentasi lengkap ada di php.net

Beberapa contoh Array Function :

    - array_keys() 
    Berfungsi untuk mengambil semua keys milik array

    - array_values()
    Berfungsi untuk mengambil semua values milik array

    - array_map()
    Berfungsi untuk mengubah semua data array dengan callback

    - sort()
    Untuk mengurutkan Array secara ascending/urut dari awal-akhir

    - rsort() <reverse sort>
    Untuk mengurutkan Array secara descending/urut dari akhir-awal

    - shuffle()
    Untuk mengubah posisi data array secara random/acak
*/