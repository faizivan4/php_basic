<?php
//Penulisan For Each Loop

// Tanpa For Each
echo "Tanpa Menggunakan for each"."\n";

$names = ["Faiz","Ivan","Dharmawan"];

for ($i=0; $i < count($names); $i++){
    echo "Data ke $i = $names[$i]"."\n"."\n";
}

//Menggunakan For Each
echo "Menggunakan for each"."\n";

foreach ($names as $name) { //$name adalah nama variable tempat menyimpan setiap data dari $names["faiz","ivan","dharmawan"]
    echo "Hallo $name"."\n";
}

// For Each menggunakan Key pada Array
echo "\n"."For Each menggunakan Key pada Array"."\n";

$employee = [
    "Faiz Ivan Dharmawan" => "Leadder",
    "Fajri Iksanu" => "Comisionary",
    "Trisna Wijaya" => "Staff"
];

foreach ($employee as $name => $position){
    echo "$name is a $position"."\n";
}


/*
NOTE :
biasanya kita akses data array menggunakan perulangan.
Mengakses data array menggunakan perulangan sangat bertele-tele. karena harus membuat counter, lalu mengakses array menggunakan counter yang dibuat

- For Each Loop berfungsi untuk mengakses seluruh data Array secara otomatis.

*/