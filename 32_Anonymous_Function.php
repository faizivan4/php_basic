<?php

//Anonymous Function/Function Tanpa Nama/ Closure
echo "\n"."Anonymous Function/ Function Tanpa Nama/ Closure"."\n";
$dataSiswa = function (string $name){ //sebuah variable $dataSiswa yang value nya function tanpa nama yang memiliki argument/parameter $name
    echo "Selamat datang $name"."\n";
};

$dataSiswa("Faiz Ivan");
$dataSiswa("Trisna Wijaya");

/*
Logika :
Jika di lihat pada Anonymous Function diatas : 
    - sebuah Function disimpan di dalam sebuah Variable
    - Function tidak perlu di deklarasikan nama nya
*/

// Anonymous Function sebagai Argument
echo "\n"."Anonymous Function sebagai Argument"."\n";
function sayGoodBye(string $name, $filter)
{
    $finalName = $filter($name);
    echo "GoodBye $finalName"."\n";
}

sayGoodBye("Faiz", function(string $name){ //anonym function di letakan di dalam Function sayGoodBye
    return strtoupper($name);
});

// Mengakses Variable di luar Anonymous Function/Closure
echo "\n"."Mengakses Variable diluar Anonym Function/Closure"."\n";

$firstName = "Faiz";
$middName = "Ivan";

$sayHello = function () use ($firstName,$middName){ //Anonym Function mengakses variable $firstName,$middName menggunakan keyword USE
    echo "Hallo $firstName $middName"."\n";
};

$sayHello();


/*
Anonymous Function/Closure :
- Adalah Function tanpa nama, dalam PHP disebut Closure
- Biasanya digunakan sebagai argument atau sebagai value di variable
- Anonym Function membuat kita bisa mengirim function sebagai Argument di function lainnya

Cara Akses Variable diluar Closure/Anonymous Function :
    - Secara default, Anonym Function tidak bisa mengakses Variable di luar Functionnya.
    - Jika ingin mengakses variable diluar Anonym Function, 
    harus secara jelas menyebutkan dengan key word use(namaVariable) lalu di ikuti nama Variable yang ingin di akses.

*/