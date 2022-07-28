<?php

//1. Function Argument/Parameter
function sayHallo($name) // $name didalam kurung buka/tutup tersebut berfungsi sebagai parameter/argument. dan otomatis menjadi variable
{
    echo "Hallo $name"."\n"."\n"; //$name yang ada di blok function ini adalah variable yang sudah di panggil dari hasil deklarasi parameter di dalam kurung buka/tutup ()
}

sayHallo("Faiz Ivan");
sayHallo("Fajri Ikhsanu");

//2. Default Argument Value
function halo ($nama = " [Anonymous] ") //"Anonymous" adalah default value/nilai yang di printout jika tidak ada argument/parameter yang di isi/kosong
{
    echo "Hello $nama"."\n";
}

halo(); //argument/parameter yang kosong
halo("Eko");

//3. Argument/Parameter Yang Lebih dari 1
function chatbot ($firstName,$midName="",$lastName="") //Parameter kosong harus di letakan pada SETIAP Parameter setelah parameter pertama. Tidak boleh meletakan value parameter default pada parameter pertama.
{
    echo "Hallo nama saya $firstName $midName $lastName !"."\n";
}

chatbot("Faiz");
chatbot("Ivan");
chatbot("Faiz","Ivan","Dharmawan");

//4. Type Declaration pada Function Argument/Parameter
echo "Type Declaration pada Function/Parameter"."\n";

function sum(int $first, int $last) //memasukan int berguna untuk melakukan konversi tipe data menjadi Integer
{
    $total = $first + $last;
    echo "Total $first + $last = $total"."\n";  
}

sum(100,100);
sum("100","100");
sum(true,false);

//5. Variable Length Argument List
function sumAll(...$values) //... Variable Length berfungsi untuk membuat parameter $values bisa menerima banyak value, sekaligus merubah parameter $values menjadi array.
{
    $totals=0;
    foreach ($values as $value){
        $totals += $value;
    }

    echo "Total " . implode(" + ", $values) . " = $totals" . "\n";
}
sumAll(10,10,10,10);
sumAll(...[10,10,10,10]);


/*
Note : 

1. Function Argument/Parameter
- Function Argument/Parameter berguna untuk mengirim informasi ke Function yang ingin kita panggil
- Cara nya adalah dengan menambahkan Argument atau Parameter di dalam Function yang sudah kita buat
- Membuat Argument/Parameter sama seperti membuat Variable
- Argument/Parameter di letakan di dalam kurung buka/tutup () pada deklarasi Function
- Argument/Parameter bisa lebih dari satu, dan di pisah menggunakan tanda koma ,

Struktur Syntax :

    function namaFunction($namaParameter)
        {
            blok function + $namaVariable yang sama seperti $namaParameter
        }

    $namaFunction("value yang dimasukan ke dalam variable di blok Function")

2. Default Argument Value
Default Argument Value :
Berfungsi untuk memanggil FUNCTION tanpa memasukan parameter, kita bisa menentukan data Default nya.

KESALAHAN DEFAULT ARGUMENT VALUE : 
- Default Argument Value bisa disimpan di argument/parameter manapun
- TAPI, jika argument/parameter nya lebih dari satu, dan menyimpan Default Argument Value nya di parameter awal, itu TIDAK BERGUNA.

3. Function Argument/Parameter lebih dari 1
- Untuk menggunakan Argument/Parameter yang lebih dari 1, kita bisa tambahkan value string kosong setelah Argument/Parameter pertama
- Jika kita tidak memasukan string kosong pada Parameter setelah Parameter pertama akan terjadi error

Contoh :
    function namaFunction($parameter1,$parameter2="",$parameter3="")
        {
            echo "Halo nama saya $parameter1 $parameter2 $parameter3";
        }
    namaFunction($parameter1,$paramter2,$parameter3);

4. Type Declaration
- Argument/Parameter dalam PHP bersifat dinamis, artinya bisa menambahkan tipe data apa saja kedalamnya
- Type Declaration di dalam Parameter pada PHP bisa di atur agar dapat melakukan pengecekan ketika mengirim value pada Function tersebut
- Jika Tipe Data yang di input tidak sesuai, maka akan terjadi error

5. Variable-Length Argument List
- Adalah kemampuan dimana kita bisa membuat sebuah Parameter yang menerima banyak value
- Akan secara otomatis akan membuat argument tersebut menjadi array, tanpa perlu mengirim Array secara manual ke Function nya
- Variable Length Argumet List hanya bisa di lakukan di argument posisi terakhir
- Cara membuatnya adalah dengan menambahkan tanda ...(titik tiga kali) sebelum nama argument
*/