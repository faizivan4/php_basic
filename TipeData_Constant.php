<?php
// Variable Constant di deklarasikan dengan "define();"
define ("PENULIS", "FAIZ IVAN DHARMAWAN");
define ("VERSION", 1.2);

echo "Penulis : ";
echo PENULIS;
echo "\n";
echo "Versi : ";
echo VERSION;
echo "\n";

define ("PENULIS", "FAJRI");
define ("VERSION", 1.3);

echo "Penulis : ";
echo PENULIS;
echo "\n";
echo "Versi : ";
echo VERSION;
echo "\n";
/*
NOTE :
- Variable pada php bersifat "Mutable" (Bisa di rubah nama variable dan value nya)
- Constant/(define) berfungsi untuk membuat variable yang Immutable (tidak bisa di rubah nama variable nya).
- Best Practice pembuatan nama constant adalah menggunakan UPPER_CASE.
- Constant dibuat dengan cara function define()
*/