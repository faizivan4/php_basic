<?php

//Variable Function
function foo()
{
    echo "FOO"."\n";
}

function bar()
{
    echo "BAR"."\n";
}

$functionName="foo";
$functionName();

$functionName="bar";
$functionName();

//Penggunaan Variable Function
function sayHello(string $name, $filter) 
{
    $finalName = $filter($name);
    echo "Hallo $finalName"."\n";
    
}
function sampleFunction(string $name):string
{
    return "Sample $name";
}

sayHello("Faiz Ivan","strtoupper"); //FYI : strtoupper/strtolower adalah function dalam PHP yang berfungsi membuat karakter menjadi Upper Case(huruf besar)/Lower Case(huruf kecil)
sayHello("Faiz Ivan","strtolower");
sayHello("Faiz Ivan","sampleFunction");


/*logika :
- Kita punya function sayHello dengan parameter $name dan $filter
- Parameter $filter akan kita gunakan sebagai sebuah Function yang punya Parameter $name
*/

/*
Variable Function : 
- Pada PHP mendukung konsep Variable Function
- Adalah kemampuan memanggil sebuah Function dari Value yang terdapat di sebuah Variable
- Untuk memanggil Variable Function, bisa secara langsung menuliskan $namaVariable(), bisa juga di tambahkan Argument/Parameter di dalam ()
*/