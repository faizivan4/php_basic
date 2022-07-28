<?php

// Operator Null Coalesing (??)

// Tanpa Operator Null Coalesing
echo "Tanpa operator null coalesing :"."\n";

$data1=[
    "action" => "create" //key = action, value = create
];

if (isset($data1["action"])) {
    $action1 = $data1["action"];
} else {
    $action1 = "nothing";
}

echo $action1."\n"."\n";
// Cara Baca :
/*
Ada array $data di dalam nya terdapat key "action" yang value nya "create".

Logika :
(if) jika ada array $data dengan key "action",
maka kita simpan di dalam variable $action

jika tidak ada, variable $action akan di isi dengan value "nothing"

echo $action, output nya = create
*/

///////////////////////////////////////////////////////////

// Tanpa Operator Null Coalesing
echo "Dengan operator null coalesing"."\n";

$data2 = [];
$action2 = $data2 ["action"] ?? "Nothing Bro!";

echo $action2."\n";

/*
Cara Baca :
Terdapat array $data2 yang key & value nya kosong (Null).

Logika :
Jika ada array $data2 dengan key "action", masukan kedalam array $action2

jika tidak ada, maka action2 value nya "Nothing Bro!"
*/

/*
Note :
- diketahui sebelumnya data yang kosong di representasikan dengan data NULL pada PHP
- Untuk mengecekan apakah data tersebut aada atau tidak ada (bernilai NULL) adalah dengan function "isset($Namavariable)"
- Coalesing Null operator berguna untuk melakukan pengecekan ada dan tidak nya data pada sebuah variable agar lebih singkan
- Operator Null Coalesing di representasikan dengan tanda ?? (sama dengan 2x)

*/