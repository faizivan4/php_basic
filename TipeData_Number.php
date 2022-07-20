<?php
// Tipe data number integer (int)
echo "Decimal : ";
var_dump(1234);

echo "Hexadecimal : ";
var_dump(0x1a);

echo "Octal : ";
var_dump(01234);

echo "Binary : ";
var_dump(0b11111);

echo "String : ";
var_dump("Sayang");

echo "Integer Overflow : ";
var_dump(2268976669876976);

// echo "Underscore in Number : ";
// var_dump(11_23_12_31_23);


// Tipe data Number float (float)
echo "Floating Point : ";
var_dump(1.2345);

echo "Floating Point dengan E notation Plus (1.2 x 1000) : ";
var_dump(1.2e3);

echo "Floating Point dengan E notation Minus (7 x 0.001) : ";
var_dump(7e-3);

// echo "Underscore pada Floating Point : ";
// var_dump(12_345.6789);


/*
NOTE :
Tipe Data Number pada PHP ada 2. yaitu (int) dan (float).
- (int) digunakan untuk deklarasi bilangan bulat/tanpa koma. decimal (base 10), hexadecimal (base 16), octa (base 8), binary (base 2)
- (float) digunakan untuk deklarasi bilangan pecahan/yang menggunakan koma. "koma" di tulis menggunakan . bukan ,

- (var_dump) adalah fungsi untuk menampilkan/output agar mengetahui informasi pada sebuah nilai. 
- (var_dump) digunakan biasanya untuk proses debugging/mencari bug pada program
*/