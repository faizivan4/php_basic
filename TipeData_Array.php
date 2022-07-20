<?php
// Cara Penulisan Array 
// Cara 1 array(index);
$values = array(1,2,3,4,5);
var_dump($values);

// Cara 2 [index];
$dataMahasiswa = ["Faiz Ivan Dharmawan", "30 Tahun", 170.5];
var_dump($dataMahasiswa);

// Operasi Pada Array
// 1. $array[index]
echo "Ambil data pada index tertentu : \n";

$data1 = [1,2,3,4,5];
echo $data1[3];

echo "\n";

// 2. $array[index] = value
echo "Ubah data pada index tertentu dengan value yang baru : ";

$data2 = [1,2,3,4,5];
$data2[2] = 7.5;
echo "\n";

echo $data2[2];

echo "\n";

// 3. $array[] = value
echo "Tambahlah data pada index paling terahkir dari sebuah array : ";

$data3 = [1,2,3,4];
$data3[] = 5.5;
echo "\n";

echo $data3[4];

echo "\n";

//4. unset($array[index])
echo "Hapuslah data/value dari index sebuah array : ";

$data4 = ["faiz","Fajri","Trisna"];
unset($data4[2]);
echo "\n \n";

//5. count($array)
echo "Hitunglah total data sebuah array : Budi, Andre, Diar, Kusut ";

$data5 = ["Budi","Andre","Diar","Kusut"];
echo "\n";
echo count($data5);


/*
NOTE :
Tipe Data Array 
- Array adalah tempat menampung data. 
- Hampir semua tipe data mendukung untuk di masukan ke Array
- Data yang dapat di masukan dalam Array tak terhingga jumlahnya.
- Cara Penulisan Array ada 2 :
    1. array(index);
    2. [index];

- Operasi pada Array:
    1. $array[index]
        Untuk mengakses data di array pada nomor index tertentu
    2. $array[index] = value
        Untuk mengubah data di array pada nomor index dengan value yang baru
    3. $array[] = value
        Untuk menambah data di array pada posisi paling belakang/akhir
    4. unset($array[index])
        untuk hapus data di array, index dan data otomatis hilang dari array.
    5. count($array)
        mengambil total data dari array
*/

